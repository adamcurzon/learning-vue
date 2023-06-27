import { createStore } from 'vuex'

// Create a new store instance.
const store = createStore({
  state () {
    return {
      count: 0,
      theme: "dark"
    }
  },
  mutations: {
    storeInfo (state, payload){
        state.api_data = payload;
    },
    increment (state) {
      state.count++
    },
    reset(state){
        state.count = 0;
    },
    changeTheme(state, theme) {
      state.theme = theme;
    }
  }
})

export default store;