<?php

function avatarPath($filename,$patient = null)
{
    //First Lets Check if file Exist in Uploads Directory
    $uploadsDirectoryPath = 'uploads/users/avatars/';
    $filePath = $uploadsDirectoryPath.$filename;


    if(file_exists($filePath)){
        return $filePath;
    }else{

        return $patient;
    }
}