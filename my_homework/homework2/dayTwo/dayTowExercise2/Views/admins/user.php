<ul>
<?php for($i = 0; $i <= count($data=[$name,$position,$age,$location]);$i++):?>
  <li><?= $name[$i]." , ".$position[$i]." , ".$age[$i]." , ".$location[$i]?></li>
 <?php endfor?>
</ul>
