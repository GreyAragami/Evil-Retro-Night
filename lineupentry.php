<?php include("./config/config.php");;

/* Checken van de inputfields */
if(isset($_POST["band_name"]) && $_POST["band_name"] != ""
&& isset($_POST["img"]) && $_POST["img"] != ""
&& isset($_POST["description"]) && $_POST["description"] != "" )
{
  /*Checken voor Duplicaten*/
  $band_name = strtoupper($_POST["band_name"]);
  $sql = "SELECT * FROM LINE_UP WHERE band_name = '$band_name'";
  $query = $conn->query($sql);
  if(mysqli_num_rows($query)==0)
  {
    /* inserten van de gegevens in de database */
    $sql = "INSERT INTO LINE_UP (band_name, img, description)
     VALUES ('$_POST[band_name]','$_POST[img]','$_POST[description]')";
    $query = $conn->query($sql);
  }
} ?>



<body>
<div class="w-form form-wrapper squeezed">
<form id="form1" name="form1" method="post" action="index.php">

  <p>
    <label class="form-label">Band Name</label>
 	<input type="text" class="w-input form-field" name="band_name" placeholder="what's the band's name?" id="iband_name" required/>
  </p>
  <p>
    <label class="form-label">Image</label>
      <input type="text" class="w-input form-field" name="img" placeholder="Place the direct link of your image here.(use imgur)"  id="iimg" required/>
  </p>
  <p>
    <label class="form-label">Description</label>
      <textarea class="w-input form-field" name="description" placeholder="Give a description for the band. What does the band do? When was it created?" id="idescription" cols="15" rows="15" maxlength="500"></textarea>
  </p>
  <p>
	<input type="submit" class="w-button button full-width" name="Submit" id="Submit" value="Submit" />
  </p>
</form>
</div>

</body>
</html>

