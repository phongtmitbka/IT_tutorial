<template>
    <div class="add">
        <h1>Thêm cộng tác viên</h1>
        <div class="content">
            <label for="name">Tên cộng tác viên</label>
            <input type="text" placeholder="Nhập tên khóa học" class="form-control" id="name" v-model="name">
            <label for="email">Email</label>
            <input type="text" placeholder="Nhập email" class="form-control" id="email" v-model="email">
            <label for="password">Mật khẩu</label>
            <input type="password" placeholder="Nhập mật khẩu" class="form-control" id="password" v-model="password">
            <div class="button-box">
                <button type="button" class="btn btn-primary btn-submit" @click="submit()">Gửi</button>
                <router-link to="/admin/posters" class="btn btn-dark btn-submit">Hủy</router-link>
            </div>
        </div>
    </div>
</template>
<script>
  import rs from '../../../../common/lib/RequestStore';
  export default {
    data() {
      return {
        name: '',
        email: '',
        password: '',
      }
    },
    methods: {
      submit() {
        let param = {
          name: this.name,
          email: this.email,
          password: this.password,
        };
        rs.getRequest('UserRequest').addPoster(param).then(res => {
          this.$router.push('/admin/posters');
        });
      }
    }
  }
</script>

<style lang="scss">
    .add {
        float: right;
        width: 80%;
        padding: 20px 50px;
        h1 {
            text-align: center;
        }
        .content {
            width: 100%;
            label {
                margin: 10px 0;
            }
            .about {
                height: 400px;
            }
            .type {
                width: 30%;
            }
            .button-box {
                margin: 10px 0;
            }
        }
    }
</style>