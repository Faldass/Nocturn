// import 'es6-promise/auto';
// import { resolve } from 'core-js/fn/promise';
import { createStore } from 'vuex'

const axios = require('axios');
const instance = axios.create({
  baseURL: "http://localhost/nocturn/src/php/index.php"
});

export default createStore({
  state: {
    //gestion des membres
    membres: [],

    //gestion des users
    status: "",
    user: "",
  },
  getters: {
  },
  mutations: {
    //gestion membres
    loadTeam(state, membres){ 
      console.log(membres);
      state.membres = membres;
    },

    //gestion users
    setStatus(state, status){
      state.status = status;
    }
  },
  actions: {
    //gestion des memmbres
    loadTeam({commit}){
      instance.post("?url=loadTeam")
        .then((res) => { 
          commit('loadTeam', res.data);
        })
        .catch((error) => {
          console.log(error);
        });
    },

    //gestion des users
    login:({commit}, userInfos) =>{
      commit("setStatus", "loading");
      return new Promise((resolve, reject) => {
        commit;
        instance.post("?url=connexion", userInfos)
        .then((res) => { 
          commit("setStatus", "");
          resolve(res);
        })
        .catch((error) => {
          commit("setStatus", "error_login");
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
