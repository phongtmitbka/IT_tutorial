<template>
    <div class="test">
        <h2>{{ $t('test') }}</h2>
        <hr>
        <div class="question">
            <h3>1. This tutorial teaches you everything about HTML? </h3>

            <h4><input type="radio" name="q1">
                A. This tutorial teaches you everything about HTML.
            </h4>
            <h4><input type="radio" name="q1">
                B. This tutorial teaches you everything about HTML.
            </h4>
            <h4><input type="radio" name="q1">
                C. This tutorial teaches you everything about HTML.
            </h4>
            <h4><input type="radio" name="q1">
                D. This tutorial teaches you everything about HTML.
            </h4>
        </div>
        <div class="question">
            <h3>2. This tutorial teaches you everything about HTML? </h3>

            <h4><input type="radio" name="q2">
                A. This tutorial teaches you everything about HTML.
            </h4>
            <h4><input type="radio" name="q2">
                B. This tutorial teaches you everything about HTML.
            </h4>
            <h4><input type="radio" name="q2">
                C. This tutorial teaches you everything about HTML.
            </h4>
            <h4><input type="radio" name="q2">
                D. This tutorial teaches you everything about HTML.
            </h4>
        </div>
        <div class="question">
            <h3>3. This tutorial teaches you everything about HTML? </h3>

            <h4><input type="radio" name="q3">
                A. This tutorial teaches you everything about HTML.
            </h4>
            <h4><input type="radio" name="q3">
                B. This tutorial teaches you everything about HTML.
            </h4>
            <h4><input type="radio" name="q3">
                C. This tutorial teaches you everything about HTML.
            </h4>
            <h4><input type="radio" name="q3">
                D. This tutorial teaches you everything about HTML.
            </h4>
        </div>
    </div>
</template>

<style lang="scss" scoped>
    .test {
        min-height: 300px;
        background: #dae7fb;
        border-radius: 5px;
        padding: 20px;
        margin-bottom: 20px;
        .question {
            margin: 20px 10px;
            h5 {
                margin: 0 30px;
            }
        }
    }
</style>