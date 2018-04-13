<template>
    <div class="home-content">
        <div class="home-body">
            <template v-for="course in courses">
                <div class="course">
                    <h1>{{ course.name }}</h1>
                    <h3>{{ course.total_view }} views</h3>
                </div>
            </template>
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
      getData() {
        rs.getRequest('CourseRequest').getCourses().then(res => {
          this.courses = res;
        });
      },
    },
    mounted() {
      this.getData();
    }
  }
</script>
<style lang="scss" scoped>
    .home-content {
        .left-menu {
            width: 20%;
        }
        .home-body {
            width: 80%;
            float: right;
            padding: 20px 30px;
            .course {
                width: 40%;
                float: left;
                background: #b3b3b3;
                color: #4e3c3c;
                margin: 15px 60px;
                height: 200px;
                text-align: center;
                font-size: 30px;
                h1 {
                    background: #3e3e42;
                    color: #ffffff;
                }
                h3 {
                    line-height: 150px;
                }
            }
        }
    }
</style>