<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
    @vite('resources/js/app.js')
</head>
<body>
    <div id="root">
        <root-component></root-component>
    </div>
    <form action="">
        @csrf
        <label for="">label</label>
        <input type="text" name="label">
    </form>
</body>
</html>
