@extends('layouts.default')

@section('headerBlock')


<section class="blue">
  <div class="container padding-reset">
    <!-- main slider carousel -->
@include('components.slider', ['projectName' => 'Toom-Kooli 2','picturesPath'=>'images/projects/eastern-europe/Toom-Kooli2/'])
    <!--/main slider carousel-->
  </div>
</section>

<!-- thumb navigation carousel -->
<div class="container padding-reset">
  <div class="" id="slider-thumbs">
    <!-- thumb navigation carousel items -->
@include('components.slider_navigation', ['picturesPath'=>'images/projects/eastern-europe/Toom-Kooli2/'])
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
            <h5>Toom-Kooli 2</h5>
          </div>
        </div>
        <p class="location-link">@include('components.link_box', ['newWindow'=>'true', 'linkName'=>'see location', 'ref'=>'https://www.google.ee/maps/place/400+5th+Ave,+New+York,+NY+10018,+Ameerika+%C3%9Chendriigid/@40.7481295,-73.9838244,17z/data=!4m2!3m1!1s0x89c259a9f8048231:0x3206e29bd09293dec8f94?hl=et'])</p>
        <p>TYPE<br />
          Residential</p>
        <!-- <p>ARCHITECTURE<br />
          Studio Architetto, Alberto Bertasa</p> -->
        <p>SIZE<br />
          970 square meters<br />
          (10,400 square feet)</p>
        <!-- <p>GOSS ASSET VALUE<br />
          120 M $</p> -->
    </div>

    <div class="col-story">

      <p>2 Toom-Kooli Street is a luxury residential complex located in Toompea, the most
historically significant neighborhood in Tallinn, the capital city of Estonia. This
area is home to the Parliament of the Republic of Estonia and is a major tourist
destination. Bizzi & Partners acquired and renovated the 970 square meter
(10,400 square foot) complex, which includes buildings at 2 Toom-Kooli Street, 3
Lossi square, and 5 Rutu Street into a luxury residential property.</p>
      
    </div>
  </div>
</section>

@include('components.link_block',['linkName'=>'projects gallery','ref'=>url().'/projects']);

@stop