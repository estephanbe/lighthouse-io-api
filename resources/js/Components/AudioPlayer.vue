<template>
  <div class="row">
    <video-player
      class="audio-player"
      ref="audioPlayer"
      :src="url"
      :playsinline="true"
    >
      <template v-slot="{ player, state }">
        <div class="videoDisplay">
          <img class="audio-player-poster" :src="thumbnail" alt="" />
          <div class="player-play">
            <img v-if="state.playing" @click="player.pause()" src="../../assets/images/pause-btn.svg" />
            <img v-else @click="player.play()" src="../../assets/images/play-btn.svg" />
          </div>
        </div>
      </template>
    </video-player>
  </div>
</template>

<style scoped>
  .audio-thumbnail {
    max-width: 100%;
    border-radius: 8px;
  }
  .audio-player {
    width: 100%;
    height: auto;
    background-color: transparent;
  }
  .audio-player-poster {
    width: 100%;
    border-radius: 8px;
  }
  .player-play {
    position: absolute;
    width: 40px;
    height: 40px;
    border-radius: 100%;
    background-color: rgba(26, 26, 26, 0.6);
    display: flex;
    align-items: center;
    justify-content: center;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
  }
  .player-play img {
    height: 15px
  }
  @media (min-width: 768px) {
    .player-play {
      width: 64px;
      height: 64px;
    }
    .player-play img {
      height: 26px
    }
  }
</style>
<style>
  .audio-player .vjs-tech {
    display: none;
  }
  .audio-player .vjs-poster {
    display: none !important;
    position: relative;
    width: 100%;
    background-color: transparent;
  }
</style>

<script>
import { VideoPlayer } from '@videojs-player/vue'

export default {
  props: ["thumbnail", "url"],
  components: {
    VideoPlayer
  }
}
</script>