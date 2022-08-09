@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Formularz resetowania hasła w Microsoft365 - potwierdzenie')  }}</div>

                <div class="card-body">
                    <div class="alert alert-success" role="alert">
                        <h4 class="alert-heading"> Wysłano zgłoszenie </h4>
                        <p> Zgłoszenie zostało zarejestrowane w systemie. Na prywatny adres e-mail wysłaliśmy sczegółwe informacje.</p>
                        <p class="mb-0"> Jeżeli podałeś prawidłowe dane Twoje hasło zostanie niebawem zresetowane, a Ty otrzymasz je SMSem. </p>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection
