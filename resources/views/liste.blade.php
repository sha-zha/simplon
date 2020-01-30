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
@foreach ($users as $user)
<ul class="list-group list-group-flush">
  
  <li class="list-group-item">Nom :{{ $user->nom }}, Prénom: {{ $user->prenom }}, Ordinateur occupé :  {{$user->label}}, le :{{$user->jour}} à:{{$user->heure}}</li>
  <li>

      <form method="get" action="{{route('delete',$user->id)}}" class="delete_form">
      {{csrf_field()}}
      <input type="hidden" name="_method" value="DELETE" />
      <button type="submit" class="btn btn-danger">Annuler</button>
     </form>
  </li>

    </ul>
    @endforeach
</article>

<script>
$(document).ready(function(){
 $('.delete_form').on('submit', function(){
  if(confirm("Vous êtes sûr de vouloir annuler ce crénneau ?"))
  {
   return true;
  }
  else
  {
   return false;
  }
 });
});
</script>
@endsection