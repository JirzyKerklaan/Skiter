<x-app-layout>
    <script src="https://cdn.tailwindcss.com"></script>

    @auth
        <div class="navbar bg-base-100">
            <div class="navbar-start">
                <div class="dropdown">
                    <label tabindex="0" class="btn btn-ghost lg:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
                    </label>
                    <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
                        <li><a>Home</a></li>
                        <li><a>Item 3</a></li>
                    </ul>
                </div>
                <a class="btn btn-ghost normal-case text-xl">skiter</a>
            </div>
            <div class="navbar-center hidden lg:flex">
                <ul class="menu menu-horizontal px-1">
                    <li><a>Home</a></li>
                    <li><a href="{{route("message.create")}}">crud-add</a></li>
                </ul>
            </div>
            <form class="navbar-end" method="post" action="{{route('logout')}}">
                @csrf
                <button class="btn type="submit"> log-out</button>
            </form>
        </div>
    @else
        <div class="navbar bg-base-100">
            <div class="navbar-start">
                <div class="dropdown">
                    <label tabindex="0" class="btn btn-ghost lg:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
                    </label>
                    <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
                        <li><a>Home</a></li>
                    </ul>
                </div>
                <a class="btn btn-ghost normal-case text-xl">skiter</a>
            </div>
            <div class="navbar-center hidden lg:flex">
                <ul class="menu menu-horizontal px-1">
                    <li><a>Home</a></li>
                </ul>
            </div>
            <div class="navbar-end">
                <a href="/login" class="btn">login/register</a>
            </div>
        </div>
    @endauth



@auth
    <div class=" grid grid-cols-3 gap-4">
        @foreach($messages as $message)
            <div class="card bg-base-100 shadow-xl">

                <div class="card-body">
                    <h2 class="card-title">{{ $message->titel  }}</h2>
                    <p>{{ $message->text }}</p>
                    <div class="card-actions justify-end">
                        <a href="{{route("message.edit",$message->id)}}" class="btn btn-primary">edit</a>
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


</x-app-layout>
