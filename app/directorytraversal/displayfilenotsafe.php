<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NotSafe</title>
</head>

<body>
    <?php
    $filename = $_GET['filename'];
    $filepath = "../examplefiles/" . $filename;
    $file = fopen($filepath, 'r');

    if ($file == false) {
        echo ("Error in opening file");
        exit();
    }
    $filesize = filesize($filepath);
    $filetext = fread($file, $filesize);
    fclose($file);
    echo "<b>Der Inhalt vom File " . $filename . "</b>";
    echo ("<pre>$filetext</pre>");
    ?>
    <br>
    <a href="../index.php">Overview</a>
    <br>
    <a href="enterfile.php">Try another path</a>
</body>

</html>