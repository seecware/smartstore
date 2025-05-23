<?php
return [
    'GET' => [
        '/' => ['StaticContentController', 'renderContent', "home", ["title" => "Home"]],
        '/contact' => ['StaticContentController', 'renderContent', 'contact', ["title" => "Contact"]],
        '/new-client' => ['StaticContentController', 'renderContent', 'new-client', ["title" => "Adding client..."]],
        '/new-added-client' => ['ClientsController', 'confirmation', 'new-added-client', ["title" => "Added!"]],
        '/pos' => ['StaticContentController', 'renderContent', "pos", ['title' => 'POS']],
        '/products' => ['StaticContentController', 'renderContent', 'products', ['title' => 'Products']],
        '/login' => ['StaticContentController', 'renderContent', 'login', ['title' => 'Log in!']],
        '/signup' => ['StaticContentController', 'renderContent', 'signup', ['title' => 'Signup!']],
    ],
    'POST' => [
        '/new-client' => ['ClientsController', 'addNewClient'],
    ],
];
