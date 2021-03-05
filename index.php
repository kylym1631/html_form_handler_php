<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$errors = [];
if (!empty($_POST))
    {
        if (empty($_POST['first']))
            {
                $errors[] = 'ne zapolneno';
            }
        if (empty($errors))
            {
                echo htmlspecialchars($_POST['first']);
                exit();
            }
    }
if (!empty($errors))
    {
        foreach ($errors as $err)
            {
                echo "<span style = \"color:red\">$err</span><br>";
            }
    }
?>
<form method="post">
    <input type="text" name="first" value="<?=htmlspecialchars($_POST['first'],ENT_QUOTES); ?>">
    <input type="submit" value="отправить">
</form>
</body>
</html>
