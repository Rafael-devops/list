<x-guest-layout>
    <x-auth-card>
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="min-w-screen min-h-screen flex items-center justify-center px-5 py-5">
                <div class="bg-gray-100 text-gray-500 rounded-3xl shadow-xl w-full overflow-hidden"
                    style="max-width:1000px">
                    <div class="md:flex w-full">
                        <div class="hidden md:block w-1/2  px-10">
                            <x-svg.register />
                        </div>
                        <div class="w-full md:w-1/2 py-10 px-5 md:px-10">
                            <div class="text-center mb-10 justify-center">
                                <h1 class="font-bold text-3xl text-gray-900 ml-2">Registration</h1>
                                <p class="">Hello, make your registration and start organizing your <span class="text-blue-800">Tasks today</span></p>
                            </div>

                            <div>
                                <x-input-label for="name" :value="__('Name')" />

                                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                    :value="old('name')" required autofocus />

                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>

                            <!-- Email Address -->
                            <div class="mt-4">
                                <x-input-label for="email" :value="__('Email')" />

                                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                    :value="old('email')" required />

                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <!-- Password -->
                            <div class="mt-4">
                                <x-input-label for="password" :value="__('Password')" />

                                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password"
                                    required autocomplete="new-password" />

                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <!-- Confirm Password -->
                            <div class="mt-4">
                                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                                    name="password_confirmation" required />

                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>
                            <div class="flex mt-7 justify-center">
                                <div class="px-28 mb-5 ml-1">
                                    <x-button rounded primary label="Register" type="submit" class="w-32" />
                                </div>
                            </div>
                            <div class="flex items-center justify-center mt-4 ml-3">
                                <x-icon name="arrow-circle-left" info class="w-6 h-6 text-blue-500 mb-0.5"/>
                                <a class="text-sm text-blue-600 dark:text-gray-400 hover:text-ble-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                    href="{{ route('login') }}">
                                    {{ __('Already registered?') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
