<div>
    <div class="flex h-screen overflow-y-hidden bg-white" x-data="setup()"
        x-init="$refs.loading.classList.add('hidden')">
        <!-- Loading screen -->
        <div x-ref="loading"
            class="fixed inset-0 z-50 flex items-center justify-center text-white bg-black bg-opacity-50"
            style="backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px)">
            <span>Loading...</span>
        </div>

        <!-- Sidebar backdrop -->
        <div x-show.in.out.opacity="isSidebarOpen" class="fixed inset-0 z-10 bg-black bg-opacity-20 lg:hidden"
            style="backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px)"></div>

        <!-- Sidebar -->
        <aside x-transition:enter="transition transform duration-300"
            x-transition:enter-start="-translate-x-full opacity-30  ease-in"
            x-transition:enter-end="translate-x-0 opacity-100 ease-out"
            x-transition:leave="transition transform duration-300"
            x-transition:leave-start="translate-x-0 opacity-100 ease-out"
            x-transition:leave-end="-translate-x-full opacity-0 ease-in"
            class="fixed inset-y-0 z-10 flex flex-col flex-shrink-0 w-64 max-h-screen overflow-hidden transition-all transform border-r bg-white shadow-lg lg:z-50 lg:static lg:shadow-none"
            :class="{'-translate-x-full lg:translate-x-0 lg:w-20': !isSidebarOpen}" x-cloak>
            <!-- sidebar header -->
            <div class="flex items-center opacity-40 justify-between flex-shrink-0 p-2"
                :class="{'lg:justify-center': !isSidebarOpen}">
                <span
                    class="p-2 text-xl font-semibold leading-8 tracking-tight uppercase whitespace-nowrap text-blue-600"> Shogz
                    <span :class="{'lg:hidden': !isSidebarOpen}"> Dashboard</span>
                </span>
                <button @click="toggleSidbarMenu()" class="p-2 rounded-md lg:hidden text-blue-600">
                    <i class="bx bx-menu bx-sm"></i>
                </button>
            </div>
            <!-- Sidebar links -->
            <nav class="flex-1 my-8 overflow-hidden hover:overflow-y-auto">
                <ul class="p-2 text-blue-600">
                    <li>
                        <a href="{{ url('/admin') }}"
                            class="flex items-center p-2 space-x-2 rounded-md hover:bg-gray-100"
                            :class="{'justify-center relative group': !isSidebarOpen}">
                                
                            <div>
                                <span><i class="bx bx-home bx-sm"></i></span>
                                <div class="opacity-0 z-[99] w-16 mx-auto bg-black text-white text-center tooltip text-xs rounded-full py-2 absolute group-hover:opacity-100 px-1 -left-2 pointer-events-none">
                                    {{ 'Home' }}
                                </div>                                
                            </div>
                            
                            <span
                                :class="{ 'lg:hidden': !isSidebarOpen }">{{ 'Home' }}</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/contact') }}"
                            class="flex items-center p-2 space-x-2 rounded-md hover:bg-gray-100"
                            :class="{'justify-center relative group': !isSidebarOpen}">
                            <div>
                                <span><i class='bx bx-envelope bx-sm' ></i>
                                    <div class="opacity-0 w-16 mx-auto z-[99] bg-black text-white text-center tooltip text-xs rounded-full py-2 absolute group-hover:opacity-100 px-1 -left-2 pointer-events-none">
                                        {{ ('Mails') }}
                                    </div>
                                </span>
                                
                            </div>
                            <span
                                :class="{ 'lg:hidden': !isSidebarOpen }">{{ ('Mails') }}</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/edit-website') }}"
                            class="flex items-center p-2 space-x-2 rounded-md hover:bg-gray-100"
                            :class="{'justify-center relative group': !isSidebarOpen}">
                            <div>
                                <span><i class='bx bxs-edit-alt bx-sm' ></i>
                                </span>
                                <div class="opacity-0 w-16 mx-auto bg-black text-white text-center tooltip text-xs rounded-full py-2 absolute z-[99] group-hover:opacity-100 px-1 -left-2 pointer-events-none">
                                    {{ ('Edit website') }}
                                </div>
                            </div>
                            <span :class="{ 'lg:hidden': !isSidebarOpen }">
                                {{ ('Edit website') }}
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/user/profile') }}"
                            class="flex items-center p-2 space-x-2 rounded-md hover:bg-gray-100"
                            :class="{'justify-center relative group': !isSidebarOpen}">
                            <div>
                                <span>
                                    <i class='bx bxs-user-detail bx-sm'></i>
                                </span>
                                <div class="opacity-0 w-16 mx-auto z-[99] bg-black text-white text-center tooltip text-xs rounded-full py-2 absolute  group-hover:opacity-100 px-1 -left-2 pointer-events-none">
                                    {{ ('profile') }}
                                </div>
                            </div>
                            <span
                                :class="{ 'lg:hidden': !isSidebarOpen }">{{ ('profile') }}</span>
                        </a>
                    </li>
                    <!-- Sidebar Links... -->
                </ul>
            </nav>
        </aside>

        <div class="flex flex-col flex-1 h-full overflow-hidden">
            <!-- Navbar -->
            <header class="flex-shrink-0 border-b">
                <div class="flex items-center justify-between p-2 bg-white">
                    <!-- Navbar left -->
                    <div class="flex items-center space-x-3">
                        <span class="p-2 text-xl font-semibold  tracking-tight uppercase lg:hidden">Shogz</span>
                        <!-- Toggle sidebar button -->
                        <button @click="toggleSidbarMenu()" class="p-2 rounded-md focus:outline-none focus:ring text-blue-600">
                            <i class="bx bx-menu bx-sm"></i>
                        </button>
                    </div>
            </header>

            <!-- Main content -->

            <main class="flex-1 max-h-full overflow-x-hidden p-5">
                @if (session('success'))
                    <div class="flex justify-center">
                        <div x-data="{show: true}" x-show="show" x-init="setTimeout(() => show = false, 7000)"
                            x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 transform scale-0"
                            x-transition:enter-end="opacity-100 transform scale-100"
                            x-transition:leave="transition ease-in duration-300"
                            x-transition:leave-start="opacity-100 transform scale-100"
                            x-transition:leave-end="opacity-0 transform scale-0"
                            class="bg-blue-200 text-blue-800 px-4 py-2 rounded-md text-lg flex items-center mx-auto w-3/4 xl:w-2/4">
                            <span class=" mx-auto"><i class='bx bxs-check-circle mr-2'></i>
                                {!! session('success') !!} </span>
                        </div>
                    </div>
                @endif
                @if (session('error'))
                    <div class="flex justify-center">
                        <div x-data="{show: true}" x-show="show" x-init="setTimeout(() => show = false, 7000)"
                            x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 transform scale-0"
                            x-transition:enter-end="opacity-100 transform scale-100"
                            x-transition:leave="transition ease-in duration-300"
                            x-transition:leave-start="opacity-100 transform scale-100"
                            x-transition:leave-end="opacity-0 transform scale-0"
                            class="bg-red-200 text-red-800 px-4 py-2 rounded-md text-lg flex items-center mx-auto w-3/4 xl:w-2/4">
                            <span class=" mx-auto"><i class='bx bxs-x-circle mr-2'></i> {!! session('error') !!}
                            </span>
                        </div>
                    </div>
                @endif
                @if (session('warning'))
                    <div class="flex justify-center">
                        <div x-data="{show: true}" x-show="show" x-init="setTimeout(() => show = false, 7000)"
                            x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 transform scale-0"
                            x-transition:enter-end="opacity-100 transform scale-100"
                            x-transition:leave="transition ease-in duration-300"
                            x-transition:leave-start="opacity-100 transform scale-100"
                            x-transition:leave-end="opacity-0 transform scale-0"
                            class="bg-orange-200 text-yellow-600 px-4 py-2 rounded-md text-lg flex items-center mx-auto w-3/4 xl:w-2/4">
                            <span class="mx-auto"><i class='bx bxs-error mr-2'></i>{!! session('warning') !!}
                            </span>
                        </div>
                    </div>
                @endif
                @if (session('info'))
                    <div class="flex justify-center">
                        <div x-data="{show: true}" x-show="show" x-init="setTimeout(() => show = false, 7000)"
                            class="bg-blue-200 text-blue-600 px-4 py-2 rounded-md text-lg flex items-center mx-auto w-3/4 xl:w-2/4">
                            <span class="mx-auto"><i class='bx bxs-error mr-2'></i> {!! session('info') !!}
                            </span>
                        </div>
                    </div>
                @endif
                <!-- Start Content -->
                @yield('content')
            </main>
    </div>
</div>
