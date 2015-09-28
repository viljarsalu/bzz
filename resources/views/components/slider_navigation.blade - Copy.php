<?php
/*
Input:
$picturesPath String
*/
$pictures = File::allFiles($picturesPath);
?>
<div class="list-inline swiper-container mc-control">
	<div class="swiper-wrapper">
		<div class="swiper-slide"> 
<?php $selectorCounter = 0; ?>
@foreach($pictures as $key=>$picture)
  <?php $test = preg_match( '/^\d/', $picture->getFilename() ); ?>
  @if( !$test )
		    <a id="carousel-selector-{{$selectorCounter}}" class="@if($selectorCounter==0) selected @endif">
		    <img src="{{asset($picturesPath.'80x60_'.$picture->getFilename())}}" class="img-responsive"></a>
  <?php $selectorCounter++; ?>
  @endif
@endforeach
		</ul>
	</div>
</div>