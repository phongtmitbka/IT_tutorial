<template>
    <div class="test">
        <h2>Test
            <span v-if="hasSubmit" class="result">Result:{{ totalTrue }}/{{ questions.length }}</span>
            <span v-if="action == 'edit'" class="fa fa-edit" @click="edit()"></span>
        </h2>
        <hr>
        <div v-for="(question, index) in questions" class="question">
            <template v-if="status == 'normal'">
                <h3>{{ index + 1 }}. {{ question.qs }} </h3>

                <h4><input type="radio" v-model="questions[index].user_aws" value="a">
                    A. {{ question.a }}
                </h4>
                <h4><input type="radio" v-model="questions[index].user_aws" value="b">
                    B. {{ question.b }}
                </h4>
                <h4><input type="radio" v-model="questions[index].user_aws" value="c">
                    C. {{ question.c }}
                </h4>
                <h4><input type="radio" v-model="questions[index].user_aws" value="d">
                    D. {{ question.d }}
                </h4>
            </template>
            <template v-else>
                <h3>Question {{ index + 1 }}.<span class="fa fa-trash" @click="delRow(index)"></span> </h3>
                <span>Question</span><input type="text" class="form-control input" v-model="questions[index].qs" placeholder="Please enter question content ...">
                <span class="bg-warning" v-if="hasErrors && !questions[index].qs">The field is required</span><br>
                <span>Answer A. </span><input type="radio" v-model="questions[index].result" value="a">
                <input type="text" class="form-control input" v-model="questions[index].a" placeholder="Please enter answer A content ...">
                <span class="bg-warning" v-if="hasErrors && !questions[index].a">The field is required</span><br>
                <span>Answer B.</span><input type="radio" v-model="questions[index].result" value="b">
                <input type="text" class="form-control input" v-model="questions[index].b" placeholder="Please enter answer B content ...">
                <span class="bg-warning" v-if="hasErrors && !questions[index].b">The field is required</span><br>
                <span>Answer C.</span><input type="radio" v-model="questions[index].result" value="c">
                <input type="text" class="form-control input" v-model="questions[index].c" placeholder="Please enter answer C content ...">
                <span class="bg-warning" v-if="hasErrors && !questions[index].c">The field is required</span><br>
                <span>Answer D.</span><input type="radio" v-model="questions[index].result" value="d">
                <input type="text" class="form-control input" v-model="questions[index].d" placeholder="Please enter answer D content ...">
                <span class="bg-warning" v-if="hasErrors && !questions[index].d">The field is required</span><br>
                <span class="bg-warning" v-if="hasErrors && !questions[index].result">Bạn chưa chọn đáp án của câu hỏi</span>
            </template>
            <hr>
        </div>
        <div class="clearfix"></div>
        <template v-if="status != 'normal'">
            <button type="button" class="btn btn-primary btn-add" title="Add new row" @click="addRow()"> <span class="fa fa-plus fa-2x"></span> </button>
            <button type="button" class="btn btn-primary btn-save" title="Save"  @click="save()">Save</button>
        </template>
        <template v-else-if="$route.fullPath.split('/')[1] != 'poster'">
            <button type="button" class="btn btn-primary btn-save" title="Save"  @click="submit()">Gửi bài</button>
        </template>
    </div>
</template>
<script>
  import rs from '../../../common/lib/RequestStore';
  export default {
    props: ['content','action'],
    data() {
      return {
        questions: [],
        status: this.action,
        hasErrors: false,
        totalTrue: 0,
        hasSubmit: false,
      }
    },
    methods: {
      getData(id) {
        rs.getRequest('LessonRequest').getLessonContent({type: 'Test', id: id}).then(res => {
          if (res.content) {
            this.questions = res.content.split('<?>');
            this.questions = this.questions.map(function (item) {
              return {qs: item.split('<aws>')[0], a: item.split('<aws>')[1], b: item.split('<aws>')[2], c: item.split('<aws>')[3], d: item.split('<aws>')[4], result: item.split('<aws>')[5]};
            });
          }
        });
      },
      delRow(index) {
        this.questions.splice(index, 1);
      },
      addRow() {
        this.questions.push({qs: '', a: '', b: '', c: '', d: '', result: ''});
      },
      edit() {
        this.showInput = true;
        this.status = 'edit';
      },
      save() {
        for (let i = 0; i < this.questions.length; i++) {
          if (Object.values(this.questions[i]).includes('')) {
            return this.hasErrors = true;
          }
        }
        this.hasErrors = false;
        if (!this.hasErrors) {
          this.questions = this.questions.map(function (question) {
            return Object.values(question).join('<aws>');
          });
          let params = {
            type: 'Test',
            id: this.content.id,
            content: this.questions.join('<?>'),
          };
          rs.getRequest('LessonRequest').updateLessonContent(params).then(res => {
            if (res.content) {
              this.questions = res.content.split('<?>');
              this.questions = this.questions.map(function (item) {
                return {qs: item.split('<aws>')[0], a: item.split('<aws>')[1], b: item.split('<aws>')[2], c: item.split('<aws>')[3], d: item.split('<aws>')[4], result: item.split('<aws>')[5]};
              });
              this.content.id = res.id;
            }
          });
          this.status = 'normal';
        }
      },
      submit () {
        this.totalTrue = 0;
        this.hasSubmit = true;
        for (let i = 0; i < this.questions.length; i++) {
          if (this.questions[i].result == this.questions[i].user_aws) {
            this.totalTrue++;
          }
        }
      }
    },
    mounted() {
      this.getData(this.content.id);
    }
  }
</script>
<style lang="scss" scoped>
    .test {
        min-height: 300px;
        background: #dae7fb;
        border-radius: 5px;
        padding: 20px;
        margin-bottom: 20px;
        .result {
            float: right;
        }
        .question {
            margin: 20px 10px;
            h5 {
                margin: 0 30px;
            }
        }
        .question {
            .fa-trash {
                cursor: pointer;
                float: right;
            }
            input {
                margin: 5px 0;
            }
        }
        .btn-save {
            padding: 10px 20px;
        }
    }
</style>