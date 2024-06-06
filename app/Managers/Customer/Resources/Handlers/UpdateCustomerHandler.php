<?php

namespace App\Managers\Customer\Resources\Handlers;

use Illuminate\Http\Request;
use App\Managers\Customer\Requests\UpdateCustomerRequest;
use App\Managers\Customer\CustomerAddress\Requests\UpdateCustomerAddressRequest;

use App\Managers\Customer\Resources\UpdateCustomerResource;
use App\Managers\Customer\CustomerAddress\Resources\UpdateCustomerAddressResource;

use Illuminate\Support\Facades\DB;
use App\Models\Customer;
use App\Models\CustomerAddress;

class UpdateCustomerHandler
{
    private $customerRequest, $addressRequest;
   
    public function handle(Customer $customer, UpdateCustomerRequest $customerRequest, UpdateCustomerAddressRequest $addressRequest){
      
        DB::beginTransaction();
        
        try {
            $updatedCustomer = (new UpdateCustomerResource($customer, $customerRequest))->perform();
            $updatedAddress =  (new UpdateCustomerAddressResource($customer->address, $addressRequest))->perform();;
            info("customer updatetd!!",[$updatedCustomer]);
            DB::commit();
            return redirect()->route('customers.index')->with('success', 'Customer created successfully.');
        } catch (Exception $e) {
            DB::rollback();
            info("Exception occurred!!", $ex->getMessage);
            return redirect()->route('customers.index')->with('error', 'Failed to create customer.');
        }
    }
}
