<?php

function avatarPath($filename)
{
    //First Lets Check if file Exist in Uploads Directory
    $uploadsDirectoryPath = 'uploads/users/avatars/';
    $filePath = $uploadsDirectoryPath.$filename;
    if(file_exists($filePath)){
        return $filePath;
    }else{
        return false;
    }
}