<?php
namespace TagsAPI\V1\Rest\Tags;

use Blog\Model\Post;

class TagsResourceFactory
{
    public function __invoke($services)
    {
        return new TagsResource($services->get(Post::class));
    }
}
