<template>
    <div class="home-content">
        <left-menu></left-menu>
        <div class="home-body">
            <about-course></about-course>
        </div>
    </div>
</template>

<script>
    import LeftMenu from '../common/LeftMenu';
    import AboutCourse from '../common/AboutCourse';
    export default {
        components: {
            LeftMenu,
            AboutCourse
        }
    }
</script>

<style lang="scss" scoped>
    .home-content {
        .left-menu {
            width: 20%;
        }
        .home-body {
            width: 80%;
            float: right;
            .about-course {
                margin: 10px 0;
            }
        }
    }
</style>