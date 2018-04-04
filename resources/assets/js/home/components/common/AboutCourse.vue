<template>
    <div class="about-course">
        <div v-for="course in courses" class="about">
            <div class="box-title">
                <div class="title">
                    {{ course }}
                </div>
                <div class="start">
                    <router-link :to="'/course/' + course + '/lesson/0'">{{ $t('start')}} >></router-link>
                </div>
            </div>
            <div class="description">
                PHP là một ngôn ngữ lập trình phía Server dùng để xây dựng các ứng dụng Website.
                Điểm mạnh của PHP là tính cộng đồng của nó cao, nghĩa là trên thế giới có khá nhiều lập trình viên sử dụng PHP để xây dựng dự án cho riêng họ hoặc cho khách hàng của họ.
                Ngoài ra một điểm mạnh nữa của PHP đó là có khá nhiều CMS, Framework được xây dựng từ PHP giúp rút gọn quá trình tạo một website, vì vậy có khá nhiều lập trình viên lựa chọn ngôn ngữ này.
            </div>
        </div>
    </div>
</template>
<script>
    export default {
      data() {
        return {
          courses: ['php-basic', 'php-advance', 'html', 'css']
        }
      }
    }
</script>
<style lang="scss">
    .about-course {
        .about {
            padding: 30px 30px;
            float: left;
            width: 50%;
            .box-title {
                width: 40%;
                float: left;
                text-align: center;
                font-weight: bold;
                font-size: 30px;
                background: #424265;
                color: #ffffff;
                border-radius: 5px 0 0 5px;
                .title {
                    height: 130px;
                    padding-top: 90px;
                }
                .start {
                    height: 130px;
                    line-height: 130px;
                    a {
                        background: #10e841;
                        padding: 10px 20px;
                        border-radius: 5px;
                        color: #ffffff;
                        font-size: 20px;
                        &:hover {
                            background: #44f76d;
                        }
                    }
                }
            }
            .description {
                width: 60%;
                float: right;
                background: #fff8f8;
                height: 260px;
                padding: 15px;
                border: 5px solid #f1d3d3;
                border-radius: 0 5px 5px 0;
                overflow-y: scroll;
                text-align: justify;
            }
        }
    }
</style>