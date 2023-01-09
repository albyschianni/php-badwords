<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <p>
        <?php
            $lorem = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit mollitia in nulla numquam natus aliquam minus pariatur nesciunt porro, quia quaerat dignissimos inventore eius, quos quidem recusandae unde hic autem.";
            echo $lorem;

        ?> 

    </p>
    <p>
        La lunghezza del paragrafo è:
        <?php
            
            echo strlen($lorem);

        ?> 
    </p>
    <p>
        <?php
        $blur = $_GET['word'];
        echo $newString = str_replace($blur, "***", $lorem);
        ?> 

    </p>
        
    
    
    
</body>
</html>