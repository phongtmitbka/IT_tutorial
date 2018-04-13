<template>
    <div class="breadcrumb">
        <ul>
            <li><router-link to="/poster">Quan ly khoa hoc</router-link> </li>
            <li v-if="$route.params.course"><router-link :to="{ name: 'about-course', params: {course: $route.params.course} }">{{ $route.params.course | breadCrumbLabel }}</router-link> </li>
            <li v-if="$route.params.lesson"><router-link :to="{ name: 'lesson', params: {course: $route.params.course, lesson: $route.params.lesson} }">Lesson {{ $route.params.lesson }}</router-link> </li>
            <li v-if="$route.name != 'home' && $route.name != 'poster' && $route.name != 'admin' && $route.name != 'lesson'"><router-link to="#">{{ $route.name | breadCrumbLabel }}</router-link> </li>
        </ul>
    </div>
</template>
<script>
    export default {
      data() {
        return {

        }
      },
      filters: {
        breadCrumbLabel(val) {
          val = val.toString().split('-').map(function (item) {
            return item.toUpperCase();
          });
          return val.join(' ');
        }
      }
    }
</script>
<style lang="scss" scoped>
    .breadcrumb {
        background: transparent;
        margin-bottom: 0;
        ul {
            list-style: none;
            width: 100%;
            li {
                float: left;
                a {
                    background: #0c5460;
                    color: #ffffff;
                    padding: 5px 20px;
                    margin: 0px 5px;
                    border-radius: 3px;
                }
            }
            .lang {
                float: right;
                color: #ffffff;
                padding: 3px;
                border-radius: 4px;
                cursor: pointer;
                text-align: center;
            }
            .vi {
                a {
                    background: #dc1111;
                }
            }
            .en {
                a {
                    background: #4343dc;
                }
            }
        }
    }
</style>