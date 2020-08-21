<div class="slider-container">
  <div id="slider-owl" class="owl-carousel" style="display: inline;">
    @foreach(Helper::slider() as $key=>$row)
      <div class="item" data-hash="{{$key+1}}" style="width: 100%;min-height:700px;">
        {{-- <div class="img-slider" style="background-image: url({{ $row->getFirstMediaUrl('slider') }});height:700px;width:100%;background-size: contain;background-repeat: no-repeat;background-position: center;height: 700px;width: 100%;"></div> --}}
        <img src="background-image: url({{ $row->getFirstMediaUrl('slider') }});" alt="" style="width:100%;">
      </div>
    @endforeach
  </div>
  <div class="btn-container">
    @foreach(Helper::slider() as $key=>$row)
      <a class="btn-nav-slider" href="#{{$key+1}}">{{$key+1}}</a>
    @endforeach
  </div>
</div>

