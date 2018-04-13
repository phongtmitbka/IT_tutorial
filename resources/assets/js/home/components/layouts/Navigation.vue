<template>
    <div class="navigation">
        <ul>
            <li>
                <router-link to="/">{{ $t('home') | toUpper}}</router-link>
            </li>
            <li>
                <router-link to="/about">{{ $t('about') | toUpper}}</router-link>
            </li>
            <li>
                <input type="text" class="form-control" :placeholder="$t('searchPlaceHolder')" v-model="keyword">
                <button type="button"class="btn btn-primary" @click="search()">{{ $t("search") }}</button>
            </li>
        </ul>
    </div>
</template>
<script>
    import rs from '../../../common/lib/RequestStore';
    export default {
      data() {
        return {
          keyword: '',
          result: [],
        }
      },
      filters: {
        toUpper(val) {
          return val.toUpperCase();
        }
      },
      methods: {
        search() {
          this.result = [];
          this.$emit('searchResult', this.result);
          if (this.keyword) {
            rs.getRequest('LessonRequest').searchLesson({keyword: this.keyword}).then(res => {
              this.result = res;
              this.$emit('searchResult', this.result);
            });
          }
        }
      }
    }
</script>
<style lang="scss">
    .container {
        position: relative;
    }
</style>

<style lang="scss" scoped>
    .navigation {
        margin: 10px 0px;
        ul {
            list-style: none;
            background-color: #F0F0F0;
            height: 50px;
            line-height: 48px;
            > li {
                float: left;
                border: 1px solid #f3e2e2;
                &:last-child {
                    float: right;
                    padding: 0 10px;
                    border: 0;
                    .form-control {
                        float: left;
                        width: 270px;
                        margin: 5px 10px;
                    }
                }
                > a {
                    padding: 15px 30px;
                    color: #373c43;
                    &:hover {
                        background-color: #ffffff;
                    }
                }
            }
        }
    }
</style>