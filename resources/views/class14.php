<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Class 14</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css" />
    <style>
        body {
            padding-top: 50px;
        }
    </style>
</head>
<body>

<div id="root" class="container">

    <modal>

        <template slot="header">My Header</template>

        Here is my main content

        <div slot="footer">
            <button class="button is-success">Save changes</button>
            <button class="button">Cancel</button>
        </div>

    </modal>

</div>

<script src="https://unpkg.com/vue@2.5.17/dist/vue.js"></script>
<script src="/classes/class14.js"></script>

</body>
</html>