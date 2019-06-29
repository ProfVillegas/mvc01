<?php

Config::set('site_name', 'Your Site Name');

Config::set('languages', array('en', 'fr','es','po'));

// Routes. Route name => method prefix
Config::set('routes', array(
    'default' => '',
    'admin'   => 'admin_',
));

Config::set('default_route', 'default');
Config::set('default_language', 'en');
Config::set('default_controller', 'pages');
Config::set('default_action', 'index');

//Variables para la conexión a la BD

Config::set('db.host','localhost');
Config::set('db.usuario','root');
Config::set('db.psw','');
Config::set('db.dbnombre','mvcus')
