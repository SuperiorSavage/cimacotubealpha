<template>
  <video-js ref="video-player" 
  class="video-js vjs-default-skin" 
  controls 
  preload="auto" 
  width="640" 
  height="268" 
  data-setup='{ "inactivityTimeout": 0 }'>
    <source :src="src" type="application/x-mpegURL" />
  </video-js>
</template>

<script>
import videojs from "video.js";

export default {
  props: ["src"],

  data() {
    return {
      player: null,
    };
  },

  mounted() {
    const element = this.$refs["video-player"];

    this.player = videojs(element, {
      fluid: true,
    });
  },
};
</script>
