<?php

namespace App\Http\Controllers;

use App\Services\Contract\BigCommerceInterface;
use Illuminate\Routing\Controller as BaseController;

class CustomersController extends BaseController
{
    private $bigCommerceAdapter;

    public function __construct(BigCommerceInterface $bigCommerceAdapter)
    {
        $this->bigCommerceAdapter = $bigCommerceAdapter;
    }

    public function index()
    {
        $filters = [
            "page" => 1,
            "limit" => 10
        ];

        $customers = $this->bigCommerceAdapter->getCustomers($filters);

        foreach ($customers as $customer) {
            $customer->ordersCount = $this->bigCommerceAdapter->getOrdersCount($customer->id);
        }

        return view('customers')->with(['customers' => $customers]);
    }
}
