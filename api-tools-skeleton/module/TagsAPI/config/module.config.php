<?php
return [
    'service_manager' => [
        'factories' => [
            \TagsAPI\V1\Rest\Tags\TagsResource::class => \TagsAPI\V1\Rest\Tags\TagsResourceFactory::class,
        ],
    ],
//    'controllers'  => array(
//        'invokables' => array(
//            'Blog\Controller\List' => 'Blog\Controller\ListController'
//        )
//    ),
    'router' => [
        'routes' => [
            'tags-api.rest.tags' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/tags[/:tags_id]',
                    'defaults' => [
                        'controller' => 'TagsAPI\\V1\\Rest\\Tags\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'api-tools-versioning' => [
        'uri' => [
            0 => 'tags-api.rest.tags',
        ],
    ],
    'api-tools-rest' => [
        'TagsAPI\\V1\\Rest\\Tags\\Controller' => [
            'listener' => \TagsAPI\V1\Rest\Tags\TagsResource::class,
            'route_name' => 'tags-api.rest.tags',
            'route_identifier_name' => 'tags_id',
            'collection_name' => 'tags',
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
            'entity_class' => \TagsAPI\V1\Rest\Tags\TagsEntity::class,
            'collection_class' => \TagsAPI\V1\Rest\Tags\TagsCollection::class,
            'service_name' => 'tags',
        ],
    ],
    'api-tools-content-negotiation' => [
        'controllers' => [
            'TagsAPI\\V1\\Rest\\Tags\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'TagsAPI\\V1\\Rest\\Tags\\Controller' => [
                0 => 'application/vnd.tags-api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'TagsAPI\\V1\\Rest\\Tags\\Controller' => [
                0 => 'application/vnd.tags-api.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'api-tools-hal' => [
        'metadata_map' => [
            \TagsAPI\V1\Rest\Tags\TagsEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'tags-api.rest.tags',
                'route_identifier_name' => 'tags_id',
                'hydrator' => \Laminas\Hydrator\ArraySerializableHydrator::class,
            ],
            \TagsAPI\V1\Rest\Tags\TagsCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'tags-api.rest.tags',
                'route_identifier_name' => 'tags_id',
                'is_collection' => true,
            ],
        ],
    ],
];
