function array_to_sql_in($array){
    $array = array_map(function($a) {
        return is_numeric($a) ? $a : "'{$a}'"; 
    }, $array);

    $s = '(';
    $s .= implode(', ', $array);
    $s .= ')';
    return $s;
}
