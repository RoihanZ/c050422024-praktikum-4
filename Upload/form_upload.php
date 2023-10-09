<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Upload File</title>
</head>
<body>
    <form ENCTYPE = "multipart/form-data" action = "proses_upload.php" method = "POST">
        <p>Pilih File : <input type = "file" name = "file"></p>
        <input type = "submit" name = "Button" value = "Upload">
    </form>    
</body>
</html>