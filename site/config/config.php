<?php

return [
    'debug' => true, // Enable debug mode for development; set to false for production
    'panel' => [
        'install' => true, // Allows the Kirby panel to be installed
    ],
    'timezone' => 'UTC', // You can change this to your preferred timezone
    'languages' => false, // Set to true if you are using multi-language support
    'cache' => [
        'pages' => [
            'active' => false // Set to true for production if you want caching
        ]
    ],
    'date.handler' => 'date', // Ensures PHP's native date function is used
    'panel.css' => 'assets/css/panel.css', // Optional custom CSS for panel customization
    'panel.js' => 'assets/js/panel.js', // Optional custom JS for panel customization
];
