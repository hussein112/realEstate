<x-user-layout>
    <x-slot name="header">
        <x-half-header></x-half-header>
    </x-slot>
    <x-slot name="main">
        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        {{--    <x-auth-session-status class="mb-4" :status="session('status')" />--}}

        @if($errors->any())
            @foreach($errors->all() as $error)
                {{ $error }}
            @endforeach
        @endif
        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email">
                {{--            <x-input-label for="email" :value="__('Email')" />--}}
                {{--            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />--}}
                {{--            <x-input-error :messages="$errors->get('email')" class="mt-2" />--}}
            </div>

            <div class="flex items-center justify-end mt-4">
                <button type="submit" class="btn btn-primary">Email Password Reset Link</button>
                {{--            <x-primary-button>--}}
                {{--                {{ __('Email Password Reset Link') }}--}}
                {{--            </x-primary-button>--}}
            </div>
        </form>
    </x-slot>
</x-user-layout>
