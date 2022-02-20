<?php

require_once 'index.html';

if (isset($_FILES['image'])) {


    $fileName = $_FILES['image']['name'];
    $fileSize = $_FILES['image']['size'];

    $fileTmpName = $_FILES['image']['tmp_name'];
    $fileError = $_FILES['image']['error'];
    $fileType = $_FILES['image']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = ["jpeg", "jpg", "gif", "png"];
    if (in_array($fileActualExt, $allowed)) {
        if ($fileError == 0) {
            if ($fileSize < 4 * 1024 ** 2) {

                $fileNameNew = uniqid('', true) . "." . $fileActualExt;

                $fileDestination = 'Downloads/' . $fileNameNew;
               move_uploaded_file($fileTmpName, $fileDestination);
                header("Location: list.php");

            } else {
                echo 'Не соответствует размеру';
            }
        } else {
            echo 'Ошибка загрузки файла';
        }

    } else {
        echo 'Вы не можете загружать файлы это типа';
    }
}


;


