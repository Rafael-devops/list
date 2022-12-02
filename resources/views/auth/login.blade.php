<x-guest-layout>
    <x-auth-card>
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="min-w-screen min-h-screen flex items-center justify-center px-5 py-5">
                <div class="bg-gray-100 text-gray-500 rounded-3xl shadow-xl w-full overflow-hidden"
                    style="max-width:1000px">
                    <div class="md:flex w-full">
                        <div class="hidden md:block w-1/2  px-10">
                            <x-svg.task />
                        </div>
                        <div class="w-full md:w-1/2 py-10 px-5 md:px-10">
                            <div class="text-center mb-10 justify-center">
                                <h1 class="font-bold text-3xl text-gray-900 ml-2">Login</h1>
                                <p class="">Enter your information and access <span class="text-blue-800">Todo
                                        List</span></p>
                            </div>

                            <div>
                                <div>
                                    <x-input-label for="email" :value="__('Email')" />

                                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                        :value="old('email')" required autofocus />

                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>

                                <!-- Password -->
                                <div class="mt-4">
                                    <x-input-label for="password" :value="__('Password')" />

                                    <x-text-input id="password" class="block mt-1 w-full" type="password"
                                        name="password" required autocomplete="current-password" />

                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>

                                <!-- Remember Me -->
                                <div class="flex block mt-6 justify-between">
                                    <label for="remember_me" class="inline-flex items-center">
                                        <input id="remember_me" type="checkbox"
                                            class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                                            name="remember">
                                        <span
                                            class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                                    </label>
                                    <x-button rounded primary label="Login" type="submit" class="w-32" />
                                </div>
                            </div>
                            <div class="flex justify-center ml-1 mt-12">
                                @if (Route::has('password.request'))
                                    <p class="text-sm ml-1 text-gray-600">Forgot your password ?</p>
                                    <a class="text-sm text-blue-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800 ml-1"
                                        href="{{ route('password.request') }}">
                                        {{ __('Click here') }}
                                    </a>
                                @endif
                            </div>
                            <div class="flex justify-center mt-3 ml-13">
                                <a class="text-sm text-blue-600 dark:text-gray-400 hover:text-purple-800 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800 ml-1"
                                    href="{{ route('register') }}"><span class="text-gray-600">Still not registered ?</span>
                                    {{ __('Register by clicking here') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
