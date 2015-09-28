<div class="jumbotron">
  <div class="container">
    <section>
      <img style="position:relative; right:-63px;" src="{{ $imgSrc }}" class="img-responsive" alt="{{$imgAlt}}"/>
      <div class="title-block">
        <h3 class="regular-font">
          @foreach($links as $link)
          {!! $link !!}<br>
          @endforeach
        </h3>
        <h2>{!!$title!!}</h2>
      </div>
    </section>
  </div>
</div>