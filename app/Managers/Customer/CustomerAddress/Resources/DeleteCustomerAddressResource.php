<?php

namespace App\Managers\Customer\CustomerAddress\Resources;
use Illuminate\Support\Facades\DB;
use App\Models\CustomerAddress;
use App\Models\Customer;

class DeleteCustomerAddressResource
{

    public function perform(CustomerAddress $address)
    {

        try {
            $deleteaddress = $address->delete();
            info("Customer address deleted");
            return $deleteaddress;
        } catch (Exception $ex) {
            info("Exception occurred!!", $ex->getMessage);
        }
    }
}