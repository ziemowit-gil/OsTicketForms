@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Formularz resetowania hasła w Microsoft365') }}</div>

                <div class="card-body">
                </div>
                {!!Form::open()!!}

                    <div class="form-group row">
                        <label for="privEmail" class="col-4 col-form-label">Prywatny adres e-mail</label>
                        <div class="col-8">
                            <input id="privEmail" name="privEmail" type="text" required="required" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ms355Login" class="col-4 col-form-label">Login do konta</label>
                        <div class="col-8">
                            <input id="ms355Login" name="ms355Login" placeholder="@FEER.ORG.PL " type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pesel" class="col-4 col-form-label">PESEL</label>
                        <div class="col-8">
                            <input id="pesel" name="pesel" type="text" required="required" class="form-control">
                        </div>
                    </div>


                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-primary">Wyślji zgłoszenie</button>
                        </div>
                    </div>


            </div>
        </div>
    </div>
</div>
@endsection
