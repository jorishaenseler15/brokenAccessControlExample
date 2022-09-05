<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Safe</title>
</head>

<body>
    <?php
    $filename = $_GET['filename'];
    //prevents user to only stay in desired directory
    $filename = basename($filename);
    if(strcmp($filename, $_GET['filename']) === 0) {
        $filepath = "../examplefiles/". $filename;
    $file = fopen($filepath, 'r');

    if ($file == false) {
        echo ("Error in opening file");
        exit();
    }
    $filesize = filesize( $filepath );
    $filetext = fread($file, $filesize);
    fclose($file);
    echo "<b>Der Inhalt vom File " . $filename . "</b>";
    echo ("<pre>$filetext</pre>");
    } else {
        echo "<b>You are trying to do directory traversal, got you :)</b>";
    }
    ?>
    <br>
    <a href="../index.php">Overview</a>
    <br>
    <a href="enterfile.php">Try another path</a>
</body>

</html>