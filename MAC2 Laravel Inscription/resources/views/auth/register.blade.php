<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="first name" :value="__('First Name')" />

                <x-input id="first name" class="block mt-1 w-full" type="text" first name="first name" :value="old('first name')" required />
            </div>

            <div>
                <x-label for="last name" :value="__('Last Name')" />

                <x-input id="last name" class="block mt-1 w-full" type="text" last name="last name" :value="old('last name')" required />
            </div>
            
            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="mt-4">
                <x-label for="address" :value="__('Address')" />

                <x-input id="address" class="block mt-1 w-full"
                                type="address"
                                name="address"
                                required autocomplete="new-address" />
            </div>

            <div class="mt-4">
                <x-label for="phone" :value="__('Phone')" />

                <x-input id="phone" class="block mt-1 w-full"
                                type="phone"
                                name="phone"
                                required autocomplete="new-phone" />
            </div>

            <div class="mt-4">
                <x-label for="postalCode" :value="__('Postal Code')" />

                <x-input id="postalCode" class="block mt-1 w-full"
                                type="postalCode"
                                name="postalCode"
                                required autocomplete="new-postalCode" />
            </div>

            <div class="mt-4">
                <x-label for="city" :value="__('City')" />

                <x-input id="city" class="block mt-1 w-full"
                                type="city"
                                name="city"
                                required autocomplete="new-city" />
            </div>

            <div class="mt-4">
                <x-label for="comment" :value="__('Comment')" />

                <x-input id="comment" class="block mt-1 w-full"
                                type="comment"
                                name="comment"
                                required autocomplete="new-comment" />
            </div>
        
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
