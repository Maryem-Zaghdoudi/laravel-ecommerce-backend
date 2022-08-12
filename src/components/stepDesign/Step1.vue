<template>
   <div class="flex flex-col md:flex-row lg:items-center md:items-center gap-3 ">
          
                        <div class="flex md:flex-row   ">
                        <div class="">
                       <div class="w-8 h-8  rounded-full bg-[#0059C8] text-white flex justify-center items-center">
                        <a href="# " class="">
                            <h1 class="text-2xl text-white">1</h1>
                        </a>
                    </div>
                      </div>
                      
                       
                     <div class=" px-3 lg:text-xl md:text-sm font-normal leading-8 text-blue-800">
                          Informations du contact
                   </div>
           
             
              </div>
              <span class="h-0.5 w-9 bg-gray-400 lg:w-1/1 px-5 "></span>
              <div class="flex md:flex-row ">
           <div class="lg:px-5">
                       <div class="w-8 h-8  rounded-full bg-[#C4C4C4] text-white flex justify-center items-center">
                        <a href="# " class="">
                            <h1 class="text-2xl text-white">2</h1>
                        </a>
                    </div>
                      </div>
                    
            <div class=" px-3 lg:text-xl md:text-sm font-normal leading-8 text-gray-400">
              Spécif  ications du projet
            </div>
            
            </div>
            <span class="h-0.5 w-9 bg-gray-400 lg:w-1/1 px-5 "></span>
            <div class="flex md:flex-row ">
             <div class="lg:px-5">
                       <div class="w-8 h-8  rounded-full bg-[#C4C4C4] text-white flex justify-center items-center">
                        <a href="# " class="">
                            <h1 class="text-2xl text-white">3</h1>
                        </a>
                    </div>
                      </div>
                      
                    
                     <div class=" px-3 md:text-sm lg:text-xl font-normal leading-8 text-gray-400">
                        Paiement
                       </div>
           
              </div>
        </div>
            <form class=" mt-9 " >
                <div class="grid  mb-6 lg:grid-cols-3  gap-4">
                    <div>
    
    <select id="location"  name="location" class=" block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
      <option>United States</option>
      <option selected="">Entité</option>
      <option>Mexico</option>
    </select>
  </div>
                    <div class="lg:col-span-2">
                        <input type="text" id="last_name" v-model="form.nomcomplet"
                            class="bg-[#ffffff] text-gray-900 text-sm rounded-lg border border-gray-300 block w-full p-2"
                            placeholder="Nom Complet" @input="nom=$event.target.value" required />
                            <p class="mt-2 text-sm text-red-600" v-for="e in errors">{{ e }}</p>
                    </div>
                    
                </div>
                <div class="grid  mb-6 lg:grid-cols-4 gap-4">
                    <div>
   
    <select id="location" name="location" class=" block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
      <option>United States</option>
      <option selected="">Pays</option>
      <option>Mexico</option>
    </select>
  </div>
                      <div class="lg:col-span-3">
                        <input type="text" id="last_name" v-model="form.pays"
                            class="bg-[#ffffff] text-gray-900 text-sm border border-gray-300 rounded-lg block w-full p-2"
                            placeholder="Numéro de téléphone" required />
                    </div>
                </div>
                <div class="grid gap-6 mb-6 lg:grid-cols-1">
                    <input type="text" id="default-input" v-model="form.Ntelephone"
                        class="bg-[#ffffff] text-gray-900 border border-gray-300 text-sm rounded-lg block w-full p-2"
                        placeholder="Adresse électronique" />
                </div>

                 <div class="grid gap-6 mb-6 lg:grid-cols-1">
                       <div>
    
    <select id="location" name="location" class=" block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
      <option>United States</option>
      <option selected="">Catégorie du projet</option>
      <option>Mexico</option>
    </select>
  </div>
                </div>
                <div class="grid gap-4 mb-6 lg:grid-cols-2">
                    <div>
    
    <select id="location" name="location" class=" block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
      <option>United States</option>
      <option selected="">Type</option>
      <option>Mexico</option>
    </select>
  </div>
                    <div>
                        <input type="text" id="last_name" v-model="form.service"
                            class="bg-[#ffffff] text-gray-900 text-sm rounded-lg border border-gray-300 block w-full p-2"
                            placeholder="Votre Service" required />
                    </div>
                </div>
            </form>
            <div class="text-black font-blod text-base text-center">
                             Je veux être contacté(e)
                   </div>
                   <div class="text-black font-blod text-base text-center py-4 gap-2">
                    <label>
  <input type="checkbox" class="rounded-full" checked> Par Téléphone
</label>
<label>
  <input type="checkbox" class="rounded-full" checked> Par Adresse éléctronique
</label>
                   </div>
</template>
<script setup>
import { Menu, MenuButton, MenuItem, MenuItems } from "@headlessui/vue";

import {
  ChevronDownIcon,
 
} from "@heroicons/vue/solid";
import DetailProduct from "../DetailProduct.vue";
import AcheterMaintenantVue from "../AcheterMaintenant.vue";
import AcheterMaintenant from "../AcheterMaintenant.vue";

</script>
<script>

export default {
  name: "modal",
  data() {
    return {
      showDetail: true,
      activePhase: 1,
      errors:[] ,
        form:{
              entite:null,
              nomcomplet:null,
              pays:null,
              Ntelephone:null,
              adresse:null,
              catagerie:null,
              type:null,
              service:null,
              partelephone:null,
              parmail:null

        },
     
     
      toggleModal: false,
      toggleModal1: false,
      toggleModal2: false
    };
  },
  ready:function(){
    console.log('ready');
  },
   methods:{
    goToStep: function(){
      if(this.step == 1)
      {
        if(!this.form.nomcomplet)
        {
          this.errors = 'please fill out your name';
          return false;
        }
      }
     this.step++;
    },
    PrevToStep: function(){
     this.step--;
    }
  },
}
</script>