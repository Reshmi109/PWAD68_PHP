<?php
//sort
//ksort
//krsort

$countries=["Bangladesh"=>"Dhaka","Nepal"=>"Kathmondu","Australia"=>"Sydney"];
// ksort($countries);
// print_r($countries);
foreach($countries as $key => $country){
    echo " $key : $country <br>" ;
}

?>