
<?php
    echo $_REQUEST["title"] \n;
    echo $_REQUEST["description"]\n;
    echo $_REQUEST["genre"]\n;
    echo $_REQUEST["subject"]\n;
    echo $_REQUEST["year"]\n;
    echo $_REQUEST["museum"]\n;
    echo $_REQUEST["type"]\n;
foreach ($_REQUEST["creativecommons"] as $cc){
    echo $cc\n;
}
?>

<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="lab2.css">
<title>Edit Art Work</title>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
</head>

<body>
    <form action="<?php $_PHP_SELF ?>" method="post">
        <table className="radiobtns">
            <tr>
                <td>
                        <input type="text" name="title" value="Title"><br>
                        <input type="text" name="description" value="Description"><br>
                        <h3>Choose Genre</h3>
                        <select name="genre">
                            <option value="abstract">Abstract</option>
                            <option value="baroque">Baroque</option>
                            <option value="gothic">Gothic</option>
                            <option value="renaissance">Renaissance</option>
                        </select>
                        <h3>Choose Subject</h3>        
                        <select name="subject">
                            <option value="landscape">Landscape</option>
                            <option value="portrait">Portrait</option>
                        </select><br>
                        <input type="text" name="year" value="Year"><br>
                        <input type="text" name="museum" value="Museum"><br>
                </td>
                <td>
                    <h3>Type of Artwork</h3>
                    <input type="radio" name="type" value="painting">Painting<br>
                    <input type="radio" name="type" value="sculpture">Sculpture<br>
                </td>
            </tr>
            <tr>
                <td>
    
                </td>
                <td>
                    <h3>Creative Commons Specification</h3>
                    <input type="checkbox" name="creativecommons" value="Commercial">Commercial<br>
                    <input type="checkbox" name="creativecommons" value="Non-Commercial">Non-commercial<br>
                    <input type="checkbox" name="creativecommons" value="Derivative_Work">Derivative Work<br>
                    <input type="checkbox" name="creativecommons" value="Non-Derivative_Work">Non-Derivative Work<br>
                </td>
            </tr>
        </table>
        <button type="submit" value="Submit">Submit Query</button>
        <button type="reset" value="Reset">Clear Form</button>

    </form>
</body>
<script>

</script>

</html>
