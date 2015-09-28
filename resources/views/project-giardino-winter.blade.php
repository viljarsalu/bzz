@extends('layouts.default')

@section('headerBlock')


<section class="blue">
  <div class="container padding-reset">
    <!-- main slider carousel -->
@include('components.slider', ['projectName' => 'Giardino Winter','picturesPath'=>'images/projects/western-europe/GiardinoWinter/'])
    <!--/main slider carousel-->
  </div>
</section>

<!-- thumb navigation carousel -->
<div class="container padding-reset">
  <div class="" id="slider-thumbs">
    <!-- thumb navigation carousel items -->
@include('components.slider_navigation', ['picturesPath'=>'images/projects/western-europe/GiardinoWinter/'])
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
            <p class="location">Bordighera, Italy</p>
            <h5>Giardino Winter</h5>
          </div>
        </div>
        <p class="location-link">@include('components.link_box', ['newWindow'=>'true', 'linkName'=>'see location', 'ref'=>'https://www.google.ee/maps/place/400+5th+Ave,+New+York,+NY+10018,+Ameerika+%C3%9Chendriigid/@40.7481295,-73.9838244,17z/data=!4m2!3m1!1s0x89c259a9f8048231:0x3206e29bd09293dec8f94?hl=et'])</p>
        <p>TYPE<br />
          Residential</p>
        <!-- <p>ARCHITECTURE<br />
          Architetto Michele De Lucchi S.r.l.</p> -->
        <p>SIZE<br />
          5,000 square meters<br />
          (54,000 square feet)</p>
        <!-- <p>GOSS ASSET VALUE<br />
          120 M $</p> -->
    </div>

    <div class="col-story">

      <p>Giardino Winter is a residential property in Bordighera, Italy on the Italian
Riviera. Located in the private park of the former Villa Winter, it is managed by
the local Monuments and Fine Arts Commission.<br />
Bizzi & Partners acquired and renovated the property’s 5,000 square meter
(54,000 square foot) building into luxury apartments featuring refined interior
finishes. Amenities include underground parking, which is connected to the
lobby level via elevator. Bordighera, which enjoys a mild Mediterranean climate
year-round, is well-situated just 30 minutes drive from Monaco and San Remo.</p>
      
    </div>
  </div>
</section>

@include('components.link_block',['linkName'=>'projects gallery','ref'=>url().'/projects']);

@stop