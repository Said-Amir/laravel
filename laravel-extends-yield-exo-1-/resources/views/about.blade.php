@extends('layouts.app')

@section('content')
    @include('partials.nav')
    @include('partials.banner')
    <div class="card">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <img src="" alt="">
                </div>
                <div class="col-6">
                    <h2>About moderne school</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur vero ipsa ad recusandae ut vitae rerum repellendus fugit quos voluptate.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur vero ipsa ad recusandae ut vitae rerum repellendus fugit quos voluptate.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur vero ipsa ad recusandae ut vitae rerum repellendus fugit quos voluptate.</p>
                </div>
            </div>
        </div>
    </div>
    @include('partials.footer')
@endsection