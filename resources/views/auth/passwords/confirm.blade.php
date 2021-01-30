@extends('layouts.app')

@section('content')
<div>
    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf
                <input id="password" type="password" class="@error('password') @enderror" name="password" required autocomplete="current-password" placeholder="Password to confirm">

                @error('password')
                    <strong>{{ $message }}</strong>
                @enderror
                <button type="submit" class="btn btn-primary">
                    {{ __('Confirm Password') }}
                </button>

                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
    </form>
</div>
@endsection
