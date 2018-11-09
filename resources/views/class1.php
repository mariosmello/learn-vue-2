<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Class 1</title>
</head>
<body>

<div id="root">
    <input type="text" id="input" v-model="message">
    <p>The value of the input is: {{message}}.</p>
</div>


<script src="https://unpkg.com/vue@2.5.17/dist/vue.js"></script>

<script>

    new Vue({

        el: '#root',
        data: {

            message: 'Hello World'

        }

    });

</script>

</body>
</html>