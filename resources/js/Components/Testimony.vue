<template>
  <div class="secondary-bg testimony-container main-container" id="testimony-container">
    <div class="testimony-content">
      <div class="header primary-text testimony-header">
        {{ content.testimonyTitle }}
      </div>
      <div class="subtitle highlight-text testimony-subtitle">
        {{ content.testimonyDescription }}
      </div>
      <foot-animation></foot-animation>
    </div>
    <div class="testimony-user">
      <div class="user-image row justify-center">
        <div class="testimonial-image" :style="'background-image: url(' + testimonyImage + ')'"></div>
        <img class="testimonial-frame" src="../../assets/images/testimonial-frame.svg" />
      </div>
      <div class="user-text">
        <div class="user-content highlight-text subtitle">{{ content.testimonyBody }}</div>
        <div class="user-name header-3">
          {{ content.testimonySignature }}
        </div>
        <div class="user-location header-3">
          {{ content.testimonyLocation }}
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>
  .testimonial-image {
    position: absolute;
    width: 98%;
    height: 100%;
    background-repeat: no-repeat;
    background-size: contain;
    background-position: center;
  }
  .rtl .testimonial-image {
    transform: scaleX(-1);
  }
  .testimonial-frame {
    max-width: 100%;
    z-index: 1;
  }
  .user-image {
    position: relative;
  }
  .user-age {
    padding-right: 6px;
  }
  .testimony-container {
    margin-top: -2px;
    padding-top: 10%;
    position: relative;
  }
  .testimony-content {
    width: 270px;
    margin-bottom: 40vh;
  }
  .user-text {
    margin-top: 10%;
    text-transform: capitalize;
  }
  .user-location {
    padding-top: 8px;
  }
  .user-name {
    padding-top: 15px;
  }
  .testimony-user {
    padding-bottom: 140px;
    padding-top: 20vh;
    align-items: center;
  }
  @media (min-width: 375px) {
    .testimony-content {
      width: 300px;
    }
  }
  @media (min-width: 768px) {
    .testimony-content {
      width: 450px;
    }
    .testimony-user {
      display: flex;
      flex-direction: row-reverse;
      justify-content: space-between;
      padding-top: 5vh;
    }
    .user-image {
      width: 45%;
      align-items: center;
    }
    .user-text {
      width: 50%;
      margin-top: 0;
    }
  }
  @media (min-width: 1440px) {
    .testimony-content {
      width: 600px;
      margin-bottom: 60vh;
    }
  }
  @media (min-width: 2560px) {
    .testimony-content {
      width: 1000px;
      margin-bottom: 40vh;
    }
  }
</style>

<script>
import useLocaleStore from "@/Stores/locale"
import { mapState } from 'pinia'
import FootAnimation from "@/Elements/FootAnimation.vue"

export default {
  computed: {
    ...mapState(useLocaleStore, { content: "getContent" }),
    testimonyImage () {
      return process.env.VITE_ASSETS_URL + this.content.testimonyImage
    }
  },
  components: {
    FootAnimation
  }
}
</script>
