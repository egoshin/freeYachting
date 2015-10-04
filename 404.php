<?
require_once $_SERVER['DOCUMENT_ROOT']."/include/config.php.inc";
require_once $_SERVER['DOCUMENT_ROOT']."/include/define.php.inc";
$namePage = "404 Страница не найдена";
$title = SITE_TITLE." | ".$namePage;
require_once $_SERVER['DOCUMENT_ROOT']."/include/header.php";
?>
    <div class="container content">
        <div class="error404 text-center">
            <p>Страница <br class="visible-xs">не найдена</p>
            <p class="p404">4<i class="fa fa-life-ring"></i>4</p>
            <p>Данной страницы не существует<br class="visible-xs"> или она была удалена.</p>
            <p>Попрбуйте вернуться <a href="#">назад</a><br class="visible-xs"> или на <a href="/">главную страницу</a></p>
        </div>
    </div>
<?
require_once $_SERVER['DOCUMENT_ROOT']."/include/footer.php";
?>