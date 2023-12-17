<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Third task</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script
        src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/frontendCounter.js"></script>
</head>
<body onload="myFunction()">

<h1>Counter of the page</h1>

<form action="admin.php" method="post">
    <label for="name">Your name:</label>
    <input name="name" id="name" type="text">

    <label for="password">Password:</label>
    <input name="password" id="password" type="text">

    <button type="submit">Submit</button>
</form>

</body>
</html>
<?php header('Access-Control-Allow-Origin: http://localhost:8000');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, PATCH, OPTIONS');
header('Access-Control-Allow-Headers: X-Requested-With, content-type, Authorization');?>