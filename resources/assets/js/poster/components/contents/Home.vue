<template>
    <div class="home-content">
        <div class="home-body">
            <about-course></about-course>
        </div>
    </div>
</template>

<script>
  import AboutCourse from '../common/AboutCourse';
  export default {
    components: {
      AboutCourse
    }
  }
</script>

<style lang="scss" scoped>
    .home-content {
        .home-body {
            width: 100%;
            float: right;
            .about-course {
                margin: 10px 0;
            }
        }
    }
</style>