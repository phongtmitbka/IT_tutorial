<template>
    <div class="add">
        <h1>Thêm khóa học</h1>
        <div class="content">
            <label for="name">Tên khóa học</label>
            <input type="text" placeholder="Nhập tên khóa học" class="form-control" id="name" v-model="name">
            <span class="bg-warning" v-if="hasErrors && !name">The title is required</span><br>
            <label for="content">Giới thiệu về khóa học</label>
            <textarea id="content" cols="30" rows="5" class="form-control about" v-model="about"></textarea>
            <span class="bg-warning" v-if="hasErrors && !name">The title is required</span><br>
            <label for="url">Nhập link</label>
            <input type="text" placeholder="Nhập link" class="form-control" id="url" v-model="url">
            <span class="bg-warning" v-if="hasErrors && !name">The title is required</span><br>
            <label for="type">Thể loại</label>
            <select id="type" class="form-control type" v-model="type">
                <option value="web">Web</option>
                <option value="c">C/C++</option>
                <option value="java">Java</option>
            </select>
            <div class="button-box">
                <button type="button" class="btn btn-primary btn-submit" @click="submit()">Gửi</button>
                <router-link to="/admin/courses" class="btn btn-dark btn-submit">Hủy</router-link>
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
          about: '',
          url: '',
          type: '',
          hasErrors: false
        }
      },
      methods: {
        submit() {
          if (this.name && this.about && this.url) {
            let param = {
              name: this.name,
              about: this.about,
              url: this.url,
              type: this.type,
            };
            rs.getRequest('CourseRequest').addCourse(param).then(res => {
              this.$router.push('/admin/courses');
            });
          } else {
            this.hasErrors = true;
          }
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