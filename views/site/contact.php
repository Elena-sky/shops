<?php include ROOT . '/views/layouts/header.php'; ?>


<!--
Body Section
-->
<hr class="soften">
<div class="well well-small">
    <h1>Отратная связь</h1>
    <hr class="soften"/>
    <div class="row-fluid">

        <?php if ($result): ?>
            <p>Сообщение отправлено! Мы ответим Вам на указанный email.</p>
        <?php else: ?>
            <?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

        <div class="span4">
            <h2>Отратная связь</h2>
            <h5>Есть вопрос? Нпишите нам</h5>

            <form class="form-horizontal" action="#" method="post">
                <fieldset>

                    <div class="control-group">
                        <p>Ваша почта</p>
                        <input type="email" name="userEmail" placeholder="E-mail" class="input-xlarge"
                               value="<?php echo $userEmail; ?>"/>
                    </div>

                    <p>Сообщение</p>
                    <div class="control-group">
                        <input rows="3" type="text" name="userText" placeholder="Сообщение" class="input-xlarge"
                                  value="<?php echo $userText; ?>"/>
                    </div>

                    <button class="shopBtn" type="submit" name="submit">Отправить</button>

                </fieldset>
            </form>
        </div>
        <?php endif; ?>


    </div>


</div>
<!--
Clients
-->

<?php include ROOT . '/views/layouts/footer.php'; ?>
