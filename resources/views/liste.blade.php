@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <a href="{{ route('ajout')}}">Créer un utilisateur</a> 
                <a href="">Attribuer un utilisateur</a> 
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                   
                   

                    @endif

               
                </div>
            </div>
        </div>
    </div>
</div>

<article class="container mt-5">
<ul class="list-group list-group-flush">
    @foreach ($users as $user)
  <li class="list-group-item">{{ $user->nom }} {{ $user->prenom }}</li>


@endforeach
    </ul>
</article>
@endsection