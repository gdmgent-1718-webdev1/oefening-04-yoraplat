
<?php
function type($watIs){

    return "Waarde is " . gettype($watIs) . "</br>" . PHP_EOL ;
}

echo type("yoram");
echo type(true);
echo type(1.5);
echo type(2);
echo type(["f"]);