<?php 

$year = 2000;
// $year が永遠に増え続けると処理できない
if ($year == 2000) {

} else if ($year == 2001) {

} else if ($year == 2002) {

} else if ($year == 2003) {

}

// ネストが多すぎる
$is_case1 = true;
$is_case2 = true;
$is_case3 = false;
$is_case4 = true;

if ($is_case1) {
    echo "ケース1";
    if ($is_case2) {
        echo "ケース2";
        if ($is_case3) {
            echo "ケース3";
            if ($is_case4) {
                echo "ケース4";
            }
        }
    }
}

?>