@extends('layouts.test')

@section('headerBlock')

@stop

@section('content')
<!-- /file/{file}/ -->
<div class="container">
  
  <h1>Test page</h1>
  <img style="border:1px solid purple;" src="{{ url('/file/western-europe+Milanosesto+Milanosesto_06.jpg/185/135') }}" alt="Test" />
</div>
@stop