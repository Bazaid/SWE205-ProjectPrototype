


  @extends('templates.master')

  @section('main-banner')
      <!-- Main Banner Place Holder -->
  @stop

  @section('main-content')

  @if (Auth::user()->role)

  @include('dashboards/admin')

  @else
  @include('dashboards/dashboard')

  @endif



    @endsection
