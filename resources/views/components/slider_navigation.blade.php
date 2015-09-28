<?php
/*
Input:
$picturesPath String
*/
$pictures = File::allFiles($picturesPath);
?>

<div class="slider-container slider-navigation_">
	<ul class="slider-nav">
<?php $selectorCounter = 0; ?>
@foreach($pictures as $key=>$picture)
  <?php $test = preg_match( '/^\d/', $picture->getFilename() ); ?>
  @if( !$test )
  	<li class="slider-nav__item">
	    <a id="carousel-selector-{{$selectorCounter}}" class="@if($selectorCounter==0) selected @endif">
	    <img src="{{asset($picturesPath.'80x60_'.$picture->getFilename())}}" class="img-responsive"></a>
  	</li>
  <?php $selectorCounter++; ?>
  @endif
@endforeach
	</ul>
</div>
<style>
	.slick-slide {
		margin: 3px 0 0 3px;
	}
</style>