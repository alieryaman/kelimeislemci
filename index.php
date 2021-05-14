<?php





$fruits = "In this video, we're going to go over the web developer marketplace, so this video here is really

giving you an introduction and overview of what you can expect of the web developer marketplace, how

much it's grown right.

And the growth potential for the future.

And just what kind of possibilities are out there for you as a web developer after you take this course

and acquire these new set of skills.

So let's go ahead and jump in here.

So the web development employment is projected to grow 13 percent from twenty eighteen to twenty twenty

eight.

";


$fruits_ar = explode(" ", $fruits);

$arr2 = array_unique($fruits_ar);
sort($arr2);


$clength = count($arr2);
for($x = 0; $x <$clength; $x++) {
 

?>




 

  <h4 class="text-left"> <?php echo $arr2[$x]; ?></h4>
 







<?php }





?>







