<?php

namespace App\Services;

use App\Services\Contract\BigCommerceInterface;

class BigCommerceAdapter implements BigCommerceInterface
{
    private $bigCommerce;

    public function __construct($bigCommerce)
    {
        $this->bigCommerce = $bigCommerce;
    }

    public function getCustomer($customer_id)
    {
        $customer = $this->bigCommerce::getCustomer($customer_id);

        if (!$customer) {
            abort(500, 'Customer could not be found');
        }

        return $customer;
    }

    public function getCustomers($filters)
    {
        return $this->bigCommerce::getCustomers($filters);
    }

    public function getOrders($customer_id)
    {
        return $this->bigCommerce::getOrders($customer_id);
    }

    public function getOrdersCount($customer_id)
    {
        return $this->bigCommerce::getOrdersCount($customer_id) ? $this->bigCommerce::getOrdersCount($customer_id) : 0;
    }
}