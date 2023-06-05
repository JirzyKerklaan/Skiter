<x-app-layout>
<div class="w-full text-[#c5c5c5] h-screen flex items-center justify-center bg-gray-900">
    <form method="POST" class="w-full h-full flex items-center justify-center flex-col" action="{{ route('register') }}">
        @csrf
        <div class="w-1/5 h-3/5 ">
            <h1 class="text-[#c5c5c5] text-5xl w-full text-center mb-4">Sign up</h1>
            <div class="w-full h-fit">
                <!-- Name -->
                <div>
                    <x-input-label class="text-[#C5C5C5] m-1" for="name" :value="__('Name')" />
                    <x-text-input id="name" class="m-1 bg-[#00000020] w-full p-2 text-[#C5C5C5]" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-500" />
                </div>

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
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-600" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label class="text-[#C5C5C5] m-1" for="password_confirmation" :value="__('Confirm Password')" />
                    <x-text-input id="password_confirmation" class="m-1 bg-[#00000020] text-[#C5C5C5] w-full p-2"
                                  type="password"
                                  name="password_confirmation" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-600" />
                </div>

                <div class="m-1 mt-2 w-full h-full">
                    <x-primary-button class="w-full h-full py-4 bg-[#7b68ee] hover:bg-[#4c38c8] rounded-md flex items-center justify-center">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>
                <div class="w-full h-fit text-center hover:underline">
                    <a href="/login">Already have an account? Log in!</a>
                </div>
            </div>
        </div>
    </form>
</div>
</x-app-layout>
