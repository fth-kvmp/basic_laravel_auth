@extends('layouts.app')

@section('content')
<div>
    @if (session('status'))
            {{ session('status') }}
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <input id="email" type="email" class="@error('email')  @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

        @error('email')
            <strong>{{ $message }}</strong>
        @enderror
        <button type="submit" class="btn btn-primary">
            {{ __('Send Password Reset Link') }}
        </button>
    </form>
</div>
@endsection
