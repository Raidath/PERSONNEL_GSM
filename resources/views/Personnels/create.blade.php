@extends('layouts.app')

@section('content')
<div class="container">
    <link href="{{ asset('css/create.css') }}" rel="stylesheet">
    <div class="justify-content-center">
        <div class="card">
            <div class="card-header">Ajouter un nouveau Personnel</div>

            <div class="card-body">
                <hr>
                <h1>Les champs avec <span class="required">*</span> sont obligatoires :</h1>

                <form action="{{route('Personnels.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nom">nom: <span class="required">*</span></label>
                        <input type="text" class="form-control" id="nom" name="nom" required>
                    </div>
                    <div class="form-group">
                        <label for=" numero">numero: <span class="required">*</span></label>
                        <input type="text" class="form-control" id="numero" name="numero" required>
                    </div>
                    <div class="form-group">
                        <label for=" domaine">domaine: <span class="required">*</span></label>
                        <input type="text" class="form-control" id="domaine" name="domaine" required>
                    </div>
                    <div class="form-group">
                        <label for="type">Groupe sanguin: <span class="required">*</span></label>
                        <input type="text" class="form-control" id="type" name="type" required>
                    </div>
                    <div class="form-group">
                        <label for="groupe_sanguin">Groupe sanguin: <span class="required">*</span></label>
                        <input type="text" class="form-control" id="groupe_sanguin" name="groupe_sanguin" required>
                    </div>
                    <div class="form-group">
                        <label for="maladie">Maladie: <span class="required">*</span></label>
                        <input type="text" class="form-control" id="maladie" name="maladie" required>
                    </div>
                    <div class="form-group">
                        <label for="localisation">Localisation: <span class="required">*</span></label>
                        <input type="text" class="form-control" id="localisation" name="localisation" required>
                    </div>

                    <div class="form-group">
                        <label for=" nom_pere">Nom pere: <span class="required">*</span></label>
                        <input type="text" class="form-control" id="nom_pere" name="nom_pere" required>
                    </div>
                     <div class="form-group">
                        <label for=" nom_mere">Nom Mere: <span class="required">*</span></label>
                        <input type="text" class="form-control" id="nom_mere" name="nom_mere" required>
                    </div>
                    <div class="form-group">
                        <label for="numero_pere">numero Pere: <span class="required">*</span></label>
                        <input type="text" class="form-control" id="numero_pere" name="numero_pere" required>
                    </div>
                    <div class="form-group">
                        <label for="numero_mere">Numero_Mere: <span class="required">*</span></label>
                        <input type="text" class="form-control" id="numero_mere" name="numero_mere" required>
                    </div>
                    <div class="form-group">
                        <label for="numero_urgence">Numero_urgence: <span class="required">*</span></label>
                        <input type="text" class="form-control" id="numero_urgence" name="numero_urgence" required>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Ajouter un Personnel</button>
                    <a href="/home" class="btn btn-danger">Revenir a la liste des Personnels</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

