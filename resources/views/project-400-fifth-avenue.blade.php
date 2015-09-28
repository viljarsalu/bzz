@extends('layouts.default')

@section('headerBlock')


<section class="blue">
  <div class="container padding-reset">
    <!-- main slider carousel -->
@include('components.slider', ['projectName' => 'Milanosesto','picturesPath'=>'images/projects/usa/400FifthAv/'])
    <!--/main slider carousel-->
  </div>
</section>

<!-- thumb navigation carousel -->
<div class="container padding-reset">
  <div class="" id="slider-thumbs">
    <!-- thumb navigation carousel items -->
@include('components.slider_navigation', ['picturesPath'=>'images/projects/usa/400FifthAv/'])
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
            <h5>400 Fifth Avenue</h5>
          </div>
        </div>
        <p class="location-link">@include('components.link_box', ['newWindow'=>'true', 'linkName'=>'see location', 'ref'=>'https://www.google.ee/maps/place/400+5th+Ave,+New+York,+NY+10018,+Ameerika+%C3%9Chendriigid/@40.7481295,-73.9838244,17z/data=!4m2!3m1!1s0x89c259a9f8048231:0x3206e29bd09293dec8f94?hl=et'])</p>
        <p>TYPE<br />
          Mixed-use residential, hotel, and retail components</p>
        
        <p>ARCHITECT<br />
          Gwathmey Siegel, Kaufman, Architects LLC</p>
          <p>SIZE<br />
          570,000 square feet<br />
          (53,000 square meters)</p>
          <p>GROSS ASSET VALUE <br>
            >1.000 M $
          </p>
    </div>

    <div class="col-story">

      <p>400 Fifth Avenue is the first project of Bizzi & Partners Development in
the United States. Designed by the internationally renowned firm Gwathmey
Siegel & Associates Architects (now Gwathmey Siegel Kaufman Architects),
its 60-story contemporary glass and limestone façade is topped by a distinctive
illuminated crown fabricated from textured stainless steel. Interiors were done
by DAS Concepts, Inc. and the hotel is operated by Langham Hospitality Group
under Langham Place, Fifth Avenue brand.</p>
      <p>The property’s prime location on the northwest corner of Fifth Avenue at 36th
Street places it within easy walking distance of globally recognized landmarks,
including the Empire State Building, the New York Public Library, and Grand
Central Terminal. It is also highly convenient to Fifth Avenue’s luxury shopping
destinations, as well as the dense concentration of corporate offices in Midtown
Manhattan and The Plaza District.</p>
<p>400 Fifth Avenue consists of 570,000 square feet (53,000 square meters)
across 60 stories. The first 28 floors contain a luxury hotel with 214 keys,
and amenities including a restaurant, a bar and lounge, and a state-of-the-art spa
and fitness center. Floors 31–60 contain 164 luxury residential condominiums
that range from one-to-three bedrooms, plus penthouse residences from 776
to 3,590 square feet (72 to 334 square meters). Condominium owners, who may
enter their residence either via the hotel lobby or a private residential lobby,
have direct secure access to hotel amenity spaces. They also enjoy exclusive
access to a large residents’ lounge with a catering kitchen and private wraparound
terrace with an outdoor fireplace. All hotel services, including concierge
and room service, are available to condominium owners.</p>

    </div>
  </div>
</section>

@include('components.link_block',['linkName'=>'projects gallery','ref'=>url().'/projects']);

@stop