<?php
$to = "agentos345game@gmail.com"; // здесь указываем Вашу почту
$subject = "Заказ Услуги";
$name = $_POST['name'];
$mail = $_POST['mail'];
$telephone = $_POST['telephone'];
$my_text = $_POST['my_text'];
$orders = $_POST['','','']
$message = "
<html>
	<head>
		<meta charset='utf-8';
		<style>
			h2 {
				margin: 0 auto;
				text-align: center;
				color: #E13E56;
			}
            p {
                margin: 5px;
                color: blue;
            }
		</style>
	</head>
<body>
	<h2>Заказ Клиента</h2>
    <p>Ф.И.О.: ".$name."</p> 
	<p>Номер телефона: +7(".$telephone.")</p>
	<p>Почта клиента: ".$mail."</p>
    <p>Описание заказа: ".$my_text."</p>
</body>
</html>
";

$headers  = "Content-type: text/html; charset=utf-8 \r\n";
mail($to, $subject, $message, $headers);
?>
<!DOCTYPE html>
<html lang="en">
<?php 
   include_once("parts/head.php")
 ?>
    <body>
    <?php
        include_once("parts/header.php")
    ?>
        <div class="container">
            <div class="row">
                <div class="col-md12">
                <?php 
                   include_once("parts/menu.php")
                ?>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content">
                        <article id="callback">
                            <h2 class="t-center title">Ваш заказ успешно отправлен!</h2>
                        </article>
                    </div>
                </div>
            </div>
                <?php 
                    include_once("footer.php")
                ?>
        </div>
            

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
</script>
</body>
</html>
