@extends('welcome')
@section('style')
<style>
  .contain-live {
    position: relative;
  }

  .contain-live my-player {
    position: relative;
    z-index: 0;
  }

  .line-live {
    position: absolute;
    top: 0;
    right: 0;
    z-index: 1;
    color: red;
    background: rgb(0, 0, 0);
    background: rgba(0, 0, 0, 0.5);
    user-select: none;
    font-weight: bold;
    opacity: 0.7;

    transition: opacity 1.25s ease-in-out;
    -moz-transition: opacity 1.25s ease-in-out;
    -webkit-transition: opacity 1.25s ease-in-
  }

  .contain-live:hover .line-live {
    opacity: 0;
  }

  .contain-live:hover .live-tittle {
    position: absolute;
    left: 0;
    right: 0;
    z-index: 1;
    color: white;
    background: rgb(0, 0, 0);
    background: rgba(0, 0, 0, 0.9eee);
    user-select: none;
    opacity: 0.7;
    padding-left: 2%;
  }

  .live-tittle {
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1;
    color: white;
    background: rgb(0, 0, 0);
    background: rgba(0, 0, 0, 0.5);
    user-select: none;
    opacity: 0;
    padding-left: 2%;

    transition: opacity 1.00s ease-in-out;
    -moz-transition: opacity 1.00s ease-in-out;
    -webkit-transition: opacity 1.00s ease-in-
  }

  .line-live .live-icon {
    width: 18px;
  }
</style>
@endsection
@section('content')

<div id="app">
  <div class="container-well">
    <example-component></example-component>
  </div>

</div>
<br>
<div class="row">

  <div class="col-md-1 col-sm-1"></div>

  <div class="col-md-10 col-sm-10">
    <div>
      <div class="contain-live">
        
        <video id="my-player"  class="video-js vjs-layout-medium video-live"  controls autoplay muted preload="auto" data-setup='{"fluid":true,"liveui": true, " asdf ": true}'>
          <source src="http://10.1.12.108:8080/hls/test.m3u8" type="application/x-mpegURL" />
          
            
          <p class="vjs-no-js">
            To view this video please enable JavaScript, and consider upgrading to a
            web browser that
            <a href="https://videojs.com/html5-video-support/" target="_blank">
              supports HTML5 video
            </a>
          </p>
        </video>
        <div class="live-tittle">VIDEO DE TRANSMISION EN VIVO RTMP RANSMITIDO POR OBS</div>
        <div class="line-live"> 
          <img class="live-icon" src="{{asset('icono.svg')}}">EN VIVO &nbsp;</div>
    </div>
    </div>

    <div class="control">
      <!-- <button id="jump">Jump to 7</button> -->
      <!-- <div class='next'>Next</div>
       <div class='prev'>Prev</div>
       <div class='remove'>Remove</div>
       <div class='add'>Add</div>
       <div class='updateTime'>Move all markers right by 1 sec</div>
       <div class='reset'>Reset</div>
       <div class='destroy'>Destroy</div> -->
    </div>
  </div>

  <div class="col-md-1 col-sm-1"></div>
</div>

@endsection
@section('script')

@endsection