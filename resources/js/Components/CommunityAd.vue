<template>
  <div class="primary-bg community-ad-container">
    <div class="community-app-mockup row align-center justify-center" :style="'background-image: url(' + stroke + ')'">
      <img v-if="lang === 'ar'" class="community-mockup-phone" src="../../assets/images/communityMockup-rtl.png" alt="" />
      <img v-else class="community-mockup-phone" src="../../assets/images/communityMockup.png" alt="" />
    </div>
    <div class="community-text row align-center">
      <div class="community-ad-title-content title secondary-text">{{ content.communitySlogan }}</div>
      <img class="community-end-stroke" src="../../assets/images/comunityStroke.svg" />
    </div>
  </div>
</template>

<style scoped>
  .community-ad-container {
    height: 90vh;
    width: 100%;
    margin-top: -2px;
    padding-top: 2vh;
    z-index: 1;
    display: flex;
    align-items: center;
    flex-direction: column-reverse;
    justify-content: space-around;
  }
  .community-end-stroke {
    display: none;
  }
  .community-app-mockup {
    height: 136px;
    width: 100%;
    background-position: center;
  }
  .community-mockup-phone {
    height: 360px;
  }
  @media (min-width: 768px) {
    .community-ad-container {
      flex-direction: row;
      justify-content: normal;
    }
    .community-app-mockup {
      width: auto;
      background-position: right;
      padding: 0 5px;
      background-size: cover;
    }
    .rtl .community-app-mockup {
      padding: 0 30px;
    }
    .community-mockup-phone {
      height: 380px;
    }
    .community-end-stroke {
      display: block;
      height: 136px;
    }
    .rtl .community-end-stroke, .rtl .community-app-mockup, .rtl .community-mockup-phone {
      transform: scaleX(-1);
    }
  }
  @media (min-width: 870px) {
    .community-app-mockup {
      padding: 0 65px
    }
    .rtl .community-app-mockup {
      padding: 0 60px;
    }
  }
  @media (min-width: 1024px) {
    .community-mockup-phone {
      height: 460px;
    }
  }
  @media (min-width: 1180px) {
    .rtl .community-app-mockup {
      padding: 0 8%;
    }
    .rtl .community-ad-title-content {
      padding: 0 20px;
    }
  }
  @media (min-width: 1440px) {
    .community-app-mockup {
      height: 192px;
      padding: 0 5%;
    }
    .rtl .community-app-mockup {
      padding: 0 10%;
    }
    .community-end-stroke {
      height: 192px;
    }
    .community-mockup-phone {
      height: 646px;
    }
    .community-ad-title-content {
      padding: 0 20px;
    }
    .rtl .community-ad-title-content {
      padding: 0 20px;
    }
  }
  @media (min-width: 1650px) {
    .community-app-mockup {
      padding: 0 10%;
    }
  }
  @media (min-width: 2100px) {
    .community-app-mockup {
      padding: 0 15%;
    }
    .rtl .community-app-mockup {
      padding: 0 15%;
    }
  }
  @media (min-width: 2560px) {
    .community-app-mockup {
      padding: 0 15%;
    }
    .community-app-mockup, .community-end-stroke {
      height: 230px;
    }
    .community-mockup-phone {
      height: 780px;
    }
    .rtl .community-ad-title-content {
      padding: 0 2%;
    }
  }
</style>

<script>
import useLocaleStore from "@/Stores/locale"
import { mapState } from 'pinia'
import communityStroke from "../../assets/images/comunityStroke.svg"

export default {
  computed: {
    ...mapState(useLocaleStore, { content: "getContent", lang: "currentLanguage" }),
    stroke () {
      return communityStroke
    }
  }
}
</script>
