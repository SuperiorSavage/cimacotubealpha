<!-- <link rel="stylesheet" href="{{asset('assets/style.css')}}" type="text/css" media="all" /> -->
<!-- <div class="container">
  <h4>Lista de videos</h4>
  <div class="row">

    <div class=" col-md-4">
      <video id="my-player" poster="{{asset('assets/cimaco01.png')}}" class="video-js vjs-layout-medium" controls
        preload="auto" data-setup='{"fluid":true}'>
        <source
          src="https://laterrazza.com.mx/testimoniales/videos/Noche%20Mexicana%20Bicentenaria%20-%20Mejores%20Momentos%202021.mp4"
          type="video/mp4">
        <track kind="chapters" src="{{asset('assets/Happy_Scribe_Subtitles.vtt')}}" srclang="en">
        <p class="vjs-no-js">
          
          To view this video please enable JavaScript, and consider upgrading to a
          web browser that
          <a href="https://videojs.com/html5-video-support/" target="_blank">
            supports HTML5 video
          </a>
        </p>
      </video>
    </div>

    <div class=" col-md-4">
      <div class="d-flex justify-content-center">
        <video id="my-player" poster="{{asset('assets/cimaco02.png')}}" class="video-js vjs-layout-medium" controls
          preload="auto" data-setup='{"fluid":true}'>
          <source src="https://laterrazza.com.mx/testimoniales/videos/Desfile-de-modas-otono-invierno-2021-edtcmc.m4v"
            type="video/mp4">
          <track kind="chapters" src="{{asset('assets/Happy_Scribe_Subtitles.vtt')}}" srclang="en">
          <p class="vjs-no-js">
            To view this video please enable JavaScript, and consider upgrading to a
            web browser that
            <a href="https://videojs.com/html5-video-support/" target="_blank">
              supports HTML5 video
            </a>
          </p>
        </video>
      </div>
    </div>

    <div class=" col-md-4">
      <video id="my-player" class="video-js vjs-layout-medium" controls preload="auto" data-setup='{"fluid":true}'>
        <source src="https://laterrazza.com.mx/testimoniales/videos/oswaldo-sanchez-centenario.mp4" type="video/mp4">
        <track kind="chapters" src="{{asset('assets/Happy_Scribe_Subtitles.vtt')}}" srclang="en">
        <p class="vjs-no-js">
          To view this video please enable JavaScript, and consider upgrading to a
          web browser that
          <a href="https://videojs.com/html5-video-support/" target="_blank">
            supports HTML5 video
          </a>
        </p>
      </video>
    </div>

  </div>
</div> -->

<!-- 
<div class="container">
  <h4>Lista de videos con preview</h4>
  <div class="row">

    <div class=" col-md-4">
      <main>
        <a href="#" class="link">
          <div class="preview">
            <img src="{{asset('assets/cimaco02.png')}}" src-preview="{{asset('assets/preview-bicubic.jpg')}}">
            <div>02:30</div>
            <span>Caminandes: Llamigos</span>
          </div>
        </a>
      </main>
    </div>
    
    <div class=" col-md-4">
      <main>
        <a href="#" class="link">
          <div class="preview">
            <img src="{{asset('assets/cimaco02.png')}}" src-preview="{{asset('assets/preview-bicubic.jpg')}}">
            <div>02:30</div>
            <span>Caminandes: Llamigos</span>
          </div>
        </a>
      </main>
    </div>
    <div class=" col-md-4">
      <main>
        <a href="#" class="link">
          <div class="preview">
            <img src="{{asset('assets/cimaco02.png')}}" src-preview="{{asset('assets/preview-bicubic.jpg')}}">
            <div>02:30</div>
            <span>Caminandes: Llamigos</span>
          </div>
        </a>
      </main>
    </div>


  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script> -->
@extends('welcome')
@section('content')
<div id="app">
  <div class="container-well">
    <example-component></example-component>
  </div>
  <div class="container">
    <video-component></video-component>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-3 col-sm-3" style="padding-top: 5%;">
      <a href="/videomarker">
        <video>
          <source src="https://interactive-examples.mdn.mozilla.net/media/cc0-videos/flower.webm" />
        </video>
      </a>
    </div>

    <div class="col-md-3 col-sm-3" style="padding-top: 5%;">
      <a href="/video">
        <video>
          <source
            src="https://laterrazza.com.mx/testimoniales/videos/Noche%20Mexicana%20Bicentenaria%20-%20Mejores%20Momentos%202021.mp4" />
        </video>
      </a>
    </div>
    <br>
    <div class="col-md-3 col-sm-3" style="padding-top: 5%;">
      <video>
        <source src="https://laterrazza.com.mx/testimoniales/videos/oswaldo-sanchez-centenario.mp4" />
      </video>
    </div>

    <div class="col-md-3 col-sm-3" style="padding-top: 5%;">
      <video>
        <source src="https://laterrazza.com.mx/testimoniales/videos/oswaldo-sanchez-centenario.mp4" />
      </video>
    </div>

  </div>
</div>



<script>

  var video = document.querySelectorAll("video");
  console.log('video', video[1])
  video.forEach(function (video, indice, array) {
    console.log("En el índice " + indice + " hay este valor: " + video);
    function startPreview() {

      video.muted = true;
      video.currentTime = 2;
      video.playbackRate = 0.5;
      video.play();
    }

    function stopPreview() {
      video.currentTime = 2;
      video.playbackRate = 1;
      video.pause();
    }

    let previewTimeout = null;

    video.addEventListener("mouseenter", () => {
      var allParas = document.getElementsByTagName("video");
      startPreview();
      previewTimeout = setTimeout(stopPreview, 5000);

    });

    video.addEventListener("mouseleave", () => {
      clearTimeout(previewTimeout);
      previewTimeout = null;
      stopPreview();
    });

  });



</script>

<script type="text/javascript">

  function getAllParaElems() {
    var allParas = document.getElementsByTagName("video");
    for (var i = 0; i < allParas.length; i++) {
      //comment[i].addEventListener('click', showComment, false);
      console.log(allParas.length);
    }
  }
</script>

@endsection