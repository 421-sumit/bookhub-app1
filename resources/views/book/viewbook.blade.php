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
            {{ __('Book') }}
        </h2>
    </x-slot>
    <div class="d-flex justify-content-center py-12">
        <div class="card" style="width:600px; padding:20px">
        <center><b>Book {{ $book->title }}</b></center>
            <div class="card-body">
                <div class="mb-4 row">
                    <label class="col-6">Book Id</label>
                    <label class="col-6">: {{$book->id}}</label>
                </div>
                <div class="mb-4 row">
                    <label class="col-6">Book title</label>
                    <label class="col-6">: {{$book->title}}</label>
                </div>
                <div class="mb-4 row">
                    <label class="col-6">Genre</label>
                    <label class="col-6">: {{$book->Genre->genre}}</label>
                </div>
                <div class="mb-4 row">
                    <label class="col-6">Author</label>
                    <label class="col-6">: {{$book->author->name}}</label>
                </div>
                <div class="mb-4 row">
                    <label class="col-6">Publisher</label>
                    <label class="col-6">: {{$book->publisher->name}}</label>
                </div>
                <div class="mb-4 row">
                    <label class="col-6">Language</label>
                    <label class="col-6">: {{$book->language->language}}</label>
                </div>
                <div class="mb-4 row">
                    <label class="col-6">Cost</label>
                    <label class="col-6">: {{$book->cost}}</label>
                </div>
                <div class="mb-4 row">
                    <label class="col-6">Quantity</label>
                    <label class="col-6">: {{$book->quantity}}</label>
                </div>
                <div class="mb-4 row">
                    <label class="col-6">Rack location</label>
                    <label class="col-6">: {{$book->rack->rack_name}}</label>
                </div>
            </div>
        </div>
    </div>
   
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </x-app-layout>

</body>

</html>