<?php include ROOT . '/views/layouts/header.php'; ?>


<div class="span9">

    <ul class="breadcrumb">
        <li><a href="/">На главную</a> <span class="divider">/</span></li>
        <li class="active">Вход</li>
    </ul>

    <?php if (isset($errors) && is_array($errors)): ?>
        <ul>
            <?php foreach ($errors as $error): ?>
                <li> <?= $error; ?> </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <hr class="soft"/>

    <div class="well">

        <form action="#" method="post" class="form-horizontal">
            <h3>Вход на сайт</h3>

            <div class="control-group">
                <label class="control-label" for="inputEmail">Email <sup>*</sup></label>
                <div class="controls">
                    <input type="text" name="email" placeholder="Email" value=""/>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">Пароль <sup>*</sup></label>
                <div class="controls">
                    <input type="password" name="password" placeholder="Password" value=""/>
                </div>
            </div>

            <div class="control-group">
                <div class="controls">
                    <input type="submit" name="submit" value="Вход на сайт" class="exclusive shopBtn"/>
                </div>
            </div>

        </form>

    </div>

</div>

<!--
Clients
-->

<?php include ROOT . '/views/layouts/footer.php'; ?>
