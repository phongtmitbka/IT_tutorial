<template>
    <div class="left-menu">
        <div v-if="$route.name != 'home'">
            <div class="title">CSS cơ bản</div>
            <ul>
                <li><router-link to="/course/lesson">Mở đầu</router-link></li>
                <li><router-link to="/course/lesson">Cài đặt môi trường</router-link></li>
                <li><router-link to="/course/lesson">Viết chương trình đầu tiên</router-link></li>
                <li><router-link to="/course/lesson">Mở đầu</router-link></li>
                <li><router-link to="/course/lesson">Cài đặt môi trường</router-link></li>
                <li><router-link to="/course/lesson">Viết chương trình đầu tiên</router-link></li>
                <li><router-link to="/course/lesson">Mở đầu</router-link></li>
                <li><router-link to="/course/lesson">Cài đặt môi trường</router-link></li>
                <li><router-link to="/course/lesson">Viết chương trình đầu tiên</router-link></li>
                <li><router-link to="/course/lesson">Mở đầu</router-link></li>
                <li><router-link to="/course/lesson">Cài đặt môi trường</router-link></li>
                <li><router-link to="/course/lesson">Viết chương trình đầu tiên</router-link></li>
                <li><router-link to="/course/lesson">Mở đầu</router-link></li>
                <li><router-link to="/course/lesson">Cài đặt môi trường</router-link></li>
                <li><router-link to="/course/lesson">Viết chương trình đầu tiên</router-link></li>
                <li><router-link to="/course/lesson">Mở đầu</router-link></li>
                <li><router-link to="/course/lesson">Cài đặt môi trường</router-link></li>
                <li><router-link to="/course/lesson">Viết chương trình đầu tiên</router-link></li>
                <li><router-link to="/course/lesson">Mở đầu</router-link></li>
                <li><router-link to="/course/lesson">Cài đặt môi trường</router-link></li>
                <li><router-link to="/course/lesson">Viết chương trình đầu tiên</router-link></li>
                <li><router-link to="/course/lesson">Mở đầu</router-link></li>
                <li><router-link to="/course/lesson">Cài đặt môi trường</router-link></li>
                <li><router-link to="/course/lesson">Viết chương trình đầu tiên</router-link></li>
                <li><router-link to="/course/lesson">Mở đầu</router-link></li>
                <li><router-link to="/course/lesson">Cài đặt môi trường</router-link></li>
                <li><router-link to="/course/lesson">Viết chương trình đầu tiên</router-link></li>
                <li><router-link to="/course/lesson">Mở đầu</router-link></li>
                <li><router-link to="/course/lesson">Cài đặt môi trường</router-link></li>
                <li><router-link to="/course/lesson">Viết chương trình đầu tiên</router-link></li>
            </ul>
            <div class="title">Test</div>
            <ul>
                <li><router-link to="/course/lesson">Test 1</router-link></li>
            </ul>
        </div>
        <div v-else>
            <div class="title">PHP</div>
            <ul>
                <li><router-link to="/course">PHP cơ bản</router-link></li>
                <li><router-link to="/course">PHP nâng cao</router-link></li>
                <li><router-link to="/course">PHP regular expression</router-link></li>
                <li><router-link to="/course">Laravel framework</router-link></li>
                <li><router-link to="/course">Codeigniter</router-link></li>
            </ul>
            <div class="title">HTML - CSS</div>
            <ul>
                <li><router-link to="/course">HTML</router-link></li>
                <li><router-link to="/course">HTML5</router-link></li>
                <li><router-link to="/course">CSS</router-link></li>
                <li><router-link to="/course">CSS3</router-link></li>
                <li><router-link to="/course">Bootstrap</router-link></li>
            </ul>
            <div class="title">Javascript</div>
            <ul>
                <li><router-link to="/course">Javascript cơ bản</router-link></li>
                <li><router-link to="/course">Javascript nâng cao</router-link></li>
                <li><router-link to="/course">ES6</router-link></li>
                <li><router-link to="/course">Typescript</router-link></li>
                <li><router-link to="/course">AngularJS</router-link></li>
                <li><router-link to="/course">VueJS</router-link></li>
                <li><router-link to="/course">ReactJS</router-link></li>
                <li><router-link to="/course">NodeJS</router-link></li>
            </ul>
        </div>
    </div>
</template>
<script>
    export default {
      mounted() {
      }
    }
</script>
<style lang="scss" scoped>
    .left-menu {
        width: 100%;
        height: 900px;
        overflow-y: scroll;
        background-color: #f1f1f1;
        color: #000000;
        margin: 10px 0;
        float: left;
        .title {
            font-weight: bold;
            font-size: 20px;
            background: #424265;
            color: #ffffff;
            height: 50px;
            line-height: 50px;
            padding: 0 10px;
        }
        ul {
            list-style: none;
            padding: 5px 10px;
            li {
                height: 40px;
                line-height: 38px;
                border: 1px solid #fff8f8;
                padding: 0 5px;
            }
        }
    }
</style>