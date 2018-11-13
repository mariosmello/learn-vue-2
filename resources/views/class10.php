<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Class 10</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css" />
    <style>
        body {
            padding-top: 50px;
        }
    </style>
</head>
<body>

<div id="root" class="container">

    <modal v-if="showModal" @close="showModal = false">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aut doloremque ducimus eos expedita hic illo inventore non placeat possimus praesentium, quos soluta vero voluptatibus voluptatum? Corporis dolore illo quidem.
        </p>
    </modal>
    <button @click="showModal = true">Show Modal</button>

</div>


<script src="https://unpkg.com/vue@2.5.17/dist/vue.js"></script>
<script src="/classes/class10.js"></script>

</body>
</html>