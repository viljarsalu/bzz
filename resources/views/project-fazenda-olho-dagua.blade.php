@extends('layouts.default')

@section('headerBlock')


<section class="blue">
  <div class="container padding-reset">
    <!-- main slider carousel -->
@include('components.slider', ['projectName' => 'Fazenda Olho D’agua','picturesPath'=>'images/projects/americas/FazendaOlhoDagua/'])
    <!--/main slider carousel-->
  </div>
</section>

<!-- thumb navigation carousel -->
<div class="container padding-reset">
  <div class="" id="slider-thumbs">
    <!-- thumb navigation carousel items -->
@include('components.slider_navigation', ['picturesPath'=>'images/projects/americas/FazendaOlhoDagua/'])
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
            <p class="location">Sao Miguel Do Gustoso, Brazil</p>
            <h5>Fazenda Olho D’agua</h5>
          </div>
        </div>
        <p class="location-link">@include('components.link_box', ['newWindow'=>'true', 'linkName'=>'see location', 'ref'=>'https://www.google.ee/maps/place/400+5th+Ave,+New+York,+NY+10018,+Ameerika+%C3%9Chendriigid/@40.7481295,-73.9838244,17z/data=!4m2!3m1!1s0x89c259a9f8048231:0x3206e29bd09293dec8f94?hl=et'])</p>
        <p>TYPE<br />
          Mixed-use</p>
        <!-- <p>ARCHITECTURE<br />
          Abreu / Barros</p> -->
        <p>SIZE<br />
          2,300 hectares</p>
        <!-- <p>GOSS ASSET VALUE<br />
          120 M $</p> -->
    </div>

    <div class="col-story">

      <p>Fazenda Olho D’Agua is a unique 2,300-hectare of land on beachfront property in
São Miguel do Gostoso, in northeastern Brazil.<br />
This property offers infinite potential for mixed-use development, with dynamic
residential and leisure components. Real estate experts and other business
professionals project that the city of São Miguel do Gostoso and its 30 kilometer
coastline will soon become one of the most popular travel destinations in Brazil.
The potential for tourism is immense in light of its proximity to an international
airport and its strategic position as the closest area in South America to Europe,
as well as a new bridge that is under construction over Natal’s Rio de Potengi.
The new airport in the northern zone of the city will have a major impact on the
growth of tourism and construction in all coastal areas north of Natal.</p>
      
    </div>
  </div>
</section>

@include('components.link_block',['linkName'=>'projects gallery','ref'=>url().'/projects']);

@stop