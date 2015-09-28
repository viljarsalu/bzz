@extends('layouts.default')

@section('headerBlock')


<section class="blue">
  <div class="container padding-reset">
    <!-- main slider carousel -->
@include('components.slider', ['projectName' => 'Estrela Do Atlântico','picturesPath'=>'images/projects/americas/EstrelaDoAtlantico/'])
    <!--/main slider carousel-->
  </div>
</section>

<!-- thumb navigation carousel -->
<div class="container padding-reset">
  <div class="" id="slider-thumbs">
    <!-- thumb navigation carousel items -->
@include('components.slider_navigation', ['picturesPath'=>'images/projects/americas/EstrelaDoAtlantico/'])
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
            <p class="location">Natal, Brazil</p>
            <h5>Estrela Do Atlântico</h5>
          </div>
        </div>
        <p class="location-link">@include('components.link_box', ['newWindow'=>'true', 'linkName'=>'see location', 'ref'=>'https://www.google.ee/maps/place/400+5th+Ave,+New+York,+NY+10018,+Ameerika+%C3%9Chendriigid/@40.7481295,-73.9838244,17z/data=!4m2!3m1!1s0x89c259a9f8048231:0x3206e29bd09293dec8f94?hl=et'])</p>
        <p>TYPE<br />
          Residential</p>
        <p>ARCHITECTURE<br />
          Abreu / Barros</p>
        <p>SIZE<br />
          24,600 square meters<br />
          (265,000 square feet)</p>
        <!-- <p>GOSS ASSET VALUE<br />
          120 M $</p> -->
    </div>

    <div class="col-story">

      <p>Estrela do Atlântico is a high-rise residential property located near Ponta Negra
Beach in Natal, the capital city of Rio Grande do Norte, a northeastern state
in Brazil. Bizzi & Partners Development acquired the property and began
construction in 2006, and completed construction in 2012.<br />
This project, comprised of two 39-story towers, was designed by Brazilian
architecture firm Abreu / Barros. With 468 apartments and extensive indoor
and outdoor amenities, Estrela do Atlântico is the first full-service community
in the local area.</p>

<p>
The property’s 456 standard one-bedroom apartments are 55 square meters (592
square feet) each, and its 12 duplex two-bedroom apartments are 110 square
meters (1,185 square feet) each. All feature modern interior design and glassrailed
private balconies that capture the tropical style of the area.<br />
Estrela do Atlântico features lush exterior grounds with landscaped walkways, a
reading gazebo, wooden decks with winter gardens, a terrace suitable for parties
and barbecues, and a children’s park. Recreational and leisure amenities include
a fitness center with an indoor running track and an outdoor weight-lifting
terrace, an outdoor swimming pool and sunbathing area, and outdoor tennis
courts. The property’s spa offers a sauna and Jacuzzi. Entertainment spaces
include a cinema / TV room and a banquet hall. Automated laundry facilities are
located onsite. The property also offers 480 private covered parking spaces for
residents as well as visitor’s parking. Security features at Estrela do Atlântico
include closed circuit TV and security guard surveillance.
</p>

<p>
Natal offers an international airport and is in the process of building
a new airport, which will be one of the largest in the Latin-South
American region. The local area enjoys a temperate tropical climate
and pleasant trade winds from the ocean. It is an attractive vacation
destination for domestic and international tourists, especially European
visitors as Natal is the closest city in South America to Europe.
</p>
      
    </div>
  </div>
</section>

@include('components.link_block',['linkName'=>'projects gallery','ref'=>url().'/projects']);

@stop