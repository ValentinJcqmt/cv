<?php

namespace App;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;

class ConceptAutoReader {

    protected $source;

    public function __construct()
    {
        $this->source = $this->loadSource();
    }

    public function get(array $filters)
    {
        $page = Input::get('page', 1);
        $perPage = 16;
        $offSet = ($page * $perPage) - $perPage;

        $filtered = $this->filter($filters);

        $sourceArray = array_slice($filtered->toArray(), $offSet, $perPage, true);
        $sourceArray = $this->cleanOutput($sourceArray);

        $paginator = new LengthAwarePaginator($sourceArray, count($filtered->toArray()), $perPage);
        $paginator->setPath(request()->path());

        return $paginator;
    }

    public function show($id)
    {
        return $this->cleanOutput($this->source[$id]);
    }

    private function loadSource()
    {
        $xml = simplexml_load_string(Storage::get('public/assets/providers/conceptauto/list.xml'));
        $array = json_decode(json_encode((array)$xml), 1)['voiture'];

        return collect($array)->keyBy('id');
    }

    private function cleanOutput($sourceArray)
    {
        if (is_array(array_first($sourceArray))) {
            return array_map(function ($item) {
                foreach ($item as $key => $value) {
                    if (!$value)
                        $item[$key] = '';
                }

                return $item;
            }, $sourceArray);
        }

        return array_map(function ($item) {
            if (!$item)
                $item = '';

            return $item;
        }, $sourceArray);
    }

    private function filter($filters)
    {
        //Ajout d'un attribut total_prix pour additionner le prix et les frais de dossiers
        $collection = $this->source->map(function ($item) {
            $item['total_prix'] = $item['prix'] + $item['frais'];

            return $item;
        });

        if ($filters['prix_min'] && $filters['prix_max']) {
            $collection = $collection->filter(function ($value, $key) use ($filters) {
                return $value['total_prix'] >= (int)$filters['prix_min'] && $value['total_prix'] <= (int)$filters['prix_max'];
            });
        }

        if ($filters['marque'])
            $collection = $collection->where('marque', $filters['marque']);

        return $collection;
    }

    public function getMarques()
    {
        $marques = $this->source->transform(function ($item) {
            return $item['marque'];
        });

        return $marques->unique()->sort()->values()->toArray();
    }
}
