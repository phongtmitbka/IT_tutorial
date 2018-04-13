<template>
    <div class="left-menu">
        <div v-if="$route.name != 'home'">
            <div class="title">
                <router-link :to="{ name: 'about-course', params: {course: course} }">{{ this.courseName }}</router-link>
            </div>
            <ul>
                <li v-for="lesson in lessons" :class="{ active: lesson.lesson_number == $route.params.lesson }"><router-link :to="{ name: 'lesson', params: {course: course, lesson: lesson.lesson_number} }">{{ lesson.title }}</router-link></li>
            </ul>
        </div>
        <div v-else>
            <div class="title">Lập trình C/C++</div>
            <ul>
                <li v-for="course in courseCs"><router-link :to="{ name: 'about-course', params: {course: course.url} }">{{ course.name }}</router-link></li>
            </ul>
            <div class="title">Lập trình Java</div>
            <ul>
                <li v-for="course in courseJavas"><router-link :to="{ name: 'about-course', params: {course: course.url} }">{{ course.name }}</router-link></li>
            </ul>
            <div class="title">Lập trình web</div>
            <ul>
                <li v-for="course in courseWebs"><router-link :to="{ name: 'about-course', params: {course: course.url} }">{{ course.name }}</router-link></li>
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
        courseCs: '',
        courseJavas: '',
        courseWebs: '',
      }
    },
    methods: {
      getData() {
        let params = {
          course: this.course,
        };
        if (this.$route.name != 'home') {
          rs.getRequest('LessonRequest').getListLesson(params).then(res => {
            this.lessons = res;
          });
          rs.getRequest('CourseRequest').getCourse(params).then(res => {
            this.courseName = res.name;
          });
        } else {
          this.getCourseByType();

        }
      },
      getCourseByType() {
        rs.getRequest('CourseRequest').getGroupCourse({ type: 'c'}).then(res => {
            this.courseCs = res;
        });
        rs.getRequest('CourseRequest').getGroupCourse({ type: 'java'}).then(res => {
          this.courseJavas = res;
        });
        rs.getRequest('CourseRequest').getGroupCourse({ type: 'web'}).then(res => {
          this.courseWebs = res;
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
            color: #ffffff;
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
                &:hover {
                    background: #dcd3d3;
                }
                a {
                    display: block;
                }
            }
            .active {
                background: #dcd3d3;
            }
        }
    }
</style>