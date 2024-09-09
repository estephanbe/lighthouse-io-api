import { defineStore } from "pinia";
import { usePage } from '@inertiajs/inertia-vue3';

const useLocaleStore = defineStore("locale", {
  state: () => {
    return {
        currentLanguage: usePage().props.value.lang,
        content: []
    }
  },
  getters: {
    getLanguage: (state) => state.currentLanguage,
    getContent: (state) => state.content
  },
  actions: {
    async fetchContent (lang) {
      try {
        this.currentLanguage = lang
        this.content = usePage().props.value.locales
        return true
      } catch (error) {
        return error
      }
    }
  }
});

export default useLocaleStore