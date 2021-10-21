<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-validation-errors />
                    <x-success-message />

                    <form method="POST" action="{{ route('profile.update') }}">
                        @method('PUT')
                        @csrf
                        <div class="grid grid-cols-2 gap-6">
                            <div class="grid grid-rows-2 gap-6">
                                <div>
                                    <x-label for="first name" :value="__('First Name')" />
                                    <x-input id="first name" class="block mt-1 w-full" type="text" first name="first name" value="{{ auth()->user()->first_name }}" required />
                                </div>
                                <div>
                                    <x-label for="last name" :value="__('Last Name')" />
                                    <x-input id="last name" class="block mt-1 w-full" type="text" last name="last name" value="{{ auth()->user()->last_name }}" required />
                                </div>
                                <div>
                                    <x-label for="email" :value="__('Email')" />
                                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ auth()->user()->email }}" autofocus />
                                </div>
                                <div>
                                    <x-label for="phone" :value="__('Phone')" />
                                    <x-input id="phone" class="block mt-1 w-full" type="phone" name="phone" value="{{ auth()->user()->phone }}" autofocus />
                                </div>
                                <div>
                                    <x-label for="comment" :value="__('Comment')" />
                                    <x-input id="comment" class="block mt-1 w-full" type="comment" name="comment" value="{{ auth()->user()->comment }}" autofocus />
                                </div>
                            </div>
                            <div class="grid grid-rows-2 gap-6">
                                <div>
                                    <x-label for="new_password" :value="__('New password')" />
                                    <x-input id="new_password" class="block mt-1 w-full"
                                             type="password"
                                             name="password"
                                             autocomplete="new-password" />
                                </div>
                                <div>
                                    <x-label for="confirm_password" :value="__('Confirm password')" />
                                    <x-input id="confirm_password" class="block mt-1 w-full"
                                             type="password"
                                             name="password_confirmation"
                                             autocomplete="confirm-password" />
                                </div>
                                <div>
                                    <x-label for="address" :value="__('Address')" />
                                    <x-input id="address" class="block mt-1 w-full" type="address" name="address" value="{{ auth()->user()->address }}" autofocus />
                                </div>
                                <div>
                                    <x-label for="postalCode" :value="__('Postal Code')" />
                                    <x-input id="postalCode" class="block mt-1 w-full" type="postalCode" name="postalCode" value="{{ auth()->user()->postalCode }}" autofocus />
                                </div>
                                <div>
                                    <x-label for="city" :value="__('City')" />
                                    <x-input id="city" class="block mt-1 w-full" type="city" name="city" value="{{ auth()->user()->city }}" autofocus />
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-3">
                                {{ __('Update') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
