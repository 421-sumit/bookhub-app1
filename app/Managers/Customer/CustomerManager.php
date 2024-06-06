<?php
namespace App\Managers\Customer;

use Illuminate\Http\Request;
use App\Managers\Customer\Requests\{ CreateCustomerRequest, UpdateCustomerRequest };
use App\Managers\Customer\CustomerAddress\Requests\{ CreateCustomerAddressRequest, UpdateCustomerAddressRequest };
use App\Managers\Customer\Resources\{ CreateCustomerResource, IndexCustomerResource, ViewCustomerResource, LoadCustomerResource, EditCustomerResource, DeleteCustomerResource };
use App\Managers\Customer\Resources\Handlers\{ CreateCustomerHandler, UpdateCustomerHandler, DeleteCustomerHandler };

use App\Models\Customer;

class CustomerManager implements CustomerManagerInterface
{
    public function store(CreateCustomerRequest $customerRequest, CreateCustomerAddressRequest $addressRequest)
    {
        return(new CreateCustomerHandler())->handle($customerRequest, $addressRequest);
    }

    public function create(Request $request){
        return(new LoadCustomerResource($request))->fetch();
    }

    public function index(){
        return (new IndexCustomerResource())->fetch();
    }

    public function show(Customer $customer){
        return (new ViewCustomerResource())->fetch($customer);
    }

    public function edit(Customer $customer){
        return (new EditCustomerResource())->load($customer);
    }

    public function update(Customer $customer, UpdateCustomerRequest $updateCustomerRequest, UpdateCustomerAddressRequest $updateAddressRequest){
        return (new UpdateCustomerHandler())->handle($customer, $updateCustomerRequest, $updateAddressRequest);
    }

    public function delete(Customer $customer){
        return (new DeleteCustomerHandler())->handle($customer);
    }
}