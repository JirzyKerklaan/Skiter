<x-app-layout>
    <script src="https://cdn.tailwindcss.com"></script>

    <div class="bg-gradient-to-b from-[#111827] to-[#0C1424] min-h-screen w-screen">
        @auth
            <div class="navbar bg-gray-900 border-b border-[#393F4A] mb-4 sticky top-0 z-30 text-[#C5C5C5]">
                <div class="navbar-start lg:hidden">
                    <div class="dropdown">
                        <label tabindex="0" class="btn btn-ghost lg:hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
                        </label>
                        <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
                            <li><a href="/">Home</a></li>
                            <li><a href="/search">search</a></li>
                            <li><a href="/crud">Add post</a></li>
                        </ul>
                    </div>
                </div>
                <div class="navbar-start hidden lg:flex">
                    <ul class="menu menu-horizontal px-1">
                        <li><a href="/">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                </svg>

                            </a></li>
                        <li><a href="/search">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                </svg>

                            </a></li>
                        <li><a href="{{route("message.create")}}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </a></li>
                    </ul>

                </div>
                <div class="navbar-center">
                    <a class="normal-case text-xl">skiter</a>
                </div>

                <div class="navbar-end">
                    <div class="menu menu-horizontal px-1">
                        <ul>
                            <li class="group"><a href="/account">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                    </svg>
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        @else
            <div class="navbar bg-gray-900 border-b border-[#393F4A] mb-4 sticky top-0 z-30">
                <div class="navbar-start lg:hidden">
                    <div class="dropdown">
                        <label tabindex="0" class="btn btn-ghost lg:hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
                        </label>
                        <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
                            <li><a href="/">Home</a></li>
                            <li><a href="/search">search</a></li>
                            <li><a href="/crud">Add post</a></li>
                        </ul>
                    </div>
                </div>
                <div class="navbar-start hidden lg:flex">
                    <ul class="menu menu-horizontal px-1">
                        <li><a href="/">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                </svg>

                            </a></li>
                        <li><a href="/search">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                </svg>
                            </a></li>
                    </ul>

                </div>
                <div class="navbar-center">
                    <a class="normal-case text-xl">skiter</a>
                </div>
                <div class="navbar-end">
                    <a href="/login" class="btn">login/register</a>
                </div>
            </div>
        @endauth
        <div class="flex justify-center flex-col items-center">
            <div class="w-3/5 bg-[#00000020] rounded-full h-14 flex items-center">
                <input type="text" placeholder="Search..." class="w-[90%] h-[90%] rounded-l-full bg-transparent px-4 border-r border-gray-700">
                <div class="flex items-center justify-center flex-grow hover:bg-[#7B68EE] transition duration-400 ease-in-out h-full rounded-r-full">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                </div>
            </div>
            <a href="/account" class="w-full h-fit flex items-center justify-center flex-col mt-8">
                <div class="result w-2/4 px-4 py-4 rounded-full bg-[#00000020] mt-4">result</div>
            </a>
        </div>
    </div>
</x-app-layout>
