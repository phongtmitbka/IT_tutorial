<template>
    <div v-if="results" class="result-content">
        <div v-for="result in results" class="result-box">
            <div class="title">{{ result.title }}</div>
            <div class="course">Khóa học: {{ result.course.name }}</div>
            <div class="lesson">Bài học: {{ result.lesson_number }}</div>
            <div class="view">Số lượt xem: {{ result.number_view }}</div>
            <div class="created">Ngày viết: {{ result.created_at }}</div>
            <a :href="'/course/' + result.course.url + '/lesson/' + result.lesson_number" class="btn btn-primary btn-view">Xem</a>
        </div>
    </div>
</template>
<script>
    export default {
      props: ['results'],
    }
</script>
<style lang="scss" scoped>
    .result-content {
        padding: 30px 200px;
    .result-box {
        background: #f5e8e8;
        border-radius: 5px;
        margin: 20px 0;
    div {
        padding: 5px 20px;
    }
    .title {
        background: #1e4828;
        color: #ffffff;
        padding: 5px 10px;
        font-size: 20px;
    }
    .course {
        background: #c1b9b9;

    }
    .btn-view {
        margin: 10px 20px;
        padding: 5px 50px;
    }
    .created {
        text-align: right;
    }
    }
}
</style>