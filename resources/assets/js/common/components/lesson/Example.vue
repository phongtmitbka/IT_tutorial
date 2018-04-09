<template>
    <div class="example">
        <div class="label">Example <span v-if="action == 'edit'" class="fa fa-edit" @click="edit()"></span>
            <button type="button" v-if="status != 'normal'" class="btn btn-primary btn-save" title="Save"  @click="save()">Save</button>
        </div>
        <hr>
        <textarea name="content" class="content" v-model="exampleContent" :readonly="status == 'normal'">
        </textarea>
        <div class="excute">
            <a href="/" target="_blank" class="btn btn-primary">Try It Yourself</a>
        </div>
    </div>
</template>
<script>
  import rs from '../../../common/lib/RequestStore';
  export default {
    props: ['content','action'],
    data() {
      return {
        status: this.action,
        exampleContent: '',
      }
    },
    methods: {
      getData(id) {
        rs.getRequest('LessonRequest').getLessonContent({type: 'Example', id: id}).then(res => {
          if (res.content) {
            this.exampleContent = res.content;
          }
        });
      },
      edit() {
        this.status = 'edit';
      },
      save() {
        let params = {
          type: 'Example',
          id: this.content.id,
          content: this.exampleContent,
        };
        rs.getRequest('LessonRequest').updateLessonContent(params).then(res => {
          if (res.content) {
            this.exampleContent = res.content;
            this.content.id = res.id;
          }
        });
        this.status = 'normal';
      }
    },
    mounted() {
      this.getData(this.content.id);
    }
  }
</script>
<style lang="scss">
    .example {
        background: #b4e8c0;
        padding: 10px 20px;
        border-radius: 10px;
        margin: 20px 0;
        .label {
            font-size: 25px;
        }
        .content {
            width: 100%;
            min-height: 400px;
        }
        .excute {
            height: 70px;
            line-height: 70px;
            .btn {
                width: 150px;
            }
        }
    }
</style>