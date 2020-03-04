<?php

return [

    # cockpit app name
    'app.name' => 'Cockpit CMS Heroku',

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

   # use smtp to send emails
    'mailer' => [
        'from'       => 'vaibhav.frs@gmail.com',
        'transport'  => 'smtp'
        'host'       => 'smtp.gmail.com',
        'user'       => 'vaibhav.frs'
        'password'   => 'Nyra12345#',
        'port'       => 25,
        'auth'       => true,
        'encryption' => '' # '', 'ssl' or 'tls'
    ]

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