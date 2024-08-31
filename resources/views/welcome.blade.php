@extends('layouts.app')

@section('título', "página principal")

@section('contenido')
  <div
      class="hero min-h-screen"
      style="background-image: url(https://img.daisyui.com/images/stock/photo-1507358522600-9f71e620c44e.webp);">
      <div class="hero-overlay bg-opacity-60"></div>
      <div class="hero-content text-neutral-content text-center">
        <div class="max-w-md">
          <h1 class="mb-5 text-5xl font-bold">Bienvenidos a Farmacia local</h1>
          <p class="mb-5">
           Donde encontraras tus productos de primera necesidad!
          </p>
          <button class="btn btn-primary">Get Started</button>
        </div>
      </div>
  </div>

@endsection