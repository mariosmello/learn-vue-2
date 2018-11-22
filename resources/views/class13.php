<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Class 13</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css" />
    <style>
        body {
            padding-top: 50px;
        }
    </style>
</head>
<body>

<div id="root" class="container">

    <coupon @applied="onCouponApplied"></coupon>

    <h1 v-if="couponApplied">You used a coupon!</h1>

</div>

<script src="https://unpkg.com/vue@2.5.17/dist/vue.js"></script>
<script src="/classes/class13.js"></script>

</body>
</html>