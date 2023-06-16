@extends('layouts.layout')
@section('content')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

{{-- <link rel="stylesheet" href="{{ asset('css/style.css.map') }}">
<link rel="stylesheet" href="{{ asset('fonts/fonts/material-icon/css/material-design-iconic-font.min.css') }}"> --}}
<div class="box">
    <div class="container">
        <form method="POST" action="{{ route('register') }}">
            <header>Inscription</header>

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            
                
                    <div class="input-field">
                        <input id="name" type="text" name="name" class="input" value="{{ old('name') }}" placeholder="Name" required autofocus autocomplete="name">

                    </div>
                    <div class="input-field">
                        <input id="prenom" type="text" placeholder="Prenom" class="input" name="prenom" value="{{ old('prenom') }}" required autofocus autocomplete="prenom">
                    </div>
                    <div class="input-field">
                
                        <input id="tele" type="text" name="tele" class="input" placeholder="Telephone" value="{{ old('tele') }}" maxlength="10" required autofocus autocomplete="tele">
                    </div>
                    <div class="input-field">
                        <input id="adress" type="text" placeholder="Adress" class="input" name="adress" value="{{ old('adress') }}" required autofocus autocomplete="adress">
                    </div>
                    <div class="input-field">
                        <input id="email" type="email" placeholder="Email" class="input" name="email" value="{{ old('email') }}" required autocomplete="email">
                    </div>
                    <div class="input-field">
                        <input id="password" type="password" placeholder="Passwored" class="input" name="password" required autocomplete="new-password">
                    </div>
                    <div class="input-field">
                        <input id="password_confirmation" type="password" class="input" placeholder="Confirmer Password" name="password_confirmation" required autocomplete="new-password">
                    </div>
                                <!-- Start Radio Buttons -->
            
                <label for="role" class="form-label mt-3 text-light">Role:</label>
                <div>
                        <input type="radio" name="role" class="form-check-input mx-2" value="member" checked>
                        <span class="t">Member</span>
                        <input type="radio" name="role" class="form-check-input mx-2"  value="coach">
                        <span class="t">Coach</span>
                </div>
            <!-- End Radio Buttons -->
                <!-- Additional Input Fields for Coach -->
                <div id="coach-fields" style="display: none;">
                        <label for="" class="form-label d-block text-light">Image</label>
                        <input id="image" placeholder="Image" class="style-in  d-block" type="file" name="image" value="{{ old('image') }}">
                        <label for="" class="form-label d-block text-light">CV</label>
                        <input id="cv" placeholder="CV" type="file" class="style-in  d-block" name="cv" value="{{ old('cv') }}">
                 
                </div>
                <div class="input-field mt-2">
                    <button type="submit" class="submit">Register</button>

                </div>

                <div>
                <div class="right">
                    <a href="{{ route('login') }}">Already registered?</a>
                </div>
                <div class="back"><i class='bx bx-arrow-back'> <a href="">Back</a></i></div>
                </div>
                <!-- End Additional Input Fields for Coach -->
                  {{-- <div>
                <input type="checkbox" name="terms" id="terms" required>
                <label for="terms">
                    I agree to the <a target="_blank" href="{{ route('terms.show') }}">Terms of Service</a> and <a target="_blank" href="{{ route('policy.show') }}">Privacy Policy</a>
                </label>
            </div> --}}
            </div>
            </div>

        </form>
    </div>
</div>
   
       
                

       
    

<script src="{{ asset('js/regapp.js') }}"></script>
<script src="{{ asset('js/jquery.min.js') }}"></script>
@endsection