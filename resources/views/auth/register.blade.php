@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name"> <br>
        <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email"> <br>
        <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password"> <br>
        <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Password Confirmation"> <br>
        <button type="submit" class="btn btn-primary">
            {{ __('Register') }}
        </button>
    </form>
</div>
@endsection
