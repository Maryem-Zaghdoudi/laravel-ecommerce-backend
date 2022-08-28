<script setup>
import { RouterLink, RouterView } from "vue-router";
import { useCartStore } from "./stores/cart";
import TheFooter from "./components/TheFooter.vue";
import TheHomeFooter from "./components/TheHomeFooter.vue";
import TheHomeMenu from "./components/TheHomeMenu.vue";
import TheMenu from "./components/TheMenu.vue";

const CartStore = useCartStore();
function changeLanguage(obj) {
    localStorage.setItem('language', obj.target.value)
}
</script>

<template>
    <div v-if="$route.path === '/market'">
        <TheMenu />
        <RouterView />
    </div>
    <div v-else-if="$route.path === '/'">
        <TheHomeMenu />
        <RouterView />
        <TheHomeFooter />
    </div>

    <div v-else>
        <TheHomeMenu />
        <RouterView />
        
    </div>

</template>
<script>
export default {
    data() {
        return {
            open: false,
            dimmer: true,
            right: false,
        };
    },
    methods: {
        toggle() {
            this.open = !this.open;
        },
        hideDropdown() {
            console.log("close dropdown");
            this.open = false;
        },
    },
};
</script>
<style>
@import "@/assets/base.css";

#app {
    margin: 0 auto;
    padding-top: 4.5%;
    font-weight: normal;
    padding-top: 0%;
    font-family: "Product Sans";
}

/* @media (max-width: 576px) {
    #app {
        padding-top: 0%;
    }
} */

nav {
    text-align: center;
    margin-top: 2rem;
    margin-bottom: 1rem;
    font-family: "Product Sans";
    font-style: normal;
    font-weight: 700;
    font-size: 16px;
    letter-spacing: 0.01em;
    text-transform: capitalize;
    /* identical to box height, or 21px */
    color: #1d1d1d;
    display: flex;
    justify-content: flex-end;
}
</style>