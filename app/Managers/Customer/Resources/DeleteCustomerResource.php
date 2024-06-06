<?php
namespace App\Managers\Customer\Resources;
use App\Models\Customer;

class DeleteCustomerResource{
    public function perform(Customer $customer){
        $customer->delete();
        return redirect()->route('customers.index')->with('success', 'Customer deleted successfully.');
    }
}