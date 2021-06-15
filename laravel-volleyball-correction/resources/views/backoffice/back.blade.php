@extends('layouts.app')

@section('content')
    <div class="container d-flex flex-column align-items-center mt-4">
        <h1 class="my-5 myFont" style="font-size: 70px">Welcome</h1>
        <img src={{ asset("img/welcomeBack.svg") }} alt="svg">
    </div>
@endsection