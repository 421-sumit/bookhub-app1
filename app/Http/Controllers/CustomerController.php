<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Managers\Customer\CustomerManagerInterface;
use App\Managers\Customer\Requests\{ CreateCustomerRequest, UpdateCustomerRequest };
use App\Managers\Customer\CustomerAddress\Requests\{ CreateCustomerAddressRequest, UpdateCustomerAddressRequest };
use App\Models\Customer;

class CustomerController extends Controller
{
    private CustomerManagerInterface $customerManager;

    public function __construct(CustomerManagerInterface $customerManager){
        $this->customerManager = $customerManager;
    }

    public function store(CreateCustomerRequest $customerRequest, CreateCustomerAddressRequest $addressRequest){ 
        return $this->customerManager->store($customerRequest, $addressRequest);
    }
    
    public function create(Request $request){
        return $this->customerManager->create($request);
    }

    public function index(Request $request){
        return $this->customerManager->index($request);
    }

    public function show(Customer $customer){
        return $this->customerManager->show($customer);
    }

    public function edit(Customer $customer){
        return $this->customerManager->edit($customer);
    }

    public function update(Customer $customer, UpdateCustomerRequest $updateCustomerRequest, UpdateCustomerAddressRequest $updateAddressRequest){
        return $this->customerManager->update( $customer, $updateCustomerRequest, $updateAddressRequest);
    }

    public function delete(Customer $customer){
        return $this->customerManager->delete($customer);
    }
}
