<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Storage;


class Certificate extends Model
{
    use HasFactory;


    public function generate($name,$type,$regTime)
    {

        if ($type=='mbsr')
            $image='storage/mbsr.png';
        elseif ($type=='711')
            $image='storage/711.png';
        elseif ($type=='1218')
            $image='storage/1218.png';
        else
            return view('error');

        $name = strtoupper($name);
        $name_len = strlen($name);

        $output= 'storage/MyCert.png';
        $drFont = 'storage/arial.ttf';

        $createimage = imagecreatefrompng($image);

        $white = imagecolorallocate($createimage, 205, 245, 255);
        $black = imagecolorallocate($createimage, 0, 0, 0);

        //Then we make use of the angle since we will also make use of it when calling the imagettftext function below
        $rotation = 0;

        //we then set the x and y axis to fix the position of our text name
        $origin_x = 750;
        $origin_y = 710;

        $font_size = 35;

        //function to display name on certificate picture
        $text1 = imagettftext($createimage, $font_size, $rotation, $origin_x, $origin_y, $black, $drFont, $name);

        // function to display date of cert in lower left hand side

        $origin_x_date=1670;
        $origin_y_date=1400;
        $font_size_date=22;

        $date_name=date("F jS, Y", strtotime($regTime. '+8 weeks'));

        $text1 = imagettftext($createimage, $font_size_date, $rotation, $origin_x_date, $origin_y_date, $black, $drFont,
            $date_name);

        $result=imagepng($createimage,$output);

        // File written to $output.


    }


}
