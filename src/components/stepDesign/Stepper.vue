<template>
<div>
    <Step1  />
    <Step2 />
    <Step3 />
</div>


</template>
<script setup>
import Step1 from './Step1.vue';
import Step2 from './Step2.vue';
import Step3 from './Step3.vue';


</script>
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