<template>
    <div class="about-course">
        <h1>Khóa học {{ course.name }} <span class="fa fa-edit" @click="status = 'edit'" v-if="$route.fullPath.split('/')[1] == 'poster' || $route.fullPath.split('/')[1] == 'admin'"></span></h1>
        <hr>
        <div class="about-content">
            <div v-if="status == 'normal'">
                {{ course.about }}
            </div>
            <div v-else>
                <textarea v-model="course.about" class="form-control" rows="10"></textarea>
            </div>
        </div>
        <div class="btn-box">
            <template v-if="status == 'normal'">
                <router-link :to="{name: 'lesson', params: {course: this.$route.params.course, lesson: 1}}" class="btn btn-primary">Mở đầu</router-link>
            </template>
            <template v-else>
                <button type="button" class="btn btn-primary" @click="save()">Lưu lại</button>
            </template>
        </div>
    </div>
</template>
<script>
    import rs from '../../lib/RequestStore';
    export default {
      data() {
        return {
          course: {},
          status: 'normal',
        }
      },
      methods: {
        getCourse() {
          let params = {
            course: this.$route.params.course,
          };
          rs.getRequest('CourseRequest').getCourse(params).then(res => {
            this.course = res;
          });
        },
        save() {
          let params = {
            course: this.$route.params.course,
            about: this.course.about,
          };
          rs.getRequest('CourseRequest').updateCourse(params).then(res => {
            this.course = res;
          });
          this.status = 'normal';
        }
      },
      mounted() {
        this.getCourse();
      }
    }
</script>
<style lang="scss" scoped>
    .about-course {
        padding: 20px;
        .btn-box {
            text-align: center;
            margin-top: 30px;
            .btn {
                width: 300px;
            }
        }
    }
</style>