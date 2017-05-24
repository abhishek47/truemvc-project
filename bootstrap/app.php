<?php

$config = require '../config.php';


Trivial\Core\App::bind('config', $config);


Trivial\Core\App::bind('database', new Trivial\Database\QueryBuilder(

	Trivial\Database\Connection::make($config['database'])

));