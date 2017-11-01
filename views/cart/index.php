<?php include ROOT . '/views/layouts/header.php'; ?>

    <!--
    Body Section
    -->
    <div class="row">
        <div class="span12">
            <ul class="breadcrumb">
                <li><a href="/">Главная</a> <span class="divider">/</span></li>
                <li class="active">Корзина покупок</li>
            </ul>

            <?php if ($productsInCart): ?>
                <div class="well well-small">
                    <h1>Вы выбрали такие товары:
                        <small class="pull-right"> <?php echo Cart::countItems(); ?> Товара(ов) в корзине</small>
                    </h1>
                    <hr class="soften"/>

                    <table class="table table-bordered table-condensed">
                        <thead>
                        <tr>
                            <th>Код</th>
                            <th>Название</th>
                            <th>Стоимость, $</th>
                            <th>Количество, шт</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($products as $product): ?>
                            <tr>
                                <td>
                                    <?= $product['code']; ?>
                                </td>
                                <td>
                                    <a href="/product/<?= $product['id']; ?>">
                                        <?= $product['name']; ?>
                                    </a>
                                </td>
                                <td>
                                    <?= $product['price']; ?>
                                </td>
                                <td>
                                    <input class="span1" style="max-width:34px" placeholder="1"
                                           id="appendedInputButtons"
                                           size="16" type="text"
                                           value="<?= $productsInCart[$product['id']]; ?>">
                                    <div class="input-append">
                                        <button class="btn btn-mini btnAction" type="button" data-action="minus">-</button>
                                        <button class="btn btn-mini btnAction" type="button" data-action="plus"> +</button>
                                        <button class="btn btn-mini btn-danger btnAction" type="button" data-action="reset"><span
                                                    class="icon-remove"></span>
                                        </button>
                                    </div>
                                </td>

                            </tr>
                        <?php endforeach; ?>
                        <tr>
                            <td colspan="3">Общая стоимость:</td>
                            <td><?php echo $totalPrice; ?> $</td>
                        </tr>

                        </tbody>
                    </table>
                    <br/>


                    <a href="/" class="shopBtn btn-large"><span class="icon-arrow-left"></span> Continue
                        Shopping </a>
                    <a href="/cart/checkout" class="shopBtn btn-large pull-right">Далее <span
                                class="icon-arrow-right"></span></a>

                </div>
            <?php else: ?>
                <p>Корзина пуста</p>
            <?php endif; ?>
        </div>
    </div>
    <!--
    Clients
    -->

<?php include ROOT . '/views/layouts/footer.php'; ?>