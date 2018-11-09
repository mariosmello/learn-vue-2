<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Class 4</title>
</head>
<body>

<div id="root">

    <ul>

        <li v-for="name in names" v-text="name"></li>

    </ul>

    <input v-model="newName" type="text">
    <button @click="addName">Add</button>

</div>


<script src="https://unpkg.com/vue@2.5.17/dist/vue.js"></script>

<script>

    let app = new Vue({

        el: '#root',
        data: {

            names: ['Joe', 'Mary', 'Jane', 'Jack'],
            newName: ''

        },

        methods: {

            addName() {

                this.names.push(this.newName);
                this.newName = '';

            }

        }

    });

</script>

</body>
</html>