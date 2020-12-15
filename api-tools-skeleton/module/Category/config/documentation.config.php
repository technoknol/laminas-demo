<?php
return [
    'Category\\V1\\Rest\\Categories\\Controller' => [
        'collection' => [
            'GET' => [
                'response' => '{
   "_links": {
       "self": {
           "href": "/categories"
       },
       "first": {
           "href": "/categories?page={page}"
       },
       "prev": {
           "href": "/categories?page={page}"
       },
       "next": {
           "href": "/categories?page={page}"
       },
       "last": {
           "href": "/categories?page={page}"
       }
   }
   "_embedded": {
       "categories": [
           {
               "_links": {
                   "self": {
                       "href": "/categories[/:categories_id]"
                   }
               }
              "name": "name of the category"
           }
       ]
   }
}',
            ],
            'POST' => [
                'request' => '{
   "name": "name of the category"
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/categories[/:categories_id]"
       }
   }
   "name": "name of the category"
}',
            ],
        ],
        'entity' => [
            'GET' => [
                'response' => '{
   "_links": {
       "self": {
           "href": "/categories[/:categories_id]"
       }
   }
   "name": "name of the category"
}',
            ],
            'PATCH' => [
                'request' => '{
   "name": "name of the category"
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/categories[/:categories_id]"
       }
   }
   "name": "name of the category"
}',
            ],
            'PUT' => [
                'request' => '{
   "name": "name of the category"
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/categories[/:categories_id]"
       }
   }
   "name": "name of the category"
}',
            ],
            'DELETE' => [
                'request' => '{
   "name": "name of the category"
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/categories[/:categories_id]"
       }
   }
   "name": "name of the category"
}',
            ],
        ],
    ],
];
