<?php

return [

    // This should be an array of module namespaces used in the application.
    'modules' => [
        'Application',
        'Box',
        'LinkedIn',
        'Dal',
        'Dms',
        'JRpc',
        'Address',
        'ZOpenTok',
        'Auth',
        'Mail',
        'Rbac',
        'Zend\Router',
        'Zend\I18n',
        'Zend\Mvc\I18n',
        'SimplePageCrawler',
    ],

    // These are various options for the listeners attached to the ModuleManager
    'module_listener_options' => [
        // This should be an array of paths in which modules reside.
        // If a string key is provided, the listener will consider that a module
        // namespace, the value of that key the specific path to that module's
        // Module class.
        'module_paths' => [
            'Dal' => __DIR__.'/../vendor/buse974/dal',
            'Dms' => __DIR__.'/../vendor/buse974/dms',
            'JRpc' => __DIR__.'/../vendor/buse974/jrpc',
            'Address' => __DIR__.'/../vendor/buse974/address',
            'Application' => __DIR__.'/../module/Application',
            'Auth' => __DIR__.'/../module/Auth',
            'ZOpenTok' => __DIR__.'/../vendor/buse974/zopentok',
            'Mail' => __DIR__.'/../module/Mail',
            'Rbac' => __DIR__.'/../module/Rbac',
            'Box' => __DIR__.'/../module/Box',
            'LinkedIn' => __DIR__.'/../module/LinkedIn',
            'SimplePageCrawler' => __DIR__.'/../vendor/blanchonvincent/simple-page-crawler',
        ],

        // An array of paths from which to glob configuration files after
        // modules are loaded. These effectively override configuration
        // provided by modules themselves. Paths may use GLOB_BRACE notation.
        'config_glob_paths' => [
            'config/autoload/global.php',
            'config/autoload/local.php',
        ],

        // Whether or not to enable a configuration cache.
        // If enabled, the merged configuration will be cached and used in
        // subsequent requests.
        'config_cache_enabled' => false,

        // The key used to create the configuration cache file name.
        //'config_cache_key' => $stringKey,

        // Whether or not to enable a module class map cache.
        // If enabled, creates a module class map cache which will be used
        // by in future requests, to reduce the autoloading process.
        'module_map_cache_enabled' => false,

        // The key used to create the class map cache file name.
        //'module_map_cache_key' => $stringKey,

        // The path in which to cache merged configuration.
        'cache_dir' => 'data/cache/',

        // Whether or not to enable modules dependency checking.
        // Enabled by default, prevents usage of modules that depend on other modules
        // that weren't loaded.
         'check_dependencies' => false,
    ],

    // Used to create an own service manager. May contain one or more child arrays.
    //'service_listener_options' => [
    //     [
    //         'service_manager' => $stringServiceManagerName,
    //         'config_key'      => $stringConfigKey,
    //         'interface'       => $stringOptionalInterface,
    //         'method'          => $stringRequiredMethodName,
    //     ),
    // )

   // Initial configuration with which to seed the ServiceManager.
   // Should be compatible with Zend\ServiceManager\Config.
   // 'service_manager' => [),
];