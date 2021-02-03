import Vue from 'vue';
import Vuex from 'vuex';
import createPersistedState from 'vuex-persistedstate';

Vue.use(Vuex);

export default new Vuex.Store({
  state: {
    language: 'sr'
  },
  mutations: {
    changeLanguage (state, lang) {
      state.language = lang;
    }
  },
  plugins: [createPersistedState()],
})