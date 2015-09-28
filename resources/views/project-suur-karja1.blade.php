@extends('layouts.default')

@section('headerBlock')


<section class="blue">
  <div class="container padding-reset">
    <!-- main slider carousel -->
@include('components.slider', ['projectName' => 'Suur-Karja 1 Street','picturesPath'=>'images/projects/eastern-europe/Suur-Karja1/'])
    <!--/main slider carousel-->
  </div>
</section>

<!-- thumb navigation carousel -->
<div class="container padding-reset">
  <div class="" id="slider-thumbs">
    <!-- thumb navigation carousel items -->
@include('components.slider_navigation', ['picturesPath'=>'images/projects/eastern-europe/Suur-Karja1/'])
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
            <h5>Suur-Karja 1 Street</h5>
          </div>
        </div>
        <p class="location-link">@include('components.link_box', ['newWindow'=>'true', 'linkName'=>'see location', 'ref'=>'https://www.google.ee/maps/place/400+5th+Ave,+New+York,+NY+10018,+Ameerika+%C3%9Chendriigid/@40.7481295,-73.9838244,17z/data=!4m2!3m1!1s0x89c259a9f8048231:0x3206e29bd09293dec8f94?hl=et'])</p>
        <p>TYPE<br />
          Mixed-use commercial and residential property</p>
        <!-- <p>ARCHITECTURE<br />
          Studio Architetto, Alberto Bertasa</p> -->
        <p>SIZE<br />
          3,445 square meters<br />
          (37,100 square feet)</p>
        <!-- <p>GOSS ASSET VALUE<br />
          120 M $</p> -->
    </div>

    <div class="col-story">

      <p>1 Suur-Karja Street is located in the southeast of the old city of Tallinn, the
capital city of Estonia. The building dates to the beginning of the 14th century.
The renovation work preserved the original architectural features, including
gables from the Middle Ages, hatches, a Neo-Gothic cupola, and prominent
internal details. Today, the building serves as a luxury residential rental with
restaurants and commercial premises on the cellar and ground floors.</p>
      
    </div>
  </div>
</section>

@include('components.link_block',['linkName'=>'projects gallery','ref'=>url().'/projects']);

@stop