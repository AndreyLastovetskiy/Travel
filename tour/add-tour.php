<?php 
session_start();
require_once("../db/db.php");
if(!isset($_COOKIE["id"])) {
    $_SESSION["errMes"] = 'Вы не авторизованы, авторизуйтесь!';
    header("Location: ../login/login.php");
} elseif ($_COOKIE["idgroup"] != 2) {
    $_SESSION["errMes"] = 'У Вас нет права доступа на эту страницу!';
    header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;400;500;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/61b86703fe.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tiny.cloud/1/fipw5p8ktoulbzn13x05gn3k023y7zotl1ttiifwjubct86w/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <link rel="stylesheet" href="../style/media.css">
    <link rel="stylesheet" href="../style/style.css">
    <title>Добавить тур</title>
</head>
<body>
    <form action="vendor/ins-tour.php" method="post" enctype="multipart/form-data" class="ins-tour">
        <input type="hidden" name="idcountry" value="<?php print($_GET['id']); ?>">
        <div class="text-field text-field_floating-2" style="margin-bottom: 40px;">
            <input class="text-field__input" type="text" id="title" name="title" placeholder="test">
            <label class="text-field__label" for="title">Название</label>
        </div>
        <div class="text-field text-field_floating-2" style="margin-bottom: 40px;">
            <input type="file" id="imageproduct" name="imageproduct">
            <label for="imageproduct">Изображение</label>
        </div>
        <div class="text-field text-field_floating-2" style="margin-bottom: 40px;">
            <input class="text-field__input" type="text" id="price" name="price" placeholder="test">
            <label class="text-field__label" for="price">Цена</label>
        </div>
        <div class="text-field text-field_floating-2" style="margin-bottom: 40px;">
            <input class="text-field__input" type="date" id="startdate" name="startdate" placeholder="test">
            <label class="text-field__label" for="startdate">Начало Тура</label>
        </div>
        <div class="text-field text-field_floating-2" style="margin-bottom: 40px;">
            <input class="text-field__input" type="date" id="enddate" name="enddate" placeholder="test">
            <label class="text-field__label" for="enddate">Конец Тура</label>
        </div>  
        <textarea id="descr-tour" name="descr-tour" placeholder="Описание тура"></textarea>
        <input type="submit" class="qws-btn qwsb-instour" value="Добавить">
    </form>
    
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
        });
    </script>
</body>
</html>