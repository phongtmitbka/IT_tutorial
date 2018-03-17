<template>
    <div class="breadcrumb">
        <ul>
            <li><a href="#">Trang chủ</a> </li>
            <li><a href="#">Khóa học</a> </li>
            <li><a href="#">PHP cơ bản</a> </li>
        </ul>
    </div>
</template>

<style lang="scss" scoped>
    .breadcrumb {
        background: transparent;
        margin-bottom: 0;
        ul {
            list-style: none;
            li {
                float: left;
                a {
                    background: #0c5460;
                    border: 1px solid black;
                    color: #ffffff;
                    padding: 5px 10px;
                    margin: 0px 5px;
                    border-radius: 3px;
                }
            }
        }
    }
</style>