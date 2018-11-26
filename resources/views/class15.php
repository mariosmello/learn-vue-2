<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Class 15</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css" />
    <style>
        body {
            padding-top: 50px;
        }
    </style>
</head>
<body>

<div id="root" class="container">

    <progress-view inline-template>
        <div>
            <h1>Your Progress Through This Course Is {{ completionRate }}%</h1>
            <p><button @click="completionRate += 10">Update</button></p>
        </div>
    </progress-view>

</div>

<script src="https://unpkg.com/vue@2.5.17/dist/vue.js"></script>
<script src="/classes/class15.js"></script>

</body>
</html>