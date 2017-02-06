<?php
$phone_numbers = [
  "Alex" => "415-235-8573",
  "Jessica" => "415-492-4856",
];

$phone_numbers["Michael"] = "415-955-3857";

print_r($phone_numbers);
echo "Alex's phone number is " . $phone_numbers["Alex"] . "\n";
echo "Jessica's phone number is " . $phone_numbers["Jessica"] . "\n";

?>
