<?php 
    if (!($_COOKIE['login'] == $login) && ($_COOKIE['password'] == $password) || !($_SESSION['password'] == md5($login.':'.$password))){
        header('Location: /admin/index.php'); 
        exit;
    }
    //-----------------//
    $login = 'hotel-igor';          // Логин
    $password = 'aPHmpmr4bD';      // Пароль
    //-----------------//
    
?>

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="description" content="Бутик отель История в Алуште">
        <meta name="keywords" content="Бутик отель История в Алуште">
        <meta name="format-detection" content="telephone=no">
        <meta http-equiv="Cache-Control" content="no-cache">
        <title>Бутик отель История в Алуште</title>
        <link href="admin.css" rel="stylesheet" type="text/css">
    
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    </head>
    
    <body>
        <img src="../img/map2.jpg" alt="background" class="body_bg">
        <div style="width: 99%; display: flex;">
            <div style="width: 35%; text-align: right; font-size: 40px;">
                Необработанные заявки:
            </div>
            <div class="tickets">

            </div>
        </div>
        <div class="table">
            <div class="panel">
                <div class="list">
                    <div class="number" id="1">
                        <img src="https://hotel-istoria.ru/img/room/big_OxyU5.jpg" alt="Инь-Янь (студио)">
                            <span>
                                Инь-Янь ( люкс )
                            </span>                  
                    </div>
                    <div class="number" id="2">
                        <img src="https://hotel-istoria.ru/img/room/big_aQQEFc.JPG" alt="Благодать (студио)">
                        <span>
                            Благодать ( люкс )
                        </span>
                    </div>
                    <div class="number" id="3">
                        <img src="https://hotel-istoria.ru/img/room/big_2Zxdr.JPG" alt="Круизный (студио)">
                        <span>
                            Круиз ( люкс )
                        </span>
                    </div>
                    <div class="number" id="4">
                        <img src="https://hotel-istoria.ru/img/room/big_v2sGmD.JPG" alt="Традиция (люкс)">
                        <span>
                            Традиция ( люкс )
                        </span>
                    </div>
                    <div class="number" id="5">
                        <img src="https://hotel-istoria.ru/img/room/big_i10OB.JPG" alt="Шоколадница">
                        <span>
                            Шоколадница
                        </span>
                    </div>
                    <div class="number" id="6">
                        <img src="https://hotel-istoria.ru/img/room/big_mYuE4Y.JPG" alt="Азия">
                        <span>
                            Азия
                        </span>
                    </div>
                    <div class="number" id="7">
                        <img src="https://hotel-istoria.ru/img/room/big_fZMK9g.JPG" alt="Джаз">
                        <span>
                            Джаз
                        </span>
                    </div>
                    <div class="number" id="8">
                        <img src="https://hotel-istoria.ru/img/room/big_vSJvDC.JPG" alt="">
                        <span>
                            Прованс
                        </span>
                    </div>
                    <div class="number" id="9">
                        <img src="https://hotel-istoria.ru/img/room/big_aVkH5.JPG" alt="Дача «Лаванда»">
                        <span>
                            Дача «Лаванда»
                        </span>
                    </div>
                    <div class="number" id="10">
                        <img src="https://hotel-istoria.ru/img/room/big_u72XR3.JPG" alt="Дача «Розмарин»">
                        <span>
                            Дача «Розмарин»
                        </span>
                    </div>
                </div>
            </div>
            <div class="calendar">
                <button class="calendar-prev"><--</button>
                <button class="calendar-next">--></button>
                <div class="calendar-block">
                    <div id="datepicker1"></div>
                    <div id="datepicker2"></div>
                    <div id="datepicker3"></div>
                    <div id="datepicker4"></div>
                    <div id="datepicker5"></div>
                    <div id="datepicker6"></div>
                    <div id="datepicker7"></div>
                    <div id="datepicker8"></div>
                    <div id="datepicker9"></div>
                    <div id="datepicker10"></div>
                </div>
            </div>
            
            <div class="info">
                <span>Имя:</span><br>
                <span class="name"></span><br>
                <span>Телефон:</span><br>
                <span class="phone"></span><br>
                <span>Почта:</span><br>
                <span class="email"></span><br>

            </div>
        </div>
        
        <div style="display: flex;">

        
        <div class="navigation">
            <span style="
            font-size: 40px;
            text-align: center;
            margin-bottom: 20px;">Управление</span>
            <div>
                <span>Минимальная бронь на:</span>
                <select id="guests"> 
                    <option>1</option> 
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>  
                </select> дней<br>
                <button class="button">Утвердить</button>
            </div>
            <div>
                <span>% за ребёнка в номере:</span>
                <select id="children"> 
                    <option>10</option> 
                    <option>20</option>
                    <option>30</option>
                    <option>40</option>
                    <option>50</option>  
                </select> % <br>
                <button class="button">Утвердить</button>
            </div>
            <div class="booking">
                <span>Забронировать:</span><br>
                <br>
                <input class="booking-input" type="text" placeholder="Введите имя" id="name" name="form-text"><br><br>
                <input class="booking-input" type="text" placeholder="Введите телефон" id="phone" name="form-text"><br><br>
                <input class="booking-input" type="text" placeholder="Введите почту" id="email" name="form-text"><br><br>
                <select id="number-selector" style="width: 204px;">
                    <option value="1">Инь-Янь</option>
                    <option value="2">Благодать</option>
                    <option value="3">Круиз</option>
                    <option value="4">Традиция</option>
                    <option value="5">Шоколадница</option>
                    <option value="6">Азия</option>
                    <option value="7">Джаз</option>
                    <option value="8">Прованс</option>
                    <option value="9">«Лаванда»</option>
                    <option value="10">«Розмарин»</option>
                </select>
                <select id="number-selector1" style="width: 204px;">
                    <option value="0">Добавить номер</option>
                    <option value="1">Инь-Янь</option>
                    <option value="2">Благодать</option>
                    <option value="3">Круиз</option>
                    <option value="4">Традиция</option>
                    <option value="5">Шоколадница</option>
                    <option value="6">Азия</option>
                    <option value="7">Джаз</option>
                    <option value="8">Прованс</option>
                    <option value="9">«Лаванда»</option>
                    <option value="10">«Розмарин»</option>
                </select>
                <div class="calendar-stack">
                    <div class="calendar-first">
                        <div class="calendar-text">
                            Заезд
                        </div>
                        <input type="text" class="calendar-blocks" id="datepicker11" placeholder="Выберите дату">
                    </div>
                    <div class="calendar-first">
                        <div class="calendar-text">
                            Заезд
                        </div>
                        <input type="text" class="calendar-blocks" id="datepicker111" placeholder="Выберите дату">
                    </div>
                </div>
                <div class="calendar-stack">
                    <div class="calendar-last">
                        <div class="calendar-text">
                            Выезд
                        </div>
                        <input type="text" class="calendar-blocks" id="datepicker22" placeholder="Выберите дату">
                    </div>
                    <div class="calendar-last">
                        <div class="calendar-text">
                            Выезд
                        </div>
                        <input type="text" class="calendar-blocks" id="datepicker222" placeholder="Выберите дату">
                    </div>
                </div>
                
                <form enctype="multipart/form-data" method="post" id="form1" onsubmit="send(event, 'send.php')">
                    <input placeholder="Имя" name="name" type="text" hidden>
                    <input placeholder="Почта" name="email" type="text" hidden>
                    <input placeholder="Первая дата" name="firstDate" type="text" hidden>
                    <input placeholder="Вторая дата" name="lastDate" type="text" hidden>
                    <input placeholder="Стоимость" name="price" type="text" hidden>
                    <input placeholder="Дней" name="dayCount" type="text" hidden>
                    <input placeholder="Номера" name="number" type="text" hidden>
                    
                    <input placeholder="Стоимость" name="price1" type="text" hidden>
                    <input placeholder="Дней" name="dayCount1" type="text" hidden>
                    <input placeholder="Номера" name="number1" type="text" hidden>

                    <input placeholder="Стоимость" name="price2" type="text" hidden>
                    <input placeholder="Дней" name="dayCount2" type="text" hidden>
                    <input placeholder="Номера" name="number2" type="text" hidden>

                    <input value="Отправить письмо" class="mail-book" type="submit">
                </form>


                <form enctype="multipart/form-data" method="post" id="form2" onsubmit="send(event, 'sendPayment.php')">
                    <input placeholder="Имя" name="name" type="text" hidden>
                    <input placeholder="Почта" name="email" type="text" hidden>
                    <input placeholder="Первая дата" name="firstDate" type="text" hidden>
                    <input placeholder="Номера" name="number" type="text" hidden>

                    <input value="Забронировать" class="book" type="submit">
                </form>
                
                
            </div>
            <div style="display: flex; align-items: center;">
                <div class="color-block1"></div>
                <span> - Свободно</span>
            </div>
            <div style="display: flex; align-items: center;">
                <div class="color-block2"></div>
                <span> - Забронировано</span>
            </div>
        </div>
        <div class="price-list">
            
            <div class="price-number" id="1">
                <img src="https://hotel-istoria.ru/img/room/big_OxyU5.jpg" alt="Инь-Янь (студио)">
                    <span>
                        Инь-Янь (люкс)
                    </span>
                    <div class="price" id="1"></div>
                    <input type="text" class="price-input" name="price-input" placeholder="Новая цена">
                    <button class="price-button" id="1">Изменить</button>                  
            </div>
            <div class="price-number" id="2">
                <img src="https://hotel-istoria.ru/img/room/big_aQQEFc.JPG" alt="Благодать (студио)">
                <span>
                    Благодать (люкс)
                </span>
                <div class="price" id="2"></div>
                    <input type="text" class="price-input" name="price-input" placeholder="Новая цена">
                    <button class="price-button" id="2">Изменить</button>  
            </div>
            <div class="price-number" id="3">
                <img src="https://hotel-istoria.ru/img/room/big_2Zxdr.JPG" alt="Круизный (студио)">
                <span>
                    Круиз (люкс)
                </span>
                <div class="price" id="3"></div>
                    <input type="text" class="price-input" name="price-input" placeholder="Новая цена">
                    <button class="price-button" id="3">Изменить</button>  
            </div>
            <div class="price-number" id="4">
                <img src="https://hotel-istoria.ru/img/room/big_v2sGmD.JPG" alt="Традиция (люкс)">
                <span>
                    Традиция (люкс)
                </span>
                <div class="price" id="4"></div>
                    <input type="text" class="price-input" name="price-input" placeholder="Новая цена">
                    <button class="price-button" id="4">Изменить</button>  
            </div>
            <div class="price-number" id="5">
                <img src="https://hotel-istoria.ru/img/room/big_i10OB.JPG" alt="Шоколадница">
                <span>
                    Шоколадница
                </span>
                <div class="price" id="5"></div>
                    <input type="text" class="price-input" name="price-input" placeholder="Новая цена">
                    <button class="price-button" id="5">Изменить</button>  
            </div>
            <div class="price-number" id="6">
                <img src="https://hotel-istoria.ru/img/room/big_mYuE4Y.JPG" alt="Азия">
                <span>
                    Азия
                </span>
                <div class="price" id="6"></div>
                    <input type="text" class="price-input" name="price-input" placeholder="Новая цена">
                    <button class="price-button" id="6">Изменить</button>  
            </div>
            <div class="price-number" id="7">
                <img src="https://hotel-istoria.ru/img/room/big_fZMK9g.JPG" alt="Джаз">
                <span>
                    Джаз
                </span>
                <div class="price" id="7"></div>
                    <input type="text" class="price-input" name="price-input" placeholder="Новая цена">
                    <button class="price-button" id="7">Изменить</button>  
            </div>
            <div class="price-number" id="8">
                <img src="https://hotel-istoria.ru/img/room/big_vSJvDC.JPG" alt="">
                <span>
                    Прованс
                </span>
                <div class="price" id="8"></div>
                    <input type="text" class="price-input" name="price-input" placeholder="Новая цена">
                    <button class="price-button" id="8">Изменить</button>  
            </div>
            <div class="price-number" id="9">
                <img src="https://hotel-istoria.ru/img/room/big_aVkH5.JPG" alt="Дача «Лаванда»">
                <span>
                    Дача «Лаванда»
                </span>
                <div class="price" id="9"></div>
                    <input type="text" class="price-input" name="price-input" placeholder="Новая цена">
                    <button class="price-button" id="9">Изменить</button>  
            </div>
            <div class="price-number" id="10">
                <img src="https://hotel-istoria.ru/img/room/big_u72XR3.JPG" alt="Дача «Розмарин»">
                <span>
                    Дача «Розмарин»
                </span>
                <div class="price" id="10"></div>
                    <input type="text" class="price-input" name="price-input" placeholder="Новая цена">
                    <button class="price-button" id="10">Изменить</button>  
            </div>
            <select id="price-date">
                <option value="0">1 января - 10 января</option>
                <option value="1">11 января - 28 апреля</option>
                <option value="2">29 апреля - 10 мая</option>
                <option value="3">11 мая - 30 мая</option>
                <option value="4">1 июня - 30 июня</option>
                <option value="5">1 июля - 31 августа</option>
                <option value="6">1 сентября - 30 сентября</option>
                <option value="7">1 октября - 31 декабря</option>
            </select>
        </div>
        <div style="margin-top: 15px;">
            <select id="number-selector3" style="width: 204px;">
                <option value="1">Инь-Янь</option>
                <option value="2">Благодать</option>
                <option value="3">Круиз</option>
                <option value="4">Традиция</option>
                <option value="5">Шоколадница</option>
                <option value="6">Азия</option>
                <option value="7">Джаз</option>
                <option value="8">Прованс</option>
                <option value="9">«Лаванда»</option>
                <option value="10">«Розмарин»</option>
            </select>
            <div class="calendar-first">
                <div class="calendar-text">
                    Заезд
                </div>
                <input type="text" class="calendar-blocks" id="datepicker03" placeholder="Выберите дату">
            </div>
            <div class="calendar-last">
                <div class="calendar-text">
                    Выезд
                </div>
                <input type="text" class="calendar-blocks" id="datepicker04" placeholder="Выберите дату">
            </div>
            <button id="remove-bron" class="button">Снять бронь</button>
        </div>
    </div>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        function send(event, php){
        console.log("Отправка запроса");
        event.preventDefault ? event.preventDefault() : event.returnValue = false;
        var req = new XMLHttpRequest();
        req.open('POST', php, true);
        req.onload = function() {
            if (req.status >= 200 && req.status < 400) {
                json = JSON.parse(this.response); //  internet explorer 11
                
                // ЗДЕСЬ УКАЗЫВАЕМ ДЕЙСТВИЯ В СЛУЧАЕ УСПЕХА ИЛИ НЕУДАЧИ
                if (json.result == "success") {
                    // Если сообщение отправлено
                    alert("Сообщение отправлено");
                } else {
                    // Если произошла ошибка
                    alert("Ошибка. Сообщение не отправлено");
                }
            // Если не удалось связаться с php файлом
            } else {alert("Ошибка сервера. Номер: "+req.status);}}; 
        
        // Если не удалось отправить запрос. Стоит блок на хостинге
        req.onerror = function() {alert("Ошибка отправки запроса");};
        req.send(new FormData(event.target));
        }
    </script>
    <script>
        $.ajaxSetup({cache: false});
        

        var priceJSON;
            $.ajax({
                url: '../api/price.json',  
                method: 'get',             
                dataType: 'html',          
                success: function(data){   
                    priceJSON = JSON.parse(data);
                    console.log(priceJSON);
                },
                error: function(jqXHR) {
                    console.log(jqXHR.status);
                    $('.info').append($('<section/>', {
                        'class': 'ERROR hidden',
                        text: 'ERROR: ' + jqXHR.status
                    }))
                    $('.ERROR').hide();
                    $('.ERROR').fadeIn(1200);
                }
            });

            function foundPrice(id, priceJSON, date123, date223){

                var price = 0;
                var days = [];
                var date1 = new Date(date123);
                var date2 = new Date(date223);
                
                while (date1 <= date2) {
                    var mounth;
                    mounth = date1.getDate();
                    var dateStr = mounth+"-"+(date1.getMonth()+1).toString()+"-"+date1.getFullYear().toString();
                    days.push(dateStr);
                    date1.setDate( date1.getDate() + 1 )
                }

                for(var i = 0; i < days.length - 1; i++){
                    var current = days[i].split("-");
                    var globalMounth = current[1];
                    var globalYear = current[2];
                    var globalDay = current[0];

                    if(globalMounth == 1 && globalDay < 11){
                        price += parseInt(priceJSON[id].priceData[0][2]);
                    }else if((globalMounth == 1 && globalDay > 10)|| globalMounth == 2|| globalMounth == 3 || (globalMounth == 4 && globalDay < 29)){
                        price += parseInt(priceJSON[id].priceData[1][2]);
                    }else if((globalMounth == 4 && globalDay > 28) || (globalMounth == 5 && globalDay < 11)){
                        price += parseInt(priceJSON[id].priceData[2][2]);
                    }else if(globalMounth == 5 && globalDay > 10){
                        price += parseInt(priceJSON[id].priceData[3][2]);
                    }else if(globalMounth == 6){
                        price += parseInt(priceJSON[id].priceData[4][2]);
                    }else if(globalMounth == 7 || globalMounth == 8){
                        price += parseInt(priceJSON[id].priceData[5][2]);
                    }else if(globalMounth == 9){
                        price += parseInt(priceJSON[id].priceData[6][2]);
                    }else if(globalMounth >= 10 ){
                        price += parseInt(priceJSON[id].priceData[7][2]);
                    }
                }
                return price;
            }


            function getDays(){
                var days = [];
                var date1 = new Date(getUrlParameter('date1'));
                var date2 = new Date(getUrlParameter('date2'));
                while (date1 <= date2) {
                    var mounth;
                    mounth = date1.getDate();
                    var dateStr = mounth+"-"+(date1.getMonth()+1).toString()+"-"+date1.getFullYear().toString();
                    days.push(dateStr);
                    date1.setDate( date1.getDate() + 1 )
                }
                return days;
            }

        $('.mail-book').mouseenter(function(){
            function getDays(x, y){
                var days = 0;
                var date1 = new Date(x);
                var date2 = new Date(y);
                while (date1 <= date2) {
                    days++;
                    date1.setDate( date1.getDate() + 1 )
                }
                return days;
            }
            var mailJSON;
            $.ajax({
                url: '../api/hotel.json',  
                method: 'get',             
                dataType: 'html',          
                success: function(data){   
                    mailJSON = JSON.parse(data);
                    $('#form1 input[name="name"]').val($("#name").val());
                    $('#form1 input[name="email"]').val($("#email").val());
                    if($('#number-selector1').val() == 0){
                        $('#form1').attr('onsubmit', "send(event, 'send.php')")
                        var query = $("#number-selector").val();
                        var firstDate = $("#datepicker11").val().split('.').reverse().join('-');
                        var lastDate = $("#datepicker22").val().split('.').reverse().join('-');
                        var nights = getDays(firstDate, lastDate);
            
                        $('#form1 input[name="price"]').val(foundPrice(query-1, priceJSON, firstDate, lastDate));
                        $('#form1 input[name="number"]').val(mailJSON[query-1].title);
                        $('#form1 input[name="firstDate"]').val($("#datepicker11").val().split('.').join('-'));
                        $('#form1 input[name="lastDate"]').val($("#datepicker22").val().split('.').join('-'));
                        $('#form1 input[name="dayCount"]').val(nights);
                        /*console.log($('#form1 input[name="name"]').val()+" | "+ $('#form1 input[name="email"]').val() +" | "+$('#form1 input[name="price"]').val()+" | "+$('#form1 input[name="number"]').val()+" | "+$('#form1 input[name="firstDate"]').val()+" | "+$('#form1 input[name="lastDate"]').val()+ ' | ' + $('#form1 input[name="dayCount"]').val());*/
                    }else{
                        $('#form1').attr('onsubmit', "send(event, 'sendSeveral.php')");
                        var query1 = $("#number-selector").val();
                        var firstDate1 = $("#datepicker11").val().split('.').reverse().join('-');
                        var lastDate1 = $("#datepicker22").val().split('.').reverse().join('-');
                        var nights1 = getDays(firstDate1, lastDate1);
                        
                        var query2 = $("#number-selector1").val();
                        var firstDate2 = $("#datepicker111").val().split('.').reverse().join('-');
                        var lastDate2 = $("#datepicker222").val().split('.').reverse().join('-');
                        var nights2 = (getDays(firstDate2, lastDate2) - 1);
                        
                        $('#form1 input[name="price1"]').val((foundPrice(query1-1, priceJSON, firstDate1, lastDate1)));
                        
                        $('#form1 input[name="number1"]').val(mailJSON[query1-1].title);
                        $('#form1 input[name="dayCount1"]').val(nights1);

                        $('#form1 input[name="price2"]').val(foundPrice(query2-1, priceJSON, firstDate2, lastDate2));
                        
                        $('#form1 input[name="number2"]').val(mailJSON[query2-1].title);
                        $('#form1 input[name="dayCount2"]').val(nights2);

                        $('#form1 input[name="firstDate"]').val($("#datepicker11").val().split('.').join('-'));
                        $('#form1 input[name="lastDate"]').val($("#datepicker222").val().split('.').join('-'));
                        
                    }
                },
                error: function(jqXHR) {
                    console.log(jqXHR.status);
                    alert('ERROR: ' + jqXHR.status);
                }
            });
            
        });
        function disableScroll() {
        // Получить текущую позицию прокрутки страницы
        scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
            // при попытке прокрутки установить это значение на предыдущее
            window.onscroll = function() {
                window.scrollTo(scrollLeft, scrollTop);
            };
        }

        function enableScroll() {
            window.onscroll = function() {};
        }
        $(document).ready(function() {
        
        $('#need-rem').remove();

        var price2JSON;
        $.ajax({
            url: '../api/hotel.json',  
            method: 'get',             
            dataType: 'html',          
            success: function(data){   
                price2JSON = JSON.parse(data);
                console.log(price2JSON);
                for(var i = 0; i < price2JSON.length; i++){
                    $('#'+ priceJSON[i].id +'.price').text('Текущая цена - ' + priceJSON[i].priceData[0][2] +' руб.');
                }
            },
            error: function(jqXHR) {
                console.log(jqXHR.status);
                alert('ERROR: ' + jqXHR.status);
            }
        });

        $('#price-date').change(function(){
            var price2JSON;
            $.ajax({
                url: '../api/hotel.json',  
                method: 'get',             
                dataType: 'html',          
                success: function(data){   
                    price2JSON = JSON.parse(data);
                    console.log(price2JSON);
                    for(var i = 0; i < price2JSON.length; i++){
                        $('#'+ priceJSON[i].id +'.price').text('Текущая цена - ' + priceJSON[i].priceData[$('#price-date').val()][2] +' руб.');
                    }
                },
                error: function(jqXHR) {
                    console.log(jqXHR.status);
                    alert('ERROR: ' + jqXHR.status);
                }
            });
        });

        ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        $('#remove-bron').click(function(){
            var timeDate = new Date($('#datepicker03').val().split('.').reverse().join('.'));
            var z = [timeDate.getDate(), timeDate.getMonth() + 1, timeDate.getFullYear()];
            timeDate = z.join('-');
            console.log(timeDate);
            $.ajax({
                url: '../api/remove-bron.php',  
                method: 'get',
                data:{
                    id: $('#number-selector3').val(),
                    firstDate: timeDate,
                    lastDate: $('#datepicker04').val().split('.').join('-')
                },             
                dataType: 'html',          
                success: function(data){
                    alert("Готово!");
                },
                error: function(jqXHR) {
                    console.log(jqXHR.status);
                    alert('Проверьте выбранные даты!');
                }
            });
        });
        
        
        $('.price-button').click(function() {
            var query = $(this).parent().attr('id');
            var url = '../api/edit-price.php';
            var priceJSON;
            var price = $(this).prev().val();
            $.ajax({
                url: url,  
                method: 'get',
                data:{
                    id: query,
                    price: price,
                    counterNumber: $('#price-date').val()
                },             
                dataType: 'html',          
                success: function(data){
                    $('#'+ query +'.price ').text('Текущая цена - ' + price +' руб.');   
                    alert("Готово!");
                },
                error: function(jqXHR) {
                    console.log(jqXHR.status);
                    alert('ERROR: ' + jqXHR.status);
                }
            });
        });
        ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


        $.datepicker.regional['ru'] = {
            closeText: 'Закрыть',
            prevText: 'Предыдущий',
            nextText: 'Следующий',
            currentText: 'Сегодня',
            monthNames: ['Январь','Февраль','Март','Апрель','Май','Июнь','Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],
            monthNamesShort: ['Янв','Фев','Мар','Апр','Май','Июн','Июл','Авг','Сен','Окт','Ноя','Дек'],
            dayNames: ['воскресенье','понедельник','вторник','среда','четверг','пятница','суббота'],
            dayNamesShort: ['вск','пнд','втр','срд','чтв','птн','сбт'],
            dayNamesMin: ['Вс','Пн','Вт','Ср','Чт','Пт','Сб'],
            weekHeader: 'Не',
            dateFormat: 'dd.mm.yy',
            firstDay: 1,
            isRTL: false,
            showMonthAfterYear: false,
            yearSuffix: ''
        };
        $.datepicker.setDefaults($.datepicker.regional['ru']);
        
        function numberClicker(){
            for(var i = 0; i < 10; i++){
                $('.number:eq('+ i +')').click();
            }
            console.log('click numb')
        }

        function redDate(x){
            x = x.split('-');
            x = x[1] + '-' + x[0] + '-' + x[2];
            return x;
        }

        $(function(){
            $("#datepicker1").datepicker();
            $("#datepicker2").datepicker();
            $("#datepicker3").datepicker();
            $("#datepicker4").datepicker();
            $("#datepicker5").datepicker();
            $("#datepicker6").datepicker();
            $("#datepicker7").datepicker();
            $("#datepicker8").datepicker();
            $("#datepicker9").datepicker();
            $("#datepicker10").datepicker();

            $('#datepicker03').datepicker();
            $('#datepicker04').datepicker();


            numberClicker();

            $('.calendar-next').click(function(){
                for(var i = 0; i < 10; i++){
                    $('.ui-datepicker-next:eq('+ i +')').click();
                }
                numberClicker();
            });

            $('.calendar-prev').click(function(){
                for(var i = 0; i < 10; i++){
                    $('.ui-datepicker-prev:eq('+ i +')').click();
                } 
                numberClicker();
            });

            $("#datepicker11").datepicker();
            $("#datepicker22").datepicker();
            $("#datepicker111").datepicker();
            $("#datepicker222").datepicker();
            var date = new Date();
            date.setDate(date.getDate() + 1);
        
            $("#datepicker11").datepicker({
                minDate: date
            });
            $("#datepicker22").datepicker({
                minDate: date
            });
            $("#datepicker111").datepicker({
                minDate: date
            });
            $("#datepicker222").datepicker({
                minDate: date
            });
        });
        
        $.ajax({
            url: '../api/hotel.json',  
            method: 'get',             
            dataType: 'html',          
            success: function(data){   
                allJSON = JSON.parse(data);
            },
            error: function(jqXHR) {
                console.log(jqXHR.status);
                $('.info').append($('<section/>', {
                    'class': 'ERROR hidden',
                    text: 'ERROR: ' + jqXHR.status
                }))
                $('.ERROR').hide();
                $('.ERROR').fadeIn(1200);
            }
        });

        ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        function getDays(x, y){
            var days = 0;
            var date1 = new Date(x);
            var date2 = new Date(y);
            while (date1 <= date2) {
                days++;
                date1.setDate( date1.getDate() + 1 )
            }
            return days;
        }
        
        var ticketsJSON;
        var apiJSON;
        var allJSON;
        var deleteCounter;
        $.ajax({
                url: '../api/get-tickets.php',
                method: 'GET',
                context: this,
                dataType: "html",
                timeout: 8000,
                global: false
            }).done(function(data) {
                //console.log(JSON.parse(data));
                ticketsJSON = JSON.parse(data);
                $('.tickets').html(" ");
                if(ticketsJSON){
                    deleteCounter = ticketsJSON.length-1;
                    for(var tick = 0; tick < ticketsJSON.length; tick++){

                        $('.tickets').append($('<div/>', {
                            'class': 'ticket-block',
                            text: '?',
                            'id': ticketsJSON[tick].id,
                            'target': tick
                        }));
                        $('.ticket-block:eq('+tick+')').click(function(){
                            disableScroll();
                            $('body').append($('<div/>', {
                                'class': 'pop-up'
                            })).append($('<div/>', {
                                'class': 'full-content'
                            }));

                            $('.pop-up').fadeIn(300).click(function(){
                                $(this).remove();
                                $('.full-content').remove();
                                enableScroll();
                            });

                            var currentTarget = $(this).index();
                            var timeTarget = $(this).attr('target');
                            var jsonTarget = $(this).attr('id');
                            console.log(jsonTarget)
                            
                            $('.full-content').hide().fadeIn(400).append($('<span/>', {
                                'class': 'full-text',
                                'text': 'Этап бронирования'
                            })).append($('<form/>', {
                                'enctype': 'multipart/form-data',
                                'method': 'post',
                                'id': 'form',
                                'onsubmit': 'send(event, "send.php")'
                            }))

                            $('.full-content #form').append($('<span/>', {
                                'class': 'form-text',
                                'text': 'Имя: '
                            })).append($('<input/>', {
                                'placeholder': 'Имя',
                                'name': 'name',
                                'type': 'text',
                                'class': 'full2-text',
                                'value': ticketsJSON[timeTarget].name
                            })).append($('<span/>', {
                                'class': 'full2-text',
                                'text': 'Почта: '
                            })).append($('<input/>', {
                                'placeholder': 'Почта: ',
                                'name': 'email',
                                'type': 'text',
                                'class': 'full2-text',
                                'value': ticketsJSON[timeTarget].email
                            })).append($('<span/>', {
                                'class': 'full2-text',
                                'text': 'Телефон:'
                            })).append($('<input/>', {
                                'placeholder': 'Телефон: ',
                                'type': 'text',
                                'class': 'full2-text',
                                'value': '+' + ticketsJSON[timeTarget].phone
                            })).append($('<span/>', {
                                'class': 'full2-text',
                                'text': 'Количество ночей: ' + getDays(redDate(ticketsJSON[timeTarget].date[0][0]), redDate(ticketsJSON[timeTarget].date[0][ticketsJSON[timeTarget].date[0].length-1]))
                            })).append($('<input/>', {
                                'placeholder': 'С: ',
                                'name': 'firstDate',
                                'type': 'text',
                                'class': 'full2-text',
                                'value': ticketsJSON[timeTarget].date[0][0]
                            })).append($('<input/>', {
                                'placeholder': 'По: ',
                                'name': 'lastDate',
                                'type': 'text',
                                'class': 'full2-text',
                                'value': ticketsJSON[timeTarget].date[0][ticketsJSON[timeTarget].date[0].length-1]
                            })).append($('<input/>', {
                                'name': 'dayCount',
                                'type': 'text',
                                'hidden': 'hidden',
                                'value': getDays(redDate(ticketsJSON[timeTarget].date[0][0]), redDate(ticketsJSON[timeTarget].date[0][ticketsJSON[timeTarget].date[0].length-1]))
                            })).append($('<span/>', {
                                'class': 'full2-text',
                                'text': 'Номер: '
                            })).append($('<input/>', {
                                'placeholder': 'Номер: ',
                                'name': 'number',
                                'type': 'text',
                                'class': 'full2-text',
                                'value': allJSON[jsonTarget-1].title
                            })).append($('<span/>', {
                                'class': 'full2-text',
                                'text': 'Ребёнок: ' + ticketsJSON[timeTarget].children
                            })).append($('<span/>', {
                                'class': 'full2-text',
                                'text': 'Сумма: '
                            })).append($('<input/>', {
                                'placeholder': 'Сумма: ',
                                'name': 'price',
                                'type': 'text',
                                'class': 'full2-text',
                                'value': foundPrice(ticketsJSON[timeTarget].id, priceJSON, redDate(ticketsJSON[timeTarget].date[0][0]), redDate(ticketsJSON[timeTarget].date[0][ticketsJSON[timeTarget].date[0].length-1]))
                            })).append($('<input/>', {
                                'type': 'submit',
                                'class': 'send-button',
                                'value': 'Отправить письмо'
                            }));
                
                            $('.full-content').append($('<form/>', {
                                'enctype': 'multipart/form-data',
                                'method': 'post',
                                'id': 'form3',
                                'onsubmit': 'send(event, "sendPayment.php")',
                                'class': 'final-booking'
                            }));

                            $('.final-booking').append($('<input/>', {
                                'name': 'name',
                                'type': 'text',
                                'hidden': 'hidden',
                                'value': ticketsJSON[timeTarget].name
                            })).append($('<input/>', {
                                'name': 'number',
                                'type': 'text',
                                'hidden': 'hidden',
                                'value': allJSON[jsonTarget-1].title
                            })).append($('<input/>', {
                                'name': 'firstDate',
                                'type': 'text',
                                'hidden': 'hidden',
                                'value': ticketsJSON[timeTarget].date[0][0]
                            })).append($('<input/>', {
                                'name': 'email',
                                'type': 'text',
                                'hidden': 'hidden',
                                'value': ticketsJSON[timeTarget].email
                            })).append($('<input/>', {
                                'type': 'submit',
                                'class': 'final-booking',
                                'class': 'send-button',
                                'value': 'Подтвердить бронь'
                            }));

                            $('.full-content').append($('<button/>', {
                                'class': 'delete-booking',
                                'text': 'Отменить бронь'
                            }));;

                            
                            $('.delete-booking').click(function() {
                                $.ajax({
                                    url: '../api/delete.php',
                                    method: 'GET',
                                    data:{
                                            id: currentTarget,
                                        },
                                    context: this,
                                    dataType: "html",
                                    timeout: 8000,
                                    global: false
                                }).done(function(data) {
                                    console.log(deleteCounter);
                                    console.log('удалил');
                                });
                                $('.pop-up').click();
                                $('.ticket-block:eq('+(currentTarget)+')').remove();
                            });

                            $('.final-booking').click(function() {
                                var query = jsonTarget-1;
                                var url = '../api/add-date.php';
                                var phone = ticketsJSON[timeTarget-1].phone;
                                var name = ticketsJSON[timeTarget-1].name;
                                var email = ticketsJSON[timeTarget-1].email;
                                var date = ticketsJSON[timeTarget-1].date[0];
                                console.log(date, allJSON[jsonTarget-1].id);
                                var apiJSON;
                                
                                $.ajax({
                                    url: url,
                                    method: 'GET',
                                    data:{
                                            id: query,
                                            date: date,
                                            phone: phone,
                                            name: name,
                                            email: email
                                        },
                                    context: this,
                                    dataType: "html",
                                    timeout: 8000,
                                    global: false
                                }).done(function(data) {
                                    console.log('отправил');
                                }).fail(function(jqXHR) {
                                    console.log(jqXHR.status);
                                    $('.info').append($('<section/>', {
                                        'class': 'ERROR hidden',
                                        text: 'ERROR: ' + jqXHR.status
                                    }))
                                    $('.ERROR').hide();
                                    $('.ERROR').fadeIn(1200);
                                }).always(function() {
                                    $('.overlay').hide();
                                });
                                setTimeout(() => {$('.delete-booking').click();}, 1500);
                            });
                            timeTarget++;
                        });
                    }
                }timeTarget = 0;
            });
        ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        var timeless;
        var hotel;

        function sendDateTicket(ticketQuery, oneDate, twoDate){
                var query = ticketQuery;
                var url = '../api/add-date.php';
                var phone = $("#phone").val();
                var name = $("#name").val();
                var email = $("#email").val();
                var firstDate = oneDate.split('.').reverse().join('-')
                var lastDate = twoDate.split('.').reverse().join('-')
                var date1 = new Date(firstDate);
                var date2 = new Date(lastDate);
                var date = [];
                while (date1 <= date2) {
                    var mounth;
                    mounth = date1.getDate();
                    var dateStr = mounth+"-"+(date1.getMonth()+1).toString()+"-"+date1.getFullYear().toString();
                    date.push(dateStr);
                    date1.setDate( date1.getDate() + 1 )
                }
                console.log(date);
                var apiJSON;
                console.log(query);
                $.ajax({
                    url: url,
                    method: 'GET',
                    data:{
                            id: query -1 ,
                            date: date,
                            phone: phone,
                            name: name,
                            email: email
                        },
                    context: this,
                    dataType: "html",
                    timeout: 8000,
                    global: false
                }).done(function(data) {
                        console.log("Принудительная бронь");                                               
                }).fail(function(jqXHR) {
                    console.log(jqXHR.status);
                    $('.info').append($('<section/>', {
                        'class': 'ERROR hidden',
                        text: 'ERROR: ' + jqXHR.status
                    }))
                    $('.ERROR').hide();
                    $('.ERROR').fadeIn(1200);
                }).always(function() {
                    $('.overlay').hide();
                });
        }



        $('.number').click(function() {
            var query = $(this).attr('id');
            hotel = $(this).attr('id');
            var url = '../api/get.php';
            $.ajax({
                url: url,
                method: 'GET',
                data:{
                        id: query
                    },
                context: this,
                dataType: "html",
                timeout: 8000,
                global: false
            }).done(function(data) {
                console.log(JSON.parse(data));
                apiJSON = JSON.parse(data);
                if(apiJSON)
                {
                    for(var i = 0; i < apiJSON.dates.length; i++){
                        console.log(apiJSON.dates[i].date);
                        console.log(apiJSON.dates[i].name)
                        timeless = i;
                        for(var j = 0; j < apiJSON.dates[i].date.length; j++){
                                var x = $('.ui-datepicker-calendar:eq('+ (query-1) +') td[data-month='+ (apiJSON.dates[i].date[j].split('-')[1]-1) +'] .ui-state-default:contains('+ apiJSON.dates[i].date[j].split('-')[0] +')')[0];
                                if(x){
                                x.classList.add("red");
                                x.setAttribute('name',apiJSON.dates[i].name);
                                x.setAttribute('phone',apiJSON.dates[i].phone);
                                x.setAttribute('email',apiJSON.dates[i].email);}
                            }
                        }
                        $('.red').hover(function(){
                            $('.name').text($(this).attr('name'));
                            $('.phone').text($(this).attr('phone'));
                            $('.email').text($(this).attr('email'));
                        });
                        console.log("Приехало");                                         
                }else { 
                    $('.info').append($('<section/>', {
                        'class': 'ERROR hidden',
                        text: 'ERROR: ' + apiJSON.error
                    }));
                    $('.ERROR').hide();
                    $('.ERROR').fadeIn(1200);
                }
            }).fail(function(jqXHR) {
                console.log(jqXHR.status);
                $('.info').append($('<section/>', {
                    'class': 'ERROR hidden',
                    text: 'ERROR: ' + jqXHR.status
                }))
                $('.ERROR').hide();
                $('.ERROR').fadeIn(1200);
            }).always(function() {
                $('.overlay').hide();
            });
        });
        //////
        $('.book').click(function() {
            if($('#number-selector1').val() == 0){
                sendDateTicket($('#number-selector').val(),$("#datepicker11").val(),$("#datepicker22").val());
            }else {
                sendDateTicket($('#number-selector').val(),$("#datepicker11").val(),$("#datepicker22").val());
                sendDateTicket($('#number-selector1').val(),$("#datepicker111").val(),$("#datepicker222").val());
            }
            var mailJSON;
            $('#form2 input[name="name"]').val($("#name").val());
            $('#form2 input[name="email"]').val($("#email").val());
            if($('#number-selector1').val() == 0){
                                        
                var firstDate = $("#datepicker11").val().split('.').reverse().join('-');
                var lastDate = $("#datepicker22").val().split('.').reverse().join('-');
                
                $('#form2 input[name="number"]').val($('#form1 input[name="number"]').val());
                $('#form2 input[name="firstDate"]').val($("#datepicker11").val().split('.').join('-'));
                
                
            }else{
                var firstDate = $("#datepicker11").val().split('.').reverse().join('-');
                var lastDate = $("#datepicker22").val().split('.').reverse().join('-');
                
                $('#form2 input[name="number"]').val($('#form1 input[name="number1"]').val() + ' и ' + $('#form1 input[name="number2"]').val());
                $('#form1 input[name="firstDate"]').val($("#datepicker11").val().split('.').join('-'));
            }
    });
});
        ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    </script>
    </body>
    
</html>