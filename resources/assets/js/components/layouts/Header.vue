<template>
    <div class="header">
        <div class="header-top">
            <a href="https://www.youtube.com" target="_blank">
                <i class="fa fa-youtube fa-1x"></i>
            </a>
            <a href="https://www.facebook.com" target="_blank">
                <i class="fa fa-facebook fa-1x"></i>
            </a>
        </div>
        <div class="header-bottom">
            <div class="logo">
                <router-link to="/">Web Tutorial</router-link>
            </div>
            <h3>Lập trình viên là 1 công việc rất ổn định - nghèo ổn định !</h3>
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
                    &:hover {
                        padding: 26px 16px;
                        background-color: #6f6fa5;
                    }
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