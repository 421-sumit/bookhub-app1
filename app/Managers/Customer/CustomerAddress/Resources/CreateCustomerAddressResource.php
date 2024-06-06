<?php

namespace App\Managers\Customer\CustomerAddress\Resources;

use Illuminate\Http\Request;
use App\Managers\Customer\CustomerAddress\Requests\CreateCustomerAddressRequest;
use Illuminate\Support\Facades\DB;
use App\Models\CustomerAddress;
use App\Models\Customer;

class CreateCustomerAddressResource
{
    private $request, $customer;
   
    public function __construct(Customer $customer, CreateCustomerAddressRequest $request){
        $this->customer=$customer;
        $this->request=$request;
    }

    public function perform(){

        $this->request->validated();
        try{
            $address = CustomerAddress::create($this->saveAttributes());
            info("Customer address created!!",[$address]);
            return $address;
        } catch (Exception $e) {
            info("Exception occurred!!", $ex->getMessage);
        }
    }

    protected function saveAttributes():array {
        return [
            'country_id'=>$this->request->country_id,
            'state_id'=>$this->request->state_id,
            'address_1'=>$this->request->address_1,
            'address_2'=>$this->request->address_2,
            'city'=>$this->request->city,
            'customer_id'=>$this->customer->id,
        ];
    }
}
