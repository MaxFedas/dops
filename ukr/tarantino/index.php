<?php require __DIR__ .'/../../geo/locate.php'; ?>
<!DOCTYPE html>

<html class="no-js">
	<head>
		<meta charset="utf-8" />
		<title>Tarantino</title>
       
		<meta name="viewport" content="width=1280, initial-scale=-1"> 
        <link type="text/css" rel="stylesheet" href="/tarantino/css/normalize.css" />
        <link type="text/css" rel="stylesheet" href="/tarantino/css/slick.css" />
        <link type="text/css" rel="stylesheet" href="/tarantino/css/style.css" />

        
	</head>
	
	<body>
        <!-- <div class="preloader">
            <span>loading...</span>
        </div>
 -->

        <div class="b-nav">
            <div class="socket">
                <a href="http://dops.bz/portfolio.html" class="btn-back">назад в портфолио</a>
                <a href="http://dops.bz/debtmarket/" class="arrow-nav prev"><span>предыдущая работа</span></a>
                <a href="http://dops.bz/dacollection/" class="arrow-nav next"><span>следущая работа</span></a>
            </div>
        </div>

        <div class="main-wrap">

            <!-- TOP SECTION -->
    		<header class="s-top s-wrap-o">
                <div class="s-top-mask">
                    <div class="s-top-title socket">
                        <div class="logo fade"><img src="/tarantino/images/logo.png" alt=""></div>
                        <h1 class="title-tarantino move-fade" data-q="1">Tarantino</h1>
                        <div class="text move-fade" data-q="2">iOS приложение для оптимизации бизнес процессов</div>

                        <div class="desc-vert desc-vert-1 fade">-32% ожидания</div>
                        <div class="desc-vert desc-vert-2 fade">-16% издержек</div>
                    </div>
                    
                    <div class="desc-wrap desc-menu socket">
                        <div class="o-phone-menu"></div>    

                        <div class="desc-item desc-item-1">
                            <div class="line">
                                <span class="hor to-left"></span>
                                <i></i>
                            </div>
                            <div class="text d-item">Впервые при выборе блюда можно<br> смотреть реальные отзывы о нем</div>
                        </div>

                        <div class="desc-item desc-item-2">
                            <div class="line">
                                <span class="hor to-right"></span>
                                <i></i>
                            </div>
                            <div class="text d-item">Никогда еще заказ еды в ресторане не<br> был настолько легким и удобным</div>
                        </div>
                    </div>
                </div>
            </header>
            
            <div class="s-wrap stripes">

                <!-- BEGIN -->
                <div class="s-begin socket">
                    <div class="title-wrap animate-item">
                        <div class="num circ">
                            <i>1</i>
                            <div>
                                <span class="md fade"></span>
                            </div>
                        </div>
                        <div class="title-sub move-fade">В чем заключалась идея</div>
                        <h2 class="title move-fade">Начало пути</h2>
                        
                        <div class="circ circ-1 fade">
                            <span class="top-left sm"></span>
                        </div>
                    </div>
                    
                    <!-- Object Phone Slant -->
                    <div class="o-phone-slant o-phone-slant-1 animate-item" data-screen="0.5">
                        <img src="/tarantino/images/l-phone-1.png" alt="">
                    </div>
                    
                    <!-- Quote Block -->
                    <div class="b-quote-wrap">
                        <div class="b-quote b-shadow animate-item move-fade" data-q="1" data-screen="0.9">
                            <div class="avatar">
                                <img src="/tarantino/images/ava-1.jpg" alt="">
                                <i class="fly"></i>
                            </div>
                            <div class="text-nm">Сергей</div>
                            <div class="text-pos">Совладелец FM Group</div>
                            <div class="text-qt">«Нам нужно не просто создать удобное приложение,<br> но и мотивировать клиентов использовать его ежедневно».</div>
                        </div>

                        <div class="b-quote-cols animate-item">
                            <div class="b-quote b-shadow move-fade" data-q="2">
                                <div class="avatar">
                                    <img src="/tarantino/images/ava-3.png" alt="">
                                    <i class="fly-top"></i>
                                </div>
                                <div class="text-nm">Андрей Допилко</div>
                                <div class="text-pos">Менеджер построения бизнеса</div>
                                <div class="text-qt">«Сможем реализовать это<br> с помощью геймификации».</div>
                            </div>

                            <div class="b-quote b-shadow move-fade" data-q="3">
                                <div class="avatar">
                                    <img src="/tarantino/images/ava-2.png" alt="">
                                    <i class="fly"></i>
                                </div>
                                <div class="text-nm">даниил кореновский</div>
                                <div class="text-pos">Директор разработки продукта</div>
                                <div class="text-qt">«Отлично, но давайте<br> начнем с базовых задач».</div>
                            </div>
                        </div>
                    </div>

                    <div class="circ circ-2 fade animate-item" data-q="5"></div> 
                    <div class="circ circ-3 fade animate-item" data-q="6"><span class="top-right sm"></span></div> 
                    <div class="circ circ-4 sm fade animate-item" data-q="7"></div> 
                    <div class="circ circ-5 fade animate-item" data-q="7"><span class="btm-right sm"></span></div> 
                    
                    <!-- Only iPhone Block -->
                    <div class="b-only-iphone animate-item" data-screen="1">
                        <div class="b-column move-fade">
                            <h3 class="title-2">Сначало только iPhone</h3>
                            <p class="text">
                                Конечно же мы ориентируемся в будущем на <br>
                                все гаджеты, но начинаем разработку с самого <br>
                                популярного по результатам опросов (56%) <br>
                                клиентов сети ресторанов Tarantino Family.
                            </p>
                        </div>

                        <ul class="dev-list move-fade" data-q="1">
                            <li class="is-active">
                                <div class="sign">
                                    <span><img src="/tarantino/images/check.gif" alt=""></span>
                                </div>
                                <div class="ico"><img src="/tarantino/images/ico-p-1.png" alt=""></div>
                                <span>iphone: 56%</span>
                            </li>
                            <li>
                                <div class="ico"><img src="/tarantino/images/ico-p-2.png" alt=""></div>
                                <span>ipad: 23%</span>
                            </li>
                            <li>
                                <div class="ico"><img src="/tarantino/images/ico-p-3.png" alt=""></div>
                                <span>apple watch: 4%</span>
                            </li>
                        </ul>
                    </div>
                </div><!-- / BEGIN -->

                <!-- LOGIC -->
                <div class="s-logic socket">
                    <div class="num-vert animate-item fade">02</div>

                    <div class="title-wrap animate-item">
                        <div class="num circ">
                            <i>2</i>
                            <div>
                                <span class="md fade"></span>
                                <span class="sm fade"></span>
                            </div>
                        </div>
                        <div class="title-sub move-fade">Каждый продукт начинается с проработки логики</div>
                        <h2 class="title move-fade">Удобная.структура</h2>
                        
                        <div class="circ circ-6 fade" data-q="2">
                            <span class="btm-left sm"></span>
                        </div>
                        <div class="circ circ-7 sm fade" data-q="3"></div>
                    </div>
                    
                    <!-- Makets -->
                    <div class="b-maket-place animate-item clearfix" data-screen="0.6">
                        <div class="sk-items fade">
                            <div class="sub-title">12 эскизов</div>
                            <div class="title">Карты</div>
                        </div>

                        <div class="m-phone-wrap move-fade">
                            <div class="m-phone">
                                <img src="/tarantino/images/m-p-1.png" alt="">
                            </div>
                            <div class="m-phone">
                                <div class="sign big">
                                    <span>01</span>
                                </div>
                                <img src="/tarantino/images/m-p-2.png" alt="">
                            </div>
                        </div>

                        <div class="desc-item">
                            <div class="line">
                                <span class="hor to-right"></span>
                                <i></i>
                            </div>

                            <div class="b-column d-item">
                                <h3 class="title-2">Геолокация пользователя</h3>
                                <p class="text">
                                    Начинаем проектированеие приложения с главного: ориентации местоположения. С ее<br>
                                    помощью пользователь увидит все ближай-<br> 
                                    шие рестораны сети Tarantino Family.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="b-maket-food animate-item clearfix" data-screen="0.6">
                        <div class="circ circ-8 fade"><span class="sm"></span></div> 

                        <div class="desc-item">
                            <div class="line">
                                <span class="hor to-left"></span>
                                <i></i>
                            </div>

                            <div class="b-column d-item">
                                <h3 class="title-2">Фильтрование блюд</h3>
                                <p class="text">
                                    Следующим шагом будет переход к выбору<br>
                                    конкретного блюда: удобному, простому и<br>
                                    понятному как продвинутому клиенту, так и<br> 
                                    начинающему пользователю приложения.
                                </p>
                            </div>
                        </div>

                        <div class="m-phone-wrap move-fade"  data-q="1">
                            <div class="m-phone">
                                <div class="sign big">
                                    <span>02</span>
                                </div>
                                <img src="/tarantino/images/m-p-1.png" alt="">
                            </div>
                            <div class="m-phone">
                                <img src="/tarantino/images/m-p-3.png" alt="">
                            </div>
                            <div class="m-phone">
                                <img src="/tarantino/images/m-p-4.png" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="b-maket-online animate-item clearfix">
                        <div class="circ circ-9 fade" data-q="6">
                            <span class="sm fade" data-q="7"></span>
                            <span class="sm fade" data-q="8"></span>
                        </div> 

                        <div class="circ circ-10 fade" data-q="4">
                            <span class="sm"></span>
                        </div> 

                        <div class="sk-items fade">
                            <div class="sub-title">18 эскизов</div>
                            <div class="title">меню</div>
                        </div>

                        <div class="desc-item">
                            <div class="line">
                                <span class="hor to-right"></span>
                                <span class="ver to-top"></span>
                                <i></i>
                            </div>

                            <div class="b-column d-item">
                                <h3 class="title-2">Достижение цели</h3>
                                <p class="text">
                                    Поледним этапом мы поможем клиенту<br> 
                                    Tarantino Family в минимальное количество<br>
                                    шагов совершить заказ выбранного блюда<br> 
                                    и забронировать желаемый столик в<br> 
                                    режиме реального времени.
                                </p>
                            </div>
                        </div>

                        <div class="m-phone-wrap move-fade">
                            <div class="m-phone">
                                <div class="sign big">
                                    <span>03</span>
                                </div>
                                <img src="/tarantino/images/m-p-5.png" alt="">
                            </div>
                            <div class="m-phone">
                                <img src="/tarantino/images/m-p-1.png" alt="">
                            </div>
                            <div class="m-phone">
                                <img src="/tarantino/images/m-p-6.png" alt="">
                            </div>
                            <div class="m-phone">
                                <img src="/tarantino/images/m-p-7.png" alt="">
                            </div>
                        </div>
                    </div>
                    
                    <!-- Quote Block Bottom -->
                    <div class="b-quote-wrap">
                        <div class="circ circ-11 animate-item fade" data-q="3">
                            <span class="sm fade" data-q="4"></span>
                        </div>

                        <div class="o-phone-slant o-phone-slant-2 animate-item" data-screen="0.3">
                            <img src="/tarantino/images/l-phone-2.png" alt="">
                        </div>

                        <div class="b-quote b-quote-btm b-shadow animate-item move-fade">
                            <div class="avatar">
                                <img src="/tarantino/images/ava-1.jpg" alt="">
                                <i class="fly"></i>
                            </div>
                            <div class="text-nm">АНДРЕЙ ДОПИЛКО</div>
                            <div class="text-pos">Менеджер построения бизнеса</div>
                            <div class="text-qt">
                                «Не хватает еще только Личного кабинета и Бонусов, <br/> 
                                Ведь это ключевая идея вовлечения пользователя.<br/>
                                И интересно, а как будет выглядеть фильтр?».
                            </div>
                        </div>
                    </div>   

                </div><!-- / LOGIC -->

            </div>
            
            <div class="s-wrap-o s-slant-o">

                <!-- DESIGN -->
                <div class="s-slant-cont s-design">
                    <div class="title-wrap animate-item" data-screen="1" data-q="2">
                        <div class="num circ">
                            <i>3</i>
                            <div>
                                <span class="md fade"></span>
                                <span class="sm fade"></span>
                            </div>
                        </div>
                        <div class="title-sub move-fade">Переходим к визуализации прототипов</div>
                        <h2 class="title move-fade">Дизайн.интерфейса</h2>
                        
                        <div class="circ circ-12 fade">
                            <span class="sm"></span>
                        </div>
                    </div>

                    <!-- Idea Block -->
                    <div class="b-idea animate-item socket" data-screen="0.5">
                        <div class="desc-vert fade">app</div>

                        <div class="desc-item">
                            <div class="line">
                                <span class="hor to-right"></span>
                                <i></i>
                            </div>

                            <div class="b-column d-item">
                                <h3 class="title-2">Пиксельная точность</h3>
                                <p class="text">
                                    Совместив одинаковую толщину каждого из елементов приложения с уникальностью визуализируемых обьектов:
                                    мы получили максимально чистый и легкий дизайн.
                                </p>
                            </div>
                        </div>

                        <div class="design-slant fade">DESIGN</div>
                        <div class="o-phone-slant o-phone-slant-3 move-fade">
                            <img src="/tarantino/images/l-phone-3.png" alt="">
                        </div>

                        <div class="circ circ-13 fade">
                            <div>
                                <span class="md fade"></span>
                                <span class="md fade"></span>
                            </div>
                            <div>
                                <span class="sm fade"></span>
                                <span class="sm fade"></span>
                                <span class="sm fade"></span>
                                <span class="sm fade"></span>
                                <span class="sm fade"></span>
                            </div>
                        </div>

                        <div class="circ circ-14 fade">
                            <span class="lg fade"></span>
                            <span class="sm fade"></span>
                        </div>
                    </div>

                    <!-- Gamification Block -->
                    <div class="b-gamification socket">
                        <div class="desc-item animate-item move-fade" data-q="1">
                            <div class="b-column">
                                <h3 class="title-2">Геймификация профайла</h3>
                                <p class="text">
                                    Мы приняли решение рассширить существующую програму лояльности Tarantino Family с помощью  присвоения  индивидуальной
                                    персонализации каждого пользователя приложения в зависимости от количества набранных общих баллов.
                                </p>
                            </div>

                            <div class="circ circ-15 fade" data-q="3">
                                <span class="sm fade" data-q="4"></span>
                                <span class="sm fade" data-q="5"></span>
                            </div>
                        </div>
                        
                        <!-- Slant Makets -->
                        <div class="b-slant-makets animate-item">
                            <div class="move-fade">
                                <div class="b-line-slant">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>

                            <div class="o-maket-1 move-fade"><img src="/tarantino/images/mk-1.png" alt=""></div>
                            <div class="o-maket-2 move-fade"><img src="/tarantino/images/mk-2.png" alt=""></div>
                            <div class="o-maket-3 move-fade"><img src="/tarantino/images/mk-3.png" alt=""></div>

                            <div class="t-gamification fade">
                                <span>GAMIFICATION</span>
                                <i>AND USER INTERACTION</i>
                            </div>
                        </div>
                        
                        <!-- BSR -->
                        <div class="b-bsr animate-item" data-screen="0.65">
                            <div class="num-vert fade">03</div>
                            <div class="circ circ-16 fade" data-q="3">
                                <span class="sm fade" data-q="5"></span>
                                <span class="sm fade" data-q="6"></span>
                            </div>

                            <div class="b-column bonus move-fade">
                                <div class="circ-icon"><i><img src="/tarantino/images/icon-1.gif" alt=""></i></div>
                                <div class="circ">
                                    <span class="lg"></span>
                                </div>
                                
                                <h3 class="title-2">Бонусы</h3>
                                <p class="text">
                                   В зависимости от статуса пользователя, форми-<br> руется индивидуальная скидка в каждом ресто-<br> ране Tarantino Family от 1 до 20% от суммы всей покупки в ресторане.
                                </p>
                            </div>

                            <div class="b-column status move-fade" data-q="1">
                                <div class="circ-icon"><i><img src="/tarantino/images/icon-2.gif" alt=""></i></div>
                                <div class="circ">
                                    <span class="lg"></span>
                                </div>

                                <h3 class="title-2">Статус</h3>
                                <p class="text">
                                   Рейтинг влияет на статус пользователя начиная с новичка и заканчивая проффесионалом. Переход<br> на каждый следующий статус позволяет получить 
                                   дополнительные бонусные баллы и скидку.
                                </p>
                            </div>

                            <div class="b-column rate move-fade" data-q="2">
                                <div class="circ-icon"><i><img src="/tarantino/images/icon-3.gif" alt=""></i></div>
                                <div class="circ">
                                    <span class="sm"></span>
                                    <span class="sm"></span>
                                </div>

                                <h3 class="title-2">Рейтинг</h3>
                                <p class="text">
                                   Каждому пользователю присваивается опре-<br> деленный рейтинг в зависимости от того, как часто он посещает рестораны Tarantino Family и насколько большая у него история заказов.
                                </p>
                            </div>
                        </div>

                        <!-- MAGAZINE -->
                        <div class="b-mag animate-item" data-screen="0.4">
                            <div class="b-column move-fade" data-q="1">
                                <div class="circ-icon"><i><img src="/tarantino/images/icon-4.gif" alt=""></i></div>
                                <div class="circ fade">
                                    <span class="lg"></span>
                                </div>
                                
                                <h3 class="title-2">Магазин</h3>
                                <p class="text">
                                   Накопленными балами можно как рассчитаться при<br>
                                   оформлении заказа в сети ресторанов Tarantino, так<br>
                                   и обменять их на подарки в разделе «Магазин».
                                </p>
                            </div>

                            <div class="circ circ-17 fade">
                                <span class="md fade"></span>
                                <span class="lg fade"></span>
                                <div>
                                    <span class="sm fade"></span>
                                    <span class="sm fade"></span>
                                    <span class="sm fade"></span>
                                    <span class="sm fade"></span>
                                </div>
                            </div>

                            <div class="circ circ-18 fade" data-q="6">
                                <span class="sm fade" data-q="7"></span>
                                <span class="sm fade" data-q="8"></span>
                            </div>

                            <div class="o-maket-4 move-fade"><img src="/tarantino/images/mk-4.png" alt=""></div>
                            <div class="o-maket-5 move-fade" data-q="4"><img src="/tarantino/images/mk-5.png" alt=""></div>
                            <div class="t-points fade"  data-q="2">50 2324-1300</div>
                        </div>

                    </div>
                </div><!-- / DESIGN -->
                    
            </div>

            <div class="s-wrap-o">

                <!-- WORK -->
                <div class="s-work">
                    <div class="title-wrap animate-item">
                        <div class="num num-o circ">
                            <i>4</i>
                            <div>
                                <span class="md fade"></span>
                                <span class="sm fade"></span>
                            </div>
                        </div>
                        <div class="title-sub move-fade">Самое времья показать приложение в действии</div>
                        <h2 class="title move-fade">Как это работает?</h2>
                        
                        <div class="circ circ-19 fade">
                            <span class="sm"></span>
                        </div>
                    </div>
                    
                    <div class="b-demo-wrap socket">
                        <div class="b-demo animate-item">

                            <div class="b-demo-phone">
                                <div class="o-phone move-fade">
                                    <img src="/tarantino/images/demo-1.gif" alt="">
                                </div>

                                <div class="circ-hypno">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>

                            <div class="desc-item">
                                <div class="line">
                                    <span class="hor to-right"></span>
                                    <i></i>
                                </div>

                                <div class="num-d num-d-1">
                                    <i>1</i>
                                    <div>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </div>

                                <div class="b-column d-item">
                                    <h3 class="title-2">Выбираем место</h3>
                                    <p class="text">
                                       Для удобства пользователя мы сделали возможность<br>
                                       выбора ближайшего ресторана как из списка, так и<br> 
                                       по карте в зависимости от того какой из них вы<br>
                                       желаете посетить в данный момент.
                                    </p>
                                </div>

                                <div class="circ circ-20 md fade" data-q="4">
                                    <span class="md fade" data-q="6"></span>
                                    <div>
                                        <span class="sm fade" data-q="6"></span>
                                        <span class="sm fade" data-q="5"></span>
                                        <span class="sm fade" data-q="5"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="b-demo animate-item" data-screen="0.75">

                            <div class="b-demo-phone">
                                <div class="o-phone move-fade">
                                    <img src="/tarantino/images/demo-2.gif" alt="">
                                </div>

                                <div class="circ-hypno">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>

                            <div class="desc-item">
                                <div class="line">
                                    <span class="hor to-left"></span>
                                    <i></i>
                                </div>

                                <div class="num-d num-d-2">
                                    <i>2</i>
                                    <div>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </div>

                                <div class="b-column d-item">
                                    <h3 class="title-2">Резервируем столик</h3>
                                    <p class="text">
                                       Вместо того чтобы тратить времья на ожидание<br>
                                       в очереди на освобождение столика, вы<br>
                                       можете зарезирвировать его всего в<br>
                                       2 клика с помощью Tarantino App.
                                    </p>
                                </div>

                                <div class="circ circ-21 lg fade">
                                    <span class="sm"></span>
                                </div>
                            </div>
                        </div>

                        <div class="b-demo animate-item">

                            <div class="b-demo-phone">
                                <div class="o-phone move-fade">
                                    <img src="/tarantino/images/demo-3.gif" alt="">
                                </div>

                                <div class="circ-hypno">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>

                            <div class="desc-item">
                                <div class="line">
                                    <span class="hor to-right"></span>
                                    <i></i>
                                </div>

                                <div class="num-d num-d-3">
                                    <i>3</i>
                                    <div>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </div>

                                <div class="b-column d-item">
                                    <h3 class="title-2">Выбираем еду</h3>
                                    <p class="text">
                                       Заказ блюд в сети ресторанов Tarantino Family<br>
                                       вышел на абсолютно новый уровень с выбором<br>
                                       именно тех категорий меню которые вас<br>
                                       интересуют в данный момент.
                                    </p>
                                </div>

                                <div class="circ circ-22 md fade">
                                    <span class="sm fade"></span>
                                    <span class="sm fade"></span>
                                </div>
                            </div>


                            <div class="circ circ-23 md fade">
                                <span class="md fade"></span>
                                <div>
                                    <span class="sm fade"></span>
                                    <span class="sm fade"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- / WORK -->

                <!-- SCOPE -->
                <div class="s-scope">
                    <div class="title-wrap animate-item">
                        <div class="num num-o circ">
                            <i>5</i>
                            <div>
                                <span class="md fade"></span>
                                <span class="sm fade"></span>
                            </div>
                        </div>
                        <div class="title-sub move-fade">Любой продукт начинается с проработки логики</div>
                        <h2 class="title move-fade">масштабы проекта</h2>
                        
                        <div class="circ circ-24 md fade">
                            <span class="md fade"></span>
                            <div>
                                <span class="sm fade"></span>
                                <span class="sm fade"></span>
                                <span class="sm fade"></span>
                            </div>
                        </div>
                    </div>

                    <div class="b-scope-mk socket">
                        <div class="animate-item count-mk-wrap" data-screen="1" data-q="1">
                            <div class="count-mk count-mk-1">
                                <span>78</span>
                                <i>проработанных экранов</i>
                            </div>
                            <div class="count-mk count-mk-2">
                                <span>678</span>
                                <i>часов командной работы</i>
                            </div>
                        </div>
                        
                        <img class="screens animate-item move-fade" data-screen="0.30" data-q="3" src="/tarantino/images/screens.png" alt="">

                    </div>
                </div><!-- / SCOPE -->

            </div>

            <div class="s-wrap s-slant stripes">

                <!-- UX DETAILS -->
                <div class="s-slant-cont">

                    <div class="s-ux socket">
                        <div class="b-quote b-shadow animate-item move-fade">
                            <div class="avatar">
                                <img src="/tarantino/images/ava-1.jpg" alt="">
                                <i class="fly"></i>
                            </div>
                            <div class="text-nm">сергей</div>
                            <div class="text-pos">Совладелец FM Group</div>
                            <div class="text-qt">
                                «Это просто ваааау! Изысканная работа, ребята! </br>
                                Продолжайте прорабатывать детали, а мы начинаем</br>
                                собирать статистику работы клиентов с приложением».
                            </div>
                        </div>

                        <div class="title-wrap animate-item">
                            <div class="num circ">
                                <i>6</i>
                                <div>
                                    <span class="md fade"></span>
                                    <span class="sm fade"></span>
                                </div>
                            </div>
                            <div class="title-sub move-fade">Неповторимость работы в её деталях</div>
                            <h2 class="title move-fade">Стилистика</h2>
                            
                            <div class="circ circ-25 fade">
                                <span class="sm"></span>
                                <span class="sm"></span>
                            </div>
                        </div>
                        
                        <!-- Color Block -->
                        <ul class="b-color animate-item" data-screen="1">
                            <li class="move-fade" data-q="1">
                                <div class="color color-1">
                                    <img src="/tarantino/images/col-1.png" alt="">
                                    <i>#f55117</i>
                                    <div class="circ md fly">
                                        <span class="sm fly-top"></span>
                                        <span class="sm fly-btm"></span>
                                        <span class="sm fly"></span>
                                    </div>
                                </div>
                                <div class="title-2">Оранжевый</div>
                                <div class="text">Основной цвет</div>
                            </li>

                            <li class="move-fade" data-q="2">
                                <div class="color color-2">
                                    <img src="/tarantino/images/col-2.png" alt="">
                                    <i>#212121</i>
                                    <div class="circ md fly">
                                        <span class="sm fly-btm"></span>
                                        <span class="sm fly"></span>
                                    </div>
                                </div>
                                <div class="title-2">Черный</div>
                                <div class="text">Цвет текста</div>
                            </li>

                            <li class="move-fade" data-q="3">
                                <div class="color color-3">
                                    <img src="/tarantino/images/col-3.png" alt="">
                                    <i>#f2f2f2</i>
                                    <div class="circ md fly">
                                        <span class="md fly-btm"></span>
                                        <div>
                                            <span class="sm fly-top"></span>
                                            <span class="sm fly-btm"></span>
                                            <span class="sm fly"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="title-2">Серый</div>
                                <div class="text">Цвет фона</div>
                            </li>
                        </ul>
                        
                        <div class="animate-item" data-screen="1" data-q="1">
                            <div class="b-font move-fade">
                                <ul class="b-font-list">
                                    <li class="b-font-thin">
                                        <div>Aa</div>
                                        <span>Thin</span>
                                    </li>
                                    <li class="b-font-light">
                                        <div>Aa</div>
                                        <span>Light</span>
                                    </li>
                                    <li class="b-font-reg">
                                        <div>Aa</div>
                                        <span>Regular</span>
                                    </li>
                                    <li class="act b-font-bold">
                                        <div>Aa</div>
                                        <span>Bold</span>

                                        <div class="circ">
                                            <span></span>
                                        </div>

                                        <div class="line">
                                            <span class="ver to-btm"></span>
                                            <i></i>
                                        </div>
                                    </li>
                                    <li class="b-font-heavy">
                                        <div>Aa</div>
                                        <span>Heavy</span>
                                    </li>
                                </ul>
                            </div>    

                            <div class="font-name fade">
                                <div class="cyr vert-2">Cyrillic</div>
                                <img src="/tarantino/images/fn.png" alt="">
                            </div>
                        </div>
                        
                        <div class="font-desc animate-item">
                            <div>
                                <div class="b-column move-fade" data-q="1">
                                    <div class="title-2">Типографика</div>
                                    <div class="text">
                                        Museo Sans — минималистичный гротеск от Exljbris.</br>
                                        Шрифт был разработан в такт тенденции "сухих" и сде-</br>
                                        ржаных гротесков вроде Gotham Pro и Proxima Nova.
                                    </div>
                                </div>

                                <div class="b-column move-fade" data-q="2">
                                    <div class="title-2">Колористика</div>
                                    <div class="text">
                                        Комбинация оранжевого цвета выгледит ярко и стильно.</br>
                                        Его нечасто выбирают для деловой стилистики, но со-</br>
                                        четание с чёрным выглядит элегантно и современно.
                                    </div>
                                </div>
                            </div>

                            <div class="vert-2 fade">
                                <div class="vert-text">design</div>
                                <div class="vert-text-m">guidlines</div>
                            </div>

                            <div class="circ md fade">
                                <span class="sm fade"></span>
                                <span class="sm fade"></span>
                            </div>
                        </div>

                    </div>
                </div><!-- / UX DETAILS -->

            </div>
            
            <!-- RESULT -->
            <div class="s-wrap s-result stripes">
                <div class="s-cont socket">
                    <div class="title-wrap animate-item">
                        <div class="num circ">
                            <i>7</i>
                            <div>
                                <span class="md fade"></span>
                                <span class="sm fade"></span>
                            </div>
                        </div>
                        <div class="title-sub move-fade">Пора подвести итоги за первые пол-года</div>
                        <h2 class="title move-fade">Статистика</h2>
                        
                        <div class="circ circ-26 fade">
                            <span class="sm fade"></span>
                            <span class="sm fade"></span>
                        </div>
                    </div>
                    
                    <!-- Accomp Block -->
                    <div class="b-accomp b-shadow animate-item move-fade" data-screen="0.65">
                        <hgroup>
                            <div class="title-2">Основные показатели</div>
                            <div class="title-3">Tarantino App удалось превысить ожидания по 4 ключевым коефициентам:</div>
                        </hgroup>

                        <div class="b-accomp-circ">
                            <figure class="circ-pr" data-percent="27">
                                <svg class="circ-svg">
                                    <circle cx="32" cy="159" r="156.5" transform="rotate(-90, 95, 95)"/>
                                    <circle class="outer" cx="32" cy="159" r="156.5" transform="rotate(-90, 95, 95)"/>
                                </svg>

                                <div class="circ-pr-text">
                                    <span>на <i>17</i> <b>%</b></span>
                                    <p>больше времени появилось у<br> официантов для новых задач</p>
                                </div>

                                <div class="sign big">
                                    <span><span class="count">17</span>%</span>
                                </div>

                                <div class="points">
                                    <i class="a"></i>
                                    <i class="a"></i>
                                    <i class="a"></i>
                                    <i class="a"></i>
                                    <i class="a"></i>
                                    <i class="a"></i>
                                    <i class="a"></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>                    
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                </div>
                            </figure>

                            <figure class="circ-pr" data-percent="48">
                                <svg class="circ-svg">
                                    <circle cx="32" cy="159" r="156.5" transform="rotate(-90, 95, 95)"/>
                                    <circle class="outer" cx="32" cy="159" r="156.5" transform="rotate(-90, 95, 95)"/>
                                </svg>

                                <div class="circ-pr-text">
                                    <span>на <i>32</i> <b>%</b></span>
                                    <p>сократилось время ожидания<br> клиентом свободного столика</p>
                                </div>

                                <div class="sign big">
                                    <span><span class="count">31</span>%</span>
                                </div>

                                <div class="points">
                                    <i class="a"></i>
                                    <i class="a"></i>
                                    <i class="a"></i>
                                    <i class="a"></i>
                                    <i class="a"></i>
                                    <i class="a"></i>
                                    <i class="a"></i>
                                    <i class="a"></i>
                                    <i class="a"></i>
                                    <i class="a"></i>
                                    <i class="a"></i>
                                    <i class="a"></i>
                                    <i></i>                    
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                </div>
                            </figure>
                        </div>
                        
                        <div class="desc-item">
                            <div class="line">
                                <span class="ver to-btm"></span>
                                <i></i>
                            </div>
                            <div class="b-column d-item">
                                <div class="title-2">Оптимизация</div>
                                <div class="text">
                                    С помощью организации независимого заказа клиентом, нам удалось уменшить на
                                    17% загруженность оффициантов и почти на треть сократить времья
                                    ожидания свободного столика.
                                </div>
                            </div>
                        </div>

                        <div class="vert-2 fade" data-q="6">
                            <div class="vert-text">design</div>
                            <div class="vert-text-m">statistics</div>
                        </div>
                    </div>

                    <div class="circ circ-27 md fade animate-item">
                        <div>
                            <span class="md fade"></span>
                            <span class="md fade"></span>
                        </div>
                        <div>
                            <span class="sm fade"></span>
                            <span class="sm fade"></span>
                        </div>
                    </div>
                    
                    <div class="clearfix">
                        <div class="column">
                            <div class="b-orders b-shadow animate-item move-fade" data-q="2">
                                <hgroup>
                                    <div class="title-2">Новые заказы</div>
                                    <div class="title-3">Увеличились до 27% в месяц</div>
                                </hgroup>

                                <img src="/tarantino/images/hs.jpg" alt="">

                                <div class="histogram-d">
                                    <div class="histogram-d-col">
                                        <span>35</span>
                                        <b>Июнь</b>
                                        <div>
                                            <i class="point"></i>
                                            <i class="point"></i>
                                        </div>
                                    </div>
                                    <div class="histogram-d-col">
                                        <span>334</span>
                                        <b>Июль</b>
                                        <div>
                                            <i class="point"></i>
                                            <i class="point"></i>
                                        </div>
                                    </div>
                                    <div class="histogram-d-col">
                                        <span>256</span>
                                        <b>Авг.</b>
                                        <div>
                                            <i class="point"></i>
                                            <i class="point"></i>
                                            <i class="point"></i>
                                        </div>
                                    </div>
                                    <div class="histogram-d-col">
                                        <span>311</span>
                                        <b>Сент.</b>
                                        <div>
                                            <i class="point"></i>
                                            <i class="point"></i>
                                        </div>
                                    </div>
                                    <div class="histogram-d-col">
                                        <span>279</span>
                                        <b>Окт.</b>
                                        <div>
                                            <i class="point"></i>
                                            <i class="point"></i>
                                            <i class="point"></i>
                                        </div>
                                    </div>
                                    <div class="histogram-d-col">
                                        <span>Нояб.</span>
                                        <b>Сб</b>
                                        <div>
                                            <i class="point"></i>
                                            <i class="point"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="b-inc-wrap">
                                <div class="b-inc b-shadow animate-item move-fade" data-q="3" data-screen="1">
                                    <div class="ico">
                                        <img src="/tarantino/images/ico-i-1.png" alt="">
                                    </div>
                                    <hgroup>
                                        <div class="title-2">в 1.27 раза</div>
                                        <p>в среднем увеличилось <br> количество новых заказов</p>
                                    </hgroup>
                                </div>

                                <div class="b-inc b-shadow animate-item move-fade" data-q="4" data-screen="1">
                                    <div class="ico">
                                        <img src="/tarantino/images/ico-i-2.png" alt="">
                                    </div>
                                    <hgroup>
                                        <div class="title-2">в 1.94 раза</div>
                                        <p>в среднем увеличилось <br> количество повторных заказов</p>
                                    </hgroup>
                                </div>
                            </div>

                            <div class="b-geo b-shadow animate-item move-fade" data-q="3" data-screen="1">
                                <div class="ico">
                                    <img src="/tarantino/images/ico-i-3.png" alt="">
                                </div>
                                <hgroup>
                                    <div class="title-2">Геотаргетинг</div>
                                    <p>
                                        Благодаря отображению Push-уведомлений с исключительно<br>
                                        актуальными скидками именно тем пользователям, которые<br>
                                        находяться в близи от конкретного ресторана, Tarantino App<br> 
                                        до сих пор бьёт свои рекорды по увеличению новых и<br> 
                                        повторных заказов в сети ресторанов Tarantino Family.
                                    </p>
                                </hgroup>
                            </div>

                            <div class="circ circ-30 md animate-item fade" data-q="5">
                                <span class="sm"></span>
                                <span class="xsm"></span>
                            </div>
                        </div>

                        <div class="column">
                            <div class="circ circ-28 animate-item md fade" data-q="6">
                                <span class="sm"></span>
                            </div>

                            <div class="b-repeat b-shadow animate-item move-fade" data-q="2">
                                <hgroup>
                                    <div class="title-2">Повторные заказы</div>
                                    <div class="title-3">Увеличелись почти в 2 раза за месяц</div>
                                </hgroup>

                                <img src="/tarantino/images/hs2.png" alt="">

                                <div class="histogram-d">
                                    <div class="histogram-d-col">
                                        <span>65</span>
                                        <b>Пн</b>
                                        <div>
                                            <i class="point"></i>
                                            <i class="point"></i>
                                            <i class="point"></i>
                                        </div>
                                    </div>
                                    <div class="histogram-d-col">
                                        <span>76</span>
                                        <b>Вт</b>
                                        <div>
                                            <i class="point"></i>
                                            <i class="point"></i>
                                        </div>
                                    </div>
                                    <div class="histogram-d-col">
                                        <span>51</span>
                                        <b>Ср</b>
                                        <div>
                                            <i class="point"></i>
                                            <i class="point"></i>
                                            <i class="point"></i>
                                        </div>
                                    </div>
                                    <div class="histogram-d-col">
                                        <span>46</span>
                                        <b>Чт</b>
                                        <div>
                                            <i class="point"></i>
                                            <i class="point"></i>
                                            <i class="point"></i>
                                            <i class="point"></i>
                                        </div>
                                    </div>
                                    <div class="histogram-d-col">
                                        <span>69</span>
                                        <b>Пт</b>
                                        <div>
                                            <i class="point"></i>
                                            <i class="point"></i>
                                            <i class="point"></i>
                                        </div>
                                    </div>
                                    <div class="histogram-d-col">
                                        <span>58</span>
                                        <b>Сб</b>
                                        <div>
                                            <i class="point"></i>
                                            <i class="point"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="circ circ-29 md animate-item fade" data-q="3">
                                <span class="md fade" data-q="4"></span>
                                <div>
                                    <span class="sm fade" data-q="6"></span>
                                    <span class="sm fade" data-q="5"></span>
                                    <span class="sm fade" data-q="4"></span>
                                    <span class="xsm fade" data-q="5"></span>
                                </div>
                            </div>
                        </div>    

                    </div>
                </div>
            </div><!-- / RESULT -->

            <div class="s-wrap-o s-use">
                <div class="s-slant-cont">
                    <div class="socket">    
                        <div class="o-phone-slant o-phone-slant-4 animate-item" data-screen="0.3">
                            <img src="/tarantino/images/l-phone-4.png" alt="">
                        </div>
                        
                        <div class="title-wrap animate-item">
                            <div class="num num-o circ">
                                <i>8</i>
                                <div>
                                    <span class="md fade"></span>
                                    <span class="sm fade"></span>
                                </div>
                            </div>
                            <div class="title-sub move-fade">Без ценности, наша работа не имела бы смысла</div>
                            <h2 class="title move-fade">польза продукта</h2>
                            
                            <div class="circ circ-31 md fade">
                                <span class="xsm fade"></span>
                            </div>
                        </div>

                        <p class="text animate-item move-fade" data-screen="1" data-q="4">
                            Благодаря приложению мы перевели обычную програму лояльности на новый уровень и перенесли<br>
                            ёё с пластиковой карты в интерактивную игру, которая не потеряеться, всегда будет под рукой и будет<br>
                            приносить еще в десятки раз больше чем сейчас пользы как клиентам, так и владельцам заведений.
                        </p>

                        <div class="circ circ-32 md animate-item fade" data-q="5">
                            <span class="xsm fade" data-q="6"></span>
                        </div>
                    </div>

                    <div class="screen-row animate-item move-fade">
                        <div class="phone-slide"><img src="/tarantino/images/slider-phone.jpg" alt=""></div>
                        <div class="screen-slider">
                            <div>
                                <img src="/tarantino/images/s-1.jpg" alt="">
                            </div>
                            <div>
                                <img src="/tarantino/images/s-2.jpg" alt="">
                            </div>
                            <div>
                                <img src="/tarantino/images/s-3.jpg" alt="">
                            </div>
                            <div>
                                <img src="/tarantino/images/s-4.jpg" alt="">
                            </div>
                            <div>
                                <img src="/tarantino/images/s-5.jpg" alt="">
                            </div>
                            <div>
                                <img src="/tarantino/images/s-6.jpg" alt="">
                            </div>
                            <div>
                                <img src="/tarantino/images/s-7.jpg" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="s-thank animate-item socket" data-screen="0.6">
                        <div class="logo move-fade"><img src="/tarantino/images/logo.png" alt=""></div>

                        <div class="title move-fade" data-q="2">спасибо за просмотр!</div>
                        <div class="text move-fade" data-q="3">Нам очень приятно что вы дочитали до конца.</div>

                        <div class="circ circ-33 md fade" data-q="4">
                            <span class="lg fade" data-q="5"></span>
                            <span class="md fade" data-q="4"></span>
                            <span class="sm fade" data-q="6"></span>
                            <div>
                                <span class="xsm fade" data-q="5"></span>
                                <span class="xsm fade" data-q="6"></span>
                                <span class="xsm fade" data-q="7"></span>
                            </div>
                        </div>

                        <div class="circ circ-34 md fade" data-q="5">
                            <span class="lg fade" data-q="5"></span>
                            <span class="md fade" data-q="6"></span>
                            <span class="sm fade" data-q="8"></span>
                            <div>
                                <span class="xsm fade" data-q="6"></span>
                                <span class="xsm fade" data-q="7"></span>
                                <span class="xsm fade" data-q="8"></span>
                            </div>
                        </div>

                        <button class="btn move-fade" data-q="4">поделиться в соцсетях</button>
                    </div>
                </div>
            </div>

                
            
        </div><!-- / Main Wrap -->
				
		<!-- Yandex.Metrika counter -->
		<script type="text/javascript">
		   (function (d, w, c) {
			   (w[c] = w[c] || []).push(function() {
				   try {
					   w.yaCounter41566509 = new Ya.Metrika({
						   id:41566509,
						   clickmap:true,
						   trackLinks:true,
						   accurateTrackBounce:true,
						   webvisor:true,
						   trackHash:true
					   });
				   } catch(e) { }
			   });

			   var n = d.getElementsByTagName("script")[0],
				   s = d.createElement("script"),
				   f = function () { n.parentNode.insertBefore(s, n); };
			   s.type = "text/javascript";
			   s.async = true;
			   s.src = "https://mc.yandex.ru/metrika/watch.js";

			   if (w.opera == "[object Opera]") {
				   d.addEventListener("DOMContentLoaded", f, false);
			   } else { f(); }
		   })(document, window, "yandex_metrika_callbacks");
		</script>
		<noscript><div><img src="https://mc.yandex.ru/watch/41566509" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
		<!-- /Yandex.Metrika counter -->
		
        <!-- jQuery -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

		<!-- Scripts -->
        <script type="text/javascript" src="/tarantino/js/slick.min.js"></script> 
    	<script type="text/javascript" src="/tarantino/js/scripts.js"></script> 
			

	</body>
</html>