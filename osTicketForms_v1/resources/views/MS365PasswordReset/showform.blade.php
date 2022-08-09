@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Formularz resetowania hasła w Microsoft365') }}</div>

                <div class="card-body">
                </div>
                {!! form($form) !!}
            </div>
        </div>
    </div>
</div>
@endsection
