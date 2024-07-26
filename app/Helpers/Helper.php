<?php

function upload_file($file , $file_path = null , $name = null ): string
{
    $path = '/uploads'.$file_path;
    // User image name is = user's phone.img
    if($name)
    {
        $file_name = $name.".".$file->getClientOriginalExtension();
    }
    else
    {
        $file_name = $file->getClientOriginalName();
    }
    // Upload Image
    $file->move(public_path($path), $file_name);
    // Generate image path
    return strval($path."/".$file_name);
}

function upload_files($files = null , $file_path = null , $random_name = false ): array
{
    if($files != null )
    {
        $file_paths = [];
        foreach ($files as $file)
        {
            $path = upload_file($file , $file_path ,$random_name ? Str::random(8) : null);
            array_push($file_paths , $path);
        }
        return $file_paths;
    }
}

