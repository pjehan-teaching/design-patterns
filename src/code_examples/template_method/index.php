<?php

spl_autoload_register(static fn($class_name) => include $class_name . '.php');

if (!empty($_FILES['file']['tmp_name'])) {
    $imageUpload = new ImageUpload();
    $file = new SplFileObject($_FILES['file']['tmp_name']);
    $imageUpload->handle($file, $_FILES['file']['name']);
}
?>
<form action="/" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit">
</form>
