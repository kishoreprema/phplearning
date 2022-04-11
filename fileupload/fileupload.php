<!DOCTYPE html>
<html lang="en">
<head>
    file upload
</head>
<style> 
#classform {
    
font-family:roboto;
}
</style>
<body>
    <form action="" method="POST" enctype="multipart/form-data" id="classform" >
 <label for="file select"> select the file</label>
 <input  type = "file" name="file" id="file select">
 <input  type="submit" name="submit" value="submit">
 
    </form>
    <?php
    if(isset($_POST['submit']))
    {
       $allow=array("pdf"=>"application/pdf");
       $name=$_FILES["file"]["name"];
       $type=$_FILES["file"]["type"];
       $ext=pathinfo($name,PATHINFO_EXTENSION);   
        if(!array_keys_exists($ext,$allow))  die("plese select the correct file");
        if(in_array($tpye,$allow))
        {
            if(file_exists("files/".$_FILES["file"]["name"]))
            {
                echo " this file is exists";
            }
            else{
                move_uploaded_file($_FILES["file"]["tmp_name"],"files/".$_FILES);
             }
        }
    }
    ?>
</body>
</html>