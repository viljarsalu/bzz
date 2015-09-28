@extends('layouts.default')

@section('headerBlock')


<section class="blue">
  <div class="container padding-reset">
    <!-- main slider carousel -->
@include('components.slider', ['projectName' => 'Viru 1 Street','picturesPath'=>'images/projects/eastern-europe/Viru1/'])
    <!--/main slider carousel-->
  </div>
</section>

<!-- thumb navigation carousel -->
<div class="container padding-reset">
  <div class="" id="slider-thumbs">
    <!-- thumb navigation carousel items -->
@include('components.slider_navigation', ['picturesPath'=>'images/projects/eastern-europe/Viru1/'])
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
            <h5>Viru 1 Street</h5>
          </div>
        </div>
        <p class="location-link">@include('components.link_box', ['newWindow'=>'true', 'linkName'=>'see location', 'ref'=>'https://www.google.ee/maps/place/400+5th+Ave,+New+York,+NY+10018,+Ameerika+%C3%9Chendriigid/@40.7481295,-73.9838244,17z/data=!4m2!3m1!1s0x89c259a9f8048231:0x3206e29bd09293dec8f94?hl=et'])</p>
        <p>TYPE<br />
          Mixed-use commercial, retail and residential property</p>
        <!-- <p>ARCHITECTURE<br />
          Studio Architetto, Alberto Bertasa</p> -->
        <p>SIZE<br />
          4,100 square meters<br />
          (44,100 square feet)</p>
        <!-- <p>GOSS ASSET VALUE<br />
          120 M $</p> -->
    </div>

    <div class="col-story">

      <p>Located on an important retail street in the historic center of Tallinn, the capital
city of Estonia, and originally built in 1881, it is considered one of the most valuable
historic examples of Estonian architecture.<br />
Bizzi & Partners acquired and thoroughly renovated the building under the strict
supervision of the Monument Inspection Agency. The buildingʼs post-renovation
tenants include prominent entities such as the exclusive Paul & Shark fashion
boutique, the Irish and Italian Embassies, and the Italian Trade Commission.
The upper levels contain 12 high-end residences.</p>
      
    </div>
  </div>
</section>

@include('components.link_block',['linkName'=>'projects gallery','ref'=>url().'/projects']);

@stop