<template>
  <div class="row primary-bg community-options justify-center">
    <div class="main-container secondary-text">
      <div class="options-title header">
        {{ content.mediaTypesTitle }}
      </div>
      <div class="media-types-container" v-if="content.mediaTypesOptions.length > 0">
        <media-type v-for="media in content.mediaTypesOptions" :key="media.name" :media="media"></media-type>
      </div>
    </div>
  </div>
</template>

<style scoped>
  .community-options {
    width: 100%;
  }
  .options-title {
    text-align: center;
  }
  .media-types-container {
    margin-top: 6%;
  }
  @media (min-width: 768px) {
    .media-types-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-evenly;
    }
  }
</style>

<script>
import useLocaleStore from "@/Stores/locale"
import { mapState } from 'pinia'
import MediaType from "@/Elements/MediaType.vue"

export default {
  computed: {
    ...mapState(useLocaleStore, { content: "getContent" }),
  },
  components: {
    MediaType
  }
}
</script>
