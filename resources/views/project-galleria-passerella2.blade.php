@extends('layouts.default')

@section('headerBlock')


<section class="blue">
  <div class="container padding-reset">
    <!-- main slider carousel -->
@include('components.slider', ['projectName' => 'Galleria Passerella 2','picturesPath'=>'images/projects/western-europe/GalleriaPasserella2/'])
    <!--/main slider carousel-->
  </div>
</section>

<!-- thumb navigation carousel -->
<div class="container padding-reset">
  <div class="" id="slider-thumbs">
    <!-- thumb navigation carousel items -->
@include('components.slider_navigation', ['picturesPath'=>'images/projects/western-europe/GalleriaPasserella2/'])
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
            <p class="location">Milan, Italy</p>
            <h5>Galleria Passerella 2</h5>
          </div>
        </div>
        <p class="location-link">@include('components.link_box', ['newWindow'=>'true', 'linkName'=>'see location', 'ref'=>'https://www.google.ee/maps/place/400+5th+Ave,+New+York,+NY+10018,+Ameerika+%C3%9Chendriigid/@40.7481295,-73.9838244,17z/data=!4m2!3m1!1s0x89c259a9f8048231:0x3206e29bd09293dec8f94?hl=et'])</p>
        <p>TYPE<br />
          Mixed-use commercial and residential</p>
        <!-- <p>ARCHITECTURE<br />
          Architetto Michele De Lucchi S.r.l.</p> -->
        <p>SIZE<br />
          22,000 square meters<br />
          (237,000 square feet)</p>
        <!-- <p>GOSS ASSET VALUE<br />
          120 M $</p> -->
    </div>

    <div class="col-story">

      <p>Bizzi & Partners acquired Galleria Passerella 2 in 2005. This trophy asset is
a 22,000 square meter (237,000 square foot) mixed-use property comprised
of 42 prime office units and primary retail space plus 14 residential units.
It is located in the heart of Milan near San Babila Square and the central
cathedral (the Duomo). The retail space and residential units were sold to
a primary investor.</p>
      
    </div>
  </div>
</section>

@include('components.link_block',['linkName'=>'projects gallery','ref'=>url().'/projects']);

@stop