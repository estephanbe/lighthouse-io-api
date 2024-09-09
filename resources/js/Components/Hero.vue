<template>
  <div class="hero-container">
    <app-navigation style="position: absolute"></app-navigation>
    <div class="video-container row justify-center">
      <video loop ref="heroVideo" playsinline class="hero-video" autoplay :src="heroVideo" muted="muted" alt=""></video>
      <div class="hero-overlay"></div>
    </div>
    <div class="main-container hero-content-container">
      <div class="hero-text-container">
        <div class="hero-title title">{{ content.heroTitle }}</div>
        <div class="subtitle hero-subtitle">{{ content.heroSubtitle }}</div>
        <Button class="hero-btn" color="primary" :content="content.downloadButton" @button-clicked="goToStore()"></Button>
      </div>
    </div>
    <div class="strokes-container">
      <div class="hero-strokes row">
        <img src="../../assets/images/heroStrokes.svg" alt="" />
      </div>
    </div>
  </div>
</template>

<style scoped>
  .hero-btn {
    margin-top: 20px;
  }
  .rtl .hero-strokes {
    transform: scaleX(-1)
  }
  .video-container {
    overflow: hidden;
    width: 100%;
  }
  .hero-video {
    min-height: 100vh;
    min-width: 100%;
  }
  .hero-container {
    display: flex;
    align-items: center;
    flex-direction: column;
    position: relative;
  }
  .hero-title {
    max-width: 260px;
    transform: rotate(-2deg);
  }
  .hero-strokes {
    position: absolute;
    bottom: 0;
    width: 100%;
    background-size: cover;
  }
  @media (min-width: 375px) {
    .hero-title {
      max-width: 280px;
    }
  }
  @media (min-width: 425px) {
    .hero-title {
      max-width: 380px;
    }
  }
  @media (min-width: 768px) {
    .hero-title {
      max-width: 660px;
    }
    .hero-subtitle {
      margin-top: 40px;
    }
  }
  @media (min-width: 1400px) {
    .hero-title {
      max-width: 730px;
    }
    .hero-strokes {
        bottom: -7vh;
    }
  }
  @media (min-width: 1920px) {
      .hero-strokes {
          bottom: -10vh;
      }
  }
  @media (min-width: 2000px) {
    .hero-title {
      max-width: 1000px;
    }
  }
  .hero-overlay {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(0, 0, 0, 0.5);
    mix-blend-mode: darken;
  }
  .strokes-container {
    position: relative;
    width: 100vw;
  }
  .hero-content-container {
    position: absolute;
    top: 0;
    bottom: 0;
    display: flex;
    align-items: center;
  }
  .hero-strokes img {
    width: 100%;
  }
</style>

<script>
import AppNavigation from "./AppNavigation.vue"
import Button from "@/Elements/Button.vue"
import useLocaleStore from "@/Stores/locale"
import { mapState } from 'pinia'

export default {
  mounted () {
    this.$refs.heroVideo.play()
  },
  computed: {
    ...mapState(useLocaleStore, { content: "getContent" }),
    isIOS () {
      return /(Mac|iPhone|iPod|iPad)/i.test(navigator.platform)
    },
    heroVideo () {
      return process.env.VITE_ASSETS_URL + this.content.belightCommunityHero
    }
  },
  methods: {
    goToStore () {
      if(this.isIOS){
        window.open(this.content.appStoreURL, "_blank")
      } else {
        window.open(this.content.googlePlayURL, "_blank")
      }
    }
  },
  components: {
    AppNavigation,
    Button
  }
}
</script>
