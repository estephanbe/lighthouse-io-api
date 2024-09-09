<template>
  <div class="row static-media-wrapper">
    <div class="main-container">
      <img :src="thumbnail" alt="" />
    </div>
  </div>
</template>

<style scoped>
  .static-media-wrapper img {
    width: 100%;
    height: auto;
    border-radius: 8px;
  }
</style>

<script>
export default {
  props: ["thumbnail"]
}
</script>
