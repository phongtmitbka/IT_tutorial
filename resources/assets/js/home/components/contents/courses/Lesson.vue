<template>
    <div class="lesson">
        <h1>{{ title ? title : 'Bai hoc khon ton tai' }}</h1>
        <hr>
        <lesson-content :contents="contents" :action="'normal'"></lesson-content>
        <div class="button-area">
            <template v-if="title">
                <router-link v-if="this.$route.params.lesson > 1" class="btn btn-preview" :to="{ name: 'lesson', params: {course: this.$route.params.course, lesson: this.$route.params.lesson -1 } }">Preview</router-link>
                <router-link v-if="this.$route.params.lesson < length" class="btn btn-primary btn-right" :to="{ name: 'lesson', params: {course: this.$route.params.course, lesson: parseInt(this.$route.params.lesson) + 1 } }">Next</router-link>
            </template>
        </div>
        <div class="clearfix"></div>
        <hr>
    </div>
</template>

<script>
  import rs from '../../../../common/lib/RequestStore';
  import LessonContent from '../../../../common/components/lesson/LessonContent';
    export default {
        components: {
          LessonContent,
        },
      data() {
        return {
          action: 'normal',
          contents: [],
          length: 0,
          title: '',
        }
      },
      methods: {
        getContents(course = this.$route.params.course, lesson = this.$route.params.lesson) {
          let params = { course: course, lesson: lesson };
          return rs.getRequest('LessonRequest').getLesson(params).then(res => {
              this.title = res.title;
              this.getLength(course);
              if (res.lesson_content) {
                let lessonContents = res.lesson_content.split(',');
                lessonContents = lessonContents.map(function (item) {
                  return {type: item.split('_')[0], id: item.split('_')[1]};
                });
                this.contents = lessonContents;
              }
            }
          );
        },
        getLength(course) {
          rs.getRequest('LessonRequest').getListLesson({course: course}).then(res => {
            this.length = res.length;
          });
        },
        updateView() {
          rs.getRequest('LessonRequest').updateView({view: true, course: this.$route.params.course, lesson: this.$route.params.lesson});
        },
        rememberLesson() {
          rs.getRequest('UserRequest').getCurrentUser().then(res => {
                if (Object.keys(res).length) {
                  this.saveRememberLesson(res.id);
                }
            });
        },
        saveRememberLesson(id) {
          let params = {
            id: id,
            remember_lesson: this.$route.fullPath,
          };
          rs.getRequest('UserRequest').updateRememberLesson(params);
        }
      },
      mounted() {
        this.getContents();
        this.updateView();
        this.rememberLesson();
      }
    }
</script>

<style lang="scss">
    .lesson {
        padding: 20px;
        .button-area {
            padding: 20px;
            .btn {
                font-size: 16px;
                width: 150px;
            }
            .btn-preview {
                background: #e4cccc;
                float: left;
            }
            .btn-right {
                float: right;
            }
        }
    }
</style>