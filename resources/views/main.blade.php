<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/main.css') }} ">
    <title>Main</title>

</head>

<body>


    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Main') }}
            </h2>
            @if (session('status'))
                <h2 x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 5000)"
                    class="text-xl text-green-600">{{ session('status') }}</h2>
            @endif

        </x-slot>


        <div id="popup-container">
            <div id="popup">
                @include('topic.create-pop')
            </div>
        </div>


        <button id="popup-open">Popup open</button>
        <p id="deneme">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis atque sit quasi
            blanditiis reiciendis modi, quisquam quam dicta accusantium libero qui ipsam quibusdam consequatur,
            doloribus totam. At totam repudiandae suscipit iure ipsam facilis odio nobis ea nihil commodi, ab
            eveniet! Iure earum repudiandae placeat, eum est dicta necessitatibus consectetur quisquam!</p>










    </x-app-layout>




    <script src="{{ asset('js/main.js') }} "></script>
</body>

</html>
