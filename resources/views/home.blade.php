@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 offset-4">
                <h1>Hello world!</h1>
            </div>

        </div>
    </div>


    <div id="app">

        <example-component :user="{{\Illuminate\Support\Facades\Auth::user()}}"></example-component>
    </div>
@endsection
