<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>directorytraversalwrong</title>
</head>
<body>
    <p>Enter a file wich you want to read from the file system <b>but only in the examplefiles directory</b></p>
    <br>
    <b>not safed against directory traversal</b>
    <form method="get" action="displayfilenotsafe.php">
        <input type="text" name="filename">
        <button type="submit">show file content</button>
    </form>
    <br>
    <br>
    <p>Enter a file wich you want to read from the file system <b>but only in the examplefiles directory</b></p>
    <br>
    <b>safe against directory traversal</b>
    <form method="get" action="displayfilesafe.php">
        <input type="text" name="filename">
        <button type="submit">show file content</button>
    </form>
</body>
</html>