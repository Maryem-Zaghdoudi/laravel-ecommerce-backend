<template>
<SidebarNavProuduct :open="open" />
    <header>
        <div class="relative z-50 items-center">
            <div class="flex justify-around  absolute top-0 left-0 right-0   ">
                <RouterLink to="/" class="flex items-center">
                    <!-- <Logo /> -->
                    <img alt="intone market logo" class="logo ml-6 lg:ml-24 mt-4 lg:mt-8"
                        src="@/assets/logo-w-intone.png" width="332" />
                </RouterLink>

                <nav class="w-full mx-4 xl:w-5/6 text-white">
                    <font-awesome-icon @click="toggle()"
                        v-click-outside="() => hideDropdown()" icon="bars" class="block lg:hidden mr-2" width="48" />
                    <RouterLink to="/" class="flex items-center">
                        <span class="hidden lg:block mr-12 text-white">Home </span>
                    </RouterLink>

                    <RouterLink to="/design" class="flex items-center">
                        <span class="hidden lg:block mr-12">Design</span>
                    </RouterLink>
                    <RouterLink to="/coding" class="flex items-center">
                        <span class="hidden lg:block mr-12">Coding</span>
                    </RouterLink>
                    <RouterLink to="/marketing" class="flex items-center">
                        <span class="hidden lg:block mr-12">Marketing Digital</span>
                    </RouterLink>
                    <RouterLink to="/contact" class="flex items-center">
                        <span class="hidden lg:block mr-12">contact</span>
                    </RouterLink>
                    <select class="border-none py-0 bg-transparent  " v-model="$i18n.locale" @change="changeLanguage">
                        <option class="bg-transparent text-primary" value="en">En</option>
                        <option class="bg-transparent text-primary" value="fr">Fr</option>
                    </select>
                </nav>
            </div>
        </div>
    </header>

</template>
<script>
import Logo from './Logo.vue';

import SidebarNavProuduct from './SidebarNavProuduct.vue';
export default {
     
    props: { open: Boolean, items: Array },
    data() {
        return {
            open: false,
            opened: this.open,
            dimmer: true,
            right: false,
        };
    },
    watch: {
        open: function (newVal, oldVal) {
            // watch it
            this.opened = newVal;
        },
    },
    methods: {
        
        toggle() {
            this.open = !this.open;
        },
        hideDropdown() {
            // console.log("close dropdown", this.opened);
            this.open = false;
        },
    },
    components: { Logo, SidebarNavProuduct }
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
    display: flex;
    justify-content: flex-end;
}
</style>