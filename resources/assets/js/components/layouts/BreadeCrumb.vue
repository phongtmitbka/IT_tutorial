<template>
    <div class="breadcrumb">
        <ul>
            <li><a href="#">{{ $t('home') }}</a> </li>
            <li><a href="#">{{ $t('course') }}</a> </li>
            <li><a href="#">PHP cơ bản</a> </li>
            <li class="lang vi"><router-link to="?lang=vi">Tiếng Việt</router-link></li>
            <li class="lang en"><router-link to="?lang=en">English</router-link></li>
        </ul>
    </div>
</template>

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
                    padding: 5px 10px;
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
                width: 105px;
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