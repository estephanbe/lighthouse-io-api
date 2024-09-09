<template>
  <div class="footer-main-wrapper" :style="'background-image: url(' + getBackground() + ')'">
    <div class="row justify-center footer-container">
      <div class="main-container footer-wrapper">
        <div class="contact-info">
          <div class="contact-us" v-if="content.contactInfo">
            <div class="footer-title highlight-text">{{ content.contactUs }}</div>
            <div class="contact-line footer-subtitle highlight-text" v-for="item in content.contactInfo" :key="item.id">
              <div>{{ item.address }}</div>
              <div>{{ item.value }}</div>
            </div>
          </div>
          <div class="social-links-container">
            <div class="footer-title highlight-text">{{ content.socialTitle }}</div>
            <div class="social-links" v-if="content.socialContent">
              <div class="row social-icons">
                <div class="social-icon footer-subtitle highlight-text" v-for="item in content.socialContent" :key="item.url">
                  <div @click="goToPage(item.url)">
                    <font-awesome-icon class="social-icon-icon" :icon="item.icon"></font-awesome-icon>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="download-section">
          <div class="footer-title highlight-text">{{ content.footerDownload }}</div>
          <div class="download-icons">
            <a :href="content.appStoreURL" target="_blank"><img src="../../assets/images/app-store.png" alt="app store" /></a>
            <a :href="content.googlePlayURL" target="_blank"><img src="../../assets/images/google-play.png" alt="google play" /></a>
          </div>
        </div>
      </div>
    </div>
    <div class="highlight-text footer-subtitle copyrights">{{ content.copyrights }}</div>
  </div>
</template>

<style scoped>
  .footer-container {
    width: 100%;
    margin-top: 80px;
  }
  .social-icon-icon {
    font-size: 18px;
    cursor: pointer;
  }
  .contact-line {
    display: flex;
    justify-content: space-between;
    margin-top: 15px;
    width: 280px;
    font-family: ZingRustDemo !important;
  }
  .social-links-container {
    margin: 65px 0;
  }
  .social-icons {
    gap: 32px;
    margin-top: 10px;
    align-items: center;
  }
  .copyrights {
    margin-top: 95px;
    padding-bottom: 20px;
    text-align: center;
  }
  .download-icons a {
    display: block;
  }
  .footer-main-wrapper {
    background-repeat: no-repeat;
    background-position: bottom right;
    width: 100%;
  }
  .rtl .footer-main-wrapper {
    background-position: bottom left;
  }
  @media (min-width: 768px) {
    .footer-wrapper {
      display: flex;
      justify-content: space-between;
    }
    .download-section, .contact-info {
      width: 48%;
    }
    .social-icons {
      margin-top: 26px;
    }
  }
  @media (min-width: 1024px) {
    .footer-wrapper {
      display: flex;
      justify-content: space-between;
      flex-direction: row-reverse;
    }
    .download-section {
      width: 35%;
    }
    .contact-info {
      width: 60%;
      display: flex;
      align-items: flex-start;
      justify-content: space-between;
    }
    .social-links-container {
      width: 250px;
      margin: 0;
    }
  }
  @media (min-width: 1400px) {
    .download-section {
      width: 25%;
    }
    .contact-info {
      width: 70%;
      justify-content: flex-start;
    }
    .social-links-container {
      padding: 0 20%;
    }
  }
</style>

<script>
import useLocaleStore from "@/Stores/locale"
import { mapState } from 'pinia'
import footerBg from "../../assets/images/footer-bg.svg"
import footerBgRTL from "../../assets/images/footer-bg-rtl.svg"

export default {
  computed: {
    ...mapState(useLocaleStore, { content: "getContent", language: "getLanguage" })
  },
  methods: {
    getImage (image) {
      return "../../assets/images/" + image + ".svg"
    },
    getBackground () {
      if (this.language === "en") {
        return footerBg
      }
      return footerBgRTL
    },
    goToPage (url) {
      window.open(url, "_blank")
    }
  }
}
</script>
