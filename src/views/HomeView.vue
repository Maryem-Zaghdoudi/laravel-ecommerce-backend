<template>
  <div class="block bg-white bg-no-repeat bg-cover min-h-[50px] w-full" />
  <main class=" ">
    <div>
      <div
        v-if="!enabled"
        id="top"
        class="bg-[url('@/assets/bg-home5.svg')] relative p-40 h-full lg:pl-24 lg:pt-24 lg:pr-0 font-ProductSans pt-24 md:pt-40 px-8 pb-4  text-white bg-no-repeat bg-cover"
      >
        <div class="text-center lg:text-5xl text-3xl font-bold p-9">
          Trouvez les meilleurs<br />
          projets digitaux
        </div>
        <p class="font-normal text-center lg:text-lg text-base mb-14">
          Créez, Achetez & vendez des projets créatifs, ou trouvez des<br />
          ressources humaines briefés.
        </p>
        <div class="flex flex-row justify-center lg:space-x-8 space-x-2 mb-12">
          <p
            class="lg:text-base text-sm font-semibold tracking-wide leading-normal text-white"
          >
            Je suis un Demandeur
          </p>
          <Switch
            v-model="enabled"
            class="flex-shrink-0 group relative rounded-full inline-flex items-center justify-center h-5 w-16 cursor-pointer focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
          >
            <span class="sr-only">Use setting</span>
            <span
              aria-hidden="true"
              class="pointer-events-none absolute w-full h-full rounded-md"
            />
            <span
              aria-hidden="true"
              :class="[
                enabled ? 'bg-[#377DFF]' : 'bg-gray-200',
                'pointer-events-none absolute h-4 w-16 mx-auto rounded-full transition-colors ease-in-out duration-200',
              ]"
            />
            <span
              aria-hidden="true"
              :class="[
                enabled ? 'translate-x-12' : 'translate-x-0',
                'pointer-events-none absolute left-0 inline-block h-5 w-5 border border-gray-200 rounded-full bg-white shadow transform ring-0 transition-transform ease-in-out duration-200',
              ]"
            />
          </Switch>
          <p
            class="lg:text-base text-sm font-semibold tracking-wide leading-normal text-white"
          >
            Je suis Freelancer
          </p>
        </div>
        <div class="text-center mb-44">
          <button href="#"
            class="inline-flex items-center justify-center lg:w-72 w-52 px-5 py-2.5 bg-white bg-opacity-25 rounded-full"
          >
            Accéder Maintenant
          </button>
        </div>
      </div>
      <div
        v-else
        id="top"
        class="bg-[url('@/assets/bg-2home2.svg')] relative p-40 h-full lg:pl-24 lg:pt-24 lg:pr-0  pt-24 md:pt-40 px-8 pb-4 font-ProductSans text-white bg-no-repeat bg-cover"
      >
        <div class="text-center lg:text-5xl text-3xl font-bold p-9">
          Réalisez les idées les plus<br />
          brillantes maintenant
        </div>
        <p class="font-normal text-center lg:text-lg text-base mb-14">
          Créez, Achetez & vendez des projets créatifs, ou trouvez des<br />
          ressources humaines briefés.
        </p>
        <div class="flex flex-row justify-center lg:space-x-8 space-x-2 mb-12">
          <p
            class="lg:text-base text-sm  font-semibold tracking-wide leading-normal text-white"
          >
            Je suis un Demandeur
          </p>
          <Switch
            v-model="enabled"
            class="flex-shrink-0 group relative rounded-full inline-flex items-center justify-center h-5 w-16 cursor-pointer focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
          >
            <span class="sr-only">Use setting</span>
            <span
              aria-hidden="true"
              class="pointer-events-none absolute w-full h-full rounded-md"
            />
            <span
              aria-hidden="true"
              :class="[
                enabled ? 'bg-[#377DFF]' : 'bg-gray-200',
                'pointer-events-none absolute h-4 w-16 mx-auto rounded-full transition-colors ease-in-out duration-200',
              ]"
            />
            <span
              aria-hidden="true"
              :class="[
                enabled ? 'translate-x-12' : 'translate-x-0',
                'pointer-events-none absolute left-0 inline-block h-5 w-5 border border-gray-200 rounded-full bg-white shadow transform ring-0 transition-transform ease-in-out duration-200',
              ]"
            />
          </Switch>
          <p
            class="lg:text-base text-sm font-semibold tracking-wide leading-normal text-white"
          >
            Je suis Freelancer
          </p>
        </div>
        <div class="text-center mb-44">
          <button
            class="inline-flex items-center justify-center lg:w-72 w-52 px-5 py-2.5 bg-white bg-opacity-25 rounded-full"
          >
            Accéder Maintenant
          </button>
        </div>
      </div>
    </div>

    <section>
      <div id="about" class="grid md:grid-cols-2 lg:py-24 font-ProductSans">
        <div class="">
          <div
            class="text-primary text-3xl font-bold tracking-wide mb-4 capitalize"
          >
            {{ $t("about") }}
            <span class="font-blod text-5xl text-blue-600 top-3">-</span>
          </div>

         

          <div class="mt-6 text-base font-normal text-info">
            {{ $t("aboutText1") }}
          </div>
          <div class="my-9 shrink-0">
            <div class="text-4xl font-bold tracking-wide text-blue-500 mb-14">
              #{{ $t("aboutTagline") }}
            </div>
          </div>
        </div>
        <!-- produit -->
        <div class="justify-end flex">
          <img src="@/assets/about.svg" width="340" alt="shop" />
        </div>
      </div>
    </section>

    <!-- <div id="products" class="grid p-6 lg:p-24 lg:pt-12 font-ProductSans">
            <div class="text-primary text-4xl font-bold tracking-wide text-center pb-4  capitalize ">
                {{ $t('products') }}
            </div>
            <div class="  text-lg text-stone-100 font-normal text-center text-info">
                Des spécialités qui vont vous donner la main libre d’atteindre
                facilement <br />vos objectifs.
            </div>

             <div class="grid sm:grid-cols-2 xl:grid-cols-4 gap-24 px-6 py-16 xl:p-20 justify-items-center">
               
                <div
                    class="bg-white rounded-[30px] p-4 border-gray-200 shadow-2xl w-full max-w-xs mt-2 inline-grid justify-items-center">
                    <div class="w-20 h-20 -top-8 rounded-full bg-[#1D57A6] text-white flex justify-center items-center">
                        <a href="# " class="">
                            <img alt="park" @click="showDesignModal" class="park" src="@/assets/icons/park.svg"
                                width="48" />
                        </a>
                    </div>
                    <div class="text-primary text-center font-bold">
                        #We_Design
                    </div>
                    <div class="mt-2 text-stone-100 font-normal text-center text-info">
                        Nous concevons des œuvres d'art qui inspirent les
                        esprits et racontent des histoires percutantes.
                    </div>
                    <div class="mt-4 ">
                        <button class="text-secondary font-bold text-center text-base"
                            @click="toggleModal = !toggleModal">Decouvrir
                            <font-awesome-icon icon="greater-than" class="text-secondary font-bold" />
                        </button> 
                        <button class="text-secondary font-bold text-center text-base"
                            @click="showDesignModal">Decouvrir
                            <font-awesome-icon icon="greater-than" class="text-secondary font-bold" />
                        </button>
                        <div class="fixed overflow-x-hidden overflow-y-auto inset-0 flex justify-center items-center z-50"
                            v-if="toggleModal">
                            <div class="relative p-4 w-[1122px] h-full  ">
                                <div class="relative bg-white rounded-lg h-[570px] shadow ">
                                    <div class="flex justify-between items-start p-4  ">
                                        <button type="button"
                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                            @click="toggleModal = false">
                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <div class="grid md:grid-cols-3 px-4 lg:p-16 font-ProductSans">
                                        <div class="text-primary text-2xl font-bold col-span-2 tracking-wide  mb-14">
                                            Desgin Graphique
                                            <div class="mt-10 text-sm font-[400] text-info">
                                                La conception graphique est un métier où les professionnels créent du
                                                contenu visuel pour
                                                communiquer des messages. En appliquant des techniques de hiérarchie
                                                visuelle et de mise
                                                en page, les concepteurs utilisent la typographie et les images pour
                                                répondre aux besoins
                                                spécifiques des utilisateurs et se concentrent sur la logique
                                                d'affichage des éléments dans les
                                                conceptions interactives, afin d'optimiser l'expérience utilisateur.

                                            </div>

                                        </div>
                                        <div class="justify-end flex">
                                            <img src="@/assets/desgin.png" alt="shop" />
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div v-if="toggleModal" class="absolute z-40 insert-0 opacity-25 bg-[#2d2d2e]"></div>
                    </div>
                </div>
              
                <div
                    class="bg-white rounded-[30px] p-4 border-gray-200 shadow-2xl w-full max-w-xs mt-2 inline-grid justify-items-center">
                    <div class="w-20 h-20 -top-8 rounded-full bg-[#1D57A6] text-white flex justify-center items-center">
                        <a href="#">
                            <img alt="park" class="park" @click="showCodingModal" src="@/assets/icons/web-stories.svg"
                                width="48" />
                        </a>
                    </div>
                    <div class="text-primary text-center font-bold">
                        #We_Create
                    </div>
                    <div class="mt-2 text-stone-100 font-normal text-center text-info">
                        Nous concevons des œuvres d'art qui inspirent les
                        esprits et racontent des histoires percutantes.
                    </div>
                    <div class="mt-4 ">
                        <div class="mt-4 ">
                            <button class="text-secondary font-bold text-center text-base"
                                @click="toggleModal1 = !toggleModal1">Decouvrir
                                <font-awesome-icon icon="greater-than" class="text-secondary font-bold" />
                            </button> 
                            <button class="text-secondary font-bold text-center text-base"
                                @click="showCodingModal">Decouvrir
                                <font-awesome-icon icon="greater-than" class="text-secondary font-bold" />
                            </button>

                            <div class="fixed overflow-x-hidden overflow-y-auto inset-0 flex justify-center items-center z-50"
                                v-if="toggleModal1">
                                <div class="relative p-4 w-[1122px] h-full  ">
                                    <div class="relative bg-white rounded-lg h-[570px] shadow ">
                                        <div class="flex justify-between items-start p-4  ">
                                            <button type="button"
                                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                @click="toggleModal1 = false">
                                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>
                                        <div class="grid md:grid-cols-3 px-4 lg:p-16 font-ProductSans">
                                            <div
                                                class="text-primary text-2xl font-bold col-span-2 tracking-wide  mb-14">
                                                Dévelopment Web & Mobile
                                                <div class="mt-10 text-sm font-normal text-info">
                                                    Notre expérience dans la création de sites et applications Web et
                                                    Mobile est acquise grâce à la coopération avec des entreprises qui
                                                    suivent divers modèles commerciaux et opèrent dans divers domaines
                                                    d’activité, y compris Education, Santé, Commerce électronique et
                                                    autres.
                                                </div>

                                            </div>
                                            <div class="justify-end flex">
                                                <img src="@/assets/web.png" alt="shop" />
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div v-if="toggleModal" class="absolute z-40 insert-0 opacity-25 bg-[#2d2d2e]"></div>
                        </div>
                    </div>
                </div>

               
                <div
                    class="bg-white rounded-[30px] p-4 border-gray-200 shadow-2xl w-full max-w-xs mt-2 inline-grid justify-items-center">
                    <div class="w-20 h-20 -top-8 rounded-full bg-[#1D57A6] text-white flex justify-center items-center">
                        <a href="#">
                            <img alt="park" class="park" @click="showMarketingModal" src="@/assets/icons/graph.svg"
                                width="48" />
                        </a>
                    </div>
                    <div class="text-primary text-center font-bold">
                        #We_Promote
                    </div>
                    <div class="mt-2 text-stone-100 font-normal text-center text-info">
                        Nous concevons des œuvres d'art qui inspirent les
                        esprits et racontent des histoires percutantes.
                    </div>
                    <div class="mt-4 ">
                        <div class="mt-4 ">
                            <button class="text-secondary font-bold text-center text-base"
                                @click="showMarketingModal">Decouvrir
                                <font-awesome-icon icon="greater-than" class="text-secondary font-bold" />
                            </button>
                            <div class="fixed overflow-x-hidden overflow-y-auto inset-0 flex justify-center items-center z-50"
                                v-if="toggleModal2">
                                <div class="relative p-4 w-[1122px] h-full  ">
                                    <div class="relative bg-white rounded-lg h-[570px] shadow ">
                                        <div class="flex justify-between items-start p-4  ">
                                            <button type="button"
                                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                @click="toggleModal2 = false">
                                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>
                                        <div class="grid md:grid-cols-3 px-4 lg:p-16 font-ProductSans">
                                            <div
                                                class="text-primary col-span-2 text-2xl font-bold tracking-wide  mb-14">
                                                Marketing Digitale
                                                <div class="mt-10 text-sm font-normal text-info">
                                                    Le marketing digital est un excellent moyen, si ce n’est le meilleur
                                                    aujourd’hui, pour
                                                    atteindre votre cible dépendamment de votre activité, et il existe
                                                    justement, plusieurs types
                                                    différents de marketing digital pour y arriver selon votre activité
                                                    et vos objectifs.
                                                    Pour y arriver, nous devons comprendre en quoi consiste cette
                                                    stratégie, comment elle
                                                    fonctionne et les types de marketing digital qui peuvent être
                                                    utilisés.

                                                </div>

                                            </div>
                                            <div class="justify-end flex">
                                                <img src="@/assets/marketing.png" alt="shop" />
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div v-if="toggleModal" class="absolute z-40 insert-0 opacity-25 bg-[#2d2d2e]"></div>
                        </div>
                    </div>
                </div>

                <div
                    class="bg-white rounded-[30px] pb-2 border-gray-200 shadow-2xl w-full max-w-xs mt-2 inline-grid justify-items-center">
                    <div class="w-20 h-20 -top-8 rounded-full bg-[#F87524] flex justify-center items-center">
                        <a href="#">
                            <img alt="park" class="park" src="@/assets/icons/learning.svg" width="48" />
                        </a>
                    </div>
                    <div class="text-primary text-center font-bold">
                        Cours<br />
                        En Ligne
                    </div>
                    <div class="mt-5 w-full bg-[#F87524] skew-y-[18.57deg] text-white text-center font-bold">
                        Bientot
                    </div>
                    <div class="mt-9 text-center">
                        <span class="text-secondary font-bold text-center text-base">
                            Decouvrir
                        </span>
                        <font-awesome-icon icon="greater-than" class="text-secondary font-bold" />
                    </div>
                </div>
            </div> 
        </div>  -->
    <!-- product -->
    <section>
      <div id="products" class="font-ProductSans">
        <div
          class="text-primary text-4xl font-bold tracking-wide text-center pb-4 capitalize"
        >
          {{ $t("products") }}
          <span class="font-blod text-5xl text-blue-600">.</span>
        </div>
        <div
          class="text-lg text-stone-100 font-normal text-center text-info opacity-75"
        >
          Des spécialités qui vont vous donner la main libre d’atteindre
          facilement vos objectifs.
        </div>
        <div
          class="grid xl:grid-cols-3 gap-24 py-16 xl:py-20 justify-items-center"
        >
          <div class="md:h-96 bg-white shadow rounded-lg">
            <div class="relative" style="width: 311px; height: 237px">
              <img
                class="h-64 absolute left-0 top-0 rounded-lg"
                src="@/assets/M-cart.svg"
              />
              <p
                class="text-4xl font-medium leading-10 text-center top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-white"
              >
                Marketing Digital
              </p>
            </div>
            <p
              class="text-sm leading-none font-normal text-center py-12 px-5 text-gray-900"
            >
              Utiliser des stratégies innovvantes & <br />éfficaces pour
              développer votre<br />
              business digitalement.
            </p>
          </div>
         <div class="md:h-96 bg-white shadow rounded-lg">
            <div class="relative" style="width: 311px; height: 237px">
              <img
                class="h-64 absolute left-0 top-0 rounded-lg"
                src="@/assets/M-cart.svg"
              />
              <p
                class="text-4xl font-medium leading-10 text-center top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-white"
              >
                Marketing Digital
              </p>
            </div>
            <p
              class="text-sm leading-none font-normal text-center py-12 px-5 text-gray-900"
            >
              Utiliser des stratégies innovvantes & <br />éfficaces pour
              développer votre<br />
              business digitalement.
            </p>
          </div>
          <div class="md:h-96 bg-white shadow rounded-lg">
            <div class="relative" style="width: 311px; height: 237px">
              <img
                class="h-64 absolute left-0 top-0 rounded-lg"
                src="@/assets/M-cart.svg"
              />
              <p
                class="text-4xl font-medium leading-10 text-center top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-white"
              >
                Marketing Digital
              </p>
            </div>
            <p
              class="text-sm leading-none font-normal text-center py-12 px-5 text-gray-900"
            >
              Utiliser des stratégies innovvantes & <br />éfficaces pour
              développer votre<br />
              business digitalement.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- contact -->
    <section>
      <div
        id="contact"
        class="grid md:grid-cols-2 lg:gap-x-60 font-ProductSans"
      >
        <div class="py-16">
          <div class="font-bold text-4xl mb-6 text-primary">
            contact <span class="font-blod text-5xl text-blue-600">.</span>
          </div>
          <div
            class="text-primary text-5xl pr-16 font-bold tracking-wide mb-14"
          >
            {{ $t("contactUs") }}
          </div>

          <div class="mt-5 text-base pr-24 font-normal text-info">
            Vous pouvez nous contacter directement & nous suivre sur les réseaux
            sociaux pour etres a jour.
          </div>
        </div>

        <form class="p-8">
          <div class="grid gap-6 mb-6 lg:grid-cols-1">
            <input
              type="text"
              id="default-input"
              class="bg-[#F4F4F4] text-gray-900 text-sm rounded-lg block w-full p-4"
              placeholder="Nom & prénom"
            />
          </div>
          <div class="mb-6">
            <input
              type="text"
              id="default-input"
              class="bg-[#F4F4F4] text-gray-900 text-sm rounded-lg block w-full p-4"
              placeholder="Adresse éléctorinque"
            />
          </div>
          <div class="grid gap-2 mb-6 lg:grid-cols-2">
            <div>
              <input
                type="text"
                id="last_name"
                class="bg-[#F4F4F4] text-gray-900 text-sm rounded-lg block w-full p-4"
                placeholder="Code"
                required
              />
            </div>
            <div>
              <input
                type="text"
                id="last_name"
                class="bg-[#F4F4F4] text-gray-900 text-sm rounded-lg block w-full p-4"
                placeholder="Numéro de téléphone"
                required
              />
            </div>
          </div>

          <div class="mb-6">
            <textarea
              id="message"
              rows="5"
              class="bg-[#F4F4F4] text-gray-900 text-sm rounded-lg block w-full p-4"
              placeholder="Bonjour,..."
            ></textarea>
          </div>
          <div class="mb-6">
            <button
              type="button"
              class="text-white bg-black font-medium rounded-lg text-sm w-full p-4"
            >
              Envoyer
            </button>
          </div>
        </form>
      </div>
    </section>
  </main>
</template>
<script>
import { ref } from "vue";
import { Switch } from "@headlessui/vue";

// import Products from "./shop/ProductsList.vue";
import Swal from "sweetalert2";
const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    title: "font-Amaline text-5xl font-normal",
    container: "font-Montserrat text-base font-semibold",
    confirmButton:
      " capitalize bg-black hover:bg-secondary active:bg-secondary px-8 md:px-32    py-2   text-white text-xl font-Gotham font-normal",
  },
  buttonsStyling: false,
});
export default {
  components: {
    Switch,
  },
  name: "modal",
  data() {
    return {
      currentState: false,
      products: [],
      categories: [],
      toggleModal: false,
      toggleModal1: false,
      toggleModal2: false,
    };
  },
  setup() {
    const enabled = ref(false);

    return {
      enabled,
    };
  },
  //   components: {Products},
  created() {
    this.$http
      .get("categories")
      .then((response) => {
        this.categories = response.data;
        // console.log(this.categories);
      })
      .catch((error) => {
        // console.error(error);
      });
  },

  methods: {
    isActive() {
      return this.currentState;
    },

    checkedValue: {
      get() {
        return this.currentState;
      },
      set(newValue) {
        this.currentState = newValue;
      },
    },

    showDesignModal() {
      Swal.fire({
        title: "Desgin Graphique",
        text: "La conception graphique est un métier où les professionnels créent du contenu visuel pour communiquer des messages.En appliquant des techniques de hiérarchie visuelle et de mise en page, les concepteurs utilisent la typographie et les images pour répondre aux besoins spécifiques des utilisateurs et se concentrent sur la logique d'affichage des éléments dans les conceptions interactives, afin d'optimiser l'expérience utilisateur.",
        imageUrl: "src/assets/desgin.png",
        imageHeight: 300,
        imageAlt: "Desgin Graphique",
        showConfirmButton: false,
        showCloseButton: true,
        customClass: {
          container: "font-ProductSans leading-loose-custom ",
          popup: "...",
          header: "...",
          title: "font-ProductSans",
          closeButton: "...",
          icon: "...",
          image: " ",
          htmlContainer: " leading-loose-custom",
        },
      });
    },
    showCodingModal() {
      Swal.fire({
        title: "Dévelopment Web & Mobile",
        text: "Notre expérience dans la création de sites et applications Web et Mobile est acquise grâce à la coopération avec des entreprises qui suivent divers modèles commerciaux et opèrent dans divers domaines d’activité, y compris Education, Santé, Commerce électronique et autres.",
        imageUrl: "src/assets/web.png",
        imageHeight: 300,
        imageAlt: "Desgin Graphique",
        showConfirmButton: false,
        showCloseButton: true,
        customClass: {
          container: "font-ProductSans leading-loose-custom ",
          popup: "...",
          header: "...",
          title: "font-ProductSans",
          closeButton: "...",
          icon: "...",
          image: " ",
          htmlContainer: " leading-loose-custom",
        },
      });
    },
    showMarketingModal() {
      Swal.fire({
        title: " Marketing Digitale",
        text: "Le marketing digital est un excellent moyen, si ce n’est le meilleur aujourd’hui, pour atteindre votre cible dépendamment de votre activité, et il existe justement, plusieurs types différents de marketing digital pour y arriver selon votre activité et vos objectifs. Pour y arriver, nous devons comprendre en quoi consiste cette stratégie, comment elle fonctionne et les types de marketing digital qui peuvent être utilisés.",
        imageUrl: "src/assets/marketing.png",
        imageHeight: 300,
        imageAlt: "Desgin Graphique",
        showConfirmButton: false,
        showCloseButton: true,
        customClass: {
          container: "font-ProductSans leading-loose-custom ",
          popup: "...",
          header: "...",
          title: "font-ProductSans",
          closeButton: "...",
          icon: "...",
          image: " ",
          htmlContainer: " leading-loose-custom",
        },
      });
    },
  },
};
</script>
<style>
.leading-loose-custom {
  line-height: 32px !important;
}
section{
    padding: 0px 100px;

}
@media  screen and (max-width: 600px){
section{
    padding: 0px 20px ;
    margin:20px;
}
}
</style>
