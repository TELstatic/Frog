@extends('layouts.app')

@section('content')
    <div id="app">
        <example-component :user="{{\Illuminate\Support\Facades\Auth::user()}}"></example-component>
    </div>
@endsection
