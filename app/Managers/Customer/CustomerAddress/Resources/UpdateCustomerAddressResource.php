<?php

namespace App\Managers\Customer\CustomerAddress\Resources;

use Illuminate\Http\Request;
use App\Managers\Customer\CustomerAddress\Requests\UpdateCustomerAddressRequest;
use Illuminate\Support\Facades\DB;
use App\Models\CustomerAddress;

class UpdateCustomerAddressResource
{
    private $request;
    private $address;

    public function __construct(CustomerAddress $address, UpdateCustomerAddressRequest $request){
        $this->address=$address;
        $this->request=$request;
    }

    public function perform(){

        $this->request->validated();
        try{
            $address = $this->address->update($this->saveAttributes());
            info("Customer address updated!!",[$address]);
            return $address;
        } catch (Exception $ex) {
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
        ];
    }
}
