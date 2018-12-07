<!DOCTYPE html>
<html>   
<head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BMB</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <link rel="shortcut icon" href="/images/fav.png" type="image/png">


</head>
<body>
<div class="body_сon">
<div class="nav">
                <div class="nav_grid">
                    <div class="logo">
                        <img src="images/icon/logo.png" alt=""> 
                    </div> 
                    <div class="head_ul">
                    <ul class="head_ul">
                        <li class="head_li">
                            <a href="home"><p>Главная</p></a>
                        </li>
                        <li class="head_li">
                            <a href="about"><p>О нас</p></a>
                        </li>
                        <li class="head_li">
                            <a href="vacancy"><p>Вакансии </p></a>
                        </li>
                        <li class="head_li">
                            <a href="cont"><p>Контакты </p></a>
                        </li>
                        <li class="head_li">
                            <a href="partner"><p>Партнеры</p></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>



<div class="con_block">
    <div class="con_title">
        <h2>Контакты:</h2>
    </div>
    <div class="con_info">
        <ul class="con_info_ul">
            <li class="con_info_li"><img src="images/icon/con_loc.png" alt=""><p>Адрес: <br/>
                    Киев,<br/>
                    ул. глубочицкая,<br/>
                    40У</p></li>
            <li class="con_info_li"><img src="images/icon/con_call.png" alt=""><p>Телефон:<br/>
                    +7 (499) 783 45 60<br/> <br/>	</p></li>
            <li class="con_info_li"><img src="images/icon/con_mass.png" alt=""><p>Электронная почта:<br/>
                    mbmukrainesup@gmail.com<br/><br/></p></li>
            <li class="con_info_li"><img src="images/icon/con_time.png" alt=""><p>График работы:<br/>
                    пн-пт 10:00-19:00<br/>
                    сб, вс выходной<br/></p></li>
        </ul>
    </div>
    <div class="con_map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2539.891210748674!2d30.49417781602768!3d50.46175047947693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4ce6f84fdc9cb%3A0xc327f2564824be4e!2z0YPQuy4g0JPQu9GD0LHQvtGH0LjRhtC60LDRjywgNDAsINCa0LjQtdCyLCAwMjAwMA!5e0!3m2!1sru!2sua!4v1543589479091" width="100%" height="700px" frameborder="0" style="border:0" allowfullscreen></iframe>
        <div class="oll_info">
            
        </div>
    </div>
    <div id="block_form">
        <div class="call_me" id="call_me">

            <!--action="zakaz.php"-->
                
                <form  method="post" class="call_me_block">
                    <div class="call_me_form">
                        <div class="call_title">
                            <p>Остались вопросы:</p>
                        </div>
                        <div class="form_top">
                            <div class="form_mail">
                                    <p>Email*</p>
                                    <input type="email" class="input" name="mail" id="mail"  placeholder="Введите ваш email" outline:none>
                        </div>
                        <div class="form_name">
                            <p>Имя*</p>
                            <input type="text" class="input" name="name" id="name" placeholder="Введите ваше имя" outline:none>
                        </div>
                       
                        </div>
                        <div class="form_bottom">

                            <div class="call_me_bottom_text">
                                <textarea  class="input massager" name="massager" id="tel" placeholder="" outline:none 
                                onkeypress='validate(event)'></textarea>
                            </div>
                    </div>
                    </div>
                    <div class="call_me_bottom"> 
                        <div class="call_me_bottom_info">


                        </div>
                        <div class="submit">
                           <input  type="submit" name="sub" id="sub" value="Оставить заявку" outline:none>
            
                        </div>
            
                    </div>
                    </form>
                </div>
            
        </div>
</div>
<div class="footer">
    <div class="footer_block">
            <div class="footer_logo"><img src="images/icon/logo.png" alt=""></div>

        <div class="footer_top">
                <ul class="footer_ul">
                        <li  class="footer_li footer_li_title"><p></p></li>
                        <li class="footer_li">
                            <p> <a href="home"> Главная</a></p>
                        </li>
                       <!-- <li class="footer_li">
                            <p><a href=""></a></p>
                        </li>-->

                        <li class="footer_li">
                            <p><a href="vacancy">Вакансии</a></p>
                            </li>
                    </ul>
        </div>
        <div class="footer_top">
                <ul class="footer_ul">
                        <li  class="footer_li footer_li_title"><p>Компания</p></li>


                        <li class="footer_li">
                            <p><a href="about">О нас</a></p>

                       <!-- <li class="footer_li">
                            <p><a href="con.html">Контакты</a></p>
                        </li>-->
                        <li class="footer_li">
                            <p><a href="partner">Партнеры</a></p>
                        </li>
                    </ul>
        </div>
        <div class="footer_top">
                <ul class="footer_ul">
                        <li  class="footer_li footer_li_title"><p>Поддержка</p></li>


                        <li class="footer_li">
                                <p><a href="tel: +380635112337"> +380635112337</a></p>

                        <li class="footer_li">
                                <p><a href="mailto:mbmukrainesup@gmail.com">mbmukrainesup@gmail.com</a></p>
                        </li>
                        <li class="footer_li">
                                <p><a href=""><br/></a></p>
                            </li>

                    </ul>
        </div>
        <div class="footer_bottom">
                <ul class="footer_bott_ul">
                        <li class="footer_bott_li footer_bott_li1">
                            <img src="images/icon/soc/face_foot.png" alt="" class="footer_face">
                            
                            <div class="footer_face_hover">
                                    <img src="images/icon/wh2.png"  alt="" style="width : 35px;"/>
                            </div>
                        </li>
                        <li class="footer_bott_li footer_bott_li2">
                            <img src="images/icon/soc/Teleg_foot.png" alt="" class="footer_teleg">
                            <div class="footer_tel_hover">
                                    <img src="images/icon/soc/tel_hover.png"  alt="" style="width : 35px;"/>
                            </div>
                        </li>
                        <li class="footer_bott_li footer_bott_li3">
                            <img src="images/icon/soc/inst_foot.png" alt="" class="footer_ins">
                        <div class="footer_ins_hover">
                                <img src="images/icon/wh1.png"  alt="" style="width : 35px;"/>
                            </div>
                        </li>

                    </ul>
                <div class="footer_contact_but">
                            <a href="cont" class="footer_contact_button mouseup"><p>Контакты</p></a>
                            <p></p>
                </div>
        </div>
    </div>
</div>
</div>


</body>
</html>
    
