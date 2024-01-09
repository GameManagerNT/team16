@extends('layouts.app')

@section('content')
<style>
    body {
    height: 100%;
    background-image: url('images/background1.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
}

</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('訊息') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('您已經登入!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
