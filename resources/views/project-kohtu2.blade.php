@extends('layouts.default')

@section('headerBlock')


<section class="blue">
  <div class="container padding-reset">
    <!-- main slider carousel -->
@include('components.slider', ['projectName' => 'Kohtu 2','picturesPath'=>'images/projects/eastern-europe/Kohtu2/'])
    <!--/main slider carousel-->
  </div>
</section>

<!-- thumb navigation carousel -->
<div class="container padding-reset">
  <div class="" id="slider-thumbs">
    <!-- thumb navigation carousel items -->
@include('components.slider_navigation', ['picturesPath'=>'images/projects/eastern-europe/Kohtu2/'])
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
            <h5>Kohtu 2</h5>
          </div>
        </div>
        <p class="location-link">@include('components.link_box', ['newWindow'=>'true', 'linkName'=>'see location', 'ref'=>'https://www.google.ee/maps/place/400+5th+Ave,+New+York,+NY+10018,+Ameerika+%C3%9Chendriigid/@40.7481295,-73.9838244,17z/data=!4m2!3m1!1s0x89c259a9f8048231:0x3206e29bd09293dec8f94?hl=et'])</p>
        <p>TYPE<br />
          Residential</p>
        <!-- <p>ARCHITECTURE<br />
          Studio Architetto, Alberto Bertasa</p> -->
        <p>SIZE<br />
          3,720 square meters<br />
          (40,000 square feet)</p>
        <!-- <p>GOSS ASSET VALUE<br />
          120 M $</p> -->
    </div>

    <div class="col-story">

      <p>2 Kohtu Street is a castle-like complex of buildings located between the streets of
Kohtu, Piiskopi and Pikk Jalg in Toompea, the most historically significant neighborhood
in Tallinn, the capital city of Estonia.<br/>
This area is home to the Parliament of the Republic of Estonia and is a major
tourist destination. This exceptional property was originally constructed in 1798
following a devastating fire in the area in 1684. Bizzi & Partners has renovated it
into luxury residences, which were marketed at the highest value in the Estonian
market at the time.</p>
      
    </div>
  </div>
</section>

@include('components.link_block',['linkName'=>'projects gallery','ref'=>url().'/projects']);

@stop