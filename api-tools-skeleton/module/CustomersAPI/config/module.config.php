<?php
return [
    'service_manager' => [
        'factories' => [
            \CustomersAPI\V1\Rest\Customersapi\CustomersapiResource::class => \CustomersAPI\V1\Rest\Customersapi\CustomersapiResourceFactory::class,
        ],
    ],
    'router' => [
        'routes' => [
            'customers-api.rest.customersapi' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/customersapi[/:customersapi_id]',
                    'defaults' => [
                        'controller' => 'CustomersAPI\\V1\\Rest\\Customersapi\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'api-tools-versioning' => [
        'uri' => [
            0 => 'customers-api.rest.customersapi',
        ],
    ],
    'api-tools-rest' => [
        'CustomersAPI\\V1\\Rest\\Customersapi\\Controller' => [
            'listener' => \CustomersAPI\V1\Rest\Customersapi\CustomersapiResource::class,
            'route_name' => 'customers-api.rest.customersapi',
            'route_identifier_name' => 'customersapi_id',
            'collection_name' => 'customersapi',
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
            'entity_class' => \CustomersAPI\V1\Rest\Customersapi\CustomersapiEntity::class,
            'collection_class' => \CustomersAPI\V1\Rest\Customersapi\CustomersapiCollection::class,
            'service_name' => 'customersapi',
        ],
    ],
    'api-tools-content-negotiation' => [
        'controllers' => [
            'CustomersAPI\\V1\\Rest\\Customersapi\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'CustomersAPI\\V1\\Rest\\Customersapi\\Controller' => [
                0 => 'application/vnd.customers-api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'CustomersAPI\\V1\\Rest\\Customersapi\\Controller' => [
                0 => 'application/vnd.customers-api.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'api-tools-hal' => [
        'metadata_map' => [
            \CustomersAPI\V1\Rest\Customersapi\CustomersapiEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'customers-api.rest.customersapi',
                'route_identifier_name' => 'customersapi_id',
                'hydrator' => \Laminas\Hydrator\ArraySerializable::class,
            ],
            \CustomersAPI\V1\Rest\Customersapi\CustomersapiCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'customers-api.rest.customersapi',
                'route_identifier_name' => 'customersapi_id',
                'is_collection' => true,
            ],
        ],
    ],
];
