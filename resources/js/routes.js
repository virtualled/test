import VueRouter from "vue-router";
import Home from "./components/Home"
import Warehouses from "./components/Warehouses";
import Commodities from "./components/Commoditis/Commodities";
import Commodity from "./components/Commoditis/Commodity";

const routes = [
    {
        path: "/",
        component: Home,
        name: "home",

    },
    {
        path: "/warehouses",
        component: Warehouses,
        name: "warehouses",
    },
    {
        path: "/commodities",
        component: Commodities,
        name: "commodities",
    },
    {
        path: "/commodity/:id",
        component: Commodity,
        name: "commodity",
    },

];

const router = new VueRouter({
    routes: routes,
    mode:'history'
});

export default router;
