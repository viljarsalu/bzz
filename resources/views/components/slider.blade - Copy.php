<?php
/*
Input: 
$projectName String
$picturesPath String
*/
$pictures = File::allFiles($picturesPath);
?>
<div id="slider">
  <div id="carousel-bounding-box">
    <div id="galleryCarousel" class="carousel slide">
      <!-- carousel static caption -->
      <div class="caption">
        <h1>
          {{$projectName}}
          <small><a href="#readmore" class="link-box">read more</a></small>
        </h1>
      </div>

      <div class="carousel-inner">
<?php $counter = 0; ?>
@foreach($pictures as $key=>$picture)
  <?php $test = preg_match( '/^\d/', $picture->getFilename() ); ?>
  @if( !$test )
	      <div class="item @if($counter==0) active @endif" data-slide-number="{{$counter}}">
	        <a href="{{asset($picturesPath.'/'.$picture->getFilename())}}" data-title="Project 400 Fifth Avenue" data-lightbox="project">
	          <img src="{{asset($picturesPath.'980x300_'.$picture->getFilename())}}" class="img-responsive">
	        </a>
	        <div class="carousel-caption right">
	          <h3>&copy; Photographer</h3>
	        </div>
	      </div>
  <?php $counter++; ?>
  @endif
@endforeach
			</div>

          <!-- main slider carousel nav controls -->
      <a class="carousel-control left" href="#galleryCarousel" data-slide="prev">
        <span><img src="{{url()}}/images/arrow-left.png" /></span></a>
      <a class="carousel-control right" href="#galleryCarousel" data-slide="next">
        <span><img src="{{url()}}/images/arrow-right.png" /></span>
      </a>
    </div>
  </div>
</div>