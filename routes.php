<?php
return [
    'GET' => [
        '/' => ['StaticContentController', 'renderContent', "home", ["title" => "Home"]],
        '/contact' => ['StaticContentController', 'renderContent', 'contact', ["title" => "Contact"]],
        '/new-client' => ['StaticContentController', 'renderContent', 'new-client', ["title" => "Adding client..."]],
        '/new-added-client' => ['ClientsController', 'confirmation', 'new-added-client', ["title" => "Added!"]],
        '/pos' => ['StaticContentController', 'renderContent', "pos", ['title' => 'POS']],
        '/products' => ['StaticContentController', 'renderContent', 'products', ['title' => 'Products']],
    ],
    'POST' => [
        '/new-client' => ['ClientsController', 'addNewClient'],
    ],
];
