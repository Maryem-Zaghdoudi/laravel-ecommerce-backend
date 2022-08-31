<script setup>
import { Menu, MenuButton, MenuItem, MenuItems } from "@headlessui/vue";

import {
  ChevronDownIcon,

} from "@heroicons/vue/solid";
import DevDetail from "../components/DevDetail.vue";
import AchterDev from "../components/AchterDev.vue";
// import DetailProduct from "../../components/DetailProduct.vue";
// import AcheterMaintenant from "../../components/AcheterMaintenant.vue";

</script>
<script>

export default {
  name: "modal",
  data() {
    return {
      product: {
        "url": "/src/assets/shop.png"
      },
      products: [
        {
          "id": 1,
          "url": "/src/assets/zebra.png",

        },
        {
          "id": 2,
          "url": "/src/assets/zebra2.png",

        },
        {
          "id": 3,
          "url": "/src/assets/zebra3.png",

        },
      ],
      categories: [],
      showDetail: true,
      activePhase: 1,
      user_detail1: {
        name: '',
        email: ''
      },
      user_detail2: {
        city: '',
        state: ''
      },


      toggleModal: false,
      toggleModal1: false,
      toggleModal2: false
    };
  },
  methods: {
    changeImage(data) {
      this.product.url = data
    },

    ready: function () {
      console.log('ready');
    },

    goToStep: function (step) {
      this.activePhase = step;
    },
    hideDetail: function () {
      this.showDetail = false;
    }
  },
}
</script>

<template>
<div>
  <img src="@/assets/bg-2.png" class="block bg-no-repeat bg-cover min-h-[110px] w-full " alt="Motorbike Smoke" />

  <main class="lg:px-24 ">

    <div class=" flex flex-wrap justify-center gap-x-2 mb-4  ">
      <!--   Modèle Graphique -->
      <Menu as="div" class="relative inline-block text-left">
        <div>
          <MenuButton
            class="inline-flex justify-center w-full rounded-md    px-4 py-2   text-base font-medium text-primary hover:bg-gray-50  ">
            Templates Web
            <ChevronDownIcon class="-mr-1 ml-2 h-5 w-5" aria-hidden="true" />
          </MenuButton>
        </div>

        <transition enter-active-class="transition ease-out duration-100"
          enter-from-class="transform opacity-0 scale-95" enter-to-class="transform opacity-100 scale-100"
          leave-active-class="transition ease-in duration-75" leave-from-class="transform opacity-100 scale-100"
          leave-to-class="transform opacity-0 scale-95">
          <MenuItems
            class="origin-top-left absolute left-0 mt-2 w-32 z-50    rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none">
            <div class="py-1">
              <MenuItem v-slot="{ active }">
              <a href="#"
                :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700', 'block px-4 py-2 text-sm']">Account
                settings</a>
              </MenuItem>
              <MenuItem v-slot="{ active }">
              <a href="#"
                :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700', 'block px-4 py-2 text-sm']">Support</a>
              </MenuItem>
              <MenuItem v-slot="{ active }">
              <a href="#"
                :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700', 'block px-4 py-2 text-sm']">License</a>
              </MenuItem>
              <form method="POST" action="#">
                <MenuItem v-slot="{ active }">
                <button type="submit"
                  :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700', 'block w-full text-left px-4 py-2 text-sm']">Sign
                  out</button>
                </MenuItem>
              </form>
            </div>
          </MenuItems>
        </transition>
      </Menu>
      <!--   Documents -->
      <Menu as="div" class="relative inline-block text-left">
        <div>
          <MenuButton
            class="inline-flex justify-center w-full rounded-md    px-4 py-2   text-base font-medium text-primary hover:bg-gray-50  ">
            Templates Mobile
            <ChevronDownIcon class="-mr-1 ml-2 h-5 w-5" aria-hidden="true" />
          </MenuButton>
        </div>

        <transition enter-active-class="transition ease-out duration-100"
          enter-from-class="transform opacity-0 scale-95" enter-to-class="transform opacity-100 scale-100"
          leave-active-class="transition ease-in duration-75" leave-from-class="transform opacity-100 scale-100"
          leave-to-class="transform opacity-0 scale-95">
          <MenuItems
            class="origin-top-left absolute left-0 mt-2 w-32 z-50    rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none">
            <div class="py-1">
              <MenuItem v-slot="{ active }">
              <a href="#"
                :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700', 'block px-4 py-2 text-sm']">Account
                settings</a>
              </MenuItem>
              <MenuItem v-slot="{ active }">
              <a href="#"
                :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700', 'block px-4 py-2 text-sm']">Support</a>
              </MenuItem>
              <MenuItem v-slot="{ active }">
              <a href="#"
                :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700', 'block px-4 py-2 text-sm']">License</a>
              </MenuItem>
              <form method="POST" action="#">
                <MenuItem v-slot="{ active }">
                <button type="submit"
                  :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700', 'block w-full text-left px-4 py-2 text-sm']">Sign
                  out</button>
                </MenuItem>
              </form>
            </div>
          </MenuItems>
        </transition>
      </Menu>
      <!--   Modéles 3D -->
      <Menu as="div" class="relative inline-block text-left">
        <div>
          <MenuButton
            class="inline-flex justify-center w-full rounded-md    px-4 py-2   text-base font-medium text-primary hover:bg-gray-50  ">
           Débuter un projet
            <ChevronDownIcon class="-mr-1 ml-2 h-5 w-5" aria-hidden="true" />
          </MenuButton>
        </div>

        <transition enter-active-class="transition ease-out duration-100"
          enter-from-class="transform opacity-0 scale-95" enter-to-class="transform opacity-100 scale-100"
          leave-active-class="transition ease-in duration-75" leave-from-class="transform opacity-100 scale-100"
          leave-to-class="transform opacity-0 scale-95">
          <MenuItems
            class="origin-top-left absolute left-0 mt-2 w-32 z-50    rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none">
            <div class="py-1">
              <MenuItem v-slot="{ active }">
              <a href="#"
                :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700', 'block px-4 py-2 text-sm']">Account
                settings</a>
              </MenuItem>
              <MenuItem v-slot="{ active }">
              <a href="#"
                :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700', 'block px-4 py-2 text-sm']">Support</a>
              </MenuItem>
              <MenuItem v-slot="{ active }">
              <a href="#"
                :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700', 'block px-4 py-2 text-sm']">License</a>
              </MenuItem>
              <form method="POST" action="#">
                <MenuItem v-slot="{ active }">
                <button type="submit"
                  :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700', 'block w-full text-left px-4 py-2 text-sm']">Sign
                  out</button>
                </MenuItem>
              </form>
            </div>
          </MenuItems>
        </transition>
      </Menu>
      <!--   UX / UI -->
      
      <!--   Vidéos -->
      



    </div>
    <!-- details products -->
    <div class="grid md:grid-cols-2  lg:gap-28  md:gap-10  ">
      <div>
        <div class="flex flex-row lg:gap-5 px-5 ">
          <div class="px-2">
            <button type="button"
              class="bg-[#dff1f8b0] text-[#0064D2] border border-blue-700 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-1.5 text-center inline-flex items-center">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18">
                </path>
              </svg>
              <span class="sr-only">Icon description</span>
            </button>
          </div>
          <div class="py-2">
            <ul class="flex flex-row gap-2">
              <li>
                <a href="/" class="no-underline hover:underline font-semibold text-sm leading-5 text-black">Home</a>
              </li>
              <li>/</li>
              <li>
                <a href="/shop"
                  class="no-underline hover:underline font-semibold text-sm leading-5 text-black">Desgin</a>
              </li>
              <li>/</li>
              <li>
                <a href="#" class="no-underline hover:underline font-semibold text-sm leading-5 text-[#0064D2]">Minimal
                  Zebra Logo</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="group col-span-4 px-5">
          <div class="w-full aspect-w-1 aspect-h-1 bg-gray-200 overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
            <img :src="product.url" class="w-full h-full object-center object-cover group-hover:opacity-75" />

          </div>
          <div class="grid grid-cols-3 gap-4 mt-4">

            <img v-for="product in products" @click="changeImage(product.url)" :src="product.url" alt="">

          </div>
        </div>

      </div>

      <div v-if="showDetail">
        <!-- <DetailProduct @some-event="hideDetail" /> -->
        <DevDetail @some-event="hideDetail"/>
      </div>
      <div v-else>
        <!-- <AcheterMaintenant /> -->
        <AchterDev />
      </div> 
    </div>
  </main>
</div>
</template>
