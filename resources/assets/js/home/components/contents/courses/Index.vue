<template>
    <div class="course-content">
        <left-menu></left-menu>
        <div class="course-body">
            <router-view></router-view>
            <div class="button-area">
                <button type="button" class="btn btn-preview">Preview</button>
                <button type="button" class="btn btn-primary btn-next">Next</button>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</template>

<script>
    import LeftMenu from '../../common/LeftMenu';
    export default {
        components: {
            LeftMenu
        }
    }
</script>

<style lang="scss" scoped>
    .course-content {
        .left-menu {
            width: 20%;
        }
        .course-body {
            width: 80%;
            float: right;
            .about-course {
                margin: 10px 0;
            }
        }
        .button-area {
            padding: 20px;
            .btn {
                width: 150px;
            }
            .btn-preview {
                background: #e4cccc;
                float: left;
            }
            .btn-next {
                float: right;
            }
        }
    }
</style>