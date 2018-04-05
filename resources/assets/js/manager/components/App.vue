<template>
    <div class="container">
        <app-header></app-header>
        <navigation></navigation>
        <div id="content">
            <router-view :key="$route.fullPath"></router-view>
        </div>
        <div class="clearfix"></div>
        <app-footer></app-footer>
    </div>
</template>
<script>
    import AppHeader from './layouts/Header';
    import Navigation from './layouts/Navigation';
    import AppFooter from './layouts/Footer';
    export default {
      components: {
        AppHeader,
        Navigation,
        AppFooter
      }
    }
</script>


<style lang="scss">
    * {
        margin: 0;
        padding: 0;
    }
    a {
        &:hover {
            text-decoration: none !important;
        }
    }
    .container {
        margin: 5px auto;
        max-width: 90%;
        box-shadow: 3px 5px 5px #f1d9d9;
        padding-right: 0;
    }

    #content {
        min-height: 550px;
    }
</style>