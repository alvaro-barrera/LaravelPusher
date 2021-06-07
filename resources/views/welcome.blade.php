<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

</head>
<body>
<script src="{{ asset("js/app.js") }}"></script>
<script>
    window.Echo.channel("newChannel")
        .listen("EventSocket", (e) => {
            console.log(e);
        })
</script>
</body>
</html>
