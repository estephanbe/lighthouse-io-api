
<template>
  <Head title="Belight Community" />
  <hero></hero>
  <community-ad></community-ad>
  <community-features v-if="content && content.communityFeatures"></community-features>
  <media-types v-if="content && content.mediaTypesOptions"></media-types>
  <seperator></seperator>
  <testimony></testimony>
  <download-ad></download-ad>
  <contact-us></contact-us>
  <Footer></Footer>
</template>

<script>
import Hero from "@/Components/Hero.vue"
import CommunityAd from "@/Components/CommunityAd.vue"
import CommunityFeatures from "@/Components/CommunityFeatures.vue"
import MediaTypes from "@/Components/MediaTypes.vue"
import Seperator from "@/Elements/Separator.vue"
import Testimony from "@/Components/Testimony.vue"
import DownloadAd from "@/Components/DownloadAd.vue"
import ContactUs from "@/Components/ContactUs.vue"
import Footer from "@/Components/Footer.vue"
import useLocaleStore from "@/Stores/locale"
import { mapState, mapActions } from 'pinia'
import { Head } from "@inertiajs/inertia-vue3"

export default {
  name: 'App',
  props: ["lang"],
  computed: {
    ...mapState(useLocaleStore, { language: "getLanguage", content: "getContent" }),
  },
  methods: {
    ...mapActions(useLocaleStore, ["fetchContent"]),
    updateLanguage () {
      const app = document.getElementById("app")
      if (this.lang === "ar") {
        app.className = "rtl"
        app.setAttribute("dir", "rtl")
      } else {
        app.removeAttribute("dir")
        app.className = ""
      }
    }
  },
  created () {
    this.fetchContent(this.lang)
    this.updateLanguage()
  },
  components: {
    Hero,
    CommunityAd,
    CommunityFeatures,
    MediaTypes,
    Seperator,
    Testimony,
    DownloadAd,
    ContactUs,
    Footer,
    Head
  }
}
</script>
