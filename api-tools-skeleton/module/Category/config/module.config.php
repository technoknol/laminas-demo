<?php
return [
    'service_manager' => [
        'factories' => [],
    ],
    'router' => [
        'routes' => [
            'category.rest.categories' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/categories[/:categories_id]',
                    'defaults' => [
                        'controller' => 'Category\\V1\\Rest\\Categories\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'api-tools-versioning' => [
        'uri' => [
            1 => 'category.rest.categories',
        ],
    ],
    'api-tools-rest' => [
        'Category\\V1\\Rest\\Categories\\Controller' => [
            'listener' => 'Category\\V1\\Rest\\Categories\\CategoriesResource',
            'route_name' => 'category.rest.categories',
            'route_identifier_name' => 'categories_id',
            'collection_name' => 'categories',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [
                0 => 'size',
            ],
            'page_size' => '5',
            'page_size_param' => 'size',
            'entity_class' => \Category\V1\Rest\Categories\CategoriesEntity::class,
            'collection_class' => \Category\V1\Rest\Categories\CategoriesCollection::class,
            'service_name' => 'categories',
        ],
    ],
    'api-tools-content-negotiation' => [
        'controllers' => [
            'Category\\V1\\Rest\\Categories\\Controller' => 'Json',
        ],
        'accept_whitelist' => [
            'Category\\V1\\Rest\\Categories\\Controller' => [
                0 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'Category\\V1\\Rest\\Categories\\Controller' => [
                0 => 'application/json',
            ],
        ],
    ],
    'api-tools-hal' => [
        'metadata_map' => [
            \Category\V1\Rest\Categories\CategoriesEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'category.rest.categories',
                'route_identifier_name' => 'categories_id',
                'hydrator' => \Laminas\Hydrator\ArraySerializableHydrator::class,
            ],
            \Category\V1\Rest\Categories\CategoriesCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'category.rest.categories',
                'route_identifier_name' => 'categories_id',
                'is_collection' => true,
            ],
        ],
    ],
    'api-tools' => [
        'db-connected' => [
            'Category\\V1\\Rest\\Categories\\CategoriesResource' => [
                'adapter_name' => 'mysql',
                'table_name' => 'categories',
                'hydrator_name' => \Laminas\Hydrator\ArraySerializableHydrator::class,
                'controller_service_name' => 'Category\\V1\\Rest\\Categories\\Controller',
                'entity_identifier_name' => 'id',
                'table_service' => 'Category\\V1\\Rest\\Categories\\CategoriesResource\\Table',
            ],
        ],
    ],
    'api-tools-content-validation' => [
        'Category\\V1\\Rest\\Categories\\Controller' => [
            'input_filter' => 'Category\\V1\\Rest\\Categories\\Validator',
        ],
    ],
    'input_filter_specs' => [
        'Category\\V1\\Rest\\Categories\\Validator' => [
            0 => [
                'required' => true,
                'validators' => [
                    0 => [
                        'name' => 'Laminas\\ApiTools\\ContentValidation\\Validator\\DbNoRecordExists',
                        'options' => [
                            'adapter' => 'mysql',
                            'table' => 'categories',
                            'field' => 'name',
                        ],
                    ],
                ],
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringToUpper::class,
                        'options' => [
                            'encoding' => 'utf-8',
                        ],
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                        'options' => [],
                    ],
                ],
                'name' => 'name',
                'description' => 'name of the category',
                'field_type' => 'string',
                'error_message' => 'Please enter valid category name.',
            ],
        ],
    ],
];
