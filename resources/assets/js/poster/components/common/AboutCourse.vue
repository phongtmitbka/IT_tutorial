<template>
    <div class="about-course">
        <div v-for="course in courses" class="about">
            <div class="box-title">
                <div class="title">
                    {{ course.name }}
                </div>
                <div class="start">
                    <router-link :to="{ name: 'about-course', params: {course: course.url} }">Bắt đầu >></router-link>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    import rs from '../../../common/lib/RequestStore';
    export default {
      data() {
        return {
          courses: [],
        }
      },
      methods: {
        getCourses() {
          rs.getRequest('CourseRequest').getCourses().then(res => {
            this.courses = res;
          });
        }
      },
      mounted() {
        this.getCourses();
      }
    }
</script>
<style lang="scss">
    .about-course {
        .about {
            padding: 30px 30px;
            float: left;
            width: 50%;
            .box-title {
                width: 100%;
                float: left;
                text-align: center;
                font-weight: bold;
                font-size: 30px;
                background: #424265;
                color: #ffffff;
                border-radius: 5px 0 0 5px;
                .title {
                    height: 130px;
                    padding-top: 90px;
                }
                .start {
                    height: 130px;
                    line-height: 130px;
                    a {
                        background: #10e841;
                        padding: 10px 20px;
                        border-radius: 5px;
                        color: #ffffff;
                        font-size: 20px;
                        &:hover {
                            background: #44f76d;
                        }
                    }
                }
            }
        }
    }
</style>