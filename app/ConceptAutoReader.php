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

    public function get()
    {
        $page = Input::get('page', 1);
        $perPage = 16;
        $offSet = ($page * $perPage) - $perPage;

        $sourceArray = array_slice($this->source->toArray(), $offSet, $perPage, true);
        $sourceArray = $this->cleanOutput($sourceArray);

        $paginator = new LengthAwarePaginator($sourceArray, count($this->source->toArray()), $perPage);
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
        if(is_array(array_first($sourceArray))){
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
}
