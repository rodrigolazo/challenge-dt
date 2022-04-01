import Vue from "vue";
import Router from "vue-router";
import Search from "./views/Search.vue";
import Tickets from "./views/Tickets.vue";
import Home from "./views/Home.vue";

Vue.use(Router);

export default new Router({
  routes: [
    {
      path: "/",
      name: "home",
      component: Home,
    },
    {
      path: "/search",
      name: "search",
      component: Search,
    },

    {
      path: "/tickets",
      name: "tickets",
      component: Tickets,
    },
  ],
});
