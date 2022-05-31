// import 'es6-promise/auto';
// import { resolve } from 'core-js/fn/promise';
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
    login:({commit}, userInfos) =>{
      return new Promise((resolve, reject) => {
        commit;
        instance.post("?url=connexion", userInfos)
        .then((res) => { 
          resolve(res);
        })
        .catch((error) => {
          reject(error);
        });
      });
    },
    createAccount:({commit}, userInfos) =>{
      return new Promise((resolve, reject) => {
        commit;
        instance.post("?url=inscription", userInfos)
        .then((res) => { 
          resolve(res);
        })
        .catch((error) => {
          reject(error);
        });
      });
    },
  },
  modules: {
  }
})
