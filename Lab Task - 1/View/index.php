<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab Task - 1</title>
</head>

<body>
    <form action="../Control/taskone.php" method="post">
        <table>
            <tr>
                <td><label for="num1">1st Number:</label></td>
                <td><input type="text" name="num1"></td>
            </tr>

            <tr>
                <td><label for="num2">2nd Number:</label></td>
                <td><input type="text" name="num2"><br></td>
            </tr>

            <tr>
                <td>Sum:</td>
                <td><input type="radio" name="func" value="+"> <label for="func">plus</label>
                </td>

                <td><input type="radio" name="func" value="-"> <label for="func">minus</label>
                </td>

                <td><input type="radio" name="func" value="*"> <label for="func">multiplication</label>
                </td>

                <td><input type="radio" name="func" value="/"> <label for="func">dividation</label>
                </td>
            </tr>

            <tr>
                <td><input type="submit" name="submit"></td>
            </tr>

        </table>
    </form>
</body>
</html>