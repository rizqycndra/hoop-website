<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ !is_null($title ?? null) ? $title . " | Hoop - Ecommerce" : "Hoop - Ecommerce" }}</title>
    @vite("resource/css/app.css")
</head>