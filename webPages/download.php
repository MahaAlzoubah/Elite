<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <button onclick="window.location.href='download.php?file=Elite.zip';">Download</button>


    <?php
        if (!empty($_GET['file']))
        {
            $filename=basename($_GET['file']);
            $filepath= './'. $filename;
            if(!empty($filename) && file_exists($filepath)){

                //define headers 
                header("cache-control: public");
                header("content-description: File Transfer");
                header("Content-Disposition: attachment; filename=$filename"); 
                header('Content-Type: application/octet-stream');
                header('Content-Length: ' . filesize($filepath));
                header("Content-Transfer-Encoding: binary");  

                ob_clean(); // Clean (erase) the output buffer
                flush();    // Flush system output buffer
                readfile($filepath);
                exit; 

            }
            else{
                echo "This File Does not exist.";
            }
        }
    ?>
</body>
</html>
