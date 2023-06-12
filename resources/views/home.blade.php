<x-app-layout>
    <script src="https://cdn.tailwindcss.com"></script>

    <div class="bg-gradient-to-b from-[#111827] to-[#0C1424] min-h-screen text-[#C5C5C5]">
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
                    <div class="flex flex-row bg-gradient-to-b from-[#00000082] via-[#00000055] to-[#00000000] rounded-t-xl">
                        <div class="justify-start flex items-center w-full">
                            <h2 class="card-title text-2xl text-[#c5c5c5] h-14 pl-6 rounded-t-xl">{{ $message->titel  }}</h2>
                        </div>
                        <div class="justify-end flex items-center pr-8">
                            <p class="">{{$message->user?->name}}</p>
                        </div>
                    </div>

                        <div class="card-body group">
                        <p class="opacity-0 group-hover:opacity-100 w-full h-full transition ease-in-out duration-500 text-[#c5c5c5]">{{ $message->text }} </p>
                            <div class="flex w-full justify-between">
                            <div class="card-actions items-center">
                                <a href="" class="btn btn-ghost text-[#C5C5C5]">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.5c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75A2.25 2.25 0 0116.5 4.5c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23H5.904M14.25 9h2.25M5.904 18.75c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 01-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 10.203 4.167 9.75 5 9.75h1.053c.472 0 .745.556.5.96a8.958 8.958 0 00-1.302 4.665c0 1.194.232 2.333.654 3.375z" />
                                    </svg>
                                </a>
                            </div>
                        <div class="card-actions items-center">
                            <a href="{{route("message.edit",$message->id)}}" class="btn btn-ghost text-[#C5C5C5]">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                </svg>
                            </a>
                            <a href="{{route("message.show",$message)}}" class="btn btn-ghost text-[#C5C5C5]">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
        @endforeach
    </div>
    @else
            <div class="flex flex-col items-center gap-14 pb-14">
                @foreach($messages as $message)
                    <div class="card w-2/4 bg-[url('https://images.unsplash.com/photo-1612441804231-77a36b284856?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80')] bg-cover aspect-[16/9] shadow-xl rounded-xl">
                        <h2 class="card-title text-2xl text-[#c5c5c5] h-14 pl-6 bg-gradient-to-b from-[#00000082] via-[#00000055] to-[#00000000] rounded-t-xl">{{ $message->titel  }}</h2>
                        <div class="card-body group">
                            <p class="opacity-0 group-hover:opacity-100 w-full h-full transition ease-in-out duration-500 text-[#c5c5c5]">{{ $message->text }} </p>
                            <p>{{$message->user->name}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
    @endauth
    </div>


</x-app-layout>
