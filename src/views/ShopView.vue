<script setup>
import { ref } from 'vue'
import {
  Dialog,
  DialogPanel,
  Disclosure,
  DisclosureButton,
  DisclosurePanel,
  Menu,
  MenuButton,
  MenuItem,
  MenuItems,
  TransitionChild,
  TransitionRoot,
} from '@headlessui/vue'
import { XIcon } from '@heroicons/vue/outline'
import { ChevronDownIcon, FilterIcon, MinusSmIcon, PlusSmIcon, ViewGridIcon } from '@heroicons/vue/solid'

const sortOptions = [
  { name: 'Most Popular', href: '#', current: true },
  { name: 'Best Rating', href: '#', current: false },
  { name: 'Newest', href: '#', current: false },
  { name: 'Price: Low to High', href: '#', current: false },
  { name: 'Price: High to Low', href: '#', current: false },
]

const subFilters = [
  { name: 'Derniers projets', href: '#', count:'112' },
  { name: 'Projets en réduction', href: '#', count:'112' },


]
const subPropriétés = [
  { name: 'Vecteurs', href: '#', count:'112' },
  { name: 'Superposé', href: '#', count:'112' },


]


// const products = [
//   {
//     id: 1,
//     name: 'Logo Zebra Brand',
//     href: '#',
//     imageSrc: 'src/assets/products/1.png',
//     imageAlt: "Front of men's Basic Tee in black.",
//     price: '$86',

//   },
//   {
//     id: 2,
//     name: 'Logo Zebra Brand',
//     href: '#',
//     imageSrc: 'src/assets/products/2.png',
//     imageAlt: "Front of men's Basic Tee in black.",
//     price: '$105',

//   },
//   {
//     id: 3,
//     name: 'Logo Zebra Brand',
//     href: '#',
//     imageSrc: 'src/assets/products/3.png',
//     imageAlt: "Front of men's Basic Tee in black.",
//     price: '180 €',

//   },
//   {
//     id: 4,
//     name: 'Logo Zebra Brand',
//     href: '#',
//     imageSrc: 'src/assets/products/4.png',
//     imageAlt: "Front of men's Basic Tee in black.",
//     price: '180 €',

//   },
//   {
//     id: 5,
//     name: 'Logo Zebra Brand',
//     href: '#',
//     imageSrc: 'src/assets/products/5.png',
//     imageAlt: "Front of men's Basic Tee in black.",
//     price: '180 €',

//   },
//   {
//     id: 6,
//     name: 'Logo Zebra Brand',
//     href: '#',
//     imageSrc: 'src/assets/products/6.png',
//     imageAlt: "Front of men's Basic Tee in black.",
//     price: '180 €',

//   },
//   // More products...
// ]


const mobileFiltersOpen = ref(false)

// export default {
//   name: '',
//   props: {

//   },
//   setup(props) {

//   }
// }
function ShowModal() {

}


</script>

<script>
import axios from "axios"; 
export default {
   
      data() {
        return {
            products: [],
            count : 0,
            filtredProducts:[],
            categories:[],
            subCategories:[],
            subCategories0:[],
            children:[],
            tags:[],
            // category_id:1,
            search:{
              word:'',
              tags:[],
              subCategories:null,
              categoryPosition1:null,
              category_id:null,
              isInPromotion:false,
              isRecent:false,
              price_min:0,
              price_max:null, 
              category_dropdown: null,
            },
            isSearching: false

        };
    },

 watch: {
    search: {
        handler(){
          this.searchProducts()
        
        },
        deep: true
      },
      
    //   'search.category_dropdown': function (newVal, oldVal){
       
    //      this.search.category_id=newVal;
         
    //  },
    //   'search.categoryPosition1': function (newVal, oldVal){
    //      this.search.category_id=newVal;
    //  },
    categoryTable:{
         handler(newValue, oldValue) {
        
          if (newValue[0] !== oldValue[0]) {
            this.search.category_id=newValue[0]
           
            // console.log(newValue[0])
          }
          else{
            this.search.category_id=newValue[1]
          }
          this.search.subCategories=null
          this.getSubCategories()
       
        
    },
       deep:true}
    
  },
  computed:{
    categoryTable(){
     return [this.search.category_dropdown, this.search.categoryPosition1];
    }
  },
  mounted(){
    
  },
methods:{
  getSubCategories(){
   
    this.axios.get('/category/' + this.search.category_id)
            .then((response) =>{
              this.subCategories = response.data
              console.log(response.data)
            })
  },
  toggleCategory(){
    let x= this.search.categoryPosition1
    this.search.categoryPosition1=null
    this.search.categoryPosition1=x
  },
  async setcategoryPosition1($id){
    this.search.categoryPosition1=$id;
  },

  async searchProducts(){
      this.axios.post('/search', {word:this.search.word , subCategories:this.search.subCategories , 
        promo:this.search.isInPromotion , recent:this.search.isRecent , 
        min: this.search.price_min , max :this.search.price_max , category_id: this.search.category_id , tags : this.search.tags})

      .then((response)=>{
            this.filtredProducts =response.data
            console.log(response.data)
      })
    }
},
    async created(){
        
          this.axios.get('/categories')
            .then((response) => {
                this.categories = response.data.Allcategories
                console.log(this.categories)
            })
            this.axios.get('/tags')
            .then((response) => {
                this.tags = response.data
                console.log(this.tags)
            })

        if(this.category_id ==null){
            this.axios.get('/category/1' )
            .then((response) =>{
              this.subCategories = response.data
              console.log(response.data)
            })
        }
            this.axios.get('/products_by_category/1'  )
            .then((response) =>{
              // this.filtredProducts =  response.data
              // console.log(response.data)
;              var array=new Array()
              for(let i=0 ; i<response.data.length;i++){
                array=array.concat(response.data[i])
              }
              this.filtredProducts =array
              console.log(array)
            })
            this.axios.get('category0/1')
            .then((response) =>{
              this.subCategories0 = response.data
             console.log(response.data)
            })
          this.axios.get('/count' )
          .then ((response)=>{
            this.count = response.data
            console.log(this.count.promo)
          })
            .catch( function (error){
                console.log(error);
            });
      }}
    

</script>

<template>



<div>
  <main class="  h-full  font-ProductSans text-primary ">


    <div
      class="bg-[url('@/assets/shopbg.png')] pt-24 md:pt-40 px-8 pb-4 font-ProductSans text-white bg-no-repeat bg-cover">
      <div>

        <div class=" text-center text-white md:text-[48px] text-2xl font-[700] tracking-wide mb-14">
          Meilleures projets créatifs
        </div>



        <div class="flex  justify-center  my-8">
          <select v-model="search.category_dropdown"
            class=" md:px-9 items-center py-2.5  text-sm font-medium text-center text-primary bg-gray-100 border border-gray-300 rounded-l-[30px]  focus:ring-4 focus:outline-none ">
            <option>Toutes Catégories</option>
            <option  v-for="category in categories" :value="category.id" :key="category.id"> {{ category.name }}</option>

          </select>


          <input type="search" id="name_search" v-model="search.word"
            class="w-full max-w-[300px]  text-primary text-center block p-2.5  z-20 text-sm   bg-gray-50 rounded-r-[30px] border-l-gray-50 border-l-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
            placeholder="Recherche produit, catégorie ..." required  >

        </div>
      </div>
      <!-- apropos -->

    </div>


    <div class=" flex flex-wrap justify-center gap-x-2  ">
      <!--   Modèle Graphique -->
      <Menu as="div" class="relative inline-block text-left" @click="toggleCategory"   v-for="Propriétés in subCategories0"  :key="Propriétés.name" >
        <div>
          <MenuButton 
            class="inline-flex justify-center w-full rounded-md    px-4 py-2   text-base font-medium text-primary hover:bg-gray-50  ">
            {{ Propriétés.name }}
            <ChevronDownIcon class="-mr-1 ml-2 h-5 w-5" aria-hidden="true" />
          </MenuButton>
        </div>

        <transition enter-active-class="transition ease-out duration-100"
          enter-from-class="transform opacity-0 scale-95" enter-to-class="transform opacity-100 scale-100"
          leave-active-class="transition ease-in duration-75" leave-from-class="transform opacity-100 scale-100"
          leave-to-class="transform opacity-0 scale-95">
          <MenuItems 
            class="origin-top-left absolute left-0 mt-2 w-32 z-50    rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none">
            <div class="py-1" >
              <MenuItem v-slot="{ active }" v-for="child in Propriétés.children" :key="child.name" @click="setcategoryPosition1(child.id)">
              <a href="#"
                :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700', 'block px-4 py-2 text-sm']">
                {{ child.name }}</a>
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

 
    </div>

  </main>


  <div class="bg-white ">
    <div>

      <TransitionRoot as="template" :show="mobileFiltersOpen">
        <Dialog as="div" class="relative z-40 lg:hidden" @close="mobileFiltersOpen = false">
          <TransitionChild as="template" enter="transition-opacity ease-linear duration-300" enter-from="opacity-0"
            enter-to="opacity-100" leave="transition-opacity ease-linear duration-300" leave-from="opacity-100"
            leave-to="opacity-0">
            <div class="fixed inset-0 bg-black bg-opacity-25" />
          </TransitionChild>

          <div class="fixed inset-0 flex z-40">
            <TransitionChild as="template" enter="transition ease-in-out duration-300 transform"
              enter-from="translate-x-full" enter-to="translate-x-0"
              leave="transition ease-in-out duration-300 transform" leave-from="translate-x-0"
              leave-to="translate-x-full">
              <DialogPanel
                class="ml-auto relative max-w-xs w-full h-full bg-white shadow-xl py-4 pb-12 flex flex-col overflow-y-auto">
                <div class="px-4 flex items-center justify-between">
                  <h2 class="font-bold font-ProductSans text-lg capitalize">Filters</h2>
                  <button type="button"
                    class="-mr-2 w-10 h-10 bg-white p-2 rounded-md flex items-center justify-center  "
                    @click="mobileFiltersOpen = false">
                    <span class="sr-only">Close menu</span>
                    <XIcon class="h-6 w-6" aria-hidden="true" />
                  </button>
                </div>

                <form class="mt-4 border-t border-gray-200 text-primary p-4 ">
                  <h3 class="sr-only">Propriétés</h3>
                  <ul role="list" class="font-medium  px-2 py-3">
                    <h1 class="font-bold font-ProductSans text-lg capitalize">category</h1>
                    <li class="grid grid-cols-4" v-for="Propriétés in subCategories" :key="Propriétés.name">
                     <div class="col-span-3">
                    <a :href="Propriétés.href" >
                    {{ Propriétés.name }}
                  </a>
                  </div>
                  
                  <div class="">
                    <div class="w-9 h-4  rounded-full bg-[#F4F8EC] flex justify-center items-center">
                        <div class="text-xs font-semibold text-secondary">
                          {{ Propriétés.count }}
                        </div>
                    </div>
                    </div>
                    </li>
                  </ul>

                  <h3 class="sr-only">Propriétés</h3>
                  <ul role="list" class="font-medium  px-2 py-3">
                    <h1 class="font-bold font-ProductSans text-lg capitalize">Filters</h1>
                    <li class="grid grid-cols-4" v-for="Propriétés in subFilters" :key="Propriétés.name">
                       <div class="col-span-3">
                    <a :href="Propriétés.href">
                    {{ Propriétés.name }}
                  </a>
                  </div>
                  
                  <div class="">
                    <div class="w-9 h-4  rounded-full bg-[#F4F8EC] flex justify-center items-center">
                        <div class="text-xs font-semibold text-secondary">
                          {{ Propriétés.count }}
                        </div>
                    </div>
                    </div>
                    </li>
                  </ul>
                  <h3 class="sr-only">Propriétés</h3>
                  <ul role="list" class="font-medium  px-2 py-3">
                    <h1 class="font-bold font-ProductSans text-lg capitalize">Propriétés</h1>
                    <li class="grid grid-cols-4" v-for="tag in tags" :key="tag.id">
                      <div class="col-span-3">
                      <input type="checkbox" :id="tag.id" :value="tag.name" v-model="search.tags" >
                    {{ tag.name }}
                

                  </div>
                  
                  <!-- <div class="">
                    <div class="w-9 h-4  rounded-full bg-[#F4F8EC] flex justify-center items-center">
                        <div class="text-xs font-semibold text-secondary">
                          {{ Propriétés.count }}
                        </div>
                    </div>
                    </div> -->
                    </li>
                  </ul>
                  <h3 class="sr-only">Propriétés</h3>
                  <ul role="list" class="text-sm font-medium  space-y-4 pb-6 px-2 ">
                    <h1 class="font-bold font-ProductSans text-lg capitalize">Prix</h1>
                    <input id="minmax-range" type="range" min="0" max="10" value="5" 
                      class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
                    <div class="flex flex-row gap-8">
                      <div>
                        <label for="small-input" class="block mb-2 text-sm font-medium capitalize  ">min</label>
                        <input type="text" id="small-input" v-model="search.price_min"
                          class="h-10 w-[100px] block p-2   bg-gray-50 rounded-lg border border-gray-300   focus:ring-blue-500 focus:border-blue-500" />
                      </div>
                      <div>
                        <label for="small-input" class="block mb-2 text-sm font-medium capitalize ">max</label>
                        <input type="text" id="small-input" v-model="search.price_max"
                          class="h-10 w-[100px] block p-2   bg-gray-50 rounded-lg border border-gray-300  focus:ring-blue-500 focus:border-blue-500 " />
                      </div>

                    </div>
                    <div class="flex flex-row gap-8 ">
                      <div>
                        <button
                          class="h-10 w-[100px] bg-secondary text-white hover:bg-blue-700 font-blond py-2 px-5 rounded-lg">Valider</button>
                      </div>
                      <div>
                        <button
                          class="h-10 w-[100px] bg-white text-secondary hover:bg-blue-700 font-blond py-2 px-4 rounded-lg border border-gray-400 ">Annuler</button>
                      </div>
                    </div>
                  </ul>
                </form>
              </DialogPanel>
            </TransitionChild>
          </div>
        </Dialog>
      </TransitionRoot>

      <div class=" ">
        <div class="relative z-10 flex items-baseline justify-between pt-4   ">
          <h1 class="text-4xl font-extrabold tracking-tight "></h1>

          <div class="flex items-center">
          
            <button type="button" class="p-2  ml-4 mr-5  hover:text-secondary lg:hidden  flex flex-row"
              @click="mobileFiltersOpen = true">
              <span class="mr-2">Filters</span>
              <FilterIcon class="w-5 h-5" aria-hidden="true" />
            </button>
          </div>
        </div>

        <section aria-labelledby="products-heading" class="pt-6 pb-24">
          <h2 id="products-heading" class="sr-only">Products</h2>

          <div class="grid grid-cols-1 lg:grid-cols-4 gap-x-14 gap-y-6 lg:px-24 px-4">

            <form class="hidden lg:block">
              <h3 class="sr-only">Propriétés</h3>
              <ul role="list" class="text-sm font-medium  space-y-4 pb-6 ">
                <h1 class="font-bold font-ProductSans text-lg capitalize">category</h1>
                <li class="grid grid-cols-4" v-for="category in subCategories" :key="category.name">
                   <div class="col-span-3">
                    <input type="radio" :value="category.id" :id="category.name "  v-model="search.subCategories">
                    {{ category.name }}
                  
                  </div>
                  
                  <div class="">
                    <div class="w-9 h-4  rounded-full bg-[#F4F8EC] flex justify-center items-center">
                        <div class="text-xs font-semibold text-secondary">
                          {{ category.count }}
                        </div>
                    </div>
                    </div>
                </li>
              </ul>


              <ul role="list" class="text-sm font-medium  space-y-4 pb-6  ">
                <h1 class="font-bold font-ProductSans text-lg capitalize">Filtres</h1>
                <li class="grid grid-cols-4" >
                   <div class="col-span-3">
                    <input type="checkbox"  v-model="search.isInPromotion">
                      Projets en réduction
 
                  </div>
                  
                  <div class="">
                    <div class="w-9 h-4  rounded-full bg-[#F4F8EC] flex justify-center items-center">
                        <div class="text-xs font-semibold text-secondary">
                          {{ count.promo }}
                        </div>
                    </div>
                    </div>
                </li>
                <li class="grid grid-cols-4" >
                   <div class="col-span-3">
                    <input type="checkbox"  v-model="search.isRecent">
                  Derniers projets  
                  
                  </div>
                  
                  <div class="">
                    <div class="w-9 h-4  rounded-full bg-[#F4F8EC] flex justify-center items-center">
                        <div class="text-xs font-semibold text-secondary">
                          {{ count.recent }}
                        </div>
                    </div>
                    </div>
                </li>

              </ul>
              <ul role="list" class="text-sm font-medium  space-y-4 pb-6 ">
                <h1 class="font-bold font-ProductSans text-lg capitalize">Propriétés</h1>
                <li class="grid grid-cols-4" v-for="tag in tags" :key="tag.id">
                  <div class="col-span-3">
                    <input type="checkbox" :value="tag.name" v-model="search.tags">
                      {{ tag.name }}
                 
                  </div>
                  
                  <!-- <div class="">
                    <div class="w-9 h-4  rounded-full bg-[#F4F8EC] flex justify-center items-center">
                        <div class="text-xs font-semibold text-secondary">
                          {{ count.tag.name}}
                        </div>
                    </div>
                    </div> -->
                </li>
              </ul>
              <ul role="list" class="text-sm font-medium  space-y-4 pb-6  ">
                <h1 class="font-bold font-ProductSans text-lg capitalize">Prix</h1>
                <input id="minmax-range" type="range" min="0" max="10" value="5"
                  class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
                <div class="flex flex-row gap-8">
                  <div>
                    <label for="small-input" class="block mb-2 text-sm font-medium capitalize  ">min</label>
                    <input type="text" v-model="search.price_min" id="small-input"
                      class="h-10 w-[100px] block p-2   bg-gray-50 rounded-lg border border-gray-300   focus:ring-blue-500 focus:border-blue-500" />
                  </div>
                  <div>
                    <label for="small-input" class="block mb-2 text-sm font-medium capitalize ">max</label>
                    <input type="text" v-model="search.price_max" id="small-input"
                      class="h-10 w-[100px] block p-2   bg-gray-50 rounded-lg border border-gray-300  focus:ring-blue-500 focus:border-blue-500 " />
                  </div>

                </div>
                <div class="flex flex-row gap-8">
                  <div>
                    <button
                      class="h-10 w-[100px] bg-secondary text-white hover:bg-blue-700 font-blond py-2 px-5 rounded-lg">Valider</button>
                  </div>
                  <div>
                    <button
                      class="h-10 w-[100px] bg-white text-secondary hover:bg-blue-700 font-blond py-2 px-4 rounded-lg border border-gray-400 ">Annuler</button>
                  </div>
                </div>
              </ul>

            </form>


            <div class="lg:col-span-3 sm:grid-cols-2 xl:grid-cols-3   ">



              <img src="@/assets/shopseas.png" alt="shop" class="w-full  " />



              <div
                class=" font-ProductSans grid md:grid-cols-2 xl:grid-cols-3 gap-y-6 gap-x-14    py-16 justify-items-center  ">
            
                  <div  v-for="product in filtredProducts"
                    :key="product.id"
                    class="bg-white rounded-[30px] border  border-gray-300 shadow-2xl  w-full  max-w-xs mt-0 inline-grid justify-items-center  text-primary ">
  <RouterLink
                    
                    class="group"
                    :to="{
                        name: 'product-details',
                        params: { id:product.id },
                    }"
                >   
                        <!-- <RouterLink to="/product/:product" > -->
                            <img :src="product.imageSrc" :alt="product.imageAlt" class="rounded-[30px] h-60   
                                object-cover   w-full " />

                            <div class="mt-2 font-[400] text-center  " aria-hidden="true">
                              {{ product.title   }}
                            </div>
                            <div class="mt-2  text-2xl  font-[700] text-center">
                              $ {{ product.price }}
                            </div>
                        </RouterLink>
                        <div class="mt-2 mb-4 text-center">
                          <span class="text-secondary font-bold text-center font-ProductSans text-base">
                            Acheter
                          </span>

                          <font-awesome-icon class="text-secondary font-bold" icon="check" />
                        </div>
                  </div>
              </div>



            </div>
          </div>
        </section>
      </div>
    </div>
  </div>

</div>










</template>
