<x-app-layout>

    <script src="https://cdn.tailwindcss.com"></script>

    <div class="bg-gradient-to-b from-[#111827] to-[#0C1424] min-h-screen">
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
                            <form class="navbar-end" method="post" action="{{route('logout')}}">
                                @csrf
                                <button class="btn btn-ghost type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                                </svg>
                                </button>
                            </form>
                        </ul>
                    </div>
                </div>
            </div>
        @else
            <div class="navbar bg-gray-900 border-b border-[#393F4A] mb-4 sticky top-0">
                <div class="navbar-start">
                    <div class="dropdown">
                        <label tabindex="0" class="btn btn-ghost lg:hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
                        </label>
                        <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
                            <li><a href="/">Home</a></li>
                        </ul>
                    </div>
                    <a class="btn btn-ghost normal-case text-xl">skiter</a>
                </div>
                <div class="navbar-center hidden lg:flex">
                    <ul class="menu menu-horizontal px-1">
                        <li><a href="/">Home</a></li>
                    </ul>
                </div>
                <div class="navbar-end">
                    <a href="/login" class="btn">login/register</a>
                </div>
            </div>
        @endauth
<div class="">
    <div class="w-2/5 mx-auto">
        <form action="{{route('message.store')}}" method="post">
            <x-validation-errors/>
            <div class="flex flex-col items-center">
                <div class="w-full">
                    <label class="block text-[#c5c5c5] text-md font-bold mb-2" for="name">Title:
                        <input placeholder="Today i went..." class="shadow rounded-md bg-[#00000020] placeholder:font-normal text-[#c5c5c5] appearance-none w-full focus:outline-[#c5c5c5] rounded py-4 px-3 leading-tight focus:outline-none" type="text" name="titel" id="naam">
                    </label>
                </div>
                <div class="w-full">
                    <label class="block text-[#c5c5c5] text-md font-bold mb-2" for="name">Caption:
                        <textarea placeholder="I started with..." class="shadow rounded-md bg-[#00000020] placeholder:font-normal text-[#c5c5c5] min-h-fit h-32 w-full appearance-none focus:outline-[#c5c5c5] rounded py-2 px-3 leading-tight focus:outline-none" name="text" id="text"></textarea>
                    </label>
                </div>
            @csrf
                <div class="w-full">
            <button class="bg-transparent hover:bg-[#7B68EE] transition duration-300 ease-in-out text-[#c5c5c5] font-semibold py-2 px-4 w-full rounded-md border border-[#7B68EE] hover:border-transparent" type="submit">Create new post</button>
                </div>
            </div></form>
    </div>
    </div>
    </div>
</x-app-layout>
