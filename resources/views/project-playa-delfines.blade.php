@extends('layouts.default')

@section('headerBlock')


<section class="blue">
  <div class="container padding-reset">
    <!-- main slider carousel -->
@include('components.slider', ['projectName' => 'Playa Delfines','picturesPath'=>'images/projects/americas/PlayaDelfines/'])
    <!--/main slider carousel-->
  </div>
</section>

<!-- thumb navigation carousel -->
<div class="container padding-reset">
  <div class="" id="slider-thumbs">
    <!-- thumb navigation carousel items -->
@include('components.slider_navigation', ['picturesPath'=>'images/projects/americas/PlayaDelfines/'])
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
            <h5>Playa Delfines</h5>
          </div>
        </div>
        <p class="location-link">@include('components.link_box', ['newWindow'=>'true', 'linkName'=>'see location', 'ref'=>'https://www.google.ee/maps/place/400+5th+Ave,+New+York,+NY+10018,+Ameerika+%C3%9Chendriigid/@40.7481295,-73.9838244,17z/data=!4m2!3m1!1s0x89c259a9f8048231:0x3206e29bd09293dec8f94?hl=et'])</p>
        <p>TYPE<br />
          Mixed-use hospitality and retail</p>
        <p>ARCHITECTURE<br />
          Kobi Karp</p>
        <p>SIZE<br />
          Approximately<br />
          56,000 square meters<br />
          (603,000 square feet)</p>
        <!-- <p>GOSS ASSET VALUE<br />
          120 M $</p> -->
    </div>

    <div class="col-story">

      <p>Located on beachfront property in Cancun, Mexico, Playa Delfines will be a
mixed-use residential and hospitality project comprised of two 20-story high-rise
buildings, two beach clubs, and a retail component designed by Miami-based
architect Kobi Karp. The total anticipated net residential area is approximately
51,000 square meters (550,000 square feet); total anticipated net retail space is
approximately 2,800 square meters (30,100 square feet), and total anticipated
beach club area is approximately 2,670 square meters (28,700 square feet).
Hotel-condominium units will have access to a private beach club. Other onsite
amenities will include a restaurant that is close to the beach, multiple pools (lap
and infinity), a business center, and a spa and health club. Bizzi & Partners
Development acquired the property in 2006 and is currently pursuing re-zoning
to allow for the new development. Cancun, which enjoys a year-round mild
climate, is a well-developed tourist destination with extensive recreation, entertainment,
and shopping opportunities.</p>
      
    </div>
  </div>
</section>

@include('components.link_block',['linkName'=>'projects gallery','ref'=>url().'/projects']);

@stop