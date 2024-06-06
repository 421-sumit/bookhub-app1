<?php

namespace App\Managers\Customer\Resources;

use Illuminate\Http\Request;
use App\Managers\Customer\Requests\UpdateCustomerRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Customer;

class UpdateCustomerResource
{
    private $request;
    private $customer;

    public function __construct(Customer $customer, UpdateCustomerRequest $request){
        $this->customer=$customer;
        $this->request=$request;
    }

    public function perform(){

        $this->request->validated();
        try{
            $customer = $this->customer->update($this->saveAttributes());
            info("customer updated",[$customer]);
            return  $this->customer;
        } catch (Exception $e) {
            info("Exception occurred!!", $ex->getMessage);
        }
    }

    protected function saveAttributes():array {
        return [
            'customer_name'=>$this->request->customer_name,
            'email'=>$this->request->email,
            'phone'=>$this->request->phone,
        ]; 
    }
}
