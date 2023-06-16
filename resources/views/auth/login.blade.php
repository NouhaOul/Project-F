
<x-guest-layout>
    
    <x-authentication-card>
        <x-slot name="logo">
            {{-- <x-authentication-card-logo /> --}}
        </x-slot>


        @if (session('status'))
            <div class="">
                {{ session('status') }}
            </div>
        @endif
<div class="box">
    <div class="container">
        <form method="POST" action="{{ route('login') }}">
            @csrf
             <div class="top-header">
             <span class="p">Have an account ?</span>
             <header>Login</header>
            </div>
            <div class="input-field">
                {{-- <x-label for="email" value="{{ __('Email') }}" /> --}}
                <x-input id="email" class="" type="email" placeholder="Email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <i class="bx bx-user i"></i>
            </div>

            <div class="input-field">
                {{-- <x-label for="password" value="{{ __('Password') }}" /> --}}
                <x-input id="password" class="" placeholder="Password" type="password" name="password" required autocomplete="current-password" />
                <i class="bx bx-lock-alt i"></i>
            </div>
            <div class="input-field">
                <x-button class="submit" >
                    {{ __('Login') }}
                </x-button>
            </div>

            <div class="button">
               <div class="left">
                <label for="remember_me" class="">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="">{{ __('Remember me') }}</span>
                </label>
                </div>
                <div class="right">
                    @if (Route::has('password.request'))
                        <a  href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>
            </div>
            <div class="back"><i class='bx bx-arrow-back'> <a href="">Back</a></i></div>

        </form>

      </div>

</div>
<x-validation-errors class="" />

    </x-authentication-card>
</x-guest-layout>
