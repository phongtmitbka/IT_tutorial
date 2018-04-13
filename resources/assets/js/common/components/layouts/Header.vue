<template>
    <div class="header">
        <div class="header-top">
            <a href="https://www.youtube.com" target="_blank">
                <i class="fa fa-youtube fa-1x"></i>
            </a>
            <a href="https://www.facebook.com" target="_blank">
                <i class="fa fa-facebook fa-1x"></i>
            </a>
            <template v-if="Object.keys(currentUser).length">
                <a href="/logout">
                    <i class="fa fa-sign-out fa-1x"></i> Đăng xuất
                </a>
                <a href="/mypage">
                    {{ currentUser.name }}
                </a>
            </template>
        </div>
        <div class="header-bottom">
            <template v-if="$route.fullPath.split('/')[1] == 'poster'">
                <div class="logo">
                    <router-link to="/poster">Web Tutorial</router-link>
                </div>
                <h3>Quan ly khoa hoc</h3>
            </template>
            <template v-else-if="$route.fullPath.split('/')[1] == 'admin'">
                <div class="logo">
                    <router-link to="/admin">Web Tutorial</router-link>
                </div>
                <h3>Quan tri website</h3>
            </template>
            <template v-else>
                <div class="logo">
                    <router-link to="/">Web Tutorial</router-link>
                </div>
                <h3>Web tutorial</h3>
            </template>
        </div>
    </div>
</template>

<script>
  import rs from '../../../common/lib/RequestStore';
  export default {
    data() {
      return {
        currentUser: {},
      }
    },
    mounted() {
      rs.getRequest('UserRequest').getCurrentUser().then(res => {
        this.currentUser = res;
      });
    }
  }
</script>

<style lang="scss" scoped>
    .header {
        background-color: #28f763;
        .header-top{
            height: 30px;
            background: #443636;
            line-height: 30px;
            .name {
                color: #ffffff;
            }
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