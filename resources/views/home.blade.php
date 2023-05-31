<x-app-layout>
    <script src="https://cdn.tailwindcss.com"></script>

    <div class="bg-gradient-to-b from-[#111827] to-[#0C1424] min-h-screen">
    @auth
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

        <style >
            .cl1 { transition:visibility 1s, opacity 1s;
                visibility:hidden; opacity:0}
            .outer1:hover > div
            { visibility:visible; opacity:1}
        </style>
@auth
    <div class="flex flex-col items-center gap-14 pb-14">
        @foreach($messages as $message)
                <div class="card w-2/4 bg-[url('https://images.unsplash.com/photo-1612441804231-77a36b284856?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80')] bg-cover aspect-[16/9] shadow-xl rounded-xl">
                    <h2 class="card-title text-2xl text-[#c5c5c5] h-14 pl-6 bg-gradient-to-b from-[#00000082] via-[#00000055] to-[#00000000] rounded-t-xl">{{ $message->titel  }}</h2>
                    <div class="card-body group">
                        <p class="opacity-0 group-hover:opacity-100 w-full h-full transition ease-in-out duration-500 text-[#c5c5c5]">{{ $message->text }} </p>
                        <div class="card-actions justify-end">
                            <a href="{{route("message.edit",$message->id)}}" class="btn btn-ghost">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
        @endforeach
    </div>
    @else


<div class="w-full text-center mt-10">
    <p class="text-4xl">tweets</p>
</div>
        <hr>
        <div class=" mt-4 grid grid-cols-3 gap-4">
            @foreach($messages as $message)
                <div class="card bg-base-100 shadow-xl">
                    <div class="card-body text-center">
                        <p class="text-3xl">{{ $message->titel  }}</p>
                        <p>{{ $message->text }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    @endauth
    </div>


</x-app-layout>
