import VueRouter from "vue-router";
import Home from "./components/Home"
import Warehouses from "./components/Warehouses";
import Commodities from "./components/Commoditis/Commodities";
import Commodity from "./components/Commoditis/Commodity";
import Characteristic from "./components/characteristics/Characteristic";
import Contragents from "./components/Contragents/Contragents";
import Orders from "./components/Orders/Orders";
import OrderShow from "./components/Orders/OrderShow";

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
    {
        path: "/orders",
        component: Orders,
        name: "orders",
    },
    {
        path: "/orders/:id",
        component: OrderShow,
        name: "order",
    },

];

const router = new VueRouter({
    routes: routes,
    mode:'history'
});

export default router;
