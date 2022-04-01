import Vue from "vue";
import Vuex from "vuex";

Vue.use(Vuex);

export default new Vuex.Store({
  state: {
    vuelos: [
      {
        id: 1,
        precio: 120.05,
        aerolinea: "Avianca",
        escalar: 2,
        duracion: "00:54",
      },
      {
        id: 2,
        precio: 300.0,
        aerolinea: "Avianca",
        escalar: 1,
        duracion: "02:30",
      },
      {
        id: 3,
        precio: 257.5,
        aerolinea: "Latam",
        escalar: 2,
        duracion: "03:05",
      },
      {
        id: 4,
        precio: 890.0,
        aerolinea: "Avianca",
        escalar: 3,
        duracion: "10:45",
      },
      {
        id: 5,
        precio: 1040.0,
        aerolinea: "Tame",
        escalar: 2,
        duracion: "11:20",
      },
      {
        id: 6,
        precio: 470.6,
        aerolinea: "Avianca",
        escalar: 4,
        duracion: "05:10",
      },
      {
        id: 7,
        precio: 700.8,
        aerolinea: "Latam",
        escalar: 1,
        duracion: "06:17",
      },
    ],
  },
  mutations: {},
  actions: {},
  getters: {},
});
