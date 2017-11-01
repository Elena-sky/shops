<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="span9">

        <ul class="breadcrumb">
            <li><a href="index.html">На главную</a> <span class="divider">/</span></li>
            <li class="active">Кабинет</li>
        </ul>


        <?php if ($result): ?>
            <p>Данные отредактированы!</p>
        <?php else: ?>
            <?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>


            <h3> Редактирование данных</h3>
            <hr class="soft"/>

            <div class="well">

                <h3>Ваша персональная информация</h3>

                <form action="#" method="post" class="form-horizontal">

                    <div class="control-group">
                        <label class="control-label" for="name">Имя: <sup>*</sup></label>
                        <div class="controls">
                            <input type="text" name="name" placeholder="name" value="<?= $name; ?>"/>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Пароль: <sup>*</sup></label>
                        <div class="controls">
                            <input type="password" name="password" placeholder="Password" value="<?= $password; ?>"/>
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="controls">
                            <input type="submit" name="submit" value="Сохранить" class="exclusive shopBtn"/>
                        </div>
                    </div>

                </form>

            </div>

        <?php endif; ?>
    </div>
</section>



<!--
Clients
-->

<?php include ROOT . '/views/layouts/footer.php'; ?>
