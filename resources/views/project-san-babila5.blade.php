@extends('layouts.default')

@section('headerBlock')


<section class="blue">
  <div class="container padding-reset">
    <!-- main slider carousel -->
@include('components.slider', ['projectName' => 'San Babila 5','picturesPath'=>'images/projects/western-europe/SanBabila5/'])
    <!--/main slider carousel-->
  </div>
</section>

<!-- thumb navigation carousel -->
<div class="container padding-reset">
  <div class="" id="slider-thumbs">
    <!-- thumb navigation carousel items -->
@include('components.slider_navigation', ['picturesPath'=>'images/projects/western-europe/SanBabila5/'])
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
            <h5>San Babila 5</h5>
          </div>
        </div>
        <p class="location-link">@include('components.link_box', ['newWindow'=>'true', 'linkName'=>'see location', 'ref'=>'https://www.google.ee/maps/place/400+5th+Ave,+New+York,+NY+10018,+Ameerika+%C3%9Chendriigid/@40.7481295,-73.9838244,17z/data=!4m2!3m1!1s0x89c259a9f8048231:0x3206e29bd09293dec8f94?hl=et'])</p>
        <p>TYPE<br />
          Mixed-use residential and retail</p>
        <!-- <p>ARCHITECTURE<br />
          Architetto Michele De Lucchi S.r.l.</p> -->
        <p>SIZE<br />
          7,700 square meters<br/>
          (83,000 square feet)</p>
        <!-- <p>GOSS ASSET VALUE<br />
          120 M $</p> -->
    </div>

    <div class="col-story">

      <p>San Babila 5, located in the heart of Milan, Italy on Piazza San Babila, is a 7,700
square meter (83,000 square foot) mixed-use property. The ground floor contains
high-end retail space and the floors above contain luxury residential condominiums.
Bizzi & Partners Development acquired and converted this property;
it was formerly a rental building. The renovation preserved the building’s
elegance with use of precious marble and other details. Piazza San Babila,
which was constructed in the 1930s, is considered one of the most important
squares in Italy.</p>
      
    </div>
  </div>
</section>

@include('components.link_block',['linkName'=>'projects gallery','ref'=>url().'/projects']);

@stop