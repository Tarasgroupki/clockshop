<html>
<body>
<?php

if(isset($text)){
foreach($text as $item){//print_r($item['id']);
?>
 <a class="del_cat_id" href="?adm_category=<?=$item['id']?>">
 <?=$item['title'];?>
</a>
 <br />
 <?}}?>

</body>
</html>