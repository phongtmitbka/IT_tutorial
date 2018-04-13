<template>
    <div class="lesson">
        <h1 v-if="!this.$route.params.lesson">Thêm bài học mới</h1>
        <div v-else-if="title">
            <div class="fa fa-edit fa-3x" @click="action='edit'"></div>
            <div class="fa fa-trash fa-3x" @click="del()"></div>
        </div>
        <h1>
            <input v-if="action != 'normal'" type="text" v-model="title" class="form-control" placeholder="Please enter title ...">
            <span v-else>{{ title ? title : 'Bai hoc khon ton tai' }}</span>
            <span class="bg-warning" v-if="hasErrors && !title">The title is required</span>
        </h1>
        <hr>
        <lesson-content :contents="contents" :action="action"></lesson-content>
        <div class="button-area">
            <template v-if="action == 'add' || action == 'edit'">
                <button type="button" class="btn btn-primary btn-right" @click="save()">Save</button>
            </template>
            <template v-else-if="title">
                <router-link v-if="this.$route.params.lesson > 1" class="btn btn-preview" :to="{ name: 'lesson', params: {course: this.$route.params.course, lesson: this.$route.params.lesson -1 } }">Preview</router-link>
                <router-link v-if="this.$route.params.lesson < length" class="btn btn-primary btn-right" :to="{ name: 'lesson', params: {course: this.$route.params.course, lesson: parseInt(this.$route.params.lesson) + 1 } }">Next</router-link>
            </template>
        </div>
        <div class="clearfix"></div>
        <hr>
    </div>
</template>

<script>

  import LessonContent from '../../../../common/components/lesson/LessonContent';
  import rs from '../../../../common/lib/RequestStore';
  export default {
    components: {
      LessonContent
    },
    data() {
      return {
        action: !this.$route.params.lesson ? 'add' : 'normal',
        contents: [],
        title: '',
        hasErrors: false,
        length: 0,
      }
    },
    methods: {
      del() {
        let result = confirm('Do you want delete this lesson ?');
        if (result) {
          let params = {
            lesson_number: this.$route.params.lesson,
            course: this.$route.params.course,
          };
          rs.getRequest('LessonRequest').delLesson(params).then(res => {
            this.$router.push('/poster/course/' + this.$route.params.course + '/about');
          });
        }
      },
      save() {
        if (this.title) {
          this.contents = this.contents.map(function (item) {
            return Object.values(item).join('_');
          });
          let params = {
            lesson_number: this.$route.params.lesson,
            title: this.title,
            course: this.$route.params.course,
            lesson_content: this.contents.join(','),
          };
          rs.getRequest('LessonRequest').updateLesson(params).then(res => {
            this.$router.push({ name: 'lesson', params: {course: this.$route.params.course, lesson: res.lesson_number} });
            this.getContents();
          });
          this.action = 'normal';
          this.hasErrors = false;
        } else {
          this.hasErrors = true;
        }
      },
      getContents(course = this.$route.params.course, lesson = this.$route.params.lesson) {
        this.contents = [];
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
      }
    },
    mounted() {
      this.getContents();
    }
  }
</script>

<style lang="scss" scoped>
    .lesson {
        padding: 20px;
        .fa-edit {
            float: left;
        }
        .fa-trash {
            float: right;
            cursor: pointer;
        }
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