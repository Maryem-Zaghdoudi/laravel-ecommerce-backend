<template>
    <PreLoder />
    <!-- <img src="@/assets/slider-bg.svg" alt="" class="object-cover	 w-full h-screen  bg-no-repeat"> -->
    <div id="carouselDarkVariant" class="carousel slide  font-ProductSans    relative" data-bs-ride="carousel">
        <img src="@/assets/slider-bg.svg" class="absolute block object-cover w-full h-screen" alt="Motorbike Smoke" />

        <!-- Indicators -->
        <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
            <button data-bs-target="#carouselDarkVariant" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button data-bs-target="#carouselDarkVariant" data-bs-slide-to="1" aria-label="Slide 1"></button>
            <button data-bs-target="#carouselDarkVariant" data-bs-slide-to="2" aria-label="Slide 1"></button>
        </div>

        <!-- Inner -->
        <div class="carousel-inner relative w-full overflow-hidden">
            <!-- Single item -->
            <div class="carousel-item active relative float-left object-cover w-full h-screen ">
                <!-- <img src="@/assets/slider-bg.svg" class="block object-cover w-full h-screen" alt="Motorbike Smoke" /> -->
                <div class="carousel-caption  absolute top-1/4 text-center">
                    <h5 class="text-5xl   md:text-8xl font-bold   font-ProductSans  ">Marketing Digital</h5>
                    <p class="text-xl md:text-4xl font-normal tracking-wide p-4 md:p-8     ">Grâce à notre créativité,
                        nous
                        créons des
                        tendances et établissons
                        les
                        meilleurs projets de
                        développement web et mobile, Etc.</p>


                    <RouterLink to="/marketing" class=" font-bold text-center text-lg md:text-3xl ">
                        Decouvrir

                        <font-awesome-icon icon="greater-than" class=" font-bold" />
                    </RouterLink>
                </div>
            </div>

            <!-- Single item -->
            <div class="carousel-item relative float-left object-cover w-full h-screen ">
                <div class="carousel-caption  absolute top-1/4 text-center">
                    <h5 class="text-5xl   md:text-8xl font-bold   font-ProductSans  ">Design Graphique</h5>
                    <p class="text-xl md:text-4xl font-normal tracking-wide p-4 md:p-8     ">Grâce à notre créativité,
                        nous
                        créons des
                        tendances et établissons
                        les
                        meilleurs projets de
                        développement web et mobile, Etc.</p>
                    <RouterLink to="/design" class=" font-bold text-center text-lg md:text-3xl ">
                        Decouvrir
                        <font-awesome-icon icon="greater-than" class=" font-bold" />
                    </RouterLink>
                </div>
            </div>

            <!-- Single item -->
            <div class="carousel-item relative float-left object-cover w-full h-screen ">
                <!-- <img src="@/assets/slider-bg.svg" class="block object-cover w-full h-screen"
                alt="Woman Reading a Book" /> -->
                <div class="carousel-caption  absolute top-1/4 text-center">
                    <h5 class="text-5xl   md:text-8xl font-bold   font-ProductSans  ">Dévelopment Web & Mobile</h5>
                    <p class="text-xl md:text-4xl font-normal tracking-wide p-4 md:p-8     ">Grâce à notre créativité,
                        nous
                        créons des
                        tendances et établissons
                        les
                        meilleurs projets de
                        développement web et mobile, Etc.</p>
                    <RouterLink to="/coding" class=" font-bold text-center text-lg md:text-3xl ">
                        Decouvrir
                        <font-awesome-icon icon="greater-than" class=" font-bold" />
                    </RouterLink>

                </div>
            </div>
        </div>
        <!-- Inner -->

        <!-- Controls -->
        <button
            class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
            type="button" data-bs-target="#carouselDarkVariant" data-bs-slide="prev">
            <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button
            class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
            type="button" data-bs-target="#carouselDarkVariant" data-bs-slide="next">
            <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</template>
<script setup>
import PreLoder from '../components/PreLoder.vue'
</script>
<script>

export default {
    name: '',
    props: {},
    data() {
        return {}
    },
    methods: {}
}
</script>