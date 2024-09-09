<template>
  <div class="download-ad-container header secondary-text primary-bg">
    <img class="ripped-page-top" src="../../assets/images/ripped-page-top.svg" />
    <div class="main-container download-ad-text">
      <div class="download-ad-content">
        {{ content.downloadText }}
      </div>
      <div class="button-container">
        <Button color="secondary" :content="content.downloadButton" @button-clicked="goToStore()"></Button>
      </div>
    </div>
    <img class="ripped-page-bottom" src="../../assets/images/ripped-page-bottom.svg" />
  </div>
</template>

<style scoped>
  .ripped-page-top {
    width: 100%;
    margin-top: -5px;
  }
  .ripped-page-bottom {
    width: 100%;
    margin-bottom: -5px;
  }
  .rtl .ripped-page-bottom, .rtl .ripped-page-top {
    transform: scaleX(-1);
  }
  .download-ad-text {
    padding: 5vh;
    display: flex;
    flex-direction: column;
    align-items: center;
  }
  .download-ad-container {
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    position: relative;
  }
  .download-ad-content {
    text-align: center;
    text-transform: capitalize;
  }
  .download-numbers {
    padding-right: 8px;
  }
  .rtl .download-numbers {
    font-size: 48px;
    line-height: 150%;
  }
  .button-container {
    margin-top: 30px;
    display: flex;
    justify-content: center;
  }
  @media (min-width: 375px) {
    .rtl .download-numbers {
      font-size: 72px;
    }
  }
  @media (min-width: 425px) {
    .rtl .download-numbers {
      font-size: 72px;
    }
  }
  @media (min-width: 768px) {
    .rtl .download-numbers {
      font-size: 88px;
    }
  }
  @media (min-width: 1024px) {
    .rtl .download-numbers {
      font-size: 96px;
    }
    .download-ad-content {
      max-width: 80%;
    }
  }
  @media (min-width: 1440px) {
    .rtl .download-numbers {
      font-size: 112px;
    }
    .download-ad-content {
      max-width: 70%;
    }
  }
  @media (min-width: 2560px) {
    .rtl .download-numbers {
      font-size: 132px;
    }
    .download-ad-content {
      max-width: 80%;
    }
  }
</style>

<script>
import Button from "@/Elements/Button.vue"
import useLocaleStore from "@/Stores/locale"
import { mapState } from 'pinia'

export default {
  computed: {
    ...mapState(useLocaleStore, { content: "getContent" }),
    isIOS () {
      return /(Mac|iPhone|iPod|iPad)/i.test(navigator.platform)
    }
  },
  components: {
    Button
  },
  methods: {
    goToStore () {
      if(this.isIOS){
        window.open(this.content.appStoreURL, "_blank")
      } else {
        window.open(this.content.googlePlayURL, "_blank")
      }
    }
  }
}
</script>
