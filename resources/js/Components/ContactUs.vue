<template>
  <div class="contact-us-wrapper row justify-center">
    <div class="main-container contact-us-container">
      <div class="contact-us-image row justify-center">
        <div class="contact-image" :style="'background-image: url(' + contactImage + ')'"></div>
        <img class="contact-frame" src="../../assets/images/contact-us-frame.svg" />
      </div>
      <div class="contact-us-content">
        <div class="header-4">{{ content.contactUsTitle }}</div>
        <div class="contact-us-description subtitle">{{ content.contactUsDescription }}</div>
        <div class="row justify-center contact-btn-container">
          <Button color="primary" :content="content.downloadButton" @button-clicked="goToStore()"></Button>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>
  .contact-image {
    position: absolute;
    width: 100%;
    height: 100%;
    background-repeat: no-repeat;
    background-size: auto 96%;
    background-position: center;
  }
  .contact-frame {
    max-width: 100%;
    z-index: 1;
  }
  .contact-us-image {
    position: relative;
  }
  .rtl .contact-us-image {
    transform: scaleX(-1);
  }
  .contact-us-wrapper {
    padding: 90px 0;
    width: 100%;
  }
  .contact-us-container {
    display: flex;
    flex-direction: column;
    align-items: center;
  }
  .contact-us-content {
    margin-top: 45px;
    text-align: center;
  }
  .contact-us-description {
    margin: 15px 0;
  }
  @media (min-width: 768px) {
    .contact-us-container {
      flex-direction: row-reverse;
      justify-content: space-between;
    }
    .contact-us-content {
      margin-top: 0;
      width: 60%;
      text-align: start;
    }
    .contact-us-image {
      width: 45%;
      text-align: center;
    }
    .contact-btn-container {
      justify-content: flex-start;
    }
  }
</style>

<script>
import useLocaleStore from "@/Stores/locale"
import { mapState } from 'pinia'
import Button from "@/Elements/Button.vue"

export default {
  computed: {
    ...mapState(useLocaleStore, { content: "getContent" }),
    isIOS () {
      return /(Mac|iPhone|iPod|iPad)/i.test(navigator.platform)
    },
    contactImage () {
      return process.env.VITE_ASSETS_URL + this.content.contactUsImage
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
