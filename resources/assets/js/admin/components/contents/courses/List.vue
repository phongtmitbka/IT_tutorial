<template>
    <div class="content">
        <h1 class="title">Quản lý khóa học</h1>
        <div>
            <router-link :to="{name: 'add-course'}" class="btn btn-primary">Thêm khóa học <span class="fa fa-plus"></span></router-link>
        </div>
        <table>
            <tr>
                <th width="50px">STT</th>
                <th width="140px">Tên khóa học</th>
                <th>Giới thiệu</th>
                <th width="120px">Link</th>
                <th width="120px">Thể loại</th>
                <th width="80px">Sửa</th>
                <th width="80px">Xóa</th>
            </tr>
            <template v-for="(course,index) in courses">
                <tr v-if="course.status == 'edit'">
                    <td>{{ index + 1 }}</td>
                    <td><input type="text" v-model="course.name" class="form-control"></td>
                    <td>
                        <textarea v-model="course.about" cols="30" rows="10"></textarea>
                    </td>
                    <td><input type="text" v-model="course.url" class="form-control"></td>
                    <td>
                        <select name="type" class="form-control" v-model="course.type">
                            <option value="web">Web</option>
                            <option value="c">C</option>
                            <option value="java">Java</option>
                        </select>
                    </td>
                    <td><button type="button" class="btn btn-primary" @click="save(course)">Lưu lại</button></td>
                    <td><button type="button" class="btn btn-primary" @click="cancel(course)">Hủy</button></td>
                </tr>
                <tr v-else>
                    <td>{{ index + 1 }}</td>
                    <td>{{ course.name }}</td>
                    <td>{{ course.about }}</td>
                    <td>{{ course.url }}</td>
                    <td>{{ course.type | type }}</td>
                    <td><span class="fa fa-edit fa-2x" @click="edit(course)"></span></td>
                    <td><span class="fa fa-trash fa-2x" @click="del(course)"></span></td>
                </tr>
            </template>
        </table>
    </div>
</template>
<script>
    import rs from '../../../../common/lib/RequestStore';
  export default {
    data() {
      return {
        courses: [],
      }
    },
    filters: {
      type(val) {
        switch (val) {
          case 1: return 'PHP';
          case 2: return 'HTML-CSS';
          case 3: return 'Javascript';
          default: return 'PHP';
        }
      }
    },
    methods: {
      getData() {
        rs.getRequest('CourseRequest').getCourses().then(res => {
          this.courses = res;
        });
      },
      edit(course) {
        this.$set(course, 'status', 'edit');
      },
      save(course) {
        let param = {
          id: course.id,
          name: course.name,
          about: course.about,
          url: course.url,
          type: course.type,
        };
        rs.getRequest('CourseRequest').updateCourse(param).then(res => {
          this.getData();
        });
        this.$set(course, 'status', 'normal');
      },
      cancel(course) {
        this.$set(course, 'status', 'normal');
      },
      del(course) {
        let action = confirm('Bạn có chắc muốn xóa không?');
        if (action) {
          rs.getRequest('CourseRequest').delCourse({id: course.id}).then(res => {
            this.getData();
          });
        }
      },
    },
    mounted() {
      this.getData();
    }
  }
</script>
<style lang="scss" scoped>
    .content {
        .content {
            width: 80%;
            float: right;
            .title {
                text-align: center;
            }
            table {
                width: 100%;
                tr {
                    text-align: center;
                    th {
                        border: 1px solid black;
                    }
                    td {
                        border: 1px solid black;
                        .fa {
                            cursor: pointer;
                        }
                    }
                }
            }
            .form-control {
                width: 80%;
                margin: 0 10px;
            }
            textarea {
                width: 100%;
            }
            .btn-primary {
                float: right;
                margin: 10px;
            }
        }
    }
</style>