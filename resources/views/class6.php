
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Class 6</title>
    <style>

    </style>
</head>
<body>

<div id="root">

    <h1>{{reversedMessage}}</h1>

    <h1>All Tasks</h1>
    <ul>
        <li v-for="task in tasks">
            <button @click="finishTask(task)">Done</button>
            <span v-text="task.description"></span>
        </li>
    </ul>

    <h1>Incomplete Tasks</h1>
    <ul>
        <li v-for="task in incompleteTasks" v-text="task.description"></li>
    </ul>

    <h1>Completed Tasks</h1>
    <ul>
        <li v-for="task in completedTasks" v-text="task.description"></li>
    </ul>

</div>


<script src="https://unpkg.com/vue@2.5.17/dist/vue.js"></script>

<script>

    let app = new Vue({

        el: '#root',
        data: {

            message: 'Hello World',

            tasks: [

                { description: 'Go to the store', completed: false },
                { description: 'Finish screencast', completed: false },
                { description: 'Make donation', completed: false },
                { description: 'Clear inbox', completed: false },
                { description: 'Make dinner', completed: false },

            ]

        },

        computed: {

            reversedMessage() {

                return this.message.split('').reverse().join('');

            },

            incompleteTasks() {

                return this.tasks.filter(task => ! task.completed);

                /*this.tasks.filter(function(task) {
                    return ! task.completed;
                })*/

            },

            completedTasks() {

                return this.tasks.filter(task => task.completed);

            }

        },

        methods: {

            finishTask(task) {

                task.completed = true;

            }

        }

    });

</script>

</body>
</html>