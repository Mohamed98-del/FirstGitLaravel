@extends('base')
@section('title', 'Ajout')
@section('content')

<form>
    <div class="container d-flex justify-content-center mt-5">
        <div class=" d-flex justify-content-center border border-danger" style="width: 30rem; height: 35rem">
            <div class="form-group mt-5" style="width: 15rem">
                <label for="">Nom:</label>
                <input type="text" name="" id="" class="form-control mb-4" placeholder="" aria-describedby="helpId">
                <label for="">Pr&eacute;nom:</label>
                <input type="text" name="" id="" class="form-control mb-4" placeholder=""
                    aria-describedby="helpId">
                    <label for="">Addresse Mail:</label>
                <input type="text" name="" id="" class="form-control mb-4" placeholder=""
                    aria-describedby="helpId">
                    <label for="">Num&eacute;ro:</label>
                <input type="text" name="" id="" class="form-control mb-4" placeholder=""
                    aria-describedby="helpId">
                <button type="button" class="btn btn-danger mb-3">Soumettre</button>
                <small id="helpId" class="text-muted mb-5">follow</small>
            </div>
        </div>
    </div>
</form>
@endsection
