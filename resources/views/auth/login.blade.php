<x-guest-layout>
    <x-jet-authentication-card>
        <x-jet-validation-errors class="mb-4" />
        <div class="my-6">
            <div class="flex flex-start justify-center">
                <img class="h-10 w-10 mr-2" src="{{ asset('/assets/illustrations/hello.png') }}" alt="">
                <p class="text-2xl font-bold text-gray-800 ">
                    Welcome back to Intelliflex!
                </p>
            </div>
        </div>
        <div class="my-4 text-gray-800">
            <p class="font-bold text-xl">Login</p>
            <p class="mt-2 text-sm"> Sign in your account to enjoy new learning experience.
            </p>
        </div>
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />
            </div>

            <div class="flex items-center justify-between mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
                @if (Route::has('password.request'))
                    <a class="text-sm text-blue-600 font-medium hover:text-gray-900 text-right"
                        href="{{ route('password.request') }}">
                        {{ __('I forgot my password.') }}
                    </a>
                @endif
            </div>

            <div class="flex items-center justify-between mt-4">
                <div class="text-sm text-gray-800 w-42">
                    <label>Need an account? </label>
                    <a class="text-blue-600 font-medium hover:text-gray-900" href="{{ route('register') }}">
                        {{ __('Register') }}
                    </a>
                </div>
                <x-jet-button>
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
