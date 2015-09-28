@extends('layouts.default')

@section('headerBlock')


<section class="blue">
  <div class="container padding-reset">
    <!-- main slider carousel -->
@include('components.slider', ['projectName' => '125 Greenwich','picturesPath'=>'images/projects/usa/125Greenwich/'])
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
            <p class="location">New York, USA</p>
            <h5>125 Greenwich</h5>
          </div>
        </div>
        <p class="location-link">@include('components.link_box', ['newWindow'=>'true', 'linkName'=>'see location', 'ref'=>'https://www.google.ee/maps/place/400+5th+Ave,+New+York,+NY+10018,+Ameerika+%C3%9Chendriigid/@40.7481295,-73.9838244,17z/data=!4m2!3m1!1s0x89c259a9f8048231:0x3206e29bd09293dec8f94?hl=et'])</p>
        
        <p>TYPE<br />
          Mixed-use residential and retail</p>
        <p>ARCHITECT<br />
          Rafael Viñoly Architects</p>
        <p>SIZE<br />
          360,000 square feet<br />
          (33,450 square meters)</p>
        <p>GOSS ASSET VALUE<br />
          >1.000 M $</p>
        
    </div>

    <div class="col-story">

      <p>On August 27, 2014, Bizzi & Partners Development acquired the 125 Greenwich
site in Lower Manhattan to develop a 70 stories luxury residential building.
The development is “as of right” and is comprised of approximately
470,000 gross buildable square feet of an approximately 900 feet high
mixed-use residential tower.<br>
Located in the Financial District area and overlooking the new World Trade Center
Complex, 125 Greenwich will rise with iconic presence in the Manhattan skyline.
This development will take advantage of the forecasted market surge:
over 1 million square feet of upscale retail and dining is slated to open over
the next 24 months. With in-process luxury developments such as the Four
Seasons Downtown, 50 West Street, 56 Leonard, and the Woolworth Tower,
Lower Manhattan will solidify its position as one of the most desirable
neighborhoods in New York City.</p>

<p>
<ul>
<li>Celebrated architect –
the project is designed by architect Rafael Viñoly.</li>
<li>High profile location –
one of the last buildable site with direct views
and access to the World Trade Center campus.</li>
<li>No height limit.</li>
<li>As of right development with approvals in place –
generating overall timeline and process efficiency.</li>
<li>Flexible zoning –
zoned for residential, retail, and office use,
the site is ideally located for a mixed-use development.</li>
</ul>
</p>

<p>
  <ul>
    <li>Unrivalled panoramic views –
it will feature sweeping water and skyline views benefitting from the protected
view plane surrounding the World Trade Center memorial and the greenery
of Battery Park.</li>
<li>Ceiling height – the project features 10 feet ceiling height.</li>
<li>Generous amenity space –
the development will comprise approximately 16,000 square feet of dedicated,
exclusive indoor amenity space across 2 floors with direct views of the open
greenery in the park surrounding the World Trade Center.</li>
<li>Retail viability –
with approximately 18,000 square feet of prime retail including prominent
corner frontage in Downtown’s Golden Square, 125 Greenwich’s retail will
further enhance the overall development value. The site is directly adjacent
to the World Trade Center complex’s 800,000 square feet of upscale
and luxury retail.</li>
  </ul>
</p>

      
    </div>
  </div>
</section>

@include('components.link_block',['linkName'=>'projects gallery','ref'=>url().'/projects']);

@stop