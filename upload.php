<?php
print_r($_POST);
print_r($_FILES);
echo "*******************<br>";
echo json_encode($gen_noticiasjudiciales);
echo "dato1.....".$gen_noticiasjudiciales['gen_noticiasjudiciales']['NOJ_Titular'];
?>