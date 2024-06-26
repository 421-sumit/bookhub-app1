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
            {{ __('Books') }}
        </h2>
    </x-slot>
    <div class="py-1">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="table table-hover table-bordered bordered-5 text-black">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">Book ID</th>
                                <th scope="col">Title</th>
                                <th scope="col">Genre</th>
                                <th scope="col">Author</th>
                                <th scope="col">Publisher</th>
                                <th scope="col">Language</th>
                                <th scope="col">Rack</th>
                                <th scope="col">Cost</th>
                                <th scope="col">Quantity</th>
                                <th scope="col" colspan="3">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            @foreach($books as $book)
                            <tr>
                                <th>{{$book->id}}</th>
                                <td>{{$book->title}}</td>
                                <td>{{$book->Genre->genre}}</td>
                                <td>{{$book->Author->name}}</td>
                                <td>{{$book->Publisher->name}}</td>
                                <td>{{$book->Language->language}}</td>
                                <td>{{$book->Rack->rack_name}}</td>
                                <td>{{$book->cost}}</td>
                                <td>{{$book->quantity}}</td>
                                <td>
                                    <a href="{{route('book.view', $book)}}">
                                        <button class="btn btn-secondary">
                                                View
                                        </button>
                                    </a>
                                </td>
                                <td>
                                    <a href="{{route('book.edit', $book)}}">
                                        <button class="btn btn-warning">
                                                Edit
                                        </button>
                                    </a>
                                </td>
                                <td>
                                    <a href="{{route('book.delete', $book)}}" onclick="return confirmDelete()">
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
            return confirm("Are you sure, you want to delete this book?");
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </x-app-layout>

</body>

</html>