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
                            <h2 class="t-center title">Заказать услуги</h2>
                            <div class="form">
                                <form action="mail.php" method="post">
                                    <div class="f-left t-center">
                                        <div>Ваше ФИО:</div>
                                        <input type="text" name="name" required="">
                                        <div>Ваш номер телефона:</div>
                                        <input type="number" name="telephone" required="">
                                        <div>Ваша электронная почта:</div>
                                        <input type="text" name="mail">
                                    </div>
                                    <div class="f-right t-center" style="margin-top: 5px;">
                                        <div class="text" style="margin-bottom: 20px;">Расскажите подробней о Вашем заказе</div>
                                        <textarea name="my_text"></textarea>
                                    </div>
                                    <div class="f-clear f-center">
                                        <a onclick="$('#one').slideToggle('slow');" href="javascript://">Выберите тип услуги</a>
                                        <div id="one" style="display: none;">
                                            <ul class="services-list">    
                                                <li>Услуга №1 <input type="checkbox" name="order-1" value="Услуга 1"></li>
                                                <li>Услуга №2 <input type="checkbox" name="order-2" value="Услуга 2"></li>
                                                <li>Услуга №3 <input type="checkbox" name="order-3" value="Услуга 3"></li>
                                                <li>Услуга №4 <input type="checkbox" name="order-4" value="Услуга 4"></li>
                                                <li>Услуга №5 <input type="checkbox" name="order-5" value="Услуга 5"></li>
                                            </ul>
                                        </div> <br>
                                        <input type="submit" value="Отправить">
                                    </div>
                                </form>
                            </div>
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
