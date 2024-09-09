<template>
  <Head title="Belight Community Preview" />
  <app-navigation></app-navigation>
  <div class="preview-container main-container">
    <div class="main-container preview-wrapper">
      <div class="media-preview">
        <video-player
          v-if="isVideo"
          :thumbnail="thumbnail"
          :url="media"
        />
        <audio-player
          v-else-if="isAudio"
          :thumbnail="thumbnail"
          :url="media"
        />
        <static-media-type v-else :thumbnail="thumbnail"></static-media-type>
        <div class="media-meta">
          <div class="highlight-text media-title preview-font">{{ previewItem.title }}</div>
          <div class="highlight-text media-creator preview-font">{{ creator }}</div>
        </div>
      </div>
    </div>
    <download-app></download-app>
  </div>
  <div class="preview-footer row">
    <img src="../../assets/images/preview-stroke.svg" alt="" />
    <div class="secondary-text footer-subtitle copyrights">{{ content.copyrights }}</div>
  </div>
</template>

<style scoped>
  .preview-wrapper {
    padding-top: 44px;
  }
  .media-title {
    font-size: 16px;
    line-height: 32px;
  }
  .media-creator {
    opacity: 0.72;
    font-size: 16px;
    line-height: 25px;
  }
  .preview-footer {
    position: relative;
    width: 100%;
    min-height: 20vh;
    display: flex;
    align-items: flex-end;
  }
  .preview-footer img {
    width: 100%;
    height: auto;
  }
  .copyrights {
    position: absolute;
    bottom: 5px;
    width: 100%;
    text-align: center;
  }
  @media (min-width: 768px) {
    .preview-container {
      max-width: 488px;
    }
    .preview-wrapper {
      display: flex;
      justify-content: center;
    }
    .media-title {
      font-size: 20px;
    }
  }
  @media (min-width: 1440px) {
    .preview-container {
      display: flex;
      max-width: 1000px;
    }
    .preview-wrapper {
      max-width: 488px;
    }
  }
  @media (min-width: 2560px) {
    .preview-container {
      max-width: 1800px;
    }
    .preview-wrapper {
      max-width: 800px;
    }
    .media-title {
      font-size: 32px;
      line-height: 42px;
    }
    .media-creator {
      font-size: 24px;
      line-height: 24px;
    }
  }
</style>

<script>
import AppNavigation from '@/Components/AppNavigation.vue'
import VideoPlayer from '@/Components/VideoPlayer.vue'
import AudioPlayer from '@/Components/AudioPlayer.vue'
import StaticMediaType from '@/Components/StaticMediaType.vue'
import DownloadApp from '@/Components/DownloadApp.vue'
import { Head } from "@inertiajs/inertia-vue3"
import useLocaleStore from "@/Stores/locale"
import { mapState, mapActions } from 'pinia'
import mediaThumbnail from "../../assets/images/media-thumbnail.png"

export default {
  components: {
    AppNavigation,
    Head,
    VideoPlayer,
    DownloadApp,
    AudioPlayer,
    StaticMediaType
  },
  props : {
      uuid: String,
      lang: String,
      media: Object,
  },
  computed: {
    ...mapState(useLocaleStore, { language: "getLanguage", content: "getContent" }),
    previewItem () {
      return this.media;
    },
    isAudio () {
      return this.previewItem.type === "track" || this.previewItem.type === "audiobook_chapter" || this.previewItem.type === "podcast_episode"
    },
    isVideo () {
      return this.previewItem.type === "movie" || this.previewItem.type === "music_video" || this.previewItem.type === "series_episode" || this.previewItem.type === "short_clip"
    },
    creator () {
      switch (this.previewItem.type) {
        case "movie":
        case "music_video":
        case "series":
        case "series_episode":
        case "short_clip":
        case "audiobook":
        case "audiobook_chapter":
        case "podcast":
        case "podcast_episode":
          return this.previewItem.creator.title
        case "track":
        case "album":
        case "playlist":
        case "single":
          return this.getName(this.previewItem.artists)
        case "course":
          return this.previewItem.teacher.name
        default:
          return ""
      }
    },
    thumbnail () {
        return this.previewItem.thumbnail ? this.previewItem.full_image_url : mediaThumbnail
    },
    media () {
        return this.previewItem.full_media_url
    }
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
    },
    getName (artistsArray) {
      let artists = artistsArray[0].name
      for (var i = 1; i < artistsArray.length && i < 3; i++) {
        artists += ", " + artistsArray[i].name
      }
      if (artistsArray.length > 3) artists += "..."
      return artists
    }
  },
  created () {
    this.fetchContent(this.lang)
    this.updateLanguage()
  }
}
</script>
