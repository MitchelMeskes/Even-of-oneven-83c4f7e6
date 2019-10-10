<?php

echo "Voer uw getal in: ";
$getal = readline();

if (($getal % 2) == 1)
  {echo "Dit getal is oneven." ;}
elseif (($getal % 2) == 0)
  {echo "Dit getal is even." ;}

?>