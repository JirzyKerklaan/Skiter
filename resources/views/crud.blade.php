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
                        <li><a href="{{route("message.home")}}">Home</a></li>
                        <li><a {{route("message.create")}}>Item 3</a></li>
                    </ul>
                </div>
                <a class="btn btn-ghost normal-case text-xl">skitter</a>
            </div>
            <div class="navbar-center hidden lg:flex">
                <ul class="menu menu-horizontal px-1">
                    <li><a href="{{route("message.home")}}">Home</a></li>
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
                        <li><a href="{{route("message.home")}}">Home</a></li>
                    </ul>
                </div>
                <a class="btn btn-ghost normal-case text-xl">skitter</a>
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

    <div class="w-3/5 mx-auto">
        <form  action="{{route('message.store')}}" method="post">
            <x-validation-errors/>
            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Naam:
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="titel" id="naam">
                </label>
            </div>
            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">text:
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="text" id="text">
                </label>
            </div>
            @csrf
            <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" type="submit">Submit</button>
            <br></form>
    </div>

</x-app-layout>
