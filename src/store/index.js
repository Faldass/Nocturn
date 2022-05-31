import { createStore } from 'vuex'

const axios = require('axios');
const instance = axios.create({
  baseURL: "http://localhost/nocturn/src/php/index.php"
});

export default createStore({
  state: {
  },
  getters: {
  },
  mutations: {
  },
  actions: {
    createAccount:({commit}, userInfos) =>{
      commit;
      instance.post("?url=inscription", userInfos)
      .then((res) => { 
        console.log(res);
      })
    }
  },
  modules: {
  }
})
