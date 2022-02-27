<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <svg class="w-10 h-10 lg:w-auto" viewBox="0 0 30 30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(-48.000000, -29.000000)">
                        <g transform="translate(48.000000, 24.000000)" fill="#000" fill-rule="nonzero">
                            <g transform="translate(0.000000, 5.000000)">
                                <path d="M27.6,16.2 L24,16.2 L24,24 L21.6,24 L21.6,16.2 L8.4,16.2 L8.4,24 L6,24 L6,6 L8.4,6 L8.4,13.8 L21.6,13.8 L21.6,6 L24,6 L24,13.8 L27.6,13.8 L27.6,2.4 L2.4,2.4 L2.4,27.6 L27.6,27.6 L27.6,16.2 Z M1.2,0 L30,0 L30,1.2 L30,28.8 L30,30 L0,30 L0,28.8 L0,0 L1.2,0 Z"></path>
                            </g>
                        </g>
                    </g>
                </g>
            </svg>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('loginApi') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />

            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>



            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-3" style="background-color: #818cf8">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
