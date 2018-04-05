<template>
    <div class="left-menu">
        <div>
            <div class="title">
                <router-link :to="{ name: 'about-course', params: {course: course} }">{{ this.courseName }}</router-link>
            </div>
            <ul>
                <li v-for="lesson in lessons"><router-link :to="{ name: 'lesson', params: {course: course, lesson: lesson.lesson_number} }">{{ lesson.title }}</router-link></li>
                <li><router-link :to="{ name: 'add-lesson', params: {course: course} }" class="btn btn-primary add-lesson">Thêm bài học</router-link></li>
            </ul>
        </div>
    </div>
</template>
<script>
    import rs from '../../../common/lib/RequestStore';
    export default {
      data() {
        return {
          lessons: [],
          course: this.$route.params.course,
          courseName: '',
        }
      },
      methods: {
        getData() {
          let params = {
            course: this.course,
          };
          rs.getRequest('LessonRequest').getListLesson(params).then(res => {
            this.lessons = res;
          });
          rs.getRequest('CourseRequest').getCourse(params).then(res => {
            this.courseName = res.name;
          });
        }
      },
      mounted() {
        this.getData();
      }
    }
</script>
<style lang="scss" scoped>
    .left-menu {
        width: 100%;
        height: 900px;
        overflow-y: scroll;
        background-color: #f1f1f1;
        color: #000000;
        margin: 10px 0;
        float: left;
        .title {
            font-weight: bold;
            font-size: 20px;
            background: #424265;
            height: 50px;
            line-height: 50px;
            padding: 0 10px;
            a {
                color: #ffffff;
            }
        }
        ul {
            list-style: none;
            padding: 5px 10px;
            li {
                height: 40px;
                line-height: 38px;
                border: 1px solid #fff8f8;
                padding: 0 5px;
                .add-lesson {
                    width: 100%;
                }
            }
        }
    }
</style>