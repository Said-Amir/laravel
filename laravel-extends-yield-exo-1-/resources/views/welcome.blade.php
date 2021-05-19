@extends('layouts.app')
@section('content')
  @include('partials.nav')
  @include('partials.banner')
  <section class="my-5">
    <div class="bg-gris py-5 px-4 text-center rounded container p-2">
      <h2 class="purple">Hello CodingSchool</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, voluptatibus?</p>
      <hr>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, voluptatibus?</p>
      <a href="btn btn-primary"></a>
    </div>
  </section>
  @include('partials.footer')
@endsection