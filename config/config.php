<?php

return [

    # cockpit session name
    'app.name' => 'Cockpit CMS',

    # cockpit session name
    'session.name' => 'cockpit-mysession',

    # app custom security key
    'sec-key' => 'aca81a0ad891963fb3fba5d9b22b5a',

    # define the languages you want to manage
    'languages' => [
        //'default' => 'English',       #setting a default language is optional
        'fr' => 'French',
        'de' => 'German'
    ],

    # define additional groups
    'groups' => [
        'author' => [
            '$admin' => false,
            '$vars' => [
                'finder.path' => '/storage/upload'
            ],
            'cockpit' => [
                'backend' => true,
                'finder' => true
            ],
            'collections' => [
                'manage' => true
            ]
        ]
    ],

    # use mongodb as main data storage
    'database' => [   
        'server' => 'mongodb+srv://cockpitadmin:WzsvFwIjFc21AovL@cluster0-n97rf.mongodb.net/cockpit-heroku-new',
        'options' => [
            'db' => 'cockpit-heroku-new'
        ]
    ],

  

    # Define Access-Control (CORS) settings.
    # Those are the default values. You don't need to duplicate them all.
    'cors' => [
      'allowedHeaders' => 'X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding, Cockpit-Token',
      'allowedMethods' => 'PUT, POST, GET, OPTIONS, DELETE',
      'allowedOrigins' => '*',
      'maxAge' => '1000',
      'allowCredentials' => 'true',
      'exposedHeaders' => 'true',
    ],
];