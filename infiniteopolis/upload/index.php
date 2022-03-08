<!DOCTYPE html>  
<html>  
 <head>  
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <link rel="stylesheet" href="style.css">

 </head>  
 <body style="background-image: url('139.jpg'); ">  <!--ovom dijelu stranice pristup ima samo admin-->
  <br /><br />  
  <div class="container" style="width:900px;">  
   <h3 class="reg" align="center"><b>Admin Panel za galeriju</b></h3>  <!--admin ima prikaz svih dodanih slika iz baze-->
   <br />
     <div align="right">
    <button type="button"style="background-color: #cc80ff; border-color:#cc80ff ;" name="add" id="add" class="btn btn-info">Dodaj sliku</button>
      <a href="http://localhost/infiniteopolis/upload/galerija.php" > <button type="button" href="galerija.php" class="btn btn-info"style="background-color: #cc80ff; border-color:#cc80ff ;">Pogledaj galeriju</button></a>
</div>
<div align="left"><a  href="http://localhost/infiniteopolis/indexadmin.php#home" > <button type="button" class="btn btn-info"style="background-color: #cc80ff; border-color:#cc80ff ;">Nazad na početnu</button></div></a>
   <br />
   <div id="image_data">

   </div>
  </div>  
 </body>  
</html>

<div id="imageModal" class="modal fade" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="btn btn-outline-warning" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Dodaj sliku</h4><!--admin moze dodati sliku-->
   </div>
   <div class="modal-body">
    <form id="image_form" method="post" enctype="multipart/form-data">
     <p><label>Odaberi sliku</label>
     <input type="file" name="image" id="image" /></p><br />
     <input type="hidden" name="action" id="action" value="insert" />
     <input type="hidden" name="image_id" id="image_id" />
     <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />
      
    </form>
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Otkaži</button>
   </div>
  </div>
 </div>
</div>
 
<script>  
$(document).ready(function(){
 
 fetch_data();

 function fetch_data()
 {
  var action = "fetch";
  $.ajax({
   url:"action.php",
   method:"POST",
   data:{action:action},
   success:function(data)
   {
    $('#image_data').html(data);
   }
  })
 }
 $('#add').click(function(){
  $('#imageModal').modal('show');
  $('#image_form')[0].reset();
  $('.modal-title').text("Dodaj sliku");
  $('#image_id').val('');
  $('#action').val('insert');
  $('#insert').val("Insert");
 });
 $('#image_form').submit(function(event){
  event.preventDefault();
  var image_name = $('#image').val();
  if(image_name == '')
  {
   alert("Molimo, odaberite sliku");
   return false;
  }
  else
  {
   var extension = $('#image').val().split('.').pop().toLowerCase();
   if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)/*slika moze biti samo određenog formata*/
   {
    alert("Nevažeći tip podataka");
    $('#image').val('');
    return false;
   }
   else
   {
    $.ajax({
     url:"action.php",
     method:"POST",
     data:new FormData(this),
     contentType:false,
     processData:false,
     success:function(data)
     {
      alert(data);
      fetch_data();
      $('#image_form')[0].reset();
      $('#imageModal').modal('hide');
     }
    });
   }
  }
 });
 $(document).on('click', '.update', function(){
  $('#image_id').val($(this).attr("id"));
  $('#action').val("update");
  $('.modal-title').text("Update");/*admin ima mogucnost updateovanja slike*/
  $('#insert').val("Update");
  $('#imageModal').modal("show");
 });
 $(document).on('click', '.delete', function(){ /*brisanje slike*/
  var image_id = $(this).attr("id");
  var action = "delete";
  if(confirm("Jeste li sigurni da želite ukloniti sliku?"))
  {
   $.ajax({
    url:"action.php",
    method:"POST",
    data:{image_id:image_id, action:action},
    success:function(data)
    {
     alert(data);
     fetch_data();
    }
   })
  }
  else
  {
   return false;
  }
 });
});  
</script>
