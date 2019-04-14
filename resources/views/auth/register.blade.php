@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('/css/app.css') }}">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Welcome to We-Lib</div>
					<div class="card-body">
						<div class = "btn btn-success" href =""> Register as Admin </div>
						<div class = "btn btn-success" href =""> Register as Siswa </div>
						<div class = "btn btn-success" href =""> Register as Guest </div>
					</div>
            </div>
        </div>
    </div>
</div>
@endsection