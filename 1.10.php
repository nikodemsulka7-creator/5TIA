//passing arguments by value

<?php
   $value=5;
   function functionValue($value) {
       $value=++;
       echo $value."<br>";
   }
   functionValue($value);
   ecoh $value;

//passing arguments by reference

   <?php
    function add_some_extra(&$string) {
        $string .= 'and something extra.';
    }
    $str = 'This is a string, ';
    add_some_extra($str);
    echo $str; //output: This is a string, and something extra.

//return

<?php 
    function square($num){
    return $num * $num;
    }
    echo square(4); //output: 16
?>

//funkcja ktora sumuje dwie liczby
<?php
function suma($a, $b) {
    return $a + $b;
}

echo suma(5, 3);
?>


   