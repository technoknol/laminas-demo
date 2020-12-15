<?php
return [
    'router' => [
        'routes' => [
            'blog.rest.blogs' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/blogs[/:blogs_id]',
                    'defaults' => [
                        'controller' => 'Blog\\V1\\Rest\\Blogs\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'api-tools-versioning' => [
        'uri' => [
            0 => 'blog.rest.blogs',
        ],
    ],
    'api-tools-rest' => [
        'Blog\\V1\\Rest\\Blogs\\Controller' => [
            'listener' => 'Blog\\V1\\Rest\\Blogs\\BlogsResource',
            'route_name' => 'blog.rest.blogs',
            'route_identifier_name' => 'blogs_id',
            'collection_name' => 'blogs',
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
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Blog\V1\Rest\Blogs\BlogsEntity::class,
            'collection_class' => \Blog\V1\Rest\Blogs\BlogsCollection::class,
            'service_name' => 'blogs',
        ],
    ],
    'api-tools-content-negotiation' => [
        'controllers' => [
            'Blog\\V1\\Rest\\Blogs\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'Blog\\V1\\Rest\\Blogs\\Controller' => [
                0 => 'application/vnd.blog.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'Blog\\V1\\Rest\\Blogs\\Controller' => [
                0 => 'application/vnd.blog.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'api-tools-hal' => [
        'metadata_map' => [
            \Blog\V1\Rest\Blogs\BlogsEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'blog.rest.blogs',
                'route_identifier_name' => 'blogs_id',
                'hydrator' => \Laminas\Hydrator\ArraySerializable::class,
            ],
            \Blog\V1\Rest\Blogs\BlogsCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'blog.rest.blogs',
                'route_identifier_name' => 'blogs_id',
                'is_collection' => true,
            ],
        ],
    ],
    'api-tools' => [
        'db-connected' => [
            'Blog\\V1\\Rest\\Blogs\\BlogsResource' => [
                'adapter_name' => 'mysql',
                'table_name' => 'blogs',
                'hydrator_name' => \Laminas\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'Blog\\V1\\Rest\\Blogs\\Controller',
                'entity_identifier_name' => 'id',
                'table_service' => 'Blog\\V1\\Rest\\Blogs\\BlogsResource\\Table',
            ],
        ],
    ],
    'api-tools-content-validation' => [
        'Blog\\V1\\Rest\\Blogs\\Controller' => [
            'input_filter' => 'Blog\\V1\\Rest\\Blogs\\Validator',
        ],
    ],
    'input_filter_specs' => [
        'Blog\\V1\\Rest\\Blogs\\Validator' => [
            0 => [
                'name' => 'title',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '255',
                        ],
                    ],
                ],
            ],
            1 => [
                'name' => 'description',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '65535',
                        ],
                    ],
                ],
            ],
            2 => [
                'name' => 'created_at',
                'required' => false,
                'filters' => [],
                'validators' => [],
            ],
        ],
    ],
];
