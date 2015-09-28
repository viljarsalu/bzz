@extends('layouts.default')

@section('headerBlock')


<section class="blue">
  <div class="container padding-reset">
    <!-- main slider carousel -->
@include('components.slider', ['projectName' => 'Hotel Angst','picturesPath'=>'images/projects/western-europe/HotelAngst/'])
    <!--/main slider carousel-->
  </div>
</section>

<!-- thumb navigation carousel -->
<div class="container padding-reset">
  <div class="" id="slider-thumbs">
    <!-- thumb navigation carousel items -->
@include('components.slider_navigation', ['picturesPath'=>'images/projects/western-europe/HotelAngst/'])
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
            <h5>Hotel Angst</h5>
          </div>
        </div>
        <p class="location-link">@include('components.link_box', ['newWindow'=>'true', 'linkName'=>'see location', 'ref'=>'https://www.google.ee/maps/place/400+5th+Ave,+New+York,+NY+10018,+Ameerika+%C3%9Chendriigid/@40.7481295,-73.9838244,17z/data=!4m2!3m1!1s0x89c259a9f8048231:0x3206e29bd09293dec8f94?hl=et'])</p>
        <p>TYPE<br />
          Mixed-use residential and hospitality</p>
        <p>ARCHITECTURE<br />
          Architetto Michele De Lucchi S.r.l.</p>
        <p>SIZE<br />
          12,000 square meters<br />
          (130,000 square feet)</p>
        <p>GOSS ASSET VALUE<br />
          120 M $</p>
    </div>

    <div class="col-story">

      <p>Known as one of the continent’s most prestigious and opulent hotels before
it fell into disrepair between the two World Wars, The Angst’s former patrons
included European royalty, American industrialists, and wealthy celebrities.
Bizzi & Partners Development has acquired the abandoned property, which
includes two historic structures totaling 12,000 square meters (130,000 square
feet) and is in the process of renovating it into a residential property that will once
again appeal to an international crowd of sophisticated and affluent clientele.
The restoration will preserve important historic aspects of the two original
buildings while introducing fine design and functionality elements that speak
to modern sensibilities and needs. The property’s extensive botanical gardens
will also be fully restored to their former grandeur.</p>

<p>
Bordighera is just 40 minutes from France’s Nice International Airport
and one hour from Italy’s Genova International Airport, making it
a convenient residential location or vacation destination for European
and international clientele. In addition, the city is in the process of doubling
the size of its marina, which will provide improved access for those arriving
by private or commercial watercraft.<br />
Bordighera enjoys a mild Mediterranean climate with approximately
300 sunny days annually. The local beaches and seafront have received
the “Blue Flag” award of excellence and the town is known for its beautiful
gardens, including the extensive Pallanca Exotic Garden. Guests of The Angst
will enjoy convenient access to internationally acclaimed entertainment
destinations, including Monte Carlo and San Remo, each of which is less than
30 minutes away by car. Other nearby attractions include elite high-profile
events such as the Monaco Grand Prix, the Cannes Film Festival,
and Genova’s Yacht & Boat Exhibition.
</p>
      
    </div>
  </div>
</section>

@include('components.link_block',['linkName'=>'projects gallery','ref'=>url().'/projects']);

@stop