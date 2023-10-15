<? require_once "classes/router.php"; 
   require_once "classes/page.php";
   require_once "include/config.php";
   require_once "classes/time.php";
   session_start();
?> 
<!-- Ссылки на статики -->
<link rel="stylesheet" href="/static/css/main.css"> 
<script src="/libs/jquery.js"></script>
<?

Router::route();

?>
<!-- подключаем скрипты -->

<!-- <script src="static/javascript/register.js"></script> -->