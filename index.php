<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
</head>
<body>

<form action= "insert.php" method="post">

<table>
<tr>
             <th>First Name </th>
             <td>
                <input type="text" name="fname"
                placeholder="first name">
</td>
</tr>


<tr>
             <th>Last Name </th>
             <td>
                <input type="text" name="lname"
                placeholder="Last name">
</td>
</tr>


<tr>
             <th>City location </th>
             <td>
                <input type="text" name="city"
                placeholder="City location">
</td>
</tr>

<tr>
            
             <td>
                <input type="submit" name="bsubmit" value="Send">
</td>
             <td>
                <input type="reset" name="breset" value="Reset">
</td>
</tr>

</table>
</form>
</body>
</html>
