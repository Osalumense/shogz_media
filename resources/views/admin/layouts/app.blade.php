<x-app-layout class="overflow-x-hidden">
    @yield('styles')

    @include('admin.layouts.sidebar')

    @yield('scripts')
    @stack('inline-scripts')
</x-app-layout>