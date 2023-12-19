<template>
    <NavbarComponent></NavbarComponent>
</template>

<script>
import NavbarComponent from './layouts/navbar.vue';


export default {
    name: "HomeComponent",
    components: {
        NavbarComponent,
    },

    data() {
        return {
            d1: "d1"
        }
    },
}
</script>
