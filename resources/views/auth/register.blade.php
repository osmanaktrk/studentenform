<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/register.css')}}">
    <title>EhB-Studenten</title>
</head>
<body>
    <div id="main-sign">
        <img class="ehb-logo" src="{{asset('img/ehb_logos/horizontaal_EhB-logo_(transparante_achtergrond).png')}}" alt="ehb-logo">
        
        <h2 id="main-text">Sign Up Now</h2>
        
        <x-guest-layout>
            <form method="POST" action="{{ route('register') }}">
                @csrf
        
                <!-- First Name -->
                <div class="mt-4">
                    <x-input-label for="firstname" :value="__('First Name')" />
                    <x-text-input id="firstname" class="block mt-1 w-full" type="text" name="firstname" :value="old('firstname')" required autofocus autocomplete="firstname" />
                    <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
                </div>
        
                <!-- Last Name -->
                <div class="mt-4">
                    <x-input-label for="lastname" :value="__('Last Name')" />
                    <x-text-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" :value="old('lastname')" required autofocus autocomplete="lastname" />
                    <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
                </div>
        
                <!-- User Name -->
                <div class="mt-4">
                    <x-input-label for="username" :value="__('User Name')" />
                    <x-text-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('username')" class="mt-2" />
                </div>
        
                <!-- Email Address -->
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="email" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
        
                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />
        
                    <x-text-input id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    required autocomplete="new-password" />
        
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
        
                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
        
                    <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation" required autocomplete="new-password" />
        
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>
        
                <div class="flex items-center justify-center mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>
        
                    <x-primary-button class="ms-4">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>
            </form>
        </x-guest-layout>



        {{-- <form action="" method="">
            <input type="text" name="firstname" id="firstname" placeholder="First Name" required>
            <input type="text" name="lastname" id="lastname" placeholder="Last Name" required>
            <br>
            <input type="text" name="username" id="username" placeholder="User Name">
            <br>
            <input type="email" name="e-mail" id="e-mail" placeholder="E-mail adress" required>
            <br>
            <input type="password" name="password" id="password" placeholder="Enter Password" required>
            <br>
            <input type="password" name="password-check" id="password-check" placeholder="Confirm Password" required>
            <br>
            <br>
            <button type="submit">SIGN UP</button>
        </form> --}}
    </div>
    
</body>
</html>







