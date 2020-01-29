@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

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

<article class="container ">
    <div class="row">
        <div class="col-md-12 card">
            <form method="Post" action="{{route('ajouts')}}" class="form-group">
                @csrf
                <div class="col-md-6">
                   <label class="control-label">Nom:</label>
                <input class="form-group" type="text" name="nom"> 

                </div> 

                 <div class="col-md-6">
                   <label>Prénom:</label>
                <input class="form-group" type="text" name="prenom"> 
                </div> 

                <input type="submit" name="submit" value="enregistrer" class="btn btn-primary">
                

            
        </form> 
        </div>
       
    </div>

</articcle>

@endsection


