<?php
return array(
    /**
     * Your block definition : back-office json configuration file
     */
    'blocksDefinition' => array(
        'helloWorld' => array(
            'maxlifeTime' => 60,
            'definitionFile' => realpath(__DIR__ . "/") . '/helloWorld.json'
        )
    ),
    /**
     * Template definitions
     */
    'templates' => array(
        'themes' => array(
            'new' => array(
                'label' => 'New',
                'noBoostrap'=> true,
                'basePath' => realpath(__DIR__ . '/../themes/readable'),
                'css' => array(
                    '/css/bootstrap.min.css',
                ),
                'js' => array(
                    '/js/bootstrap.min.js',
                ),
            ),
        ),
    ),
    'namespaces_api' => array(
        'monExtensionRubedo',
    ),
);
