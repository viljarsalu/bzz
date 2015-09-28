@extends('layouts.default')

@section('headerBlock')
<section class="blue">
  <div class="container padding-reset">
    <!-- main slider carousel -->
@include('components.slider', ['projectName' => 'Milanosesto', 'picturesPath' => 'images/projects/western-europe/Milanosesto/'])
    <!--/main slider carousel-->
  </div>
</section>

    <!-- thumb navigation carousel -->
    <div class="container padding-reset">
      <div class="" id="slider-thumbs">
@include('components.slider_navigation', ['picturesPath'=>'images/projects/western-europe/Milanosesto/'])
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
                  <p class="location">Sesto San Giovanni, Italy</p>
                  <h5>Milanosesto</h5>
                </div>
              </div>
              <p class="location-link">@include('components.link_box', ['newWindow'=>'true', 'linkName'=>'see location', 'ref'=>'https://www.google.ee/maps/place/Sesto+San+Giovanni+MI,+Itaalia/@45.5369608,9.2427489,15z/data=!3m1!4b1!4m2!3m1!1s0x4786b88493ceb911:0x62cf432476d2360'])</p>
              <p>TYPE<br />
                Mixed-use</p>
              <p>ARCHITECTURE<br />
                Renzo Piano</p>
              <p>SIZE<br />
                1 million square meters<br />
                (10 million square feet)</p>
              <p>GOSS ASSET VALUE<br />
                5,500 M $</p>
          </div>

          <div class="col-story">
            <p>Milanosesto, whose master plan is designed by the architect Renzo Piano,
is the new urban installation to be built in Sesto San Giovanni on the site
of the former Falck steelworks. It is one of the largest redevelopment projects
for former industrial areas anywhere in Europe.<br />
The Milanosesto project involves conversion of an area of more than 1,400,000
square metres, which will house a new neighbourhood designed according
to the latest criteria for energy saving and surrounded by a green area of more
than 65 hectares.<br />
Around the extensive city park will be built a new hospital, residential housing,
hotels, areas for service, manufacturing, and business sectors, cultural and
sports centres, and schools, nurseries.</p>

            <p>Since Milanosesto is well served by the main transport infrastructures, it is
the ideal place to open offices, companies, and structures capable of attracting
a large number of people. For this reason, the Lombardy Regional Government
and Sesto San Giovanni Urban District Council had decided to include in
the Milanosesto project the “City of the Health and Research” a new Diagnosis
and Treatment Facility with two of the best health centres in Italy and indeed
Europe, the IRCCSS Carlo Besta Neurological Institute and the Italian
Tumours Institute.</p>

            <p>The newly constructed portion of Sesto San Giovanni will offer residential,
commercial, retail, and hospitality properties as well as recreational and sporting
centers. In addition, the development of a hospital is currently being explored.
Sesto San Giovanni is anticipated to ultimately have a residential population
of 15,000 people and be the daily workplace of 15,000 people.<br />
A world-class university hospital infrastructure such as the “Città della Salute
e della Ricerca" will turn Sesto San Giovanni into a magnet for scientific research.
Once the project comes to an end, it will provide housing for 15,000 residents,
and an additional 15,000 people will come to work in the new businesses that
are expected to open.</p>

            
          </div>
        </div>
      </section>

      @include('components.link_block',['linkName'=>'projects gallery','ref'=>url().'/projects']);
      
@stop