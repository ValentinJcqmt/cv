<?php
namespace App;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;

class DadAutoReader {

    public function get()
    {
        $page = Input::get('page', 1);
        $perPage = 15;
        $dadAuto = Storage::get('public/assets/providers/dad-auto/list.json');

        $datas = json_decode($dadAuto, 1);
        $offSet = ($page * $perPage) - $perPage;

        $paginator = new LengthAwarePaginator(array_slice($datas, $offSet, $perPage, true), count($datas), $perPage);

        return $paginator;
    }
}
