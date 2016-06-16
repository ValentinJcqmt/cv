<?php

Breadcrumbs::register('home', function($breadcrumbs)
{
    $breadcrumbs->push('Home', route('home'));
});

Breadcrumbs::register('new-cars', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Voitures neuves', route('new-cars'));
});

Breadcrumbs::register('show-one-new-car', function($breadcrumbs, $datas)
{
    $breadcrumbs->parent('new-cars');
    $breadcrumbs->push($datas['marque'].' '.$datas['modele'], route('show-one-new', [$datas['modele'], $datas['id']]));
});

Breadcrumbs::register('used-cars', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Voitures occasions', route('used-cars'));
});

Breadcrumbs::register('show-one-used-car', function($breadcrumbs, $datas)
{
    $breadcrumbs->parent('used-cars');
    $breadcrumbs->push($datas['marque'].' '.$datas['modele'], route('show-one-new', [$datas['modele'], $datas['id']]));
});
