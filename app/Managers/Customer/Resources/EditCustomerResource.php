<?php
namespace App\Managers\Customer\Resources;
use App\Models\Customer;
use App\Models\Country;
use App\Models\State;

class EditCustomerResource{
    public function load(Customer $customer){
        $countries = Country::all();
        $states = State::all();
        return view('customer.updatecustomer', [
            'customer' => $customer,
            'countries' => $countries,
            'states' => $states,
        ]);
    }
}