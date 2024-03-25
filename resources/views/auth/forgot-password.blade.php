<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Enter Your Phone Number to Reset Password') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            {{--<x-input-label for="email" :value="__('Email')" /> --}}
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus placeholder="Phone Number" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
            <a href="{{ route('login') }}"><i class="fa-solid fa-arrow-left">Y</i></a> 

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Reset Password') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
