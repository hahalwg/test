<?php
$arr = [5,1,2,4,3,88,85,87];

function mp($data){
    $len =  count($data);
    for($i=0;$i<$len;$i++){
        for($j=$i;$j+1<$len;$j++){
            if( $data[$j+1]<$data[$j]){
                $temp = $data[$j+1];
                $data[$j+1]=$data[$j];
                $data[$j]=$temp;
            }
        }
    }
    return $data;
}


function ks($data){
    $count = count($data);
    if($count<=1){
        return $data;
    }
    $base  = array_shift($data);

    $left_arr = [];
    $right_arr = [];
    foreach($data as $k => $v){
        if($v<$base){
            $left_arr[]=$v;
        }else{
            $right_arr[]=$v;
        }
    }

    $left_arr =  ks($left_arr);
    $right_arr = ks($right_arr);

    return array_merge($left_arr ,array($base),$right_arr);
}
print_r(ks($arr));