<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Mon site CV</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="favicon.ico">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    </head>

    <body>
        <div>
            <?php $var = shell_exec ('casperjs aformac.js');
                $tabjson = json_decode($var);
                foreach ($var as $key => $value) {
                    # code...
                    echo $value->title;
                }
            ?>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    </body>
</html>
