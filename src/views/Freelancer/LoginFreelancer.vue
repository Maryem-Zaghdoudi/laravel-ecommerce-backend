<template>
<div class="block bg-white bg-no-repeat bg-cover min-h-[50px] w-full" />
<main class="py-20">
  <div class="flex flex-row lg:gap-5 px-5 mb-14">
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
                <a href="/" class="no-underline hover:underline font-semibold text-sm leading-5 text-black">Accueil</a>
              </li>
              
              
              <li>/</li>
              <li>
                <a href="#" class="no-underline hover:underline font-semibold text-sm leading-5 text-[#0064D2]">Connexion Freelancer</a>
              </li>
            </ul>
          </div>
        </div>
<div class=" flex-col text-center" >
   <div class="mb-10 text-3xl font-bold tracking-wide leading-loose text-black">Se connecter<span class="font-extrabold text-5xl text-blue-600 -top-2">_</span></div>
  <form class="flex-col ">
    <div class="lg:px-72 px-5 mb-5">
        <input name="field"   type="email" id="default-input"
                            class="bg-[#ffffff] text-gray-900 border border-gray-300 text-sm rounded-full block w-full p-3"
                            placeholder="Adresse électronique" v-model="email"/>

    </div>
    <div class="lg:px-72 px-5 mb-10">
        <input name="field"   type="password" id="default-input2"
                            class="bg-[#ffffff] text-gray-900 border border-gray-300 text-sm rounded-full block w-full p-3"
                            placeholder="Mot de passe" v-model="password"/>

    </div>
    <div class=" mb-8">
        <button @click.prevent="login()" class="inline-flex items-center justify-center w-80 h-11 p-3.5 bg-blue-500 rounded-full text-white">Accéder</button>

    </div>
    <div class="">
 
        <a @click="redirectRegister()" href="#" class="text-sm font-medium leading-tight text-gray-900">Je suis nouveau ici<font-awesome-icon icon="greater-than" class="text-secondary px-2 font-bold w-2  items-center" /></a>
     
    </div>
  </form>
</div>



</main>

</template>


<script>
import axios from 'axios';
  export default {
     
    

        data() {
          return {
            
            email:'',
            password:''
  
          };
      },
      methods:
      {
        redirectRegister(){
        this.$router.push({
          name:"sginfreelancer"
        });
        
        },
        login(){

        
        //  axios.get('sanctum/csrf-cookie').then((response=>{
          console.log("first axios")
          axios.post('login' ,   {email:this.email, password:this.password})        
            .then((response) =>{
             
              console.log("login")
            })
        //  }))
          
         
        }
      }
  

}
  
  </script>