<?php include("./config/config.php");
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10-Mar-16
 * Time: 20:24
 */
$stmt = $conn->prepare('SELECT id, TITLE, SUMMARY, CONTENT FROM ENTRIES WHERE id = ?');
$stmt->bind_param("s",$_GET['id']);
$stmt->execute();
$row = $stmt->fetch();
?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <link href="./css/style2.css" rel="stylesheet" type="text/css" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700,300,400' rel='stylesheet'
              type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Press+Start+2P' rel='stylesheet' type='text/css'>
        <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
        <script src="js/tinymce.js" ></script>
    </head>

<body>
<!-- News update form -->
<div class="w-form form-wrapper squeezed">
    <form id="form1" name="form1" method="post" action="index.php">
        <input type="hidden" name="ID" value='<?php echo $row['id'];?>'>
        <p><label class="form-label">Title : </label>
            <input type="text" class="w-input form-field" name="TITLE"
                   id="iTITLE" value='<?php echo $row['TITLE'];?>'/>
        </p>
        <p>
            <label class="form-label">Summary : </label>
            <textarea class="w-input form-field" name="SUMMARY" id="iSUMMARY" cols="5"
                      rows="5" ><?php echo $row['SUMMARY']; ?></textarea>
        </p>
        <p>
            <label class="form-label">Content : </label>
            <textarea class="w-input form-field" name="CONTENT" id="iCONTENT"
                      cols="15" rows="15" ><?php echo $row['CONTENT']; ?></textarea>
        </p>
        <p>
            <label class="form-label">Author : </label>
            <input type="text" class="w-input form-field" name="AUTHOR" id="iAUTHOR" value='<?php echo $row['AUTHOR']; ?>'
        </p>
        <p>
            <input type="submit" class="button full-width" name="Submit" id="Submit" value="Update"/>
        </p>
    </form>
</div>
</body><?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10-Mar-16
 * Time: 20:24
 */