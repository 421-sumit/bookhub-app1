<?php
namespace App\Managers\Customer\Resources;
use App\Models\Customer;
use App\Models\Country;
use App\Models\State;

class LoadCustomerResource{
    public function fetch(){
        $customers = Customer::all();
        $countries = Country::all();
        $states = State::all();
        
        return view('customer.createcustomer', [
            'customers' => $customers,
            'countries' => $countries,
            'states' => $states,
        ]);
    }
}