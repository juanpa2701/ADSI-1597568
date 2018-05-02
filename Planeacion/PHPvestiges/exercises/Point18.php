<?php
   /**
    * Point 18.1 = if
    * 
    * The if constructor is one of the most important features of many 
    * languages, including PHP. Allows the conditional execution of 
    * code fragments.
    */
   if ($a > $b) {
   echo "a is greater than b";
   }
   
   /**
    * Point 18.2 = else
    * 
    * The else extends an if statement to execute a statement in case the 
    * expression in the if statement is evaluated as FALSE.
    */
   
   else {
   echo "a is NOT greater than b";
   }
   
   /**
    * Point18.3 = elseif/else if
    * 
    * elseif, as its name suggests, is a combination of if and else. Like else, 
    * it extends an if statement to execute a different statement if the 
    * original if statement is evaluated as FALSE. However, unlike else, that 
    * alternative statement will only be executed if the elseif conditional 
    * statement is evaluated as TRUE. 
    */
   
   if ($a > $b) {
   echo "a is greater than b";
   } elseif ($a == $b) {
   echo "a is the same as b";
   } else {
   echo "a is less than b";
   }
   
   /**
    * Point 18.4 = while
    * 
    * The meaning of a while statement is simple. Tells PHP to execute the 
    * nested statements, as much as the while expression is evaluated as TRUE. 
    * The value of the expression is checked every time at the beginning of the 
    * loop, so even if this value changes during the execution of nested statements, 
    * the execution will not stop until the end of the iteration (every time PHP 
    * executes the statements contained in the loop is an iteration). Sometimes, 
    * if the while expression is evaluated as FALSE from the beginning, nested 
    * statements will not be executed even once.
    */
   
   /* example 1 */

   $i = 1;
   while ($i <= 10) {
   echo $i++;  /* the value presented would be $i before the increase (post-increment) */
   }

   /* example 2 */

   $i = 1;
   while ($i <= 10):
   echo $i;
   $i++;
   endwhile;
   
   /**
    * Point 18.5 = do-while
    * 
    * do-while loops are very similar to while loops, except the truth expression 
    * is checked at the end of each iteration instead of in the beginning. The 
    * main difference from regular while loops is that the first iteration of a 
    */
   ?>