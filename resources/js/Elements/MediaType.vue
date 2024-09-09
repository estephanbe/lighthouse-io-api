<template>
  <div class="media-wrapper row justify-center">
    <div class="media-container" :id="'media-container-' + media.name" @mouseover="hoverIn" @mouseleave="hoverOut">
      <img :id="'media-stroke-' + media.name" class="media-stroke" :style="'background: ' + initialImage" src="../../assets/images/media.svg" :alt="media.name" />
      <button class="highlight-text media-btn">{{ media.name }}</button>
    </div>
  </div>
</template>

<style scoped>
  .media-btn {
    font-size: 32px;
    line-height: 170%;
    font-family: CursiveFont;
  }
  .media-wrapper {
    margin: 2% 0;
  }
  .media-container {
    margin: 4.5px 0;
    width: 276px;
    height: 155px;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .rtl .media-stroke {
    transform: scaleX(-1);
  }
  .media-stroke {
    width: 100%;
    background-repeat: no-repeat !important;
    background-position: center !important;
    background-size: 98% 98% !important;
  }
  .media-btn {
    position: absolute;
    top: 57%;
    left: 46%;
    transform: translate(-50%, -50%);
    background: transparent;
    border: none;
    outline: none;
    text-transform: capitalize;
  }
  .rtl .media-btn {
    left: 52%;
  }
  @media (min-width: 375px) {
    .media-btn {
      font-size: 48px;
    }
    .media-container {
      width: 375px;
      height: 209px;
    }
  }
  @media (min-width: 768px) {
    .media-wrapper {
      width: 45%;
    }
    .media-btn {
      font-size: 32px;
    }
    .media-container {
      width: 276px;
      height: 155px;
    }
  }
  @media (min-width: 1024px) {
    .media-wrapper {
      width: 32%;
    }
    .media-btn {
      font-size: 48px;
    }
    .media-container {
      width: 375px;
      height: 209px;
    }
  }
  @media (min-width: 2560px) {
    .media-wrapper {
      height: 400px;
    }
    .media-stroke {
      margin-left: -2px;
      margin-right: -3px;
    }
    .media-container {
      width: 600px;
      height: 335px;
    }
  }
</style>

<script>
export default {
  props: ["media"],
  data () {
    return {
      supportsTouch: 'ontouchstart' in window || navigator.msMaxTouchPoints
    }
  },
  computed: {
    initialImage () {
      if (document.body.offsetWidth <= "1024" & this.supportsTouch) {
        return "linear-gradient(0deg, rgba(26, 26, 26, 0.2), rgba(26, 26, 26, 0.2)), url(" + this.image + ")"
      } else {
        return "linear-gradient(90deg, rgba(26,26,26,1) 0%, rgba(26,26,26,1) 98%, rgba(26,26,26,0) 100%)"
      }
    },
    image () {
      return process.env.VITE_ASSETS_URL + this.media.image
    }
  },
  methods: {
    hoverIn () {
      const container = document.getElementById('media-stroke-' + this.media.name)
      container.style.background = "linear-gradient(0deg, rgba(26, 26, 26, 0.2), rgba(26, 26, 26, 0.2)), url(" + this.image + ")"
    },
    hoverOut () {
      const container = document.getElementById('media-stroke-' + this.media.name)
      container.style.background = "linear-gradient(90deg, rgba(26,26,26,1) 0%, rgba(26,26,26,1) 98%, rgba(26,26,26,0) 100%)"
    }
  }
}
</script>