@extends('layouts.app')

@section('content')
<div class="container">
    <div class="register-container">
        <div class="min-h-screen flex items-center justify-center bg-gray-800 py-12 px-4 sm:px-6 lg:px-8">
            <div class="max-w-md w-full space-y-8">
            <div>
                <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="Workflow">
                <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-200">
                Inscrivez-vous
                </h2>
                </p>
            </div>
            <form class="mt-8 space-y-6" action="{{ route('register') }}" method="POST">
                @csrf
                <div class="rounded-md shadow-sm -space-y-px">
                    {{-- @if($errors->has('password') || $errors->has('email'))
                        <div>
                            <p class="bg-red-300 text-red-800  p-3 rounded-lg m-5 text-center">Identifiant ou mot de passe incorrect veuillez réessayer</p>
                        </div>
                    @endif 
                        Display error messages if any for now is blank
                    --}}
                <div>
                    <label for="name" class="sr-only">Nom</label>
                    <input id="name" name="name" type="name" autocomplete="name" required class="appearance-none rounded-none relative block w-full px-3 py-4 border  placeholder-gray-600 rounded-t-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm @error('name') border-red-500 @enderror" placeholder="Nom">
                </div>
                <div>
                    <label for="email-address" class="sr-only">Email address</label>
                    <input id="email-address" name="email" type="email" autocomplete="email" required class="appearance-none rounded-none relative block w-full px-3 py-4 border placeholder-gray-600 focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm @error('email') border-red-500 @enderror" placeholder="Adresse E-mail">
                </div>
                <div>
                    <label for="password" class="sr-only">Mot de passe</label>
                    <input id="password" name="password" type="password" autocomplete="new-password" required class="appearance-none rounded-none relative block w-full px-3 py-4 border placeholder-gray-600 focus:outline-none focus:ring-bleu-500 focus:border-blue-500 focus:z-10 sm:text-sm @error('passord') border-red-500 @enderror" placeholder="Mot de passe">
                </div>
                <div>
                    <label for="password-confirm" class="sr-only">Confirmation mot de passe</label>
                    <input id="password-confirm" name="password_confirmation" type="password" autocomplete="new-password" required class="appearance-none rounded-none relative block w-full px-3 py-4 border placeholder-gray-600 rounded-b-md focus:outline-none focus:ring-bleu-500 focus:border-blue-500 focus:z-10 sm:text-sm @error('password_confirmation') border-red-500 @enderror" placeholder="Confirmation mot de passe">
                </div>
                </div>
        
                <div>
                <button type="submit" class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-green-500 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-800">
                    </span>
                    S'inscrire
                </button>
                </div>
            </form>
            <div class="text-gray-300">
                By creating an account, you agree to the Terms of Service. For more information about snack's privacy practices, see the snack Privacy Statement. We'll occasionally send you account-related emails.
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
