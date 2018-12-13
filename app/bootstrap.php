<?php

    require_once 'config/config.php';

    require_once 'helpers/Redirect.php';
    require_once 'helpers/session_helper.php';
    
    spl_autoload_register(function($className){
        require_once 'libraries/'.$className.'.php';
    });
?>