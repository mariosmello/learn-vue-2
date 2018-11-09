<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Class 3</title>
</head>
<body>

<div id="root">

    <ul>

        <li v-for="name in names" v-text="name"></li>

    </ul>

    <input id="input" type="text">
    <button id="button">Add</button>

</div>


<script src="https://unpkg.com/vue@2.5.17/dist/vue.js"></script>

<script>

    let app = new Vue({

        el: '#root',
        data: {

           names: ['Joe', 'Mary', 'Jane', 'Jack']

        },

        mounted() {

            /**
             * Adicionando ação sem o uso do Vue
             */
            document.querySelector('#button').addEventListener('click', () => {

                let name = document.querySelector('#input');
                app.names.push(name.value);
                name.value = "";

            });

        }

    });

</script>

</body>
</html>