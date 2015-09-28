@extends('layouts.default')

@section('headerBlock')


<section class="blue">
  <div class="container padding-reset">
    <!-- main slider carousel -->
@include('components.slider', ['projectName' => 'SoHo Tower','picturesPath'=>'images/projects/usa/SoHoTower/'])
    <!--/main slider carousel-->
  </div>
</section>

<!-- thumb navigation carousel -->
<div class="container padding-reset">
  <div class="" id="slider-thumbs">
    <!-- thumb navigation carousel items -->
@include('components.slider_navigation', ['picturesPath'=>'images/projects/usa/SoHoTower/'])
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
            <p class="location">New York, USA</p>
            <h5>SoHo Tower</h5>
          </div>
        </div>
        <p class="location-link">@include('components.link_box', ['newWindow'=>'true', 'linkName'=>'see location', 'ref'=>'https://www.google.ee/maps/place/400+5th+Ave,+New+York,+NY+10018,+Ameerika+%C3%9Chendriigid/@40.7481295,-73.9838244,17z/data=!4m2!3m1!1s0x89c259a9f8048231:0x3206e29bd09293dec8f94?hl=et'])</p>
        <p>TYPE<br />
          Mixed-use residential
and retail</p>
<p>ARCHITECT<br />
          Renzo Piano</p>
        <p>SIZE<br />
          330,000 square feet
(30,700 square meters)</p>
        
          <p>GROSS ASSET VALUE <br>
            >700 M $
          </p>
    </div>

    <div class="col-story">

      <p>565 Broome will be a 290’ tall world-class condominium development
located in SoHo neighborhood. Designed by legendary architect Renzo Piano,
the 25-story building features two towers that mirrors each other and totals
116 units.<br>
The development site is the result of a complex lot assemblage, accounting
for eight parcels, one alley and one annex building. It extends for over half acre
and represents one of the last developable large parcels in the highly desirable
West Soho sub market of Manhattan. Located between Watts Street to the South,
Varick Street to the West and Broome Street to the North, 565 Broome is only
steps away from the heart of Soho’s historic district.<br>
The building will features permanently unobstructed views of the Hudson River
and Manhattan Skyline, and ground floor high-end retail that will complement
the lifestyles of those residents living luxuriously in the condominiums above.</p>
<p>565 Broome will be an iconic international style development.</p>
<p>
  The project has many unique differentiators, namely:
  <ul>
    <li>private off-street gated driveway</li>
    <li>automated parking facility</li>
    <li>direct unit elevator access</li>
    <li>fitness center</li>
    <li>pool, sauna and dry wet steam</li>
    <li>outdoor space</li>
  </ul>
</p>  

<p>
The circular gated driveway for pick-up and drop-off adds
a tremendous value providing privacy and security to the resident.
This amenity is very rare in Manhattan and it cannot be found
anywhere else in SoHo.<br>
The ground floor will be a glass box retail concept. The base
of the Project is a single structure for the first ten stories,
with residential units beginning on the third floor.<br>
These base level units continue through the 10th floor with the two
penthouse towers beginning with three bedroom duplex penthouses
on floors 11 and 12 with exclusive outdoor spaces featuring private
pools and patios.
</p>
<p>
The two-tower scheme maximizes the number of angles and
the views cape benefits also from the rounded glass façade:
<ul>
  <li>West – Hudson River and Region</li>
  <li>East – Historic SoHo and Lower East Side</li>
  <li>South – Financial District and World Trade Center</li>
  <li>North – Midtown Manhattan and Empire State Building.</li>
</ul>

</p>
      
    </div>
  </div>
</section>

@include('components.link_block',['linkName'=>'projects gallery','ref'=>url().'/projects']);

@stop