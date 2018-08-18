<?php

namespace App\Http\Controllers;

use App\Services\Contract\BigCommerceInterface;
use Illuminate\Routing\Controller as BaseController;

class CustomerDetailsController extends BaseController
{
    private $bigCommerceAdapter;

    public function __construct(BigCommerceInterface $bigCommerceAdapter)
    {
        $this->bigCommerceAdapter = $bigCommerceAdapter;
    }

    public function show($id)
    {
        $customer = $this->bigCommerceAdapter->getCustomer($id);
        $orders = $this->bigCommerceAdapter->getOrders((int)$id);

        if ($orders) {
            $lifeTimeValue = array_reduce($orders, function ($i, $obj) {
                return $i += $obj->total_inc_tax;
            });
        } else {
            $lifeTimeValue = 0;
            $orders = [];
        }

        return view('details')->with(['customer' => $customer, 'orders' => $orders, 'lifeTimeValue' => $lifeTimeValue]);
    }
}
