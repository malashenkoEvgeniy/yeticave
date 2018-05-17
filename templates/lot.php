<li class="lots__item lot">
    <div class="lot__image">
        <img src="<?php echo $elem['image'];?>" width="350" height="260" alt="Сноуборд">
    </div>
    <div class="lot__info">
        <span class="lot__category"><?php echo $elem['category'];?></span>
        <h3 class="lot__title"><a class="text-link" href="lot.html"><?php echo $elem['name'];?></a></h3>
        <div class="lot__state">
            <div class="lot__rate">
                <span class="lot__amount">Стартовая цена</span>
                <span class="lot__cost"><?php echo format_sum($elem['price']);?></span>
            </div>
            <div class="lot__timer timer">

            </div>
        </div>
    </div>
</li>