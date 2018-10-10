if (!function_exists('l_array_from_date_range')) {
    function l_array_from_date_range($from,$to,$format){
        $date_array = array();
        $date_from = strtotime(l_reformat_date($from, $format, "Y-m-d"));
        $date_to = strtotime(l_reformat_date($to, $format, "Y-m-d"));
        for ($i=$date_from; $i<=$date_to; $i+=86400) {
            $date_array[] =  date($format, $i);
        }
        return $date_array;
    }
}
