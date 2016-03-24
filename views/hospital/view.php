<div class="title"><?php echo $title; ?></div>

<div class="left_content">
<h2><?php echo $own; ?></h2>
<?php 
echo $main[0]['fio'].' - '; 
echo $main[0]['position'] ? $main[0]['position'] : 'возраст '. $age;
?>
<h2><?php echo $rel; ?></h2>
<?php foreach ($res as $one){
echo "<li>".$one['fio'].'</li>';
}?>
</div>
<div class="right_content">
</div>