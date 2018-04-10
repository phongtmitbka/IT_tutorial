<template>
    <div class="home-content">
        <left-menu></left-menu>
        <div class="home-body">
        Home admin content
        </div>
    </div>
</template>
<script>
  import LeftMenu from '../LeftMenu';
  export default {
    components: {
      LeftMenu
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
        }
    }
</style>