<!-- This manages the upload of the file -->
<html>
<head>
<title>Process Uploaded File</title>
</head>
<body>
<?php
$newfilename = "upload.mp3";

//save the file name to filename.php just for records
$name = $_FILES['uploadFile']['name'];
$var = "\r\n$name";
echo $var;
file_put_contents('filename.php', $var, FILE_APPEND);

//save the file as opload.mp3
if ( move_uploaded_file ($_FILES['uploadFile'] ['tmp_name'],
       "../uploads/{$newfilename}")  )
      {  print '<p> The file has been successfully uploaded </p>';
        header( 'Location: test.php' ) ;
       }
else
      {
        switch ($_FILES['uploadFile'] ['error'])
         {  case 1:
                   print '<p> The file is bigger than this PHP installation allows</p>';
                   break;
            case 2:
                   print '<p> The file is bigger than this form allows</p>';
                   break;
            case 3:
                   print '<p> Only part of the file was uploaded</p>';
                   break;
            case 4:
                   print '<p> No file was uploaded</p>';
                   break;
         }
       }

?>
</body>
</html>
