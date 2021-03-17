<h2 class="title">説明会掲示</h2>
<?php 
require 'db_connect.php';
$sql = "select * from demo ";
$stm = $pdo->prepare($sql);
$stm->execute();
$result = $stm->fetchAll(PDO::FETCH_ASSOC);
?>
<form>
<div class="top-form-check">
    <input class="cate_check" type="radio" name="cate" value="" onclick="formSwitch()" checked="checked">
    <label class="cate_check_label">すべて</label>
</div>
<div class="top-form-check">
    <input class="cate_check" type="radio" name="cate" value="IT" onclick="formSwitch()">
    <label class="cate_check_label">IT・情報</label>
</div>
<div class="top-form-check">
    <input class="cate_check" type="radio" name="cate" value="etc" onclick="formSwitch()">
    <label class="cate_check_label">その他</label>
</div>
</form>

<div class="row-items">
<?php 
foreach($result as $row){
    if($row['category'] == 1){
?>
 <div id="it-list">
    <div class="row-item">
        <img src="images/<?= $row['id'] ?>.png" class="row-img">
        <h4 class="row-name">
            <a href="datail.php?id=<?= $row['id'] ?>">
            <?= $row['name'] ?>
            </a>
        </h4>
        <p class="row-date">日時：<?= $row['date'] ?></p>
    </div>
 </div>
<?php } else if($row['category'] == 2) { ?>
 <div id="office-list">
    <div class="row-item">
        <img src="images/<?= $row['id'] ?>.png" class="row-img">
        <h4 class="row-name">
            <a href="datail.php?id=<?= $row['id'] ?>">
            <?= $row['name'] ?>
            </a>
        </h4>
        <p class="row-date">日時：<?= $row['date'] ?></p>
    </div>
 </div>
<?php
    }
}
?>
<script href="js/code.js"></script>
</div>