@extends('layouts.default')

@section('headerBlock')


<section class="blue">
  <div class="container padding-reset">
    <!-- main slider carousel -->
@include('components.slider', ['projectName' => '8701 Collins Avenue','picturesPath'=>'images/projects/usa/125Greenwich/'])
    <!--/main slider carousel-->
  </div>
</section>

<!-- thumb navigation carousel -->
<div class="container padding-reset">
  <div class="" id="slider-thumbs">
    <!-- thumb navigation carousel items -->
@include('components.slider_navigation', ['picturesPath'=>'images/projects/usa/125Greenwich/'])
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
            <p class="location">Miami, USA</p>
            <h5>8701 Collins Avenue</h5>
          </div>
        </div>
        <p class="location-link">@include('components.link_box', ['newWindow'=>'true', 'linkName'=>'see location', 'ref'=>'https://www.google.ee/maps/place/400+5th+Ave,+New+York,+NY+10018,+Ameerika+%C3%9Chendriigid/@40.7481295,-73.9838244,17z/data=!4m2!3m1!1s0x89c259a9f8048231:0x3206e29bd09293dec8f94?hl=et'])</p>
        <p>TYPE<br />
          Mixed-use residential and retail</p>
        <p>ARCHITECTURE<br />
          Renzo Piano Building Workshop, Paris</p>
        <p>SIZE<br />
          260,000 square feet<br />
          (24,160 square meters)</p>
        <p>GOSS ASSET VALUE<br />
          450 M $</p>
    </div>

    <div class="col-story">

      <p>This project is designed to be an iconic building and a destination in Miami
Beach. The architecture will express lightness, transparency and luminosity.
The building will appear as a ship floating above the trees in the Park.
It is intended to be a contemporary building that integrates with the great
architectural traditions of Miami Beach.<br />
In addition to concrete, the project will make use of other materials which
express a nautical language, in relationship to the image of the ship floating
above the trees in the Park. These materials include steel, glass for the façade
and parapet and wood for flooring and hand rails, and fabric for sun shade
protection. Greenery will also be generously used as a project material,
in the North Park, lobby areas on the ground level, as well as on outdoor
amenity spaces.</p>

<p>
The project is intended to increase permeability between the city and the beach:
<ul>
<li>First, by allowing pedestrian access to the beach via 87th Terrace
and the currently unused 87th Street</li>
<li>Second, visually, by reducing the footprint of the building on the East Parcels.</li>
</ul>
</p>

<p>
The silhouette of the building, generated by the organization of structure
and mechanical spaces on the rooftop along Collins Avenue, is reminiscent
of the iconic architectural spires found throughout Miami Beach.
This design approach will add significant value to the Park, to the surrounding
neighborhood and to the city of Miami Beach.
</p>
      
    </div>
  </div>
</section>

@include('components.link_block',['linkName'=>'projects gallery','ref'=>url().'/projects']);

@stop