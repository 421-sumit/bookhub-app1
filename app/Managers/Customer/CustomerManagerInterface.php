<?php
namespace App\Managers\Customer;

use App\Managers\Interfaces\CRUDInterface;
use Illuminate\Http\Request;
use App\Managers\Customer\Requests\{ CreateCustomerRequest, UpdateCustomerRequest };
use App\Managers\Customer\CustomerAddress\Requests\{ CreateCustomerAddressRequest, UpdateCustomerAddressRequest};
use App\Models\Customer;

interface CustomerManagerInterface extends CRUDInterface
{
    public function store(CreateCustomerRequest $customerRequest, CreateCustomerAddressRequest $addressRequest);

    public function create(Request $request);

    public function index();

    public function edit(Customer $customer);

    public function update(Customer $customer, UpdateCustomerRequest $updateCustomerRequest, UpdateCustomerAddressRequest $updateAddressRequest);

    public function delete(Customer $customer);
}