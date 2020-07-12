<?php

namespace Programs;

class PrimeNumber
{
   function check($num)
   {
      $bCheck = True;
      for ($i = 2; $i < $num; $i++) {
         if ($num % $i == 0) {
            $bCheck = False;
            break;
         }
      }
      if ($bCheck) {
         echo 'Prime';
      } else {
         echo 'NOT prime';
      }
   }
}
