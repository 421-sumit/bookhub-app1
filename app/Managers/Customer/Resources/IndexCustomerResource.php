<?php
namespace App\Managers\Customer\Resources;
use App\Models\Customer;

class IndexCustomerResource{
    public function fetch(){
        $customers = Customer::get();
        return view('customer.indexcustomer', [
            'customers' => $customers,
        ]);
    }
}