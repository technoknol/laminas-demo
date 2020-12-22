<?php
return [
    'service_manager' => [
        'factories' => [
            \Customers\V1\Rest\Customers\CustomersResource::class => \Customers\V1\Rest\Customers\CustomersResourceFactory::class,
        ],
    ],
    'router' => [
        'routes' => [
            'customers.rest.customers' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/customers[/:customers_id]',
                    'defaults' => [
                        'controller' => 'Customers\\V1\\Rest\\Customers\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'api-tools-versioning' => [
        'uri' => [
            0 => 'customers.rest.customers',
        ],
    ],
    'api-tools-rest' => [
        'Customers\\V1\\Rest\\Customers\\Controller' => [
            'listener' => \Customers\V1\Rest\Customers\CustomersResource::class,
            'route_name' => 'customers.rest.customers',
            'route_identifier_name' => 'customers_id',
            'collection_name' => 'customers',
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
            'entity_class' => \Customers\V1\Rest\Customers\CustomersEntity::class,
            'collection_class' => \Customers\V1\Rest\Customers\CustomersCollection::class,
            'service_name' => 'customers',
        ],
    ],
    'api-tools-content-negotiation' => [
        'controllers' => [
            'Customers\\V1\\Rest\\Customers\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'Customers\\V1\\Rest\\Customers\\Controller' => [
                0 => 'application/vnd.customers.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'Customers\\V1\\Rest\\Customers\\Controller' => [
                0 => 'application/vnd.customers.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'api-tools-hal' => [
        'metadata_map' => [
            \Customers\V1\Rest\Customers\CustomersEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'customers.rest.customers',
                'route_identifier_name' => 'customers_id',
                'hydrator' => \Laminas\Hydrator\ArraySerializable::class,
            ],
            \Customers\V1\Rest\Customers\CustomersCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'customers.rest.customers',
                'route_identifier_name' => 'customers_id',
                'is_collection' => true,
            ],
        ],
    ],
];
