<?      
/*if(isset($_POST['hvlogin'])){
    $_SERVER['SERVER_NAME'] = $_POST['hvlogin'];
}*/

$root = $_SERVER['DOCUMENT_ROOT'];

include($root."/blocks/db.php"); 
include($root."/blocks/init.php");
include($root."/blocks/funcs.php");
include($root."/module/cost.php"); 
    
if(isset($_POST['id_room'])){
    $n = $_POST['n'];
    $room_name = $_POST['room_name'];
    $room_id = $_POST['id_room'];
    $date_s = $_POST['date_s'];
    $date_e = $_POST['date_e'];
    $adults = $_POST['adults'];
    $child = $_POST['child'];
    $ch1 = $_POST['ch1'];
    $ch2 = $_POST['ch2'];
    $ch3 = $_POST['ch3'];
    $ch4 = $_POST['ch4'];
    $time1 = $_POST['time1'];
    $time2 = $_POST['time2'];
    
    $_COOKIE['date_s'] = $date_s;
    $_COOKIE['date_e'] = $date_e;
    $_COOKIE['adults'] = $adults;
    $_COOKIE['children'] = $child;
    $_COOKIE['ch1'] = $ch1;
    $_COOKIE['ch2'] = $ch2;
    $_COOKIE['ch3'] = $ch3;
    $_COOKIE['ch4'] = $ch4;
    
    $calc_res = calc_cost(array($room_id));
    
    if($calc_res['sale_all'][$room_id] > 0){
        $sale_style = '';
    }else{
        $sale_style = 'hide';
    }
    
    //print_r($_POST);
    echo('
        <div class="book-res-line">
            <span class="book-res-room-name">'.$room_name.'</span>
            <br class="cb" />
        </div>
        <div class="book-res-line">
            <span class="book-res-title">Даты</span>
            <span class="book-res-val">'.$calc_res['date_text'].'</span>
            <br class="cb" />
        </div>
        <div class="book-res-line">
            <span class="book-res-title">Человек</span>
            <span class="book-res-val">'.$calc_res['people'].'</span>
            <br class="cb" />
        </div>
        <div class="book-res-line">
            <span class="book-res-title">Дней</span>
            <span class="book-res-val">'.$calc_res['days_text'].'</span>
            <br class="cb" />
        </div>

        <div class="book-res-line">
            <span class="book-res-title">За сутки</span>
            <span class="book-res-val">
                <span class="sale-cost calc-sale-day calc-sale '.$sale_style.'">'.$calc_res['min_sale_cost'][$room_id].'<b></b></span> 
                <span class="cost-mark calc-cost-day load-cost">'.$calc_res['min_from'][$room_id].' '.$calc_res['min_cost'][$room_id].' '.$curr_full.'</span>
            </span>
            <br class="cb" />
        </div>
        <div class="book-res-line">
            <span class="book-res-title">Итого</span>
            <span class="book-res-val">
                <span class="calc-sale-style calc-sale calc-sale-all '.$sale_style.'">'.$calc_res['sale_all'][$room_id].'<b></b></span>
                <span data-curr_full="'.$calc_res['curr_full'].'" data-prepay_name="'.$calc_res['prepay_text'].'" data-prepay_sum="'.$calc_res['prepay_sum'][$room_id].'" class="calc-cost-all load-cost"><span>'.$calc_res['cost_all'][$room_id].'</span> '.$curr_full.'</span>
            </span>
            <br class="cb" />
        </div>    

        ');
    
}       
    
?>