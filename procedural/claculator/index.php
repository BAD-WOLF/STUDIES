<?php

print "\e[1;33mcalculator 1.0\e[0m\n";

$num1 = readline('num1 >> ');
$num2 = readline('num2 >> ');

print "
Ur options:
\e[1;34m{{ + }}\e[0m -> plus
\e[1;34m{{ - }}\e[0m -> minus
\e[1;34m{{ / }}\e[0m -> divided by
\e[1;34m{{ * }}\e[0m -> multiplication
\e[1;34m{{ % }}\e[0m -> remainder
\e[1;34m{{ all }}\e[0m -> all
";

$action = readline("\n\tUr Choice >> ");

switch ($action) {
    case '+':
        print "\e[1;32mplus result: " . ($num1 + $num2) . PHP_EOL;
        break;
    case '-':
        print "\e[1;32mminus result: " . ($num1 - $num2) . PHP_EOL;
        break;
    case '/':
        print "\e[1;32mdivided result: " . ($num1 / $num2) . PHP_EOL;
        break;
    case '*':
        print "\e[1;32mmultiplication result: " . ($num1 * $num2) . PHP_EOL;
        break;
    case '%':
        print "\e[1;32mremainder result: " . ($num1 % $num2) . PHP_EOL;
        break;
    case 'all':
        print "\e[1;32mplus result: " . ($num1 + $num2) . PHP_EOL;
        print "\e[1;32mminus result: " . ($num1 - $num2) . PHP_EOL;
        print "\e[1;32mdivided result: " . ($num1 / $num2) . PHP_EOL;
        print "\e[1;32mmultiplication result: " . ($num1 * $num2) . PHP_EOL;
        print "\e[1;32mremainder result: " . ($num1 % $num2) . PHP_EOL;
        break;
    default:
        throw new Exception('UNEXPECTED VALUE');
}
