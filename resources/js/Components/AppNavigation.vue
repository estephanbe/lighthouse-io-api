<template>
  <div class="main-container navigation-container">
    <img src="../../assets/images/belight-logo.svg" @click="goHome" alt="Belight Logo" />
    <div class="language-options" v-if="!isTermsPage">
      <button class="language-option-en" @click="updateLanguage('en')" :class="language === 'en' ? 'selected' : ''">English</button>
      <div class="separator"></div>
      <button @click="updateLanguage('ar')" :class="language === 'ar' ? 'selected' : ''">العربية</button>
    </div>
  </div>
</template>

<style scoped>
  .navigation-container {
    padding-top: 32px;
    top: 0;
    z-index: 1;
    display: flex;
    align-items: center;
    justify-content: space-between;
  }
  .navigation-container img {
    cursor: pointer;
  }
  .language-options {
    display: flex;
    align-items: center;
    font-size: 10px;
    font-family: FFBouya, ZingRustDemo !important;
  }
  .language-options button {
    font-size: 10px;
    outline: none;
    background: none;
    box-shadow: none;
    border: none;
    color: white;
    cursor: pointer;
    font-family: FFBouya, ZingRustDemo !important;
  }
  .language-options button.language-option-en {
    font-size: 12px;
  }
  .language-options button.selected {
    text-decoration: underline;
  }
  .separator {
    padding: 0 5px;
  }
  .separator::after {
    content: "";
    width: 0;
    height: 12px;
    border-left: 2px solid var(--color-primary);
    color: var(--color-primary);
    display: flex;
  }
  @media (min-width: 768px) {
    .language-options, .language-options button {
      font-size: 12px;
    }
    .language-options button.language-option-en {
      font-size: 14px;
    }
  }
  @media (min-width: 1024px) {
    .separator::after {
      height: 14px;
    }
  }
  @media (min-width: 1440px) {
    .language-options, .language-options button {
      font-size: 16px;
    }
    .language-options button.language-option-en {
      font-size: 18px;
    }
  }
  @media (min-width: 2560px) {
    .navigation-container img {
      width: 150px;
    }
    .language-options, .language-options button {
      font-size: 26px;
    }
    .language-options button.language-option-en {
      font-size: 32px;
    }
    .separator {
      padding: 0 10px;
    }
    .separator::after {
      height: 25px;
    }
  }
</style>

<script>
import useLocaleStore from "@/Stores/locale"
import { mapState } from 'pinia'
import { usePage } from "@inertiajs/inertia-vue3"

export default {
  computed: {
    ...mapState(useLocaleStore, { language: "getLanguage" }),
    isTermsPage () {
      return route().current() === "terms-and-conditions"
    }
  },
  methods: {
    updateLanguage (lang) {
      let url = ""
      const currentUrl = route().current()
      if (currentUrl === 'home') {
        url = "/" + lang
      } else {
        url = "/" + currentUrl + "/" + usePage().props.value.uuid + "/" + lang
      }
      window.location.assign(url)
    },
    goHome () {
      this.$inertia.visit("/")
    }
  }
}
</script>
