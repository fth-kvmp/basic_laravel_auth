@extends('layouts.app')

@section('content')
<div class="login-container">
    <form action="{{ route('login') }}" method="post">
        @csrf
        <input type="email" name="email" id="email" placeholder="E-mail adress">
        <input type="password" name="password" id="password" placeholder="Password">
        <button type="submit" class="btn btn-primary">
            {{ __('Login') }}
        </button>
    </form>
</div>

@endsection
