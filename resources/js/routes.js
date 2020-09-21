import VueRouter from "vue-router";
import Home from "./components/Home"
import Warehouses from "./components/Warehouses";
import Commodities from "./components/Commoditis/Commodities";
import Commodity from "./components/Commoditis/Commodity";
import Characteristic from "./components/characteristics/Characteristic";
import Contragents from "./components/Contragents/Contragents";
import Orders from "./components/Orders/Orders";
import OrderShow from "./components/Orders/OrderShow";
import Production from "./components/Production/Production";
import ProductionShow from "./components/Production/ProductionShow";

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
        path: "/commodity/:id/edit",
        component: () => import('./components/Commoditis/CommodityEdit'),
        name: 'commodityEdit'
    },
    {
        path: "/products",
        component: () => import('./components/Products/ProductsIndex'),
        name: "products"
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
        path: "/contragents/create",
        component: () => import('./components/Contragents/ContragentsCreate'),
        name: "contragentsCreate",
    },
    {
        path: "/contragents/:id",
        component: () => import('./components/Contragents/ContragentsShow'),
        name: "contragentsShow",
    },
    {
        path: "/contragents/:id/edit",
        component: () => import('./components/Contragents/ContragentsEdit'),
        name: "contragentsEdit",
    },
    {
        path: "/orders",
        component: Orders,
        name: "orders",
    },
    {
        path:'/orders/create',
        component: () => import('./components/Orders/OrderCreate'),
        name: 'ordersCreate'
    },
    {
        path: "/orders/:id",
        component: OrderShow,
        name: "order",
    },
    {
        path: "/production",
        component: Production,
        name: "production",
    },
    {
        path: "/production/:id",
        component: ProductionShow,
        name: "productionShow",
    },

];

const router = new VueRouter({
    routes: routes,
    mode:'history'
});

export default router;
