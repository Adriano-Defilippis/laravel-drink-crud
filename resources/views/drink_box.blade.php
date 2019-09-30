@extends('layout.layoutCube')

  @section('content')
    <div class="box-wrapper">

      @foreach ($values as $value)

        <div class="box bg_{{ $color }}">
          <p>{{ $value-> nome }}</p>
          <p>{{ $value-> marca }}</p>
          <p>{{ $value-> prezzo }}</p>
          <p>{{ $value-> data_scadenza }}</p>
          <p>{{ $value-> category_prod }}</p>
        </div>

      @endforeach

    </div>

    <div class="box-wrapper">

      <div class="box">
        <p>Prezzo minimo:</p>
        <p> {{ $min }} €</p>
      </div>
      <div class="box">
        <p>Prezzo massimo:</p>
        <p> {{ $max }} €</p>
      </div>
      <div class="box">
        <p>Media dei prezzi</p>
        <p> {{ $avg }} €</p>
      </div>

    </div>


  @endsection
