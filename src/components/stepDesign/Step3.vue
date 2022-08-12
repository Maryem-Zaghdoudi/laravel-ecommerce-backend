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
            <span class="h-0.5 w-9 bg-blue-600 lg:w-1/1 px-5 "></span>
            <div class="flex md:flex-row ">
             <div class="lg:px-5">
                       <div class="w-8 h-8  rounded-full bg-[#0059C8] text-white flex justify-center items-center">
                        <a href="# " class="">
                            <h1 class="text-2xl text-white">3</h1>
                        </a>
                    </div>
                      </div>
                      
                    
                     <div class=" px-3 md:text-sm lg:text-xl font-normal leading-8 text-blue-800">
                        Paiement
                       </div>
           
              </div>
        </div>
        </template>
        <script>

export default {
  name: "modal",
  data() {
    return {
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
     
    };
  },
  ready:function(){
    console.log('ready');
  },
  methods:{
    goToStep: function(step){
      this.activePhase = step;
    }
  },
}
</script>