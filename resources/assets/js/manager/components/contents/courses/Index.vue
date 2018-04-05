<template>
    <div class="course-content">
        <left-menu></left-menu>
        <div class="course-body">
            <router-view :key="$route.fullPath"></router-view>
            <div class="clear"></div>
        </div>
    </div>
</template>

<script>
    import LeftMenu from '../../common/LeftMenu';
    export default {
        components: {
            LeftMenu
        },
        methods: {
          save() {

          }
        },
        mounted() {

        }
    }
</script>
<style lang="scss">
    .fa-edit {
        cursor: pointer;
    }
</style>
<style lang="scss" scoped>
    .course-content {
        .left-menu {
            width: 20%;
        }
        .course-body {
            width: 80%;
            float: right;
            .about-course {
                margin: 10px 0;
            }
        }
    }
</style>