<template>
    <div class="intro">
        <h2>
            <span v-if="status != 'normal'">
                 <input type="text" class="form-control" v-model="title" placeholder="Please enter title ...">
                <span class="bg-warning" v-if="hasErrors && !title">The title is required</span>
            </span>
            <span v-else>{{ title }}
                <span v-if="action == 'edit'" class="fa fa-edit" @click="edit()"></span>
            </span>
        </h2>
        <hr>
        <h5 v-for="(row, index) in rows">
            <span v-if="status != 'normal' ">
                <input type="text" class="form-control input-add-row" v-model="rows[index]" placeholder="Please enter row content ...">
                <button type="button" class="btn btn-primary btn-sub" title="Delete row" @click="delRow(index)"><span class="fa fa-trash fa-2x"></span> </button>
                <span class="bg-warning" v-if="hasErrors && !rows[index]">The field is required</span>
            </span>
            <span v-else>
                - {{ row }}
            </span><br>
            <div class="clearfix"></div>
            <br>
        </h5>
        <template v-if="status != 'normal'">
            <button type="submit" class="btn btn-primary btn-add" title="Add new row" @click="addRow()"> <span class="fa fa-plus fa-2x"></span> </button>
            <button type="button" class="btn btn-primary btn-save" title="Save"  @click="save()">Save</button>
        </template>
    </div>
</template>
<script>
  import rs from '../../../common/lib/RequestStore';
  export default {
    props: ['content','action'],
    data() {
      return {
        rows: [],
        status: this.action,
        hasErrors: false,
        title: '',
      }
    },
    methods: {
      getData(id) {
        rs.getRequest('LessonRequest').getLessonContent({type: 'Introduction', id: id}).then(res => {
          this.title = res.title;
          if (res.content) {
            this.rows = res.content.split('|');
          }
        });
      },
      delRow(index) {
        this.rows.splice(index, 1);
      },
      addRow() {
        this.rows.push('');
      },
      edit() {
        this.status = 'edit';
      },
      save() {
        if (!this.rows.includes('') && this.title) {
          this.hasErrors = false;
          let params = {
            type: 'Introduction',
            title: this.title,
            id: this.content.id,
            content: this.rows.join('|'),
          };
          rs.getRequest('LessonRequest').updateLessonContent(params).then(res => {
            this.title = res.title;
            if (res.content) {
              this.rows = res.content.split('|');
            }
            this.content.id = res.id;
          });
          this.status = 'normal';
        } else {
          this.hasErrors = true;
        }
      }
    },
    mounted() {
      this.getData(this.content.id);
    }
  }
</script>
<style lang="scss" scoped>
    .intro {
        background: #e5ffb0;
        border-radius: 5px;
        padding: 20px;
        .input-add-row {
            width: 95%;
            float: left;
            margin-right: 10px;
        }
        .fa-2x {
            font-size: 20px;
        }
    }
</style>