<?php

namespace App\Model\Validation;

use Cake\Validation\Validation;

class CustomValidation extends Validation
{

public static function uploadFile($biditem)
{
    $file_info = pathinfo($biditem);
    $img_extension = strtolower($file_info['extension']);
    if($img_extension === "jpg"|| $img_extension === "png"){
        return true;
    } else {
        return false;
    }
}

}
