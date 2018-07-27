@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h1>Seja bem vindo</h1></div>
                    <div class="panel-body">
                        <h2>{{ Auth::user()->name }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection