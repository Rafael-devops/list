<x-guest-layout>
    <x-auth-card>
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="min-w-screen min-h-screen flex items-center justify-center px-5 py-5">
                <div class="bg-gray-100 text-gray-500 rounded-3xl shadow-xl w-full overflow-hidden"
                    style="max-width:1000px">
                    <a class="absolute text-sm text-black dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800 ml-2 mt-3"
                    href="{{ route('login') }}">
                    <x-icon name="arrow-circle-left" class="w-8 h-8" solid />
                    </a>
                    <div class="md:flex w-full">
                        <div class="hidden md:block w-1/2  px-10">
                            <x-svg.password />
                        </div>
                        <div class="w-full md:w-1/2 py-10 px-5 md:px-10">
                            <div class="text-center mb-10 justify-center">
                                <h1 class="font-bold text-3xl text-gray-900 ml-2">Forgot password</h1>
                                <p class="">Need to regain acess to your account? <span class="text-blue-800">We can help you with that</span></p>
                            </div>

                            <div>
                                <x-input-label for="email" :value="__('Email')" />

                                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                    :value="old('email')" required autofocus />

                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <div class="flex items-center justify-end mt-8">
                                <x-button rounded primary label="Email Password Reset Link" type="submit" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
