<?php include("./config/config.php");;

/* Checken van de inputfields */
if (isset($_POST["TITLE"]) && $_POST["TITLE"] != ""
    && isset($_POST["SUMMARY"]) && $_POST["SUMMARY"] != ""
    && isset($_POST["CONTENT"]) && $_POST["CONTENT"] != ""
) {
    $title = strtoupper($_POST["TITLE"]);
    $sql = "SELECT * FROM ENTRIES WHERE title = '$title'";
    $query = $conn->query($sql);
    $sql = "INSERT INTO ENTRIES (TITLE, SUMMARY, CONTENT)
     VALUES ('$_POST[TITLE]','$_POST[SUMMARY]','$_POST[CONTENT]')";
    $query = $conn->query($sql);

} ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Evil Retro Night</title>
    <link href="./css/style2.css" rel="stylesheet" type="text/css"/>
</head>

<body>

<!-- News entry form -->
<div class="w-form form-wrapper squeezed">
    <form id="form1" name="form1" method="post" action="index.php">

        <p>
            <input type="text" class="w-input form-field" name="TITLE" placeholder="What is the title of your news?"
                   id="iTITLE"/>
        </p>
        <p>
            <textarea type="text" class="w-input form-field" name="SUMMARY" placeholder="Summary" id="iSUMMARY" cols="5"
                      rows="5" maxlength="100"></textarea>
        </p>
        <p>
            <textarea type="text" class="w-input form-field" name="CONTENT" placeholder="Content" id="iCONTENT"
                      cols="15" rows="15" maxlength="500"></textarea>
        </p>
        <p>
            <input type="submit" class="w-button button full-width" name="Submit" id="Submit" value="Submit"/>
        </p>
    </form>
</div>

</body>
</html>

