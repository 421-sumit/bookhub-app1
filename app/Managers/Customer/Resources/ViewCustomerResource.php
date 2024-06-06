<?php
namespace App\Managers\Customer\Resources;
use App\Models\Customer;

class ViewCustomerResource{
    public function fetch(Customer $customer){
        return view('customer.viewcustomer', [
            'customer' => $customer,
        ]);
    }
}