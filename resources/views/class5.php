
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Class 5</title>
    <style>
        .red {
            color: red;
        }

        .blue {
            color: blue;
        }

        .is-loading {
            background: red;
        }
    </style>
</head>
<body>

<div id="root">


    <h1 :class="className">Title</h1>
    <button v-bind:title="title">Hover Over Me</button>

    <button @click="clickMe" :class="{ 'is-loading': isLoading }">Click Me</button>

</div>


<script src="https://unpkg.com/vue@2.5.17/dist/vue.js"></script>

<script>

    let app = new Vue({

        el: '#root',
        data: {

            title: 'Now the title is being set through JavaScript',
            className: 'red',
            isLoading: true,

        },

        methods: {

            clickMe() {

                this.isLoading = false;
                this.className = 'blue';

            }

        }

    });

</script>

</body>
</html>