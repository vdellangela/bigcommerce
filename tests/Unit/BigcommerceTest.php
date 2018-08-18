<?php

namespace Tests\Unit;

use Tests\TestCase;

class BigcommerceTest extends TestCase
{
    private $bigCommerceAdapter;

    public function setUp()
    {
        parent::setUp();
        $this->bigCommerceAdapter = $this->app->make('\Bigcommerce\Api\Client');
    }

    public function testGetCustomers()
    {
        $customers = $this->bigCommerceAdapter->getCustomers();

        $this->assertNotNull($customers);
    }

    public function testGetCustomerById()
    {
        $customer = $this->bigCommerceAdapter->getCustomer(2);

        $this->assertNotNull($customer);
        $this->assertEquals(2, $customer->id);
    }

    public function testGetNonExistantCustomerById()
    {
        $customer = $this->bigCommerceAdapter->getCustomer(-1);

        $this->assertFalse($customer);
    }

    public function testGetOrderByCustomerId()
    {
        $orders = $this->bigCommerceAdapter->getOrders(1);

        $this->assertNotNull($orders);
    }
}