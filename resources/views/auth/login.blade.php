@extends('layouts.app')

@section('content')

<div class="login-container">
    <div class="min-h-screen flex items-center justify-center bg-gray-800 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
        <div>
            <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="Workflow">
            <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-200">
            Connectez-vous
            </h2>
            <div class="mt-5 text-center">
                <span class="text-gray-300">Nouveau chez snack ?</span>
                <a class="text-blue-600" href="{{ route('register') }}">Créer un compte</a>
            </div>
        </div>
        <form class="mt-8 space-y-6" action="{{ route('login') }}" method="POST">
            @csrf
            <div class="rounded-md shadow-sm -space-y-px">
                @if($errors->has('password') || $errors->has('email'))
                    <div>
                        <p class="bg-red-300 text-red-800  p-3 rounded-lg m-5 text-center">Identifiant ou mot de passe incorrect veuillez réessayer</p>
                    </div>
                @endif
            <div>
                <label for="email-address" class="sr-only">Email address</label>
                <input id="email-address" name="email" type="email" autocomplete="email" required class="appearance-none rounded-none relative block w-full px-3 py-4 border border-gray-500 placeholder-gray-600 rounded-t-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm" placeholder="Email address">
            </div>
            <div>
                <label for="password" class="sr-only">Password</label>
                <input id="password" name="password" type="password" autocomplete="current-password" required class="appearance-none rounded-none relative block w-full px-3 py-4 border border-gray-500 placeholder-gray-600 rounded-b-md focus:outline-none focus:ring-bleu-500 focus:border-blue-500 focus:z-10 sm:text-sm" placeholder="Password">
            </div>
            </div>
    
            <div class="flex items-center justify-center">            
            <div class="text-sm">
                <a href="#" class="font-medium text-blue-600 hover:text-blue-500">
                Mot de passe oublié ?
                </a>
            </div>
            </div>
    
            <div>
            <button type="submit" class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-green-500 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-800">
                {{-- <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                <!-- Heroicon name: solid/lock-closed -->
                <svg class="h-5 w-5 text-green-400 group-hover:text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                </svg> --}}
                </span>
                Connexion
            </button>
            </div>
        </form>
        </div>
    </div>
</div>

@endsection
