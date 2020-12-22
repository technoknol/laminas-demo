<?php
namespace Customers\V1\Rest\Customers;

class CustomersResourceFactory
{
    public function __invoke($services)
    {
        return new CustomersResource();
    }
}
