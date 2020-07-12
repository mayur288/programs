Follow folowing steps to use different programs

1. Load autoload file:
   require_once './vendor/autoload.php';

2. SayHello Class:

use Programs\SayHello;
SayHello::world();

3. Prime Numberclass :

use Programs\PrimeNumber;
$objNumber = new PrimeNumber();
$objNumber->check(11);
