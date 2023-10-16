<?php

//config
require_once 'config/config.php';

//url-helper
require_once 'helpers/url_helper.php';

//libs
spl_autoload_register(function($files){
    require_once 'libs/' . $files . '.php';
});