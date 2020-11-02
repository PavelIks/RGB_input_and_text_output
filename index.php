<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
if(isset($_POST['R']) && ($_POST['G']) && ($_POST['B']))
{
    echo
        '
                <table style="background-color: black; margin-top: 20%; margin-left: 50%; color: white">
                    <tr>
                        <td>
                            <h1>
                                <label style="background-color: rgb('.$_POST['R'].', '.$_POST['G'].', '. $_POST['B'].')">
                                    Тест!
                                </label>
                            </h1>
                        </td>
                    </tr>
                </table>
         ';
}
else
{
    echo
        '
            <form method="post" action="index.php">
                <p>Введите R:<input name="R" type="number" max="255" min="0"></p>
                <p>Введите G:<input name="G" type="number" max="255" min="0"></p>
                <p>Введите B:<input name="B" type="number" max="255" min="0"></p>
                <input type="submit">
            </form>
        ';
}
?>
</body>

</html>