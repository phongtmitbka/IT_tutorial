<template>
    <div class="example">
        <form :action="'/excute/' + type + '/example.php'" method="POST" target="_blank">
            <div class="label">Example <span v-if="action == 'edit'" class="fa fa-edit" @click="edit()"></span>
                <button type="button" v-if="status != 'normal'" class="btn btn-primary btn-save" title="Save"  @click="save()">Save</button>
            </div>
            <hr>
            <textarea name="content" class="content" v-model="exampleContent" :readonly="action != 'edit'">
            </textarea>
            <input type="hidden" name="example_id" :value="content.id">
            <span class="bg-warning" v-if="hasErrors && !exampleContent">The example content is required</span>
            <div class="excute">
                <button type="submit" class="btn btn-primary">Try It Yourself</button>
            </div>
        </form>
    </div>
</template>
<script>
  import rs from '../../../common/lib/RequestStore';
  export default {
    props: ['content','action', 'type'],
    data() {
      return {
        status: this.action,
        exampleContent: '',
        hasErrors: false,
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
        if (!this.exampleContent) {
          this.hasErrors = true;
        } else  {
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
          this.hasErrors = false;
        }
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
    }
</style>