@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <a href="{{ route('ajout')}}">Créer un utilisateur</a> 
                <a href="{{ route('liste')}}">Voir la liste des utilisateurs</a> 
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


<article class="container mt-5 ">
    <div class="row justify-content-center">
        <div class="col-md-8  card">
            <form method="Post" action="{{route('attribuers')}}" class="form-group">
                @csrf
                <div class="col-md-6">
                   <label class="control-label">Sélectionner un utilisateur:</label>
                <select name="id_user">
                    <option>Sélectionner un utilisateur</option>
                    @foreach ($users as $u  )
                <option value="{{$u->id}}">{{$u->prenom}}  {{$u->nom}}</option>
                    @endforeach
                </select>

                </div> 

                 <div class="col-md-6">
                   <label>Sélectionner un ordinateur:</label>
                    <select name="id_pc">
                    <option>Sélectionner un utilisateur</option>
                    @foreach ($pc as $pcs  )
                  <option value="{{$pcs->id}}">{{$pcs->label}}</option>
                    @endforeach
                    </select>
                </div> 

                 <div class="col-md-6">
                     <label>Saisir un jour:</label>
                     <input type="date" name="jour">
                </div>
                 <div class="col-md-6">
                     <label>Saisir un jour:</label>
                     <input type="time" name="heure">
                </div>
                <input type="submit" name="submit" value="Attribuer" class="btn btn-primary">
                

            
        </form> 
        </div>
       
    </div>

</articcle>
@endsection