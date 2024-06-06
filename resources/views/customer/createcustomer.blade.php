<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create customer') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <form class="text-white" action="{{route('customer.store')}}" method="post">
                    @csrf
                    <div class="container w-25 p-3">
                        <h2 class="text-black">Personal Information</h2>
                        <br />
                        <x-input type="text" name="customer_name" lable="Customer Name" value="{{ old('customer_name') }}" />
                        <x-input type="email" name="email" lable="Email" value="{{ old('email') }}" />
                        <x-input type="text" name="phone" lable="Phone" value="{{ old('phone') }}" />
                        <br  />
                        <h2 class="text-black">Address Information</h2>
                        <br />

                        <x-input type="text" name="address_1" lable="Address line 1" value="{{ old('address_1') }}" />
                        <x-input type="text" name="address_2" lable="Address line 2" value="{{ old('address_2') }}" />
                        <x-input type="text" name="city" lable="City" value="{{ old('city') }}" />
                        <?php
                            $countryOptions = [];
                            foreach($countries as $country){
                                $countryOptions[$country['id']] = $country['country_name'];
                            }?>
                            <x-select name="country_id" :options="$countryOptions" label="Select country"/>

                        <?php
                            $stateOptions = [];
                            foreach($states as $state){
                                $stateOptions[$state['id']] = $state['state_name'];
                            }?>
                            <x-select name="state_id" :options="$stateOptions" label="Select state"/>

                        <button class="btn btn-secondary mt-4 ">Create</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
   </x-app-layout>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>