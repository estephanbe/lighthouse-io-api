<template>
  <div class="download-wrapper row justify-center">
    <div class="main-container">
      <div class="barcode-container">
        <div>
          <div class="download-title highlight-text">{{ content.previewPageTitle }}</div>
          <div class="download-subtitle">{{ content.previewPageSubtitle }}</div>
        </div>
        <div class="qr-wrapper">
          <img src="../../assets/images/qr.png" alt="">
        </div>
      </div>
      <div class="download-links-container">
        <div class="download-links-images">
          <a :href="content.appStoreURL" target="_blank"><img src="../../assets/images/app-store.png" alt="app store" /></a>
          <a :href="content.googlePlayURL" target="_blank"><img src="../../assets/images/google-play.png" alt="google play" /></a>
        </div>
        <div class="download-description highlight-text preview-font">{{ content.previewPageDescription }}</div>
      </div>
    </div>
  </div>
</template>

<style scoped>
  .download-wrapper {
    padding: 56px 0;
    text-align: center;
  }
  .download-title {
    font-size: 32px;
  }
  .rtl .download-title {
    font-size: 24px;
    line-height: 36px;
  }
  .download-subtitle {
    font-size: 16px;
    line-height: 24px;
  }
  .download-links-container {
    padding: 25px 0;
  }
  .download-description {
    font-size: 16px;
    line-height: 24px;
    margin-top: 16px;
  }
  .qr-wrapper {
    display: none;
  }
  @media (min-width: 768px) {
    .download-links-images a {
      margin: 0 12px;
    }
  }
  @media (min-width: 1440px) {
    .download-wrapper {
      padding-left: 64px;
    }
    .qr-wrapper {
      display: block;
      margin-left: 24px;
    }
    .rtl .qr-wrapper {
      margin-left: 0;
      margin-right: 24px;
    }
    .barcode-container {
      display: flex;
      text-align: end;
      justify-content: flex-end;
    }
    .download-links-container {
      display: flex;
      flex-direction: column-reverse;
    }
    .download-description {
      margin-top: 0;
      margin-bottom: 24px;
    }
    .download-title {
      font-size: 40px;
    }
    .rtl .download-title {
      font-size: 32px;
      line-height: 48px;
    }
    .download-subtitle {
      font-size: 32px;
      line-height: 32px;
    }
    .rtl .download-subtitle {
      font-size: 24px;
      line-height: 36px;
    }
    .download-description {
      text-align: end;
    }
  }
  @media (min-width: 2560px) {
    .download-title {
      font-size: 70px;
      line-height: 75px;
    }
    .download-subtitle {
      font-size: 52px;
      line-height: 52px;
    }
    .download-description {
      font-size: 32px;
      line-height: 32px;
    }
  }
</style>

<script>
import useLocaleStore from "@/Stores/locale"
import { mapState } from 'pinia'

export default {
  computed: {
    ...mapState(useLocaleStore, { content: "getContent" })
  }
}
</script>