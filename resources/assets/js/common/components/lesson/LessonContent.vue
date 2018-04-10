<template>
    <div class="content">
        <div v-for="(content, index) in contents">
            <template v-if="action == 'add' || action == 'edit'">
                <div><button type="button" class="btn btn-danger btn-sub" title="Remove" @click="delBox(index)"><span class="fa fa-trash fa-1x"></span></button></div>
                <div><button type="button" class="btn btn-dark btn-sub" :disabled="index == 0" :class="{disabled: index == 0}" title="To up" @click="upBox(index)"><span class="fa fa-angle-up"></span></button></div>
                <div><button type="button" class="btn btn-primary btn-sub" title="To down" @click="downBox(index)" :disabled="index == contents.length - 1" :class="{disabled: index == contents.length - 1}"><span class="fa fa-angle-down"></span></button></div>
                <div class="clearfix"></div>
            </template>
            <div class="main-content">
                <intro v-if="content.type == 'intro'" :content="content" :action="action"></intro>
                <example v-if="content.type == 'example'" :content="content" :action="action"></example>
                <summary-lesson v-if="content.type == 'summary'" :content="content" :action="action"></summary-lesson>
                <test v-if="content.type == 'test'" :content="content" :action="action"></test>
            </div>
            <hr>
        </div>
        <div v-if="action == 'add' || action == 'edit'">
            <div>
                <button type="button" class="btn btn-dark btn-add" title="Add new" @click="addBox('intro')">+ Introduction</button>
                <button type="button" class="btn btn-dark btn-add" title="Add new" @click="addBox('example')">+ Example</button>
                <button type="button" class="btn btn-dark btn-add" title="Add new" @click="addBox('summary')">+ Summary</button>
                <button type="button" class="btn btn-dark btn-add" title="Add new" @click="addBox('test')">+ Test</button>
            </div>
            <div class="clearfix"></div>
            <hr>
        </div>
        <br>
    </div>
</template>
<script>
    import Vue from 'vue';
  import Example from './Example';
  import Intro from './Intro';
  import SummaryLesson from './Summary';
  import Test from './Test';
    export default {
      props: ['contents', 'action'],
      components: {
        Example,
        Intro,
        SummaryLesson,
        Test,
      },
      data() {
        return {
          showRadioBox: false,
        }
      },
      methods: {
        upBox(index) {
          if (index > 0) {
            let temp = this.contents[index];
            Vue.set(this.contents, index, this.contents[index - 1]);
            Vue.set(this.contents, index - 1, temp);
          }
        },
        downBox(index){
          if (index < this.contents.length - 1) {
            let temp = this.contents[index];
            Vue.set(this.contents, index, this.contents[index + 1]);
            Vue.set(this.contents, index + 1, temp);
          }
        },
        delBox(index) {
          this.contents.splice(index, 1);
        },
        addBox(type) {
          this.contents.push({type: type, id: ''});
        },
      },
      mounted() {
      }
    }
</script>
<style lang="scss" scoped>
    .content {
        margin: 10px 0;
        button {
            float: left;
            margin: 0 5px;
            height: 40px;
            line-height: 40px;
            font-size: 30px;
            padding: 0 10px;
        }
        .radio-box {
            font-size: 20px;
            float: left;
            height: 40px;
            line-height: 40px;
            .radio {
            }

        }
        .main-content {
            margin: 10px 0;
        }
    }
    .disabled {
        cursor: not-allowed;
    }
</style>