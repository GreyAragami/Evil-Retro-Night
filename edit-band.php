<?php include("./config/config.php");
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10-Mar-16
 * Time: 16:03
 */
$stmt = $conn->prepare('SELECT * FROM LINE_UP WHERE id = ?');
<<<<<<< HEAD
$stmt->bind_param("s",$_GET['id']);
=======
$stmt->bind_param("s", $_GET['id']);
>>>>>>> origin/master
$stmt->execute();
$row = $stmt->fetch();

if (isset($_POST["band_name"]) && $_POST["band_name"] != ""
    && isset($_POST["description"]) && $_POST["description"] != ""
    && isset($_POST["playtime"]) && $_POST["playtime"] != ""
<<<<<<< HEAD
    && isset($_POST["img"]) && $_POST["img"]!= ""
) {
    $stmt = $conn->prepare('UPDATE LINE_UP SET band_name = ?, description = ?, playtime = ?, img = ? WHERE id = ?');
    $stmt->bind_param("sssss",$_POST['band_name'],$_POST['description'],$_POST['playtime'],$_POST['img'],$_POST['id']);
=======
    && isset($_POST["img"]) && $_POST["img"] != ""
) {
    $stmt = $conn->prepare('UPDATE LINE_UP SET band_name = ?, description = ?, playtime = ?, img = ? WHERE id = ?');
    $stmt->bind_param("sssss", $_POST['band_name'], $_POST['description'], $_POST['playtime'], $_POST['img'], $_POST['id']);
>>>>>>> origin/master
    $stmt->execute();

    //redirect to index page
    header('Location: index.php?action=updated');
}
?>
<<<<<<< HEAD
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link href="./css/style2.css" rel="stylesheet" type="text/css" />
=======
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link href="./css/style2.css" rel="stylesheet" type="text/css"/>
>>>>>>> origin/master
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700,300,400' rel='stylesheet'
          type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Press+Start+2P' rel='stylesheet' type='text/css'>
    <script src="//cdn.tinymce.com/4/tinymce.min.js" type="text/javascript"></script>
    <script src="js/tinymce.js" type="text/javascript"></script>
</head>

<body>
<!-- News update form -->
<div class="w-form form-wrapper squeezed">
    <form method="post" action=''>
<<<<<<< HEAD
        <input type="hidden" name="ID" value='<?php echo $row['id'];?>'>
        <p><label class="form-label">Band Name : </label>
            <input type="text" class="w-input form-field" name="band_name"
                   id="iBAND_NAME" value='<?php echo $row['band_name'];?>'/>
        </p>
        <p>
            <label class="form-label">Description : </label>
            <textarea  class="w-input form-field" name="description" id="idescription" cols="5"
                       rows="5"  ><?php echo $row['description']; ?></textarea>
        </p>
        <p>
            <label class="form-label">Play time : </label>
            <textarea  class="w-input form-field" name="playtime" id="iplaytime"
                       cols="15" rows="15" ><?php echo $row['playtime']; ?></textarea>
=======
        <input type="hidden" name="ID" value='<?php echo $row['id']; ?>'>
        <p><label class="form-label">Band Name : </label>
            <input type="text" class="w-input form-field" name="band_name"
                   id="iBAND_NAME" value='<?php echo $row['band_name']; ?>'/>
        </p>
        <p>
            <label class="form-label">Description : </label>
            <textarea class="w-input form-field" name="description" id="idescription" cols="5"
                      rows="5"><?php echo $row['description']; ?></textarea>
        </p>
        <p>
            <label class="form-label">Play time : </label>
            <textarea class="w-input form-field" name="playtime" id="iplaytime"
                      cols="15" rows="15"><?php echo $row['playtime']; ?></textarea>
>>>>>>> origin/master
        </p>
        <p>
            <label class="form-label">img : </label>
            <input type="text" class="w-input form-field" name="img" id="iimg" value='<?php echo $row['img']; ?>'
        </p>
        <p>
            <input type="submit" class="button full-width" name="Submit" id="Submit" value="Update"/>
        </p>
    </form>
</div>
</body>