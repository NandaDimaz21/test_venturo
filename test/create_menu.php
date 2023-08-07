<?php

$data [] = array(
    'menu' => 'Nasi Goreng',
    'kategori' => 'makanan'
);

$data [] = array(
    'menu' => 'Mie Freno',
    'kategori' => 'makanan'
);

$data [] = array(
    'menu' => 'Nasi Teriyaki',
    'kategori' => 'makanan'
);

$data [] = array(
    'menu' => 'Nasi Ayam Katsu',
    'kategori' => 'makanan'
);

$data [] = array(
    'menu' => 'Nasi Goreng Mawut',
    'kategori' => 'makanan'
);

$data [] = array(
    'menu' => 'Teh Hijau',
    'kategori' => 'minuman'
);

$data [] = array(
    'menu' => 'Teh Lemon',
    'kategori' => 'minuman'
);

$data [] = array(
    'menu' => 'Teh',
    'kategori' => 'minuman'
);

$data [] = array(
    'menu' => 'Kopi Hitam',
    'kategori' => 'minuman'
);

$data [] = array(
    'menu' => 'Kopi Susu',
    'kategori' => 'minuman'
);

$jsonfile = json_encode($data, JSON_PRETTY_PRINT);

file_put_contents('menu.json', $jsonfile);