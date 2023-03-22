@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
@auth
    
@endauth
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  

@can('isAdmin')
<div class="alert alert-primary" role="alert">
    Vous etes Administrateur 
</div>    
@else
<div class="alert alert-danger" role="alert">
    Vous etes Utilisateur
</div> 
@endcan
                    {{ __('You are logged in!') }}
                </div>

                <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="btn btn-success">Se déconnecter</button>
                </form>
            </div>
        </div>
<div class="card-deck">
    <div class="card">
        <img class="card-img-top" src="holder.js/100x180/" alt="">
        <div class="card-body">
            <h4 class="card-title"><a href="/clients">Liste des clients</a> </h4>
            <p class="card-text"></p>
        </div>
    </div>
    <div class="card">
        <img class="card-img-top" src="holder.js/100x180/" alt="">
        <div class="card-body">
            <h4 class="card-title"> <a href="/produits"> Liste des produits</a></h4>
            <p class="card-text"></p>
        </div>
    </div>
</div>
    </div>
</div>
@endsection
