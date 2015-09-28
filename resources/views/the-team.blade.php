@extends('layouts.default')

@section('headerBlock')
<div class="page-header">
  <div class="container">
    <h1 class="regular-font">Bizzi & Partners Developmentis led by an executive team of professionals<br />
      with deep experience in real estate development.<br />
      The firm manages and is an equity investor in the projects it retains in<br />
      its own portfolio. The team’s decades-long familiarity with established<br />
      and emerging markets across Europe and The Americas informs<br />
      the firm’s broad strategic direction as well as its specific investment targets.
    </h1>
  </div>
</div>
@stop

@section('content')
<div class="container">
  <section>
    <div class="list">

      <div class="item">
        <p>Chief executive officer</p>
        <h5><a href="{{url('the-team-davide-bizzi')}}">Davide Bizzi</a></h5>
      </div>

      <div class="item">
        <p>managing principal</p>
        <h5>steven della salla</h5>
      </div>

      <div class="item">
        <h5>Mario Tornaghi</h5>
      </div>

      <div class="item">
        <p>EXECUTIVE VICE PRESIDENT, CONCEPT DEVELOPMENT & STRATEGIC MARKETING</p>
        <h5><a href="{{url('the-team-giuseppe-rossi')}}">Giuseppe Rossi</a></h5>
      </div>

      <div class="item">
        <p>EXECUTIVE VICE PRESIDENT, ADMINISTRATION</p>
        <h5>Andrus Laurits</h5>
      </div>

      <div class="item">
        <p>DIRECTOR OF DEVELOPMENT</p>
        <h5>Alessandro Parolini</h5>
      </div>

      <div class="item">
        <p>DIRECTOR OF FINANCE</p>
        <h5>Eric Hopkins</h5>
      </div>

    </div>
  </section>
</div>
@stop