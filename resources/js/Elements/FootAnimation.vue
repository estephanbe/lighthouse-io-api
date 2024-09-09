<template>
  <div class="main-container position-relative">
    <div class="feet-main-container">
      <div class="feet-wrapper">
        <img class="foot-image first" src="../../assets/images/foot-1.svg" />
        <img class="foot-image second" src="../../assets/images/foot-2.svg" />
        <img class="foot-image third" src="../../assets/images/foot-3.svg" />
        <img class="foot-image fourth" src="../../assets/images/foot-4.svg" />
        <img class="foot-image fifth" src="../../assets/images/foot-5.svg" />
        <img class="foot-image sixth" src="../../assets/images/foot-6.svg" />
        <img class="foot-image seventh" src="../../assets/images/foot-7.svg" />
        <img class="foot-image eighth" src="../../assets/images/foot-8.svg" />
      </div>
    </div>
  </div>
</template>

<style scoped>
  .feet-main-container {
    position: absolute;
    width: 100%;
  }
  .feet-wrapper {
    display: flex;
    flex-direction: column;
    width: 100%;
    position: relative;
  }
  .foot-image {
    width: 46px;
    height: 46px;
    position: absolute;
    display: none;
  }
  .rtl .foot-image {
    transform: scaleX(-1);
  }
  .first {
    left: 104%;
    top: -80px;
    display: block !important;
  }
  .rtl .first {
    left: -20%;
  }
  .second {
    left: 75%;
    top: -10px;
  }
  .rtl .second {
    left: 5%;
  }
  .third {
    left: 87%;
    top: 80px;
  }
  .rtl .third {
    left: -1%
  }
  .fourth {
    left: 55%;
    top: 100px
  }
  .rtl .fourth {
    left: 34%;
  }
  .fifth {
    left: 58%;
    top: 200px
  }
  .rtl .fifth {
    left: 30%;
  }
  .sixth {
    left: 25%;
    top: 170px;
  }
  .rtl .sixth {
    left: 60%;
  }
  .seventh {
    left: 15%;
    top: 270px;
  }
  .rtl .seventh {
    left: 65%;
  }
  .eighth {
    left: -12%;
    top: 240px;
  }
  .rtl .eighth {
    left: 95%;
  }
  @media (min-width: 375px) {
    .feet-wrapper img {
      width: 54px;
      height: 54px;
    }
    .feet-main-container {
      top: -50px
    }
  }
  @media (min-width: 425px) {
    .feet-wrapper img {
      width: 62px;
      height: 62px;
    }
    .feet-main-container {
      top: -90px;
      left: 50px
    }
    .rtl .feet-main-container {
      left: -40px;
    }
    .third {
      left: 91%;
      top: 90px;
    }
    .fourth {
      left: 43%;
      top: 110px
    }
    .fifth {
      left: 55%;
      top: 230px
    }
    .sixth {
      left: 7%;
      top: 205px;
    }
    .seventh {
      left: 2%;
      top: 330px;
    }
    .eighth {
      left: -34%;
      top: 310px;
    }
  }
  @media (min-width: 768px) {
    .feet-wrapper img {
      width: 71px;
      height: 71px;
    }
    .feet-main-container {
      top: -170px;
      left: 220px;
    }
    .rtl .feet-main-container {
      left: -150px;
    }
    .fifth {
      transform: rotate(9deg);
    }
    .sixth {
      transform: rotate(28deg);
    }
    .seventh {
      transform: rotate(48deg);
    }
    .eighth {
      transform: rotate(62deg);
    }
  }
  @media (min-width: 1024px) {
    .feet-wrapper img {
      width: 96px;
      height: 96px;
    }
    .feet-main-container {
      top: -210px;
      left: 190px;
      width: 150%;
    }
    .rtl .feet-main-container {
      left: -350px;
    }
    .third {
      left: 71%;
      top: 210px;
    }
    .fifth {
      left: 35%;
      top: 330px;
    }
    .rtl .seventh {
      top: 400px;
    }
    .rtl .eighth {
      top: 350px;
    }
  }
  @media (min-width: 1440px) {
    .feet-wrapper img {
      width: 134px;
      height: 134px;
    }
    .feet-main-container {
      top: -220px;
      left: 250px;
      width: 160%;
    }
    .rtl .feet-main-container {
      left: -500px;
    }
    .second {
      left: 81%;
    }
    .third {
      left: 80%;
      top: 240px;
    }
    .fourth {
      left: 49%;
      top: 200px;
    }
    .fifth {
      left: 40%;
      top: 470px;
    }
    .sixth {
      left: 12%;
      top: 355px;
    }
    .seventh {
      left: -6%;
      top: 580px;
    }
    .rtl .seventh {
      top: 620px;
    }
    .eighth {
      left: -31%;
      top: 370px;
    }
    .rtl .eighth {
      top: 530px;
    }
  }
  @media (min-width: 2560px) {
    .feet-main-container {
      top: -330px;
      left: 530px;
      width: 170%;
    }
    .rtl .feet-main-container {
      left: -900px;
      top: -200px;
    }
    .feet-wrapper img {
      width: 204px;
      height: 204px;
    }
    .rtl .feet-wrapper img {
      width: 250px;
      height: 250px;
    }
  }
</style>

<script>
import useLocaleStore from "@/Stores/locale"
import { mapState } from 'pinia'

export default {
  props: ["container"],
  computed: {
    ...mapState(useLocaleStore, { language: "getLanguage" }),
  },
  mounted () {
    window.addEventListener("scroll", this.handleScroll)
  },
  methods: {
    handleScroll () {
      const elementRect = document.getElementById("testimony-container").getBoundingClientRect()
      if (window.innerHeight - elementRect.top > 350 && elementRect.top + 500 > 0) {
        const allImages = document.getElementsByClassName("foot-image")
        for (let index = 1; index < allImages.length; index++) {
          setTimeout(() => {
            allImages[index].style.display = "block"
          }, 300 * index)
        }
        window.removeEventListener("scroll", this.handleScroll)
      }
    }
  },
  watch: {
    language (newValue, oldValue) {
      if (newValue !== oldValue) {
        const feet = document.getElementsByClassName("foot-image")
        for (var i = 1; i < feet.length; i++) {
          feet[i].style.display = "none"
        }
        window.addEventListener("scroll", this.handleScroll)
      }
    }
  }
}
</script>