<template>
    <div class="lesson">
        <h1>Giới thiệu về CSS</h1>
        <intro></intro>
        <example></example>
        <summary-lesson></summary-lesson>
        <test></test>

    </div>
</template>

<script>
    import Example from '../../common/lesson/Example';
    import Intro from '../../common/lesson/Intro';
    import SummaryLesson from '../../common/lesson/Summary';
    import Test from '../../common/lesson/Test';
    export default {
        components: {
            Example,
            Intro,
            SummaryLesson,
            Test,
        }
    }
</script>

<style lang="scss">
    .lesson {
        padding: 20px;
    }
</style>