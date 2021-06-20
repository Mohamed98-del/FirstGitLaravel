@extends('base')
@section('title', 'Ajout')
@section('content')

<form action="/record" method="post" id="myform">
    @csrf
    <div class="container d-flex justify-content-center mt-5">
        <div class=" d-flex justify-content-center border border-danger" style="width: 30rem; height: 35rem">
            <div class="form-group mt-5" style="width: 15rem">

                <label class="font-weight-bold font-italic">Nom: <i class="fa fa-user" aria-hidden="true"></i></label>
                <input type="text" name="nom" id="nomId" class="form-control">
                @error('nom')
                <p style="font-size: 10px" class="text-danger">{{$errors->first('nom')}}</p>
                @enderror
                <span class="mb-4 d-block"></span>
                <label class="font-weight-bold font-italic">Pr&eacute;nom: <i class="fa fa-user"
                        aria-hidden="true"></i></label>
                <input type="text" name="prenom" id="prenomId" class="form-control">
                @error('prenom')
                <p style="font-size: 10px" class="text-danger">{{$errors->first('prenom')}}</p>
                @enderror
                <span class="mb-4 d-block"></span>

                <label class="font-weight-bold font-italic">Addresse Mail: <i class="fa fa-envelope"
                        aria-hidden="true"></i></label>
                <input type="email" name="email" id="emailId" class="form-control">
                @error('email')
                <p style="font-size: 10px" class="text-danger">{{$errors->first('email')}}</p>
                @enderror
                <span class="mb-4 d-block"></span>

                <label class="font-weight-bold font-italic">Num&eacute;ro de t&eacute;l&eacute;phone: <i
                        class="fa fa-phone" aria-hidden="true"></i></label>
                <input type="text" name="num" id="numId" class="form-control">
                @error('num')
                <p style="font-size: 10px" class="text-danger">
                    {{$replace= Str::replaceFirst('num', 'numéro', $errors->first('num'))}}</p>
                @enderror
                <span class="mb-4 d-block"></span>
                <button type="submit" class="btn btn-success" id="bouton"><i class="fa fa-check"
                        aria-hidden="true"></i></button>

            </div>
        </div>
    </div>
</form>
@endsection
