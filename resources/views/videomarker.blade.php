<!-- {{asset('assets/wz.mp4')}} -->

<!doctype html>
<html>
<head>
   <title>Video.js Markers Example</title>

   <style>
      p {
         background-color: #eee;
         border: thin solid #777;
         padding: 10px;
      }
      .video-js{
         float:left;
      }
      .event-list {
         float:left;
         border: black;
         margin-left: 5px;
         width: 200px;

      }
      .control{
         clear: both;
      }
   </style>
   
   <!-- <link href="https://vjs.zencdn.net/7.17.0/video-js.css" rel="stylesheet" /> -->
   <link href="http://vjs.zencdn.net/5.11.8/video-js.css" rel="stylesheet">
   <link href="{{asset('assets/dist/videojs-markers.js')}}" rel="stylesheet">
   <link href="{{asset('assets/dist/videojs.markers.css')}}" rel="stylesheet">
   

</head>
<body>

    <p>This is a demo of video-markers plugin for videojs 5</p>
  
    <div>
       <video id="test_video" controls preload="none" class="video-js vjs-default-skin" width="640" height="264">
           <source src="http://vjs.zencdn.net/v/oceans.mp4" type="video/mp4">
           <source src="http://vjs.zencdn.net/v/oceans.webm" type="video/webm">
       </video>
       <div class='event-list'>
          <div><b>Events: </b></div>
       </div>
    </div>
  
    <div class="control">
       <div class='next'>Next</div>
       <div class='prev'>Prev</div>
       <div class='remove'>Remove</div>
       <div class='add'>Add</div>
       <div class='updateTime'>Move all markers right by 1 sec</div>
       <div class='reset'>Reset</div>
       <div class='destroy'>Destroy</div>
    </div>
  </body>

<script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
<script src="http://vjs.zencdn.net/5.11.8/video.js"></script>
<script src="{{asset('assets/dist/videojs-markers.js')}}"></script>
<!-- <script src="{{asset('assets/Happy_Scribe_Subtitles.vtt')}}" ></script> -->

<script>
   // initialize video.js
   var player = videojs('test_video');

   //load the marker plugin
   player.markers({
      markerTip:{
         display: true,
         text: function(marker) {
            return "This is a break: " + marker.text;
         }
      },
      breakOverlay:{
         display: true,
         displayTime: 3,
         text: function(marker) {
            return "This is an break overlay: " + marker.text;
         }
      },
      onMarkerReached: function(marker) {
         $('.event-list').append("<div>marker reached: " + marker.text + "</div>");

      },
      onMarkerClick: function(marker){
         $('.event-list').append("<div>marker clicked: " + marker.text + "</div>");

      },
      markers: [
         {
            time: 9.5,
            text: "this"
         },
         {
            time: 16,
            text: "is"
         },
         {
            time: 23.6,
            text: "so"
         },
         {
            time: 28,
            text: "cool"
         },
         {
            time: 36,
            text: ":)"
         }
      ]
   });

   $(".next").click(function(){
      player.markers.next();
   });
   $(".prev").click(function(){
      player.markers.prev();
   });
   $(".remove").click(function(){
      player.markers.remove([0,1]);
   })
   $(".add").click(function(){
      player.markers.add([{
            time: 25,
            text: "I'm NEW"
         }]);
   });
   $(".updateTime").click(function(){
      var markers = player.markers.getMarkers();
      for (var i = 0; i < markers.length; i++) {
         markers[i].time += 1;
      }
      player.markers.updateTime();
   });

   $(".reset").click(function(){
      player.markers.reset([{
            time: 40,
            text: "I'm NEW"
         },
         {
            time:20,
            text: "Brand new"
         }]);
   });
   $(".destroy").click(function(){
      player.markers.destroy();
   })
</script>
</html>
