@extends('welcome')
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
      <video id="test_video" poster="{{asset('assets/cimaco02.png')}}" autoplay controls preload="none"
        class="video-js vjs-default-skin vjs-progress-control:hover vjs-mouse-display" data-setup='{"fluid":true}'>
        <source
          src="https://laterrazza.com.mx/testimoniales/videos/Noche%20Mexicana%20Bicentenaria%20-%20Mejores%20Momentos%202021.mp4"
          type="video/mp4">

        <track kind="chapters" src="{{asset('assets/Happy_Scribe_Subtitles.vtt')}}" srclang="en">
      </video>
      <!-- <div class='event-list'>
               <div><b>Events: </b></div>
            </div> -->
    </div>

    <div class="control">
      <button id="inicio">inicio</button>
      <button id="efemerides">Efemerides</button>
      <button id="mitad">Mitad</button>
      <button id="despedida">Despedida</button>
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

<script>
  var inicio = document.getElementById('inicio');
  var efemerides = document.getElementById('efemerides');
  var mitad = document.getElementById('mitad');
  var despedida = document.getElementById('despedida');
  var myvideo = document.getElementById('test_video');

  inicio.addEventListener("click", function (event) 
    {
      event.preventDefault();
      myvideo.play();
      myvideo.pause();
      myvideo.currentTime = 0;
      myvideo.play();
    },
      false);
      efemerides.addEventListener("click", function (event) 
    {
      event.preventDefault();
      myvideo.play();
      myvideo.pause();
      myvideo.currentTime = 32;
      myvideo.play();
    },
      false);
      mitad.addEventListener("click", function (event) 
    {
      event.preventDefault();
      myvideo.play();
      myvideo.pause();
      myvideo.currentTime = 90;
      myvideo.play();
    },
      false);

      despedida.addEventListener("click", function (event) 
    {
      event.preventDefault();
      myvideo.play();
      myvideo.pause();
      myvideo.currentTime = 155;
      myvideo.play();
    },
      false);
</script>
<script>
  // initialize video.js
  var player = videojs('test_video');

  //load the marker plugin
  player.markers({
    markerTip: {
      display: true,
      text: function (marker) {
        return "Break: " + marker.text;
      },
      time: function (marker) {
        return marker.time;
        console.log('tiempo', marker.time);
      }
    },
    breakOverlay: {
      display: true,
      displayTime: 3,
      text: function (marker) {

      }
    },
    markers: [
      {
        time: 0,
        text: "inicio"
      },
      {
        time: 32,
        text: "Efemerides"
      },
      {
        time: 90,
        text: "Mitad"
      },
      {
        time: 155,
        text: "Despedida"
      }
    ]
  });

  
</script>
@endsection