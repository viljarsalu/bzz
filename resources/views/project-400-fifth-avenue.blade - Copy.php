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
        <p class="location-link">@include('components.link_box', ['openNewWindow'=>true,linkName'=>'meet the team','ref'=>'https://www.google.ee/maps/place/400+5th+Ave,+New+York,+NY+10018,+Ameerika+%C3%9Chendriigid/@40.7481295,-73.9838244,17z/data=!4m2!3m1!1s0x89c259a9f8048231:0x3206e29bd09293dec8f94?hl=et'])</p>
        <p class="location-link"><a class="link-box" href="https://www.google.ee/maps/place/400+5th+Ave,+New+York,+NY+10018,+Ameerika+%C3%9Chendriigid/@40.7481295,-73.9838244,17z/data=!4m2!3m1!1s0x89c259a9f8048231:0x3206e29bd09293dec8f94?hl=et" target="_blank">see location</a></p>
        <p>TYPE<br />
          Mixed-use residential and hospitality</p>
        <p>SIZE<br />
          570,000 square feet<br />
          (53,000 square meters)</p>
        <p>ARCHITECT<br />
          Gwathmey Siegel & Associates Architects, LLC</p>
    </div>

    <div class="col-story">

      <p>400 Fifth Avenue, Bizzi & Partners Development's first project in the United States, is a $700 million new construction luxury high-rise hotel and residential tower located in the heart of Midtown Manhattan in New York City. The firm purchased the land in 2006 and completed construction in 2010.</p>
      <p>Designed by the internationally renowned firm Gwathmey Siegel & Associates Architects (now Gwathmey Siegel Kaufman & Associates Architects), its 60-story contemporary glass and limestone façade is topped by a distinctive illuminated crown fabricated from textured stainless steel. Interiors were done by DAS Concepts, Inc. and the hotel is operated by Langham Hospitality Group under Langham Place, Fifth Avenue brand.</p>
      <p>The property’s prime location on the northwest corner of Fifth Avenue at 36th Street places it within easy walking distance of globally recognized landmarks, including the Empire State Building, the New York Public Library, and Grand Central Terminal. It is also highly convenient to Fifth Avenue’s luxury shopping destinations, as well as the dense concentration of corporate offices in Midtown Manhattan and The Plaza District.</p>
      <p>400 Fifth Avenue consists of 570,000 square feet (53,000 square meters) across 60 stories. The first 28 floors contain a luxury hotel with 214 keys, and amenities including a restaurant, a bar and lounge, and a state-of-the-art spa and fitness center. Floors 31–60 contain 164 luxury residential condominiums that range from one-to-three bedrooms, plus penthouse residences from 776 to 3,590 square feet (72 to 334 square meters). Condominium owners, who may enter their residence either via the hotel lobby or a private residential lobby, have direct secure access to hotel amenity spaces. They also enjoy exclusive access to a large residents’ lounge with a catering kitchen and private wrap-around terrace with an outdoor fireplace. All hotel services, including concierge and room service, are available to condominium owners.</p>
      <p>Gwathmey Siegel & Associates Architects is a New York City-based firm whose noteworthy past projects in the city include the renovation of the Guggenheim Museum, the W Hotel Downtown, Astor Place and the Soho Mews. Their approach to 400 Fifth Avenue took into consideration the scale, proportion, and materiality of the surrounding cityscape. Design features include deeply recessed faceted windows that accentuate views from the tower to the street, animate the façade, and create a unique profile as they wrap the corners of the building at the residential levels.</p>
      <p>Interior design firm DAS Concepts, Inc., which gained international acclaim for their work at the Four Seasons Hotel in New York City, created striking hotel and residential interiors for 400 Fifth Avenue. In harmony with the contemporary exterior architecture, their design features simple lines and the highest quality materials and craftsmanship, including hand-laid black oak hardwood flooring, custom-designed Poliform kitchen cabinetry, and stone and marble countertops in kitchens and baths. All residences feature premium appliances by Miele and Sub-Zero.</p>

    </div>
  </div>
</section>

<section class="link-block">
  <a href="{{url('projects')}}" class="link">projects gallery</a>
</section>
@stop