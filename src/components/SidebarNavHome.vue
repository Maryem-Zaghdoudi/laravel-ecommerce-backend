<template>
    <!--     v-click-outside="() => hideDropdown()"
        @focus="toggle()" -->
    <div
        class="sidenav fixed inset-0 font-Gotham font-light transition-all bg-white h-screen z-50 overflow-hidden justify-center flex items-center text-xl text-gray-900"
        :class="[opened ? 'w-80' : 'w-0  ']"
    >
        <!-- transition-all duration-700 -->

        <ul>
            <li class="py-5">
                <a href="#top"> Home </a>
            </li>
            <li class="py-5">
                <a href="#about"> A Propos</a>
            </li>
            <li class="py-5">
                <a href="#products"> produits</a>
            </li>
            <li class="py-5">
                <a href="#contact"
                    >contact
                </a>
            </li>
            
        </ul>
    </div>
</template>
<script>
export default {
    props: { open: Boolean },
    data() {
        return {
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
            this.opened = !this.opened;
        },
        hideDropdown() {
            // console.log("close dropdown", this.opened);

            this.opened = !this.opened;
        },
    },
};
</script>
