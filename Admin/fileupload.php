<?php

function uploadFiles($files, $allowedExs, $path)
{
    $fileName = $files['name'];
    $tmpName = $files['tmp_name'];
    $error = $files['error'];

    if ($error == 0) {
        $fileEx = pathinfo($fileName, PATHINFO_EXTENSION);

        // make the file extension lowercase
        $fileExLc = strtolower($fileEx);

        // check wheter the file extension exist in the array
        if (in_array($fileExLc, $allowedExs)) {
            $newFileName = uniqid("", true) . '.' . $fileExLc;
            $fileUploadPath = '../../uploads/' . $path . '/' . $newFileName;
            move_uploaded_file($tmpName, $fileUploadPath);

            $sm['status'] = 'success';
            $sm['data'] = $newFileName;
            return $sm;
        } else {
            $em['status'] = 'error';
            $em['data'] = "Uploading files of this type is not permitted.";
            return $em;
        }
    } else {
        $em['status'] = 'error';
        $em['data'] = "An error was encountered during the upload process.";
        return $em;
    }
}
