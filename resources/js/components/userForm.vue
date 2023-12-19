<template>
    <h1>Create User</h1>

    <form action="/users/store" method="post">
        <input type="hidden">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" v-model="name">

        <label for="name">Username:</label>
        <input type="text" name="username" id="username" v-model="username" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" v-model="email" required>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" v-model="password" required>

        <button type="submit">Create User</button>
    </form>

</template>


<script>
export default {
    name: "UserForm",
    props: [],
    data() {
        return {
            name: '',
            username: '',
            email: '',
            password: '',
        }
    },
    methods: {
        submitForm() {
            // code that will be sending api request to our laravel web server to create users
        },
    }

}
</script>
