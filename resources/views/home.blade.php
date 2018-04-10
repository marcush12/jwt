<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Single Page Forum</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div id="app">
        <v-app>
            <a-config></a-config>
        </v-app>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
