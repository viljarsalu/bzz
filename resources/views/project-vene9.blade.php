@extends('layouts.default')

@section('headerBlock')


<section class="blue">
  <div class="container padding-reset">
    <!-- main slider carousel -->
@include('components.slider', ['projectName' => 'Vene 9 Street','picturesPath'=>'images/projects/eastern-europe/Vene9/'])
    <!--/main slider carousel-->
  </div>
</section>

<!-- thumb navigation carousel -->
<div class="container padding-reset">
  <div class="" id="slider-thumbs">
    <!-- thumb navigation carousel items -->
@include('components.slider_navigation', ['picturesPath'=>'images/projects/eastern-europe/Vene9/'])
  </div>
</div>
@stop

@section('content')
<section>
  <div class="container">

    <div class="col-title">
        <div class="list">
          <div class="item">
            <a name="readmore"></a>
            <p class="location">Tallinn, Estonia</p>
            <h5>Vene 9 Street</h5>
          </div>
        </div>
        <p class="location-link">@include('components.link_box', ['newWindow'=>'true', 'linkName'=>'see location', 'ref'=>'https://www.google.ee/maps/place/400+5th+Ave,+New+York,+NY+10018,+Ameerika+%C3%9Chendriigid/@40.7481295,-73.9838244,17z/data=!4m2!3m1!1s0x89c259a9f8048231:0x3206e29bd09293dec8f94?hl=et'])</p>
        <p>TYPE<br />
          Hospitality</p>
        <!-- <p>ARCHITECTURE<br />
          Studio Architetto, Alberto Bertasa</p> -->
        <p>SIZE<br />
          3,895 square meters<br />
          (42,000 square feet)</p>
        <!-- <p>GOSS ASSET VALUE<br />
          120 M $</p> -->
    </div>

    <div class="col-story">

      <p>9 Vene Street is a 5-star hotel known as the “Telegraf” located in close proximity
to Town Hall Square on one of the most prestigious streets in the historic center
of Tallinn, the capital city of Estonia. Originally designed in 1874 as a four-story
home by the architect Peter Schreiberg, the building is highly valued for its
neo-renaissance façade.</p>
      
    </div>
  </div>
</section>

@include('components.link_block',['linkName'=>'projects gallery','ref'=>url().'/projects']);

@stop