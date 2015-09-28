@extends('layouts.default')

@section('headerBlock')


<section class="blue">
  <div class="container padding-reset">
    <!-- main slider carousel -->
@include('components.slider', ['projectName' => 'Town Center','picturesPath'=>'images/projects/americas/TownCenter/'])
    <!--/main slider carousel-->
  </div>
</section>

<!-- thumb navigation carousel -->
<div class="container padding-reset">
  <div class="" id="slider-thumbs">
    <!-- thumb navigation carousel items -->
@include('components.slider_navigation', ['picturesPath'=>'images/projects/americas/TownCenter/'])
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
            <p class="location">Cancun, Mexico</p>
            <h5>Town Center</h5>
          </div>
        </div>
        <p class="location-link">@include('components.link_box', ['newWindow'=>'true', 'linkName'=>'see location', 'ref'=>'https://www.google.ee/maps/place/400+5th+Ave,+New+York,+NY+10018,+Ameerika+%C3%9Chendriigid/@40.7481295,-73.9838244,17z/data=!4m2!3m1!1s0x89c259a9f8048231:0x3206e29bd09293dec8f94?hl=et'])</p>
        <p>TYPE<br />
          Mixed-use commercial office and retail</p>
        <p>ARCHITECTURE<br />
          Kobi Karp</p>
        <p>SIZE<br />
          47,500 square meters<br />
          (511,000 square feet)</p>
        <!-- <p>GOSS ASSET VALUE<br />
          120 M $</p> -->
    </div>

    <div class="col-story">

      <p>Town Center, located in Cancun, Mexico, is a mixed-use commercial office and
retail property designed by Miami-based architect Kobi Karp with interiors by
Mitchell Freedland. The development is comprised of five buildings.<br/>
Four of the five buildings have below-grade parking: two 12-story towers with
Class A office space above a ground level retail component; a one-story building
consisting of retail space and amenities; and a two-story building consisting of
retail space and amenities. The fifth building, which is seven stories high, consists
of five levels of parking above two levels of retail space. Altogether the project
offers 24,000 square meters (258,000 square feet) of office space, 23,500 square
meters (253,000 square feet) of retail space, and approximately 1,800 parking
spaces. Town Center, which is the largest and most modern office property in the
southern region of Mexico, stands to benefit from a growing regional economy
that is increasingly attracting international companies.</p>
      
    </div>
  </div>
</section>

@include('components.link_block',['linkName'=>'projects gallery','ref'=>url().'/projects']);

@stop