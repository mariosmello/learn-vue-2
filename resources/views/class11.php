<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Class 11</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css" />
    <style>
        body {
            padding-top: 50px;
        }
    </style>
</head>
<body>

<div id="root" class="container">

    <tabs>

        <tab name="About Us" :selected="true">
            <h1>Here is the content for the about us.</h1>
        </tab>

        <tab name="About Our Culture">
            <h1>Here is the content for the about our culture.</h1>
        </tab>

        <tab name="About Our Vision">
            <h1>Here is the content for the about our vision.</h1>
        </tab>

    </tabs>

</div>

<script src="https://unpkg.com/vue@2.5.17/dist/vue.js"></script>
<script src="/classes/class11.js"></script>

</body>
</html>