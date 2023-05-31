<x-app-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
<div class="w-full h-screen flex items-center justify-center bg-gray-900">
    <form method="POST" class="w-full h-full flex items-center justify-center flex-col" action="{{ route('login') }}">
        @csrf
        <div class="w-1/5 h-3/5 ">
        <h1 class="text-[#c5c5c5] text-5xl w-full text-center mb-4">Login</h1>
            <div class="w-full h-fit">
                <!-- Email Address -->
                <div>
                    <x-input-label class="text-[#C5C5C5] m-1" for="email" :value="__('Email')" />
                    <x-text-input id="email" class="m-1 bg-[#00000020] w-full p-2 text-[#C5C5C5]" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500" />
                </div>

                <!-- Password -->
                <div>
                    <x-input-label class="text-[#C5C5C5] m-1" for="password" :value="__('Password')" />
                    <x-text-input id="password" class="m-1 bg-[#00000020] text-[#C5C5C5] w-full p-2"
                                  type="password"
                                  name="password"
                                  required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>


                <div class="flex items-center justify-end mt-4">

                    <x-primary-button class="ml-3">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>
            </div>
        </div>
    </form>
</div>
</x-app-layout>
