<?php
echo "Hello world!<br>";
$name = [
 'name' => 'Veronika',
 'surname' => 'Vynokurova',
 'age' => 20
];

foreach($name as $key=>$value) {
 echo "<p>" . $key . " - " . $value . "</p>";
}