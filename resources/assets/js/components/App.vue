<template>
    <div class="container">
        <app-header></app-header>
        <navigation></navigation>
        <breade-crumb></breade-crumb>
        <div id="content">
            <router-view></router-view>
        </div>
        <div class="clearfix"></div>
        <app-footer></app-footer>
    </div>
</template>

<script>
    import AppHeader from './layouts/Header';
    import Navigation from './layouts/Navigation';
    import BreadeCrumb from './layouts/BreadeCrumb';
    import AppFooter from './layouts/Footer';
    import rs from '../lib/RequestStore';
    export default {
        components: {
            AppHeader,
            Navigation,
            AppFooter,
            BreadeCrumb,
        },
        watch: {
          '$route.query.lang': function () {
            window.i18n.locale = this.$route.query.lang ? this.$route.query.lang : window.i18n.locale;
          }
        },
        mounted() {
            rs.getRequest('TestRequest').getTest().then(res => {

            });
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
