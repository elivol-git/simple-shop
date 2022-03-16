<?php


namespace App\lib;


class FileUpload
{
    const MAX_IMG_SIZE = 500000;

    private static $i=null;
    private function __construct()
    {
    }

    public static function i()
    {
        if (self::$i == null) {
            self::$i = new self();
        }
        return self::$i;
    }

    public function uploadImage(array $srcFile, string $targetDir, string $fileName=null):string
    {
        $target_dir = APP_ROOT . '/public/images/'. $targetDir;
        if (is_null($fileName)) {
            $fileName = $srcFile["name"];
        }
        $target_file = $target_dir . $fileName;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $check = getimagesize($srcFile["tmp_name"]);
        if($check === false) {
            throw new \Exception("File is an image - " . $check["mime"] );
        }
        // Check if file already exists
        if (file_exists($target_file)) {
            throw new \Exception("Sorry, file already exists.");
        }

        // Check file size
        if ($srcFile["size"] > self::MAX_IMG_SIZE) {
            throw new \Exception( "Sorry, your file is too large.");
        }

        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
            throw new \Exception( "Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
        }

        if (move_uploaded_file($srcFile["tmp_name"], $target_file)) {
            return $fileName;
        } else {
            throw new \Exception( "Sorry, there was an error uploading your file.");
        }

    }
}