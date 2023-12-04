<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{__('Passioneurs')}}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    <!-- Style -->
    <link rel="stylesheet" type="text/css" href="{{ url('/app.css') }}"/>

    <!-- Flowbite CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

    <!-- Custom Style -->
    <style>
        .bg-dots-darker {
            background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E");
        }
        .pagination-text p{
            padding-right: 0.5rem;
        }

        .pagination-text .relative{
            display: flex;
        }
    </style>
</head>

<body class="antialiased">
<div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter selection:bg-red-500 selection:text-white">
    <div class="max-w-5xl mx-auto p-6 lg:p-8">

        <!-- Passioneurs Logo -->
        <div class="flex justify-center">
            <img width="40%" src="https://static.passioneurs.net/img/logo-ar.svg" alt="Rajan Logo">
        </div>

        <div class="container mx-auto px-4 sm:px-8">
            <div class="py-8">

                <!-- Table heading(title & search) -->
                @include('table-heading')

                <!-- Table body -->
                @include('table-body')


                <!-- Add Modal -->
                @include('modals.add-modal')

                @if ($errors->any())
                    <!-- Errors Modal -->
                    @include('modals.errors-modal')
                @endif

            </div>
        </div>
    </div>
</div>
</body>
</html>
