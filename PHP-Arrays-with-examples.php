<?php 

/* ARRAYS
 * =============================================== */

$fruits  = array();
$fruits  = array( 'apples', 'avocados', 'oranges', 'bananas' );
$veggies = array( 'broccoli' => 1, 'lettuce' => 5, 'celery' => 0, 'spinach' => 5 );
$food    = array( $fruits, $veggies );
$multi   = array( array( 'foo' => 'bar' ), array( 'x' => 'y' ), 'key' => 'value', 3, 2, 1 );
 
 
/* ARRAY CHECKS
 * =============================================== */
 
$a = array();

is_array( $a );       // true
is_array( "string" ); // false
empty( $a );          // true 
count( $a );          // 0 
sizeof( $a );         // 0 

$numbers = array( 1, 2, 3 );
in_array( 1, $numbers );  // true
in_array( 99, $numbers ); // false

$mix = array(1, true, 'hello');
var_dump ( $mix ); // array(3) { [0]=> int(1) [1]=> bool(true) [2]=> string(5) "hello" }
print_r ( $mix );  // Array ( [0] => 1 [1] => 1 [2] => hello )


/* ARRAY ACCESS
 * =============================================== */

$fruits[ 0 ]; // 'apples'
$veggies[ 'lettuce' ]; // 5

list ( $first_item, $second_item ) = $fruits;

$vars = array ( 'a' => 123 );
extract( $vars ); // unsafe for untrusted data
echo $a; // 123


/* ADD
 * =============================================== */

$fruits[] = 'apples'; // add to end
$veggies [ 'potato' ] = 3;

array_unshift( $fruits, "raspberries", "blueberries" ); // add to beginning
array_push( $fruits, "raspberries", "blueberries" ); // add to end

$x = 1;
$y = 2;
$z = 3;
$vars = compact ( "x", array ( "y", "z" ), "random" );
print_r ( $vars ); // Array ( [x] => 1 [y] => 2 [z] => 3 )


/* MERGE
 * =============================================== */

$colors        = array( 'green', 'red', 'yellow' );
$food          = array( 'avocado', 'apple', 'banana' );
$colored_food  = array_combine( $colors, $food ); // keys + values

$result        = array_merge( $fruits, $veggies ); // 2nd array overrides 1st array, numbers are appended

$base          = array( "orange", "banana", "apple", "raspberry" );
$replacements  = array( 0 => "pineapple", 4 => "cherry" );
$replacements2 = array( 0 => "grape" );
$basket        = array_replace( $base, $replacements, $replacements2 ); // keys are replaced or created


/* REMOVE
 * =============================================== */

$fruit = array_shift( $fruits ); // remove item from begining
$fruit = array_pop( $fruits ); // remove item from end
unset( $fruits [ 'apples' ] );

$a = array( 1, 2, 3, NULL, "", "text", 4, 5 );
$a = array_filter( $a ); // removes empty and null values
$a = array_filter( $a, 'is_numeric' ); // returns only numeric values

$from    = array( "a" => "green", "red", "blue" );
$against = array( "b" => "green", "yellow", "red" );
$result  = array_diff( $from, $against ); // values in $from not in any $against
print_r( $result ); // Array ( [1] => blue )

$from    = array( "a" => "green", "red", "blue" );
$against = array( "b" => "green", "yellow", "red" );
$result  = array_intersect( $from, $against ); // values that exist in $from and $against
print_r( $result ); // Array ( [a] => green [0] => red )

/* FOR LOOPS
 * =============================================== */

// loop through each item
foreach ( $fruits as $fruit ) {
	echo "fruit: $fruit \n";
}

// loop through each item with index
foreach ( $fruits as $inx => $fruit ) {
	echo "$inx. fruit: $fruit \n";
}

$max = count( $fruits );
for ( $i = 0; $i < $max; $i ++ ) {

	if ( $i === 0 ) {
		continue;
	} // advance loop

	echo $fruits [ $i ];

	if ( $i === 3 ) {
		break;
	} // stop loop
}


/* DO WHILE LOOP
 * =============================================== */

$i = 10;
do {
	echo $i;
} 
while ( $i-- );


/* ARRAY CONVERSION
 * =============================================== */

// convert to string
$fruits_str = implode( ',', $fruits );

// convert string to array
$fruits = explode( ',', $fruits_str );

// convert array to json
$json = json_encode( array( 1, "hello", 'foo' => 'bar' ) );
echo $json; // {"0":1,"1":"hello","foo":"bar"}

// convert json to array -- notice the `true` argument
$array = json_decode( $json, true );
var_dump( $array ); // array(3) { [0]=> int(1) [1]=> string(5) "hello" ["foo"]=> string(3) "bar" }


/* ARRAY SORT
 * =============================================== */
 // http://php.net/manual/en/array.sorting.php
 
$numbers = range( 1, 10 );

shuffle( $numbers );
echo implode( ",", $numbers );  // 7,1,5,2,8,9,6,10,3,4

arsort( $numbers ); // reverse order 
echo implode( ",", $numbers ); // 10,9,8,7,6,5,4,3,2,1

asort( $numbers );
echo implode( ",", $numbers ); // 1,2,3,4,5,6,7,8,9,10
