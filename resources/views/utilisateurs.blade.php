@extends('base')

@section('main')
        <div id="app">
            <heading></heading>
            <utilisateurs :utilisateurs="{{ $utilisateurs }}"></utilisateurs>
            <bottom></bottom>
        </div>
@endsection