<?php

include_once __DIR__ . '/../Models/products/foodProduct.php';
include_once __DIR__ . '/../Models/products/toyProduct.php';

include_once __DIR__ . '/categories.php';

$products = [
    new foodProduct('Royal Canin Mini Adult', $categories['dog'], 'pollo','2025-05-06'),
    new foodProduct('Royal Canin Mini Adult', $categories['dog'], 'pollo','2025-05-06'),
    new foodProduct('Royal Canin Mini Adult', $categories['dog'], 'pollo','2025-05-06'),
    
    new toyProduct('peluche',$categories['dog'],'grigio','tessuto'),
    new toyProduct('peluche',$categories['dog'],'grigio','tessuto'),
    new toyProduct('peluche',$categories['dog'],'grigio','tessuto'),

    ];

   