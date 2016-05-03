<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>Arrays_Learning_Doc</title>
</head>

<body>
    <a href="http://php.net/manual/en/ref.array.php">PHP Manual</a>
    <?php
    // array_change_key_case
        $input_array = array("FirSt" => 1, "SecOnd" => 4);
        print_r(array_change_key_case($input_array, CASE_UPPER));
//        echo "<p>CASE_UPPER: "."$input_array"."</br></p>"."\n";
        print_r(array_change_key_case($input_array, CASE_LOWER));
    // array_chunk
        $input_array = array('a','b','c','d','e');
        print_r(array_chunk($input_array, 2));
        print_r(array_chunk($input_array, 3, true));
    // array_column
    // Array representing a possible record set returned from a database
        $records = array(
            array(
                'id' => 2135,
                'first_name' => 'John',
                'last_name' => 'Doe',
            ),
            array(
                'id' => 3245,
                'first_name' => 'Sally',
                'last_name' => 'Smith',
            ),
            array(
                'id' => 5342,
                'first_name' => 'Jane',
                'last_name' => 'Jones',
            ),
            array(
                'id' => 5623,
                'first_name' => 'Peter',
                'last_name' => 'Doe',
            )
        );
 
        $id = array_column($records, 'id');
        print_r($id);
    // array_combine($key, $value)
        $a = array('green', 'red', 'yellow');
        $b = array('avocado', 'apple', 'banana');
        $c = array_combine($a, $b);
        print_r($c);
    // array_count_values count frequecy of elements in array
    $array = array(1,1,1,1,"Wlala", "hello", 1, "world", "hello");
    print_r(array_count_values($array));
    // array_diff_assoc: the array keys are also used in the comparison.
        $array1 = array("a" => "green", "b" => "brown", "c" => "blue","yellow", "red");
//        print_r(array_keys($array1));
        $array2 = array("a" => "green", "red");

        $diff = array_diff_assoc($array1, $array2);
        print_r($diff);
    // array_diff: returns the values in array1 that are not present in array2
        $diff = array_diff($array1, $array2);
        print_r($diff);
    // array_diff_key: compare keys
        var_dump(array_diff_key($array1, $array2));
    // array_diff_uassoc: user define callback function
        function key_compare_func($a, $b)
            {
                if ($a === $b) {
                    return 0;
                }
                return ($a > $b)? 1:-1;
            }

        $array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
        $array2 = array("a" => "green", "yellow", "red");
        $result = array_diff_uassoc($array1, $array2, "key_compare_func");
        print_r($result);
    // array_diff_ukey: user define callback function
        var_dump(array_diff_ukey($array1, $array2, 'key_compare_func'));
    // array_fill_keys: two parameters; 2nd as values;
        $keys = array('foo', 5, 10, 'bar');
        $value = array('banana','apple');
        $a = array_fill_keys($keys, $value);
        print_r($a);
    // array_fill(offset, length, value)
        $a = array_fill(3,3,3);
        $b = array_fill(-2,4,'Wlala');
        print_r($a);
        print_r($b);
    // array_filter:
        // example1:
        function odd($var)
        {
            // returns whether the input integer is odd
            return($var & 1);
        }

        function even($var)
        {
            // returns whether the input integer is even
            return(!($var & 1));
        }

        $array1 = array("a"=>1, "b"=>2, "c"=>3, "d"=>4, "e"=>5);
        $array2 = array(6, 7, 8, 9, 10, 11, 12);

        echo "Odd :\n";
        print_r(array_filter($array1, "odd"));
        echo "Even:\n";
        print_r(array_filter($array2, "even"));
        // example2: flag php version 5.6
//        $arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];
//
//        var_dump(array_filter($arr, function($k) {
//            return $k == 'c';
//        }, ARRAY_FILTER_USE_KEY));
//
//        var_dump(array_filter($arr, function($v, $k) {
//            return $k == 'a' || $v == 4;
//        }, ARRAY_FILTER_USE_BOTH));
    // array_flip
        $input = array("a" => 2, "b" => 3, "c" => 1);
        $flipped = array_flip($input);
        print_r($flipped);
    // array_intersect_assoc
        $array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
        $array2 = array("a" => "green", "b" => "yellow", "blue", "red");
        $result_array = array_intersect_assoc($array1, $array2);
        print_r($result_array);
        $result_array = array_intersect_key($array1, $array2);
        print_r($result_array);
    // array_intersect_uassoc
        $array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
        $array2 = array("a" => "GREEN", "B" => "brown", "yellow", "red");
        // strcasecmp: if $v1 === $v2, return 0;
        print_r(array_intersect_uassoc($array1, $array2, "strcasecmp"));
    // array_intersect: values
        print_r(array_intersect($array1, $array2));
    // array_key_exists
        $search_array = array('first' => null, 'second' => 4);
        // returns false
        var_dump(isset($search_array['first']));
        // returns true
        var_dump(array_key_exists('first', $search_array));
    // array_keys
        $array = array(0 => 100, "color" => "red");
        print_r(array_keys($array));

        $array = array("a"=>"blue", "red", "green", "blue", "blue");
        print_r(array_keys($array, "blue"));

        $array = array("color" => array("blue", "red", "green"),
                       "size"  => array("small", "medium", "large"));
        print_r(array_keys($array));
    ?>

</body>
</html>