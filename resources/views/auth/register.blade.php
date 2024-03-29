<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
    <div>
        <h5 class="text-lg text-center text-red-600 font-bold">Create Your Account</h5>
        <div class="grid md:grid-cols-2 gap-1">
            <div class="relative z-0 w-full mb-5 group">
                <x-input-label for="f_name" :value="__('')" class="mt-4" />
                <x-text-input class="" id="f_name" class=" mt-4 w-41" type="text" name="f_name" :value="old('f_name')" required autofocus autocomplete="f_name" placeholder="First Name" />
                <x-input-error :messages="$errors->get('f_name')" class="mt-2" />
                
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <x-input-label for="l_name" :value="__('')" class="mt-4" />
                <x-text-input  id="l_name" class=" mt-4 w-41" type="text" name="l_name" :value="old('l_name')" required autofocus autocomplete="l_name" placeholder="Last Name" />
                <x-input-error :messages="$errors->get('l_name')" class="mt-2" />
            </div>
          </div>

    </div>
         <!-- Phone Number -->
    <div >
        <x-input-label for="phone" :value="__('')" />
        <x-text-input id="phone_number" class="block mt-1 w-full" type="tel" name="phone_number" :value="old('phone_number')" required autocomplete="phone_number" placeholder="Phone Number" />
        <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
    </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
           <x-input-label for="password" :value="__('')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" placeholder="Password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('')" /> 

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" placeholder="Re-enter Password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Log in') }}
            </a>
           
            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
