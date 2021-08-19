@extends('frontend.templates.default')

@section('content')
    <div class="container">
        <h3>Register</h3>
        <form action="{{ route('register') }}" class="col s12" method="post">
            @csrf
            <div class="row">
                {{--name--}}
                <div class="input-field col s12">
                    <i class="material-icons prefix">person</i>
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="validate @error('name') invalid @enderror"
                           value="{{ old('name') }}">
                    @error('name')
                    <span class="helper-text" data-error="{{ $message }}"></span>
                    @enderror
                </div>

                <div class="input-field col s12">
                    <i class="material-icons prefix">email</i>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="validate @error('email') invalid @enderror"
                           value="{{ old('email') }}">
                    @error('email')
                    <span class="helper-text" data-error="{{ $message }}"></span>
                    @enderror
                </div>

                <div class="input-field col s12">
                    <i class="material-icons prefix">lock</i>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="@error('password') invalid @enderror"
                           value="{{ old('password') }}">
                    @error('password')
                    <span class="helper-text" data-error="{{ $message }}"></span>
                    @enderror
                </div>

                <div class="input-field col s12">
                    <i class="material-icons prefix">lock</i>
                    <label for="password_confirmation">Password Confirmation</label>
                    <input type="password" name="password_confirmation" id="password_confirmation"
                           class="@error('password_confirmation') invalid @enderror"
                           value="{{ old('password_confirmation') }}">
                    @error('password_confirmation')
                    <span class="helper-text" data-error="{{ $message }}"></span>
                    @enderror
                </div>
                <div class="input-field right">
                    <button type="submit" class="waves-effect waves-light btn red accent-1">REGISTER</button>
                </div>
            </div>
        </form>
    </div>

@endsection
