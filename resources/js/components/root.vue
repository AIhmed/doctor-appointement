<template>
    <h1>render something one root</h1>
    <UserForm></UserForm>
    <h1>
        {{ this.passed_data }}
    </h1>
</template>


<script>
import UserForm from './userForm.vue';

export default {
    name: "RootComponent",
    props: ["passed_data"],
    components: {
        UserForm,
    },
    data() {
        return {

        }
    },

}
</script>
