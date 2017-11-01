<?php include ROOT . '/views/layouts/header.php'; ?>


<div class="span9">

    <ul class="breadcrumb">
        <li><a href="/">На главную</a> <span class="divider">/</span></li>
        <li class="active">Регистрация</li>
    </ul>

    <?php if ($result): ?>
        <p>Вы зарегистрированы!</p>
    <?php else: ?>

        <?php if (isset($errors) && is_array($errors)): ?>
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li> <?= $error; ?> </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <h3> Регистрация на сайте</h3>
        <hr class="soft"/>

        <div class="well">

            <form action="#" method="post" class="form-horizontal">
                <h3>Ваша персональная информация</h3>

                <div class="control-group">
                    <label class="control-label" for="name">Имя <sup>*</sup></label>
                    <div class="controls">
                        <input type="text" name="name" placeholder="Name" value="<?php echo $name; ?>"/>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="inputEmail">Email <sup>*</sup></label>
                    <div class="controls">
                        <input type="text" name="email" placeholder="Email" value="<?php echo $email; ?>"/>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label">Пароль <sup>*</sup></label>
                    <div class="controls">
                        <input type="password" name="password" placeholder="Password" value="<?php echo $password; ?>"/>
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <input type="submit" name="submit" value="Регистрация" class="exclusive shopBtn"/>
                    </div>
                </div>

            </form>

        </div>

    <?php endif; ?>

</div>


<!--
Clients
-->

<?php include ROOT . '/views/layouts/footer.php'; ?>
