<template>
  <div class="video-wrapper">
    <video-player
      class="video-player"
      :src="url"
      :poster="thumbnail"
      controls
    />
  </div>
</template>

<style scoped>
  .video-player {
    width: 304px;
    height: 168px;
    border-radius: 8px;
  }
  @media (min-width: 375px) {
    .video-player {
      width: 343px;
      height: 190px;
    }
  }
  @media (min-width: 425px) {
    .video-player {
      width: 401px;
      height: 222px;
    }
  }
  @media (min-width: 768px) {
    .video-player {
      width: 488px;
      height: 272px;
    }
  }
</style>


<style>
  .video-wrapper .video-player .vjs-poster {
    border-radius: 8px;
    width: 100%;
    height: auto;
    background-size: cover;
  }
  .video-wrapper .video-player .vjs-big-play-button {
    border: none;
    width: 40px;
    height: 40px;
    border-radius: 100%;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: rgba(26, 26, 26, 0.6);
  }
  .video-wrapper .video-player .vjs-big-play-button .vjs-icon-placeholder:before {
    font-size: 28px;
    content: "";
    background: url("../../assets/images/play-btn.svg");
    background-repeat: no-repeat;
    background-size: 15px auto;
    background-position: center;
  }
  @media (min-width: 768px) {
    .video-wrapper .video-player .vjs-big-play-button {
      width: 64px;
      height: 64px;
    }
    .video-wrapper .video-player .vjs-big-play-button .vjs-icon-placeholder:before {
      background-size: 22px auto;
    }
  }
</style>

<script>
import { VideoPlayer } from '@videojs-player/vue'
import 'video.js/dist/video-js.css'

export default {
  props: ["thumbnail", "url"],
  components: {
    VideoPlayer
  },
}
</script>