<?php
    $con = mysql_connect("username","password","") or die('Could not connect: ' . mysql_error());
    mysql_select_db("mydb", $con);

    //read the json file contents
    $jsondata = file_get_contents('games.json');

    //convert json object to php associative array
    $data = json_decode($jsondata, true);

    //get the games details
    $id = $data['id'];
    $name = $data['name'];
    $url = $data['screenshots']['url'];
    $cloudinary_id = $data['screenshots']['cloudinary_id'];
    $width = $data['screenshots']['width'];
    $height = $data['screenshots']['height'];
    $cover = $data['cover'];
    $video_id = $data['videos']['video_id'];

    //insert into mysql table
    $sql = "INSERT INTO tbl_emp(id, name, url, cloudinary_id, width, height, cover, video_id)
    VALUES('$id', '$name', '$url', '$cloudinary_id', '$width', '$height', '$cover', '$video_id')";
    if(!mysql_query($sql,$con))
    {
        die('Error : ' . mysql_error());
    }
?>
