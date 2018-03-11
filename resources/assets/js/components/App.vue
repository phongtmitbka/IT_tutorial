<template>
    <div class="container">
        <app-header></app-header>
        <navigation></navigation>
        <div id="content">
            <router-view></router-view>
        </div>
        <app-footer></app-footer>
    </div>
</template>

<script>
    import AppHeader from './layouts/Header';
    import Navigation from './layouts/Navigation';
    import AppFooter from './layouts/Footer';
    import rs from '../lib/RequestStore';
    export default {
        components: {
            AppHeader,
            Navigation,
            AppFooter,
        },
        mounted() {
            rs.getRequest('TestRequest').getTest().then(res => {
                console.log(res);
            });
        }
    }
</script>

<style type="scss">
    * {
        margin: 0;
        padding: 0;
    }
    a {
        text-decoration: none;
    }
    .container {
        margin: 5px auto;
        width: 90%;
    }

    #content {
        min-height: 550px;
    }
</style>
