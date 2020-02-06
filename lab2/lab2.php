
<?php
    $artArray = [
        "title" => $_REQUEST["title"],
        "description" => $_REQUEST["description"],
        "genre" => $_REQUEST["genre"],
        "subject" => $_REQUEST["subject"],
        "year" => $_REQUEST["year"],
        "museum" => $_REQUEST["museum"],
        "type" => $_REQUEST["type"],
        "creativecommons" => $_REQUEST["creativecommons"],
    ];
    
    var_dump($artArray);
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
                        <input required type="text" name="title" placeholder="Title"><br>
                        <input requried type="text" name="description" placeholder="Description"><br>
                        <h3>Choose Genre</h3>
                        <select required name="genre">
                            <option selected disabled value="">choose genre</option>
                            <option value="abstract">Abstract</option>
                            <option value="baroque">Baroque</option>
                            <option value="gothic">Gothic</option>
                            <option value="renaissance">Renaissance</option>
                        </select>
                        <h3>Choose Subject</h3>        
                        <select required name="subject">
                            <option selected disabled value="">choose suject</option>
                            <option value="landscape">Landscape</option>
                            <option value="portrait">Portrait</option>
                        </select><br>
                        <input required type="number" name="year" placeholder="year"><br>
                        <input required type="text" name="museum" placeholder="museum"><br>
                </td>
                <td>
                    <h3>Type of Artwork</h3>
                    <input required type="radio" name="type" value="painting">Painting<br>
                    <input required type="radio" name="type" value="sculpture">Sculpture<br>
                </td>
            </tr>
            <tr>
                <td>
    
                </td>
                <td>
                    <h3>Creative Commons Specification</h3>
                    <input type="checkbox" name="creativecommons[]" value="Commercial">Commercial<br>
                    <input type="checkbox" name="creativecommons[]" value="Non-Commercial">Non-commercial<br>
                    <input type="checkbox" name="creativecommons[]" value="Derivative_Work">Derivative Work<br>
                    <input type="checkbox" name="creativecommons[]" value="Non-Derivative_Work">Non-Derivative Work<br>
                </td>
            </tr>
        </table>
        <button type="submit" value="Submit">Submit Query</button>
        <button type="reset" value="Reset">Clear Form</button>

    </form>
</body>


</html>
