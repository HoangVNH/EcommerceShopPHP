<?php

class Captcha
{
    var $img_width = 200;
    var $img_height = 35;
    var $font = "../fonts/verdanab.ttf";
    var $font_size = 16;
    var $char_set = "ABCDEFGHJKLMNPQRSTUVWXYZ2345689";
    var $char_length = 6;
    var $bg_color = "00A7E1";
    var $color = "F5F3F5";

    public function GetAndShowImage()
    {

        $img = imagecreatetruecolor($this->img_width , $this->img_height);
        imagefilledrectangle($img, 0, 0, $this->img_width - 1, $this->img_height - 1, hexdec($this->bg_color));

        // vẽ code lên hình
        $code = "";
        $y = ($this->img_height / 2) + ($this->font_size / 2);

        for ($i = 0; $i < $this->char_length; $i++)
        {
            $angle = rand(-30, 30);
            $char = substr($this->char_set, rand(0, strlen($this->char_set) - 1), 1);
            $x = (intval(($this->img_width / $this->char_length) * $i) + ($this->font_size / 2));

            $code .= $char;

            imagettftext($img, $this->font_size, $angle, $x, $y, hexdec($this->color), $this->font, $char);
        }

        // hiên thị ảnh
        header('Content-Type: image/jpeg');
        imagejpeg($img);
        imagedestroy($img);

        return $code;
    }
}

//if (!isset($_SESSION))
//    session_start();
//
//$str = md5(microtime());                // lấy chuỗi rồi mã hoá md5
//$str = substr($str, 0, 6);  // lấy 6 kí tự
//$_SESSION['captcha_code'] = $str;
//$img = imagecreatefromjpeg("GUI/img/bg_catpcha.jpg");       // tạo hình từ file bg_captcha.jpg
//$color = imagecolorallocate($img, 245, 243, 245);   // tạo màu cho chữ
//imagestring($img, 3, 4, 5, $str, $color);                // viết chuỗi vào ảnh
//header("Content-type: image/jpeg");                          // xuất định dạng là hình ảnh
//imagejpeg($img);
//imagedestroy($img);

