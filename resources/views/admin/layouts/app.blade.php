<x-app-layout class="overflow-x-hidden">
    @yield('styles')

    @include('admin.layouts.sidebar')

    @yield('scripts')
    @stack('inline-scripts')
</x-app-layout>

{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link href="{{ asset('boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link rel="icon" href="{{asset('img/favicon.png')}}"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.11.0/css/jquery.dataTables.min.css" rel="stylesheet">
    <style>
        body {
            overflow-y: scroll;
        };

        [x-cloak] { 
            display: none !important; 
        }

        .tooltip {
            margin-left: -1.5rem;
            z-index: 999;
        }
    </style>
    @yield('styles')

</head>
<body class="overflow-x-hidden">
    @include('admin.layouts.sidebar')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script>
        function APP() {
        }
    </script>
    <script>
        const setup = () => {
            return {
            loading: true,
            isSidebarOpen: false,
            toggleSidbarMenu() {
                this.isSidebarOpen = !this.isSidebarOpen
            },
            isSettingsPanelOpen: false,
            isSearchBoxOpen: false,
            }
        };
    </script>

    @yield('scripts')
    @stack('inline-scripts')
</body>

</html>
     --}}