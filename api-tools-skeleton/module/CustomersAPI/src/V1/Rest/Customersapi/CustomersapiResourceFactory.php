<?php
namespace CustomersAPI\V1\Rest\Customersapi;

class CustomersapiResourceFactory
{
    public function __invoke($services)
    {
        return new CustomersapiResource();
    }
}
