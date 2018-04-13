<template>
    <div class="navigation">
        <ul>
            <li>
                <router-link to="/poster">Quản lý khóa học</router-link>
            </li>
            <li></li>
        </ul>
    </div>
</template>
<script>
  export default {
  }
</script>
<style lang="scss">
    .container {
        position: relative;
    }
</style>

<style lang="scss" scoped>
    .navigation {
        margin: 10px 0px;
        ul {
            list-style: none;
            background-color: #F0F0F0;
            height: 50px;
            line-height: 48px;
            > li {
                float: left;
                border: 1px solid #f3e2e2;
                &:last-child {
                    float: right;
                    padding: 0 10px;
                    border: 0;
                    .form-control {
                        float: left;
                        width: 270px;
                        margin: 5px 10px;
                    }
                }
                > a {
                    padding: 15px 30px;
                    color: #373c43;
                    &:hover {
                        background-color: #ffffff;
                    }
                }
            }
        }
    }
</style>