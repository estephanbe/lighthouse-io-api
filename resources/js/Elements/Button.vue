<template>
  <button class="main-button" @click="$emit('button-clicked')">
    <div class="button-background">
      <img v-if="color === 'primary'" src="../../assets/images/button-bg-primary.svg" alt="" />
      <img v-else src="../../assets/images/button-bg-secondary.svg" alt="" />
    </div>
    <div class="button-content" :class="color === 'primary' ? 'secondary-text' : 'primary-text'">{{ content }}</div>
  </button>
</template>

<style scoped>
  .main-button {
    background-color: transparent;
    outline: none;
    box-shadow: none;
    border: none;
    position: relative;
    font-family: ZingRustDemo;
    font-size: 22px;
    width: 216px;
    height: 72px;
    cursor: pointer;
    z-index: 2;
  }
  .rtl .main-button {
    font-size: 18px;
  }
  .button-content {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 100%;
    transform: translate(-55%, -43%);
  }
  .button-background img {
    max-width: 100%;
  }
  .rtl .button-background {
    transform: scaleX(-1);
  }
  .rtl .button-content {
    transform: translate(-45%, -43%);
  }
  @media (min-width: 1440px) {
    .main-button {
      width: 269px;
      height: 89px;
      font-size: 28px;
    }
    .main-button img {
        width: 100%;
    }
    .rtl .main-button {
      font-size: 24px;
    }
  }
  @media (min-width: 2560px) {
    .button-background img {
      width: 310px;
    }
    .main-button {
      width: 400px;
      height: 200px;
      font-size: 40px;
    }
  }
</style>

<script>
export default {
  props: ["color", "content"],
  emits: ["button-clicked"]
}
</script>
