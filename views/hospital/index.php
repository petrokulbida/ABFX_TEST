<div class="title"><?php echo $title; ?></div>

<div class="left_content">
<h2>Doctors</h2> 
<?php if (isset($d))
		echo '<a href="/hospital">cancel sorting</a>';
	  else echo '<a href="?d=true">to sort</a>';
?>
<ul class="doc">
<?php foreach ($doc as $one){
echo "<li><a href='/hospital/doctor?d=$one[id]'>".$one['fio'].'</a></li>';
}?>
</ul>
</div>


<div class="right_content">
<h2>Patients</h2> 
<?php if (isset($p))
		echo '<a href="/hospital">cancel sorting</a>';
	  else echo '<a href="?p=true">to sort</a>';
?>
<ul class="doc">
<?php foreach ($pat as $one){
echo "<li><a href='/hospital/patient?p=$one[id]'>".$one['fio'].'</a></li>';
}?>
</ul>
</div>