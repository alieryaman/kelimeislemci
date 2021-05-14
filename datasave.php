<?php

include("func.php"); 
include("getallword.php"); 
$fruits  = $_POST['deger'];


$fruits=punctuationclean(strtolower($fruits));

$fruits_ar = explode(" ", $fruits);

//print_r($fruits_ar);

$arr2 = array_unique($fruits_ar);
sort($arr2);


$clength = count($arr2);



?>

<div class="container">


<?php

for($x = 0; $x <$clength; $x++) {
 
if(strlen($arr2[$x])>1){  

  if (!in_array($arr2[$x], $rows)) {

   
 




?>




<div class="row top-buffer border border-primary m-2"  >
    <div class="col-2   p-2">
       
    
    <?php echo  "<h6>".$arr2[$x]."</h6>"      ?>
    </div>
    <div class="col-2 p-2  ">
       
    
       <?php echo  "  <a href='https://translate.google.com/?hl=&sl=en&tl=tr&text= $arr2[$x]&op=translate'   target='_blank'  >     <i class='fas  fa-language fa-3x'></i></a>   " ;    ?>
       </div>
    
    <div class="col-6 p-2">
    <textarea class="form-control shadow-lg p-3 bg-white rounded " placeholder="Buraya anlamını giriniz" id="floatingTextarea3" style="height: 100px;  display: inline;"></textarea>

    <button  style="  display: inline;"  type="button" class="btn btn-success "  onclick="myFunction2(this)" > <abbr title="Listedeki kelimeyi Kaydet">   <i class="far fa-save fa-3x"></i> </abbr></button>
    <input style=" visibility: hidden;"  id='username_field' type="text" name='username' value='<?php echo strtolower($arr2[$x]) ?>'>
    </div>
    <div class="col-2 p-2">
    <button type="button"  onclick="knowfunc(this)"  class="btn btn-success "><abbr title="Listedeki kelimeyi Biliyorum olarak Kaydet"> <i class="fab fa-markdown fa-3x"></i> </abbr> </button>
    <input style=" visibility: hidden;"  id='username_field' type="text" name='username' value='<?php echo strtolower($arr2[$x]) ?>'>
    </div>
  </div>
  
 







<?php }} }





?>



</div>




