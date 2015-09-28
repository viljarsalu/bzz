<?php
/*
Input:
$projects array
*/
?>
<a href="#modal_{{ $projectName }}" data-toggle="modal" data-target="#modal_{{ $projectName }}">view all</a>
<div class="slider single-item">
@foreach( $projects as $project)
  <div class="thumbnail">
    <a href="#"><img  src="{{ asset('/images/projects/'.$project['path'].'/128x128_'.$project['image']) }}" alt="{{$project['name']}} {{$project['address']}} {{$project['country']}}" /></a>
    <div class="caption">
      <h3>{{$project['name']}}</h3>
        <p>{{$project['address']}}</p>
        <p>{{$project['country']}}</p>
    </div>
  </div>
@endforeach
</div>