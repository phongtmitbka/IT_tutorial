<template>
    <div class="container">
        <app-header></app-header>
        <navigation></navigation>
        <bread-crumb></bread-crumb>
        <div id="content">
            <router-view :key="$route.fullPath"></router-view>
            <comment-facebook></comment-facebook>
        </div>
        <div class="clearfix"></div>
        <app-footer></app-footer>
    </div>
</template>
<script>
    import AppHeader from '../../common/components/layouts/Header';
    import Navigation from './layouts/Navigation';
    import AppFooter from '../../common/components/layouts/Footer';
    import BreadCrumb from './layouts/BreadCrumb';
    import CommentFacebook from '../../common/components/layouts/CommentFacebook';
    export default {
      components: {
        AppHeader,
        Navigation,
        AppFooter,
        BreadCrumb,
        CommentFacebook,
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