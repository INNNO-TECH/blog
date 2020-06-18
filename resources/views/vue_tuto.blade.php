<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vue Tuto</title>
    <!-- connect with laravel main css which is controlled by bootstrap -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        @{{ parent }}
        <div class="row">
            <div class="col-6">
                <example-component></example-component>
            </div>
            <div class="col-6">
                <testing-component></testing-component>
            </div>
        </div>
    </div>
    <!-- connecting with javascript which includes javascript -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>