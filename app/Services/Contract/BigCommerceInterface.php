<?php

namespace App\Services\Contract;

interface BigCommerceInterface
{
    /**
     * Request an instance of a customer
     *
     * @param integer customer id
     * @return Customer
     */
    public function getCustomer($customer_id);

    /**
     * Request a list of customers
     *
     * @param array filters
     * @return list of customers
     */
    public function getCustomers($filters);

    /**
     * Request a list of orders
     *
     * @param int customer id
     * @return list of customers
     */
    public function getOrders($customer_id);

    /**
     * Get nb of orders for a customer
     *
     * @param int customer id
     * @return count of orders
     */
    public function getOrdersCount($customer_id);
}