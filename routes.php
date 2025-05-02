<?php
return [
    'GET' => [
        '/' => ['HomeController', 'index'],
        '/contact' => ['StaticContentController', 'index'],
        '/productos' => ['ProductosController', 'mostar'],
    ],
    'POST' => [
        '/contact' => ['ContactController', 'submit'],
    ],
];
