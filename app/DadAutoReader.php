<?php
namespace App;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;

class DadAutoReader {

    protected $source;

    public function __construct()
    {
        $this->source = $this->loadSource();
    }

    public function get()
    {
        $page = Input::get('page', 1);
        $perPage = 15;
        $offSet = ($page * $perPage) - $perPage;

        $paginator = new LengthAwarePaginator(array_slice($this->source, $offSet, $perPage, true), count($this->source), $perPage);
        $paginator->setPath(request()->path());

        return $paginator;
    }

    public function show($id)
    {
        return $this->source[$id];
    }

    private function loadSource()

    {
        return json_decode(Storage::get('public/assets/providers/dad-auto/list.json'), 1);
    }
}
