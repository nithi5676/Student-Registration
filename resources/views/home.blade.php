@extends('layouts.app')

@section('content')
<!--<style> body {
   height: 500px;
   width: 100%;img
   background-image: url("https://img.freepik.com/premium-photo/doctor-s-stethoscope-with-blue-background_23-2147652363.jpg?w=2000.png");
   background-repeat: no-repeat, no-repeat;
   background-position: right, left; 
   background-size: 1500px;
}
</style>-->
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection
