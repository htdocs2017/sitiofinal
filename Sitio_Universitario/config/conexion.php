<?php

    define('SITE_FOLDER', 'Sitio_Universidad');

    define('ROOT_URL', strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,5))=='https'?'https':'http'."://".$_SERVER['HTTP_HOST'] . "/" . SITE_FOLDER);

    define('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'] . "/" . SITE_FOLDER) ;








    define("PATH_VIEWS", SITE_ROOT . "/vistas"); //NO CONFIGURADO

    define("PATH_HELPERS", SITE_ROOT . "/helpers"); //NO CONFIGURADO

    define("PATH_DAOS", SITE_ROOT . "/modelo/DAOs"); //NO CONFIGURADO

    define("UPLOAD_PUB_IMAGE_PATH", SITE_ROOT . "/files/imagenes/publicaciones"); //NO CONFIGURADO

    define("FILES", ROOT_URL . "/files"); //NO CONFIGURADO
    
    define("PATH_CSS", ROOT_URL . "/css");  //NO CONFIGURADO

    define("PATH_RECURSOS", ROOT_URL . "/recursos");  //NO CONFIGURADO

    define("PATH_IMAGENES", ROOT_URL . "/recursos/images");  //NO CONFIGURADO

    define("PATH_FONTS", ROOT_URL . "/fonts");  //NO CONFIGURADO

    define("PATH_VENDOR", ROOT_URL . "/vendor");   //NO CONFIGURADO


//