<?php



function punctuationclean($words){

   $whatToStrip = array(".","?","!",",",";","[","]","(",")",":","-","_","0","1","2","3","4","5","6","7","8","9","¨~","|","%","<",">","'","\"","^","#","+","é","*","{","}","","\\","="); // Add what you want to strip in this array


   $words= str_replace($whatToStrip, "", $words);
   return  $words;
}




 


?>