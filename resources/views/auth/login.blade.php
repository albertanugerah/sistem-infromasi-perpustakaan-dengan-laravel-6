@extends('frontend.templates.default')

@section('content')
    <div class="container">
        <h3>Login</h3>
        <form action="{{ route('login') }}" class="col s12" method="post">
            @csrf
            <div class="row">
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

                <div class="input-field right">
                    <button type="submit" class="waves-effect waves-light btn red accent-1">Login</button>
                </div>
            </div>
        </form>
    </div>

@endsection
