<?php

namespace App\Managers\Customer\Resources;

use Illuminate\Http\Request;
use App\Managers\Customer\Requests\CreateCustomerRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Customer;

class CreateCustomerResource
{
    private $request;
   
    public function __construct(CreateCustomerRequest $request){
        $this->request=$request;
    }

    public function perform(){
        $this->request->validated();
        try{
            $customer = Customer::create($this->saveAttributes());
            return $customer;
        } catch (Exception $ex) {
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

