<template>
  <div class="community-features primary-bg" v-if="features.length > 0">
    <div class="features secondary-text" v-for="(feature, index) in features" :key="feature.name">
      <image-text :alignment="index % 2 === 0 ? 'left' : 'right'" :data="feature"></image-text>
    </div>
  </div>
</template>

<style scoped>
  .community-features {
    width: 100%;
    padding-bottom: 120px;
    padding-top: 120px;
  }
</style>

<script>
import useLocaleStore from "@/Stores/locale"
import { mapState } from 'pinia'
import ImageText from "@/Elements/ImageText.vue"

export default {
  computed: {
    ...mapState(useLocaleStore, { content: "getContent" }),
    features () {
      return this.content.communityFeatures
    }
  },
  components: {
    ImageText
  }
}
</script>
