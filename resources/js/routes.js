import VueRouter from "vue-router";
import Home from "./components/Home"
import Warehouses from "./components/Warehouses";
import Commodities from "./components/Commoditis/Commodities";
import Commodity from "./components/Commoditis/Commodity";
import Characteristic from "./components/characteristics/Characteristic";
import Contragents from "./components/Contragents/Contragents";

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
    {
        path: "/characteristics",
        component: Characteristic,
        name: "characteristic",
    },
    {
        path: "/contragents",
        component: Contragents,
        name: "contragents",
    },

];

const router = new VueRouter({
    routes: routes,
    mode:'history'
});

export default router;
