<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap {

    protected function _initAutoload() {
        $resourceLoader = new Zend_Loader_Autoloader_Resource(array(
            'basePath' => APPLICATION_PATH,
            'namespace' => '',
            'resourceTypes' => array(
                'form' => array(
                    'path' => 'forms/',
                    'namespace' => 'Form_',
                ),
                'model' => array(
                    'path' => 'models/',
                    'namespace' => 'Model_',
                )
            ),
        ));
        return $resourceLoader;
    }

    protected function _initConfig() {
        $config = new Zend_Config_Ini(APPLICATION_PATH . '/configs/application.ini', APPLICATION_ENV);
        Zend_Registry::set('config', $config);
    }

    protected function _initLocalConfig() {
        date_default_timezone_set('America/Asuncion');
        setlocale(LC_ALL, "es_ES@euro", "es_ES", "esp");
    }

}
