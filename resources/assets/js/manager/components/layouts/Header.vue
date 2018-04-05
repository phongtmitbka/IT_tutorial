<template>
    <div class="header">
        <div class="header-bottom">
            <div class="logo">
                <router-link to="/manager">Web Tutorial</router-link>
            </div>
            <h3>Giao diện quản lý khóa học</h3>
        </div>
    </div>
</template>

<script>

</script>

<style lang="scss" scoped>
    .header {
        background-color: #28f763;
        .header-top{
            height: 30px;
            background: #443636;
            line-height: 30px;
            a {
                float: right;
                color: #ffffff;
                padding: 0px 10px;
            }
        }
        .header-bottom {
            border-top: 1px solid #ffffff;
            border-bottom: 1px solid #ffffff;
            .logo {
                cursor: pointer;
                width: 20%;

                height: 100%;
                line-height: 100px;
                text-align: center;
                font-size: 40px;
                font-weight: bold;
                color: #ffffff;
                background-color: #424265;
                float: left;
                a {
                    color: #ffffff;
                }
            }
            h3 {
                width: 80%;
                height: 95px;
                line-height: 95px;
                text-align: center;
                font-style: italic;
            }
        }
    }
</style>