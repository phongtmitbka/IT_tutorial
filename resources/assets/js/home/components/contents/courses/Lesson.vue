<template>
    <div class="lesson">
        <lesson-content :contents="contents"></lesson-content>
    </div>
</template>

<script>
  import LessonContent from '../../../../common/components/lesson/LessonContent';
    export default {
        components: {
          LessonContent
        },
      data() {
        return {
          action: 'normal',
          contents: [
            {type: 'intro', content: 'This tutorial teaches you everything about HTML.|This tutorial teaches you everything about HTML.|This tutorial teaches you everything about HTML.', id: 1},
            {type: 'example', content: 'This tutorial teaches you everything about HTML.|This tutorial teaches you everything about HTML.|This tutorial teaches you everything about HTML.', id: 1},
            {type: 'summary', content: 'This tutorial teaches you everything about HTML.|This tutorial teaches you everything about HTML.|This tutorial teaches you everything about HTML.', id: 2},
            {type: 'test', content: 'This tutorial teaches you everything about HTML.|This tutorial teaches you everything about HTML.|This tutorial teaches you everything about HTML.', id: 1}
          ],
        }
      },
    }
</script>

<style lang="scss">
    .lesson {
        padding: 20px;
    }
</style>