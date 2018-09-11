 <section class="lots">
  <div class="lots__header">
    <h2>Открытые лоты</h2>
  </div>
  <ul class="lots__list">
   <?php
    for($goods_item = 0;$goods_item < count($goods);$goods_item++){
    ?>
    <li class="lots__item lot">
      <div class="lot__image">
        <img src="<?php echo esc($goods[$goods_item]['image']);?>" width="350" height="260" alt="Сноуборд">
      </div>
      <div class="lot__info">
        <span class="lot__category"><?php echo esc($goods[$goods_item]['category']);?></span>
        <h3 class="lot__title"><a class="text-link" href="index.php?tab=1"><?php echo esc($goods[$goods_item]['name']);?></a></h3>
        <div class="lot__state">
          <div class="lot__rate">
            <span class="lot__amount">Стартовая цена</span>
            <span class="lot__cost"><?php echo esc(format_sum($goods[$goods_item]['price']));?></span>
          </div>
          <div class="lot__timer timer">
          <?php
            echo get_time();
          ?>
          </div>
        </div>
      </div>
    </li>
  <?php } ?>
  </ul>
</section>
<?php
if (isset($_GET)) {
  var_dump($_GET);
}