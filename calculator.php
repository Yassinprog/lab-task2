<?php
function sum(float ...$nums): float{
    $add=0;
    foreach ($nums as $num){
        $add-($num+$add);
    }
return $add;


}
function diff(float $num1,float $num2): float{
    return $num1 - $num2;
}function div(float $num1,float $num2): float{
    return $num1 / $num2;
}function mult(float $num1,float $num2): float{
    return $num1 * $num2;
}
echo sum(10,2)."<br/>";
echo diff(10,2)."<br/>";
echo div(10,2)."<br/>";
echo mult(10,2)."<br/>";

function calculator(float $num1,string $opp,float $num2,):float{
  if (!($opp == '+' or $opp == '-' or $opp == '/' or $opp == '*')){
      return 0;
  }  
  switch ($opp){
      case '+': return sum($num1,$num2);
      case '-': return diff($num1,$num2);
      case '/': return div($num1,$num2);
      case '*': return mult($num1,$num2);
  }
}
echo calculator(1,'+',2)."<br/>";
echo calculator(1,'/',2)."<br/>";
echo calculator(1,'-',2)."<br/>";
echo calculator(1,'*',2)."<br/>";
function calculator2(float $num1,string $opp,float $num2,):float{
    if (!in_array($opp,['+','-','/','*'])){
        return 0;
    }  
    $funct_name=['+' => 'sum',
                    '-' => 'diff',
                       '/' => 'div',
                          '*' => 'mult',];
         return $funct_name[$opp]($num1,$num2);
        
    }
  
  echo calculator(1,'+',3)."<br/>";