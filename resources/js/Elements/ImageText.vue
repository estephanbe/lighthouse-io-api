<template>
  <div class="row justify-center" :class="alignment === 'left' ? 'image-text-container-left' : 'image-text-container-right'">
    <div class="main-container">
      <div class="image-text-container">
        <div class="image-container">
          <div class="image-text-image" :style="'background-image: url(' + getImage() + ')'">
            <img class="image-stroke" :alt="data.name" :src="getStroke()" />
          </div>
        </div>
        <div class="text-container">
          <div class="title image-text-title">{{ data.name }}</div>
          <div class="subtitle secondary-text">{{ data.description }}</div>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>
  .rtl .image-text-container-right .text-container {
    text-align: left;
  }
  .image-text-image {
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    overflow: hidden;
    display: flex;
  }
  .image-text-title {
    text-transform: capitalize;
    margin-bottom: 8px;
  }
  .image-container {
    text-align: center;
    position: relative;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .rtl .image-container {
    transform: scaleX(-1);
  }
  .text-container {
    margin-top: 17px;
    margin-bottom: 120px;
  }

  @media (min-width: 768px) {
    .image-text-container {
      display: flex;
      flex-direction: row-reverse;
      justify-content: space-between;
      align-items: center;
    }
    .image-text-container-right .image-text-container {
      flex-direction: row;
    }
    .image-container {
      width: 53%;
      display: flex;
      align-items: center;
      justify-content: flex-start;
    }
    .features:nth-child(odd) .image-container {
        justify-content: flex-end;
    }
    .text-container {
      width: 45%;
      margin: 0;
    }
    .image-text-container-right .text-container {
      text-align: right;
    }
  }
</style>

<script>
import listenStroke from "../../assets/images/section-image-listen.svg"
import connectStroke from "../../assets/images/section-image-watch.svg"
import watchStroke from "../../assets/images/section-image-connect.svg"

export default {
  props: ["alignment", "data"],
  methods: {
    getImage () {
      return process.env.VITE_ASSETS_URL + this.data.image
    },
    getStroke () {
      switch (this.data.stroke) {
        case "listen":
          return listenStroke
        case "watch":
          return watchStroke
        case "connect":
          return connectStroke
        default:
          break
      }
    },
    onImageLoad () {
      const image = document.getElementById("image-text-image-" + this.data.name)
      const stroke = document.getElementById("image-stroke-" + this.data.name)
      image.style.height = stroke.offsetHeight
    }
  }
}
</script>
