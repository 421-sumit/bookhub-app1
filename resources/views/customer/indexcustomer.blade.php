<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Customers        
        </h2>
    </x-slot>

    <div class="py-12" >
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100" style="overflow: auto;">
                    <table class="table table-hover table-bordered bordered-5 text-black">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">Customer ID</th>
                                <th scope="col">Customer Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Country</th>
                                <th scope="col">State</th>
                                <th scope="col">City</th>
                                <th scope="col">Address 1</th>
                                <th scope="col">Address 2</th>
                                <th scope="col" colspan="3">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            @foreach($customers as $customer)
                            <tr>
                                <th>{{$customer->id}}</th>
                                <td>{{$customer->customer_name}}</td>
                                <td>{{$customer->email}}</td>
                                <td>{{$customer->phone}}</td>
                                <td>{{$customer->address->Country->country_name ?? 'Unknown'}}</td>
                                <td>{{$customer->address->state->state_name ?? 'Unknown'}}</td>
                                <td>{{$customer->address->city ?? 'Unknown'}}</td>
                                <td>{{$customer->address->address_1 ?? 'Unknown'}}</td>
                                <td>{{$customer->address->address_2 ?? 'Unknown'}}</td>
                                <td>
                                    <a href="{{route('customer.view', $customer)}}">
                                        <button class="btn btn-secondary">
                                                View
                                        </button>
                                    </a>
                                </td>
                                <td>
                                    <a href="{{route('customer.edit', $customer)}}">
                                        <button class="btn btn-warning">
                                                Edit
                                        </button>
                                    </a>
                                </td>
                                <td>
                                    <a href="{{route('customer.delete', $customer)}}" onclick="return confirmDelete()">
                                        <button class="btn btn-danger">
                                                Delete
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        function confirmDelete() {
            return confirm("Are you sure, you want to delete this customer?");
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </x-app-layout>

</body>

</html>