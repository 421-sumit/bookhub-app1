<?php

namespace App\Managers\Customer\Resources\Handlers;

use Exception;
use App\Models\CustomerAddress;
use App\Managers\Customer\CustomerAddress\Resources\DeleteCustomerAddressResource;
use App\Managers\Customer\Resources\DeleteCustomerResource;
use App\Models\Customer;

use Illuminate\Support\Facades\DB;

class DeleteCustomerHandler
{
    public function handle(Customer $customer)
    {
        DB::beginTransaction();

        try {
            $customerAddress = (new DeleteCustomerAddressResource())->perform($customer->address);
            $deletedCustomer = (new DeleteCustomerResource())->perform($customer);
            DB::commit();
            return redirect()->route('customers.index')->with('success', 'Customer deleted successfully!');
        } catch (Exception $ex) {
            DB::rollback();
            info("Exception occurred!!", $ex->getMessage);
            return redirect()->route('customers.index')->with('error', 'Failed to delete Customer.');
        }
    }
}