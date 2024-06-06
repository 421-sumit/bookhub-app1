<?php

namespace App\Managers\Customer\Resources\Handlers;

use Illuminate\Http\Request;
use App\Managers\Customer\Requests\CreateCustomerRequest;
use App\Managers\Customer\CustomerAddress\Requests\CreateCustomerAddressRequest;

use App\Managers\Customer\Resources\CreateCustomerResource;
use App\Managers\Customer\CustomerAddress\Resources\CreateCustomerAddressResource;

use Illuminate\Support\Facades\DB;
use App\Models\Customer;
use App\Models\CustomerAddress;

class CreateCustomerHandler
{
    private $customerRequest, $addressRequest;
   
    public function handle(CreateCustomerRequest $customerRequest, CreateCustomerAddressRequest $addressRequest){
      
        DB::beginTransaction();
        
        try {
            $customer = (new CreateCustomerResource($customerRequest))->perform();
            $customerAddress =  (new CreateCustomerAddressResource($customer, $addressRequest))->perform();;
           
            DB::commit();
            info("customer created!!",[$customer->customer_name]);
            return redirect()->route('customers.index')->with('success', 'Customer created successfully.');
        } catch (Exception $ex) {
            DB::rollback();
            info("Exception occurred!!", $ex->getMessage);
            return redirect()->route('customer.create')->with('error', 'Failed to create customer.');
        }
    }
}
