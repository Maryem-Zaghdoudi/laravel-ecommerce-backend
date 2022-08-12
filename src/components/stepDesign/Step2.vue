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
              <span class="h-0.5 w-9 bg-blue-600 lg:w-1/1 px-5 "></span>
              <div class="flex md:flex-row ">
           <div class="lg:px-5">
                       <div class="w-8 h-8  rounded-full bg-[#0059C8] text-white flex justify-center items-center">
                        <a href="# " class="">
                            <h1 class="text-2xl text-white">2</h1>
                        </a>
                    </div>
                      </div>
                    
            <div class=" px-3 lg:text-xl md:text-sm font-normal leading-8 text-blue-800">
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
                <div class="grid  mb-6 lg:grid-cols-2 gap-4">
                    <div>
   
    <select id="location" name="location" class=" block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
      <option>United States</option>
      <option selected="">Support de usage</option>
      <option>Mexico</option>
    </select>
  </div>
                    <div>
   
    <select id="location" name="location" class="block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
      <option>United States</option>
      <option selected="">Durée de la réalisation</option>
      <option>Mexico</option>
    </select>
  </div>
                </div>
                <div class="grid  mb-6 lg:grid-cols-4 gap-4">
                  <div class="lg:col-span-2">
                    <div class="relative flex items-start">
                      <div class="flex items-center h-5"><input id="candidates" aria-describedby="candidates-description" name="candidates" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-secondary border-gray-300 rounded-full" /></div>
                    <div class="ml-3 text-sm">
                      <label for="comments" class="font-medium text-gray-700">J’ai ma propre charte graphique ou palette de couleurs</label>
                    </div>
                    </div>
                    <div class="relative flex items-start">
      <div class="flex items-center h-5">
        <input id="candidates" aria-describedby="candidates-description" name="candidates" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-secondary border-gray-300 rounded-full" />
      </div>
      <div class="ml-3 text-sm">
        <label for="candidates" class="font-medium text-gray-700">Vous êtes les experts</label>
       
      </div>
    </div>
                    </div>
                    <div>
  
    <select id="location" name="location" class="block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
      <option>United States</option>
      <option selected="">Piéce jointe</option>
      <option>Mexico</option>
    </select>
  </div>
                   <div>
    
    <select id="location" name="location" class=" block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
      <option>United States</option>
      <option selected="">Choix de couleurs</option>
      <option>Mexico</option>
    </select>
  </div>
                </div>
                <div class="grid gap-6 mb-6 lg:grid-cols-1">
                    <input type="text" id="default-input"
                        class="bg-[#ffffff] text-gray-900 border border-gray-300 text-sm rounded-lg block w-full p-2"
                        placeholder="Vos concurrents ( nommez 3 exemples minimum )" />
                </div>
                <div class="grid gap-6 mb-6 lg:grid-cols-1">
                    <input type="text" id="default-input"
                        class="bg-[#ffffff] text-gray-900 border border-gray-300 text-sm rounded-lg block w-full p-2"
                        placeholder="Cibles" />
                </div>

                 <div class="grid  mb-6 lg:grid-cols-2 gap-4">
                    <div>
    
    <select id="location" name="location" class=" block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
      <option>United States</option>
      <option selected="">Langue</option>
      <option>Mexico</option>
    </select>
  </div>
                    <div>
   
    <select id="location" name="location" class=" block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
      <option>United States</option>
      <option selected="">Nombre de propositions</option>
      <option>Mexico</option>
    </select>
  </div>
                </div>
                  <div class="grid gap-6 mb-6 lg:grid-cols-1">
                    <input type="text" id="default-input"
                        class="bg-[#ffffff] text-gray-900 border border-gray-300 text-sm rounded-lg block w-full p-2"
                        placeholder="Cibles" />
                </div>
            </form>
</template>
<script setup>
import { Menu, MenuButton, MenuItem, MenuItems } from "@headlessui/vue";

import {
  ChevronDownIcon,
 
} from "@heroicons/vue/solid";


</script>
<script>

export default {
  name: "modal",
  data() {
    return {
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
  ready:function(){
    console.log('ready');
  },
  methods:{
    goToStep: function(step){
      this.activePhase = step;
    },
    hideDetail :function(){
      this.showDetail= false;
    }
  },
}
</script>