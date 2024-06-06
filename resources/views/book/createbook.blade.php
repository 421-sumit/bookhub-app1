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
            {{ __('Create Book') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <form class="text-white" action="{{route('book.store')}}" method="post">
                    @csrf
                    <div class="container w-25 p-3">
                    <x-input type="text" name="title" lable="Book title" value="{{ old('title') }}" />
                        <?php
                            $genreOptions = [];
                            foreach($genres as $genre){
                                $genreOptions[$genre['id']] = $genre['genre'];
                            }?>
                            <x-select name="genre_id" :options="$genreOptions" label="Select genre"/>
                            
                        <?php
                            $authorOptions = [];
                            foreach($authors as $author){
                                $authorOptions[$author['id']] = $author['name'];
                            }?>
                            <x-select name="author_id" :options="$authorOptions" label="Select author"/>
                            <?php
                            $publisherOptions = [];
                            foreach($publishers as $publisher){
                                $publisherOptions[$publisher['id']] = $publisher['name'];
                            }?>
                            <x-select name="publisher_id" :options="$publisherOptions" label="Select publisher"/>
                            <?php
                            $languageOptions = [];
                            foreach($languages as $language){
                                $languageOptions[$language['id']] = $language['language'];
                            }?>
                            <x-select name="language_id" :options="$languageOptions" label="Select language"/>
                            <?php
                            $rackOptions = [];
                            foreach($racks as $rack){
                                $rackOptions[$rack['id']] = $rack['rack_name'];
                            }?>
                            <x-select name="rack_id" :options="$rackOptions" label="Select rack"/>
                            
                            <x-input type="text" name="cost" lable="Cost" value="{{ old('cost') }}" />
                            <x-input type="text" name="quantity" lable="Quantity" value="{{ old('quantity') }}" />

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