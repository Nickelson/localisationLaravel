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

                   <form method="POST" action="/">
                        @csrf

                        <div class="form-group row">
                            <label for="adresse" class="col-sm-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="adresse" type="text" class="form-control{{ $errors->has('adresse') ? ' is-invalid' : '' }}" name="adresse" value="{{ old('adresse') }}" required autofocus placeholder="adresse,ville,pays">

                                @if ($errors->has('adressse'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('adressse') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Ajouter') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="col-sm-4 col-form-label col-md-left offset-md-4">
                        <a href="afficher">
                           Rechercher Adresse
                        </a>
                    </div>
                     
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
