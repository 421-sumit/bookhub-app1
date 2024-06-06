<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Customer') }}
        </h2>
    </x-slot>
    <div class="d-flex justify-content-center py-12">
        <div class="card" style="width:600px; padding:20px">
        <center><b>Customer {{ $customer->customer_name }}</b></center>
            <div class="card-body">
                <div class="mb-4 row">
                    <label class="col-6">Customer Id</label>
                    <label class="col-6">: {{$customer->id}}</label>
                </div>
                <div class="mb-4 row">
                    <label class="col-6">Customer name</label>
                    <label class="col-6">: {{$customer->customer_name}}</label>
                </div>
                <div class="mb-4 row">
                    <label class="col-6">Email</label>
                    <label class="col-6">: {{$customer->email}}</label>
                </div>
                <div class="mb-4 row">
                    <label class="col-6">Phone</label>
                    <label class="col-6">: {{$customer->phone}}</label>
                </div>
                <div class="mb-4 row">
                    <label class="col-6">Address Line 1</label>
                    <label class="col-6">: {{$customer->address->address_1}}</label>
                </div>
                <div class="mb-4 row">
                    <label class="col-6">Address Line 2</label>
                    <label class="col-6">: {{$customer->address->address_2}}</label>
                </div>
                <div class="mb-4 row">
                    <label class="col-6">City</label>
                    <label class="col-6">: {{$customer->address->city}}</label>
                </div>
                <div class="mb-4 row">
                    <label class="col-6">State</label>
                    <label class="col-6">: {{$customer->address->state->state_name}}</label>
                </div>
                <div class="mb-4 row">
                    <label class="col-6">Country</label>
                    <label class="col-6">: {{$customer->address->country->country_name}}</label>
                </div>
            </div>
        </div>
    </div>
   
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </x-app-layout>

</body>

</html>