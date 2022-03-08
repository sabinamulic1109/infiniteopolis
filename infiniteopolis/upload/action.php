<?php
//action.php
if(isset($_POST["action"]))
{
 $connect = mysqli_connect("localhost", "root", "", "inf_baza");
 if($_POST["action"] == "fetch")
 {
  $query = "SELECT * FROM tbl_images ORDER BY id DESC";
  $result = mysqli_query($connect, $query); //kad se unese nova slika za nju se pravi mjesto u bazi a to se prikaze i u admin panelu 
  $output = '
   <table class="table table-bordered" style="background-color: #f5e6ff 

; ">  
    <tr>
     <th width="10%">ID</th>
     <th width="70%">Slika</th>
     <th width="10%">Promijeni</th>
     <th width="10%">Obriši</th>
    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '

    <tr>
     <td>'.$row["id"].'</td>
     <td>
      <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="60" width="75" class="img-thumbnail" />
     </td>
     <td><button type="button" name="update" class="btn btn-warning bt-xs update" id="'.$row["id"].'">Promijeni</button></td>
     <td><button type="button" name="delete" class="btn btn-danger bt-xs delete" id="'.$row["id"].'">Obriši</button></td>
    </tr>
   ';
  }
  $output .= '</table>';
  echo $output;
 }

 if($_POST["action"] == "insert") //unos nove slike, smjesta se u tabelu slike s imenom na novo mjesto
 {
  $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
  $query = "INSERT INTO tbl_images(name) VALUES ('$file')";
  if(mysqli_query($connect, $query))
  {
   echo 'Slika je upload-ovana!';
  }
 }
 if($_POST["action"] == "update") //na staro mjesto postojece slike stavlja se nova, tj mijenjaju se
 {
  $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
  $query = "UPDATE tbl_images SET name = '$file' WHERE id = '".$_POST["image_id"]."'";
  if(mysqli_query($connect, $query))
  {
   echo 'Slika je update-ovana!';
  }
 }
 if($_POST["action"] == "delete")// opcija za brisanje
 {
  $query = "DELETE FROM tbl_images WHERE id = '".$_POST["image_id"]."'";
  if(mysqli_query($connect, $query))
  {
   echo 'Slika je uklonjena!';
  }
 }
}
?>
