<template>
    <div class="navigation">
        <ul>
            <li>
                <router-link to="/course">KHÓA HỌC</router-link>
                <div class="course-nav">
                    <ul>
                        <li>
                            <router-link to="/php/php-basic">Lập trình PHP</router-link>
                        </li>
                        <li>
                            <router-link to="/php/php-basic">PHP cơ bản</router-link>
                        </li>
                        <li>
                            <router-link to="/php/php-advance">PHP nâng cao</router-link>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <router-link to="js/js-basic">Javascript</router-link>
                        </li>
                        <li>
                            <router-link to="js/js-basic">Javascript cơ bản</router-link>
                        </li>
                        <li>
                            <router-link to="js/js-advance">Javascript nâng cao</router-link>
                        </li>
                        <li>
                            <router-link to="js/es6">ES6</router-link>
                        </li>
                        <li>
                            <router-link to="js/angularjs">AngularJs</router-link>
                        </li>
                        <li>
                            <router-link to="js/vuejs">VueJs</router-link>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <router-link to="/html-css">HTML-CSS</router-link>
                        </li>
                        <li>
                            <router-link to="/html-css/html">HTML</router-link>
                        </li>
                        <li>
                            <router-link to="/html-css/html5">HTML5</router-link>
                        </li>
                        <li>
                            <router-link to="/html-css/css">CSS</router-link>
                        </li>
                        <li>
                            <router-link to="/html-css/css3">CSS3</router-link>
                        </li>
                        <li>
                            <router-link to="/html-css/bootstrap">Bootstrap</router-link>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <router-link to="/more">Khác</router-link>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <router-link to="/about">GIỚI THIỆU</router-link>
            </li>
            <li>
                <router-link to="/qa">HỎI ĐÁP</router-link>
            </li>
            <li>
                <input type="text" placeholder="Nhập từ khóa tìm kiếm ...">
                <button>Tìm kiếm</button>
            </li>
        </ul>
    </div>
</template>
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
                    border: 0;
                    input {
                        width: 250px;
                        height: 25px;
                        line-height: 25px;
                        padding: 0px 10px;
                    }
                    button {
                        padding: 5px 10px;
                        cursor: pointer;
                    }
                }
                > a {
                    padding: 15px 30px;
                    color: #373c43;
                    &:hover {
                        background-color: #ffffff;
                    }
                }
                .course-nav {
                    display: none;
                    position: absolute;
                    width: 100%;
                    border: 1px solid #cacaca;
                    > ul {
                        width: 24.8%;
                        height: 300px;
                        float: left;
                        > li {
                            display: block;
                            width: 100%;
                            &:first-child {
                                font-weight: bold;
                            }
                            a {
                                display: block;
                            }
                            &:last-child {
                                border-bottom: 1px solid #cacaca;
                            }
                        }
                    }
                }
            }
        }
    }
</style>