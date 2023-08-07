<?php

$data [] = array(
    'tanggal' => '2021-01-01',
    'menu' => 'Kopi Hitam',
    'total' => 3000
);

$data [] = array(
    'tanggal' => '2021-01-01',
    'menu' => 'Nasi Teriyaki',
    'total' => 13000
);

$data [] = array(
    'tanggal' => '2021-01-01',
    'menu' => 'Teh',
    'total' => 12000
);

$data [] = array(
    'tanggal' => '2021-01-01',
    'menu' => 'Kopi Hitam',
    'total' => 3000
);

$data [] = array(
    'tanggal' => '2021-01-01',
    'menu' => 'Kopi Hitam',
    'total' => 3000
);

$data [] = array(
    'tanggal' => '2021-01-01',
    'menu' => 'Mie Freno',
    'total' => 20000
);

$data [] = array(
    'tanggal' => '2021-01-01',
    'menu' => 'Nasi Goreng',
    'total' => 30000
);

$data [] = array(
    'tanggal' => '2021-01-01',
    'menu' => 'Nasi Goreng Mawut',
    'total' => 26000
);

$data [] = array(
    'tanggal' => '2021-01-01',
    'menu' => 'Nasi Teriyaki',
    'total' => 13000
);

$data [] = array(
    'tanggal' => '2021-01-01',
    'menu' => 'Nasi Goreng',
    'total' => 10000
);

$data [] = array(
    'tanggal' => '2021-01-01',
    'menu' => 'Nasi Teriyaki',
    'total' => 39000
);

$data [] = array(
    'tanggal' => '2021-01-01',
    'menu' => 'Kopi Hitam',
    'total' => 3000
);

$jsonfile = json_encode($data, JSON_PRETTY_PRINT);

file_put_contents('transaksi.json', $jsonfile);