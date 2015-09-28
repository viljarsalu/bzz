@extends('layouts.default')

@section('headerBlock')


<section class="blue">
  <div class="container padding-reset">
    <!-- main slider carousel -->
@include('components.slider', ['projectName' => 'Marimonti','picturesPath'=>'images/projects/western-europe/Marimonti/'])
    <!--/main slider carousel-->
  </div>
</section>

<!-- thumb navigation carousel -->
<div class="container padding-reset">
  <div class="" id="slider-thumbs">
    <!-- thumb navigation carousel items -->
@include('components.slider_navigation', ['picturesPath'=>'images/projects/western-europe/Marimonti/'])
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
            <h5>Marimonti</h5>
          </div>
        </div>
        <p class="location-link">@include('components.link_box', ['newWindow'=>'true', 'linkName'=>'see location', 'ref'=>'https://www.google.ee/maps/place/400+5th+Ave,+New+York,+NY+10018,+Ameerika+%C3%9Chendriigid/@40.7481295,-73.9838244,17z/data=!4m2!3m1!1s0x89c259a9f8048231:0x3206e29bd09293dec8f94?hl=et'])</p>
        <p>TYPE<br />
          Mixed-use residential and commercial</p>
        <!-- <p>ARCHITECTURE<br />
          Architetto Michele De Lucchi S.r.l.</p> -->
        <p>SIZE<br />
          15,000 square meters<br />
          (162,000 square feet)</p>
        <!-- <p>GOSS ASSET VALUE<br />
          120 M $</p> -->
    </div>

    <div class="col-story">

      <p>The Marimonti project is comprised of three mixed-use rental properties located
at Via Marina 3 and Via Monti 79–81 totaling 15,000 square meters. Bizzi &
Partners Development completed a renovation, which converted the buildings
into residential condominiums. Via Marina, 3 is located in one of the most prestigious
and exclusive residential neighborhoods of the city, very close to Giardini
di Porta Venezia and San Babila Square. Via Monti 79–81 consists of two buildings
located in an exclusive residential area of Milan, close to Sempione Park, the
most important park in the city.</p>
      
    </div>
  </div>
</section>

@include('components.link_block',['linkName'=>'projects gallery','ref'=>url().'/projects']);

@stop