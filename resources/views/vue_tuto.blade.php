<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vue Tuto</title>
</head>
<body>
    <h1>I am vue Tuto</h1>
    <div id="app">
        <ol>
            <li v-for="todo in todos">
            @{{ todo.text }}
            </li>
        </ol>
    </div>
    <!-- connecting with javascript which includes javascript -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>