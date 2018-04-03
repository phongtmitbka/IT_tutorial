<template>
    <div class="lesson">
        <h1>Giới thiệu về CSS</h1>
        <intro></intro>
        <example></example>
        <summary-lesson></summary-lesson>

    </div>
</template>

<script>
    import Example from '../../common/lesson/Example';
    import Intro from '../../common/lesson/Intro';
    import SummaryLesson from '../../common/lesson/Summary';
    export default {
        components: {
            Example,
            Intro,
            SummaryLesson,
        }
    }
</script>

<style lang="scss">
    .lesson {
        padding: 20px;
    }
</style>