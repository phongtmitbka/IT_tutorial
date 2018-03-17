<template>
    <div class="example">
        <div class="label">Ví dụ</div>
        <textarea name="content" class="content">
            <!DOCTYPE html>
                <html>
                <head>
                <title>Page Title</title>
                </head>
                <body>
                    <h1>This is a Heading</h1>
                    <p>This is a paragraph.</p>
                </body>
            </html>
        </textarea>
        <div class="excute">
            <select name="option" class="btn btn-option">
                <option value="">Full width</option>
                <option value="">Iphone 7</option>
                <option value="">Iphone 8</option>
                <option value="">Galaxy S6</option>
                <option value="">Galaxy S7</option>
                <option value="">Galaxy S8</option>
            </select>
            <button class="btn btn-primary">Thực hiện</button>
        </div>
        <div class="excute-content">
            <iframe src="" frameborder="0">
            </iframe>
        </div>
    </div>
</template>

<style lang="scss">
    .example {
        background: #d1ffdb;
        padding: 10px 20px;
        border-radius: 10px;
        margin: 20px 0;
        .label {

        }
        .content {
            width: 100%;
            min-height: 400px;
        }
        .excute {
            height: 70px;
            line-height: 70px;
            .btn-option {
                background: #c1d2c5;
                padding: 10px 10px;
            }
        }
        .excute-content {
            background: #ffffff;
            iframe {
                width: 100%;
                min-height: 500px;
            }
        }
    }
</style>