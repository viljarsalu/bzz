@extends('layouts.default')

@section('headerBlock')


<section class="blue">
  <div class="container padding-reset">
    <!-- main slider carousel -->
@include('components.slider', ['projectName' => 'Elisabetes 3','picturesPath'=>'images/projects/eastern-europe/Elisabetes3/'])
    <!--/main slider carousel-->
  </div>
</section>

<!-- thumb navigation carousel -->
<div class="container padding-reset">
  <div class="" id="slider-thumbs">
    <!-- thumb navigation carousel items -->
@include('components.slider_navigation', ['picturesPath'=>'images/projects/eastern-europe/Elisabetes3/'])
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
            <p class="location">Riga, Latvia</p>
            <h5>Elisabetes 3</h5>
          </div>
        </div>
        <p class="location-link">@include('components.link_box', ['newWindow'=>'true', 'linkName'=>'see location', 'ref'=>'https://www.google.ee/maps/place/400+5th+Ave,+New+York,+NY+10018,+Ameerika+%C3%9Chendriigid/@40.7481295,-73.9838244,17z/data=!4m2!3m1!1s0x89c259a9f8048231:0x3206e29bd09293dec8f94?hl=et'])</p>
        <p>TYPE<br />
          Class A office space</p>
        <p>ARCHITECTURE<br />
          Studio Dini and STATS Projekts</p>
        <p>SIZE<br />
          3,200 square meters<br />
          (34,500 square feet)</p>
        <!-- <p>GOSS ASSET VALUE<br />
          120 M $</p> -->
    </div>

    <div class="col-story">

      <p>Elisabetes 3 is a historic property located in the most prestigious district of Riga,
the capital city of Latvia. This district is characterized by highly regarded architecture,
low traffic density, and proximity to the historic center of Riga as well as
its parks.<br />
Originally built in 1899, Elisabetes 3 was designed by architect Karl Johann
Felsko and has a façade decorated by sculptor August Folz. Formerly used as a
hotel, the building has an excellent view over a park and the River Daugava. Bizzi
& Partners Development acquired the property in 2006 and completed its renovation
into Class A office space in 2010. Studio Dini, an architecture firm based in
Milan, Italy and STATS Projekts, a local Latvian firm, designed the renovation
plans. RE&RE, a construction company with the best knowledge of renovation
and historical projects in Latvia, managed the implementation of the plans.</p>
      
    </div>
  </div>
</section>

@include('components.link_block',['linkName'=>'projects gallery','ref'=>url().'/projects']);

@stop