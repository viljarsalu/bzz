@extends('layouts.default')

@section('headerBlock')


<section class="blue">
  <div class="container padding-reset">
    <!-- main slider carousel -->
@include('components.slider', ['projectName' => 'The Leonard','picturesPath'=>'images/projects/usa/TheLeonard/'])
    <!--/main slider carousel-->
  </div>
</section>

<!-- thumb navigation carousel -->
<div class="container padding-reset">
  <div class="" id="slider-thumbs">
    <!-- thumb navigation carousel items -->
@include('components.slider_navigation', ['picturesPath'=>'images/projects/usa/TheLeonard/'])
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
            <h5>The Leonard</h5>
          </div>
        </div>
        <p class="location-link">@include('components.link_box', ['newWindow'=>'true', 'linkName'=>'see location', 'ref'=>'https://www.google.ee/maps/place/400+5th+Ave,+New+York,+NY+10018,+Ameerika+%C3%9Chendriigid/@40.7481295,-73.9838244,17z/data=!4m2!3m1!1s0x89c259a9f8048231:0x3206e29bd09293dec8f94?hl=et'])</p>
        <p>TYPE<br />
          Mixed-use residentialand retail</p>
       
        <p>ARCHITECT<br />
          SLCE Architects</p> 
          <p>SIZE<br />
          140,000 square feet<br />
          (13,000 square meters)</p>
          <p>GROSS ASSET VALUE <br>
            160 M $
          </p>
    </div>

    <div class="col-story">

      <p>Located in Tribeca at the corner of Leonard Street & Broadway, one of
Manhattan’s most vibrant and sought-after neighborhoods, it offers
incredible views of Lower Manhattan, including the newly constructed
One World Trade Center.</p>
<p>Bizzi & Partners redeveloped the property into 66 luxury residences with
state-of-the-art design and construction, as well as lifestyle amenities that
will resonate with the style of this trendy neighborhood while maintaining
its historic heritage. The property will also offer retail space at the ground level.</p>
      
    </div>
  </div>
</section>

@include('components.link_block',['linkName'=>'projects gallery','ref'=>url().'/projects']);

@stop