<template>
    <div class="content">
        <h1 class="title">Quản lý cộng tác viên</h1>
        <div>
            <router-link :to="{name: 'add-poster'}" class="btn btn-primary">Thêm cộng tác viên <span class="fa fa-plus"></span></router-link>
        </div>
        <table>
            <tr>
                <th width="50px">STT</th>
                <th width="100px">Name</th>
                <th width="100px">Email</th>
                <th width="100px">Trạng thái</th>
                <th width="100px">Ngày vào</th>
                <th width="80px">Sửa</th>
                <th width="80px">Xóa</th>
            </tr>
            <template v-for="(poster, index) in posters">
                <tr v-if="poster.status == 'edit'">
                    <td>{{ index + 1 }}</td>
                    <td><input type="text" class="form-control" v-model="poster.name"></td>
                    <td><input type="text" class="form-control" v-model="poster.email"></td>
                    <td>
                        <button class="form-control btn btn-primary" @click="poster.isActive=!poster.isActive">
                            <template v-if="poster.isActive">Khóa</template>
                            <template v-else>Kích hoạt</template>
                        </button>
                    </td>
                    <td>{{ poster.created_at }}</td>
                    <td><button type="button" class="form-control btn btn-primary" @click="save(poster)">Lưu lại</button></td>
                    <td><button type="button" class="form-control btn btn-primary" @click="cancel(poster)">Hủy</button></td>
                </tr>
                <tr v-else>
                    <td>{{ index + 1 }}</td>
                    <td>{{ poster.name }}</td>
                    <td>{{ poster.email }}</td>
                    <td>{{ poster.isActive | status }}</td>
                    <td>{{ poster.created_at }}</td>
                    <td><span class="fa fa-edit fa-2x" @click="edit(poster)"></span></td>
                    <td><span class="fa fa-trash fa-2x" @click="del(poster)"></span></td>
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
        posters: [],
      }
    },
    filters: {
      status(val) {
        if (val) return 'Kích hoạt';
        return 'Đang khóa';
      }
    },
    methods: {
      getData() {
        rs.getRequest('UserRequest').posters().then(res => {
          this.posters = res;
        });
      },
      edit(poster) {
        this.$set(poster, 'status', 'edit');
      },
      save(poster) {
        let param = {
          id: poster.id,
          name: poster.name,
          email: poster.email,
          isActive: poster.isActive,
        };
        rs.getRequest('UserRequest').updatePosterInfo(param).then(res => {
          this.getData();
        });
        this.$set(poster, 'status', 'normal');
      },
      cancel(poster) {
        this.getData();
        this.$set(poster, 'status', 'normal');
      },
      del(poster) {
        let action = confirm('Bạn có chắc muốn xóa không?');
        if (action) {
          rs.getRequest('UserRequest').delPoster({id: poster.id}).then(res => {
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
                        text-align: center;
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