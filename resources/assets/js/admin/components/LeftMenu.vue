<template>
    <div class="left-menu">
        <div>
            <div class="title">
                <router-link to="/admin">Dashboard</router-link>
            </div>
            <ul>
                <li><router-link to="/admin/courses" :class="{active: $route.name == 'courses'}">Quản lý khóa học</router-link></li>
                <li><router-link to="/admin/posters" :class="{active: $route.name == 'posters'}">Quan lý cộng tác viên</router-link></li>
            </ul>
        </div>
    </div>
</template>
<script>
  import rs from '../../common/lib/RequestStore';
  export default {
    data() {
      return {
      }
    },
    methods: {

    },
    mounted() {
    }
  }
</script>
<style lang="scss" scoped>
    .left-menu {
        width: 20%;
        height: 900px;
        background-color: #f1f1f1;
        color: #000000;
        margin: 10px 0;
        float: left;
        .title {
            font-weight: bold;
            font-size: 20px;
            background: #424265;
            height: 50px;
            line-height: 50px;
            padding: 0 10px;
            color: #ffffff;
            a {
                display: block;
                color: #ffffff;
            }
        }
        ul {
            list-style: none;
            padding: 5px 10px;
            li {
                height: 40px;
                line-height: 38px;
                border: 1px solid #fff8f8;
                padding: 0 5px;
                .active {
                    background: #dcd3d3;
                }
            }
            a {
                display: block;
            }
        }
    }
</style>