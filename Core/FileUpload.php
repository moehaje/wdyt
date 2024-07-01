<?php

namespace Core;

class FileUpload {
    public static function validate($file, $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'], $maxSize = 2097152): ?string
    {

        $fileType = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        if (!in_array($fileType, $allowedTypes)) {
            return "Invalid file type. Allowed types: " . join(', ', $allowedTypes);
        }

        if ($file['size'] > $maxSize) {
            return "File is too large. Maximum size is " . ($maxSize / 1048576) . "MB.";
        }

        return null; // No errors
    }

    public static function upload($file, $destination): ?string
    {
        $newFilename = uniqid() . '.' . strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        $fullPath = $destination . $newFilename;

        if (!move_uploaded_file($file['tmp_name'], $fullPath)) {
            return null;
        }

        return $newFilename;
    }
}