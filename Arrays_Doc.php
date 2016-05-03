<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>Arrays_Learning_Doc</title>
</head>

<body>
    <?php
        $input_array = array("FirSt" => 1, "SecOnd" => 4);
        print_r(array_change_key_case($input_array, CASE_UPPER));
        print_r(array_change_key_case($input_array, CASE_LOWER));
    ?>

</body>
</html>