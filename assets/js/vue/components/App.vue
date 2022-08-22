<template>
    <div>
        <div class="row">
            <div class="col">
                <h1>Getting started with Symfony + VueJS</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="navbar navbar-expand-lg navbar-light bg-light">
                    <router-link tag="div" to="/" class="navbar-item">Home</router-link>
                    <router-link tag="div" to="hello" class="navbar-item">Hello</router-link>
                    <router-link tag="div" to="notfound" class="navbar-item">Not Found URL</router-link>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <router-view></router-view>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'app',
    };
</script>

<style lang="scss" scoped>
    .navbar-item {
        margin: 0 10px;
        cursor: pointer;
    }
</style>
