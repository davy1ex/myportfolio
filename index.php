<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>davy1ex</title>
    
    <script src="/js/live.js"></script>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/index.css">

    
</head>
<body>
    <?php include 'admin/header.php'; ?>

    <a name="main">
        <div class="container mynameis">
            <div class="mynameis_wrapper">
                <div class="avatar">
                    <img src="/img/avatar.jpg" alt="">
                </div>
                <!-- <div class="title">davy1ex</div> -->
                <div class="myname">Давыдов Алексей</div>
                <div class="profession">Веб разработчик</div>
            </div>
        </div>
    </a>

    <header id="header">
        <div class="header_wrapper">        
            <!-- <div class="header_item active"><a href="#main">Главная</a></div>
            <a href="#about_me"><div class="header_item">Обо мне</div></a> -->            
            <!-- <a href="#portfolio"><div class="header_item">Портфолио</div></a>
            <a href="#contacts"><div class="header_item">Контакты</div></a> -->


            <div class="header_item icon active"><a href="#main"><img src="/img/icons/home.svg" alt=""></a></div>
            <div class="header_item icon"><a href="#about_me"><img src="/img/icons/user.svg" alt=""></a></div>
            <div class="header_item icon"><a href="#portfolio"><img src="/img/icons/portfolio.svg" alt=""></a></div>
            <div class="header_item icon"><a href="#contacts"><img src="/img/icons/contact.svg" alt=""></a></div>
        </div>
    </header>

    <a name="about_me">
        <div class="container content desc">
            <div class="title">
                <span class="line">Обо мне</span>
                <!-- <div class="line"></div> -->
            </div>

            <div class="text">
                Вы находитесь на моей странице портфолио. Тут можно найти информацию о моих услугах, опыте и проектах.
            </div>

            <div class="text">
                <br><strong>Специализация</strong>: Программирование сайтов-визиток / лендингов / сайтов под ключ / Web-сервисов. Адаптивная вёрстка. <br> <br>

                <strong>Опыт работы</strong>: более 2 лет. <br> <br>

                <strong>Используемые технологии</strong>: HTML, CSS, JavaScript (Vue.js, Node.js), PHP (Symfony), MySQL, AJAX, Python (Django, Flask).
            </div>
        </div>
    </a>

    <a name="portfolio">
        <div class="container content portfolio desc">
            
                <div class="title">
                    <span class="line">Портфолио</span>
                </div>

                <div class="text">
                    Внизу предоставленны проекты, над которыми я имел честь работать. Какие-то были сделаны ради собтсвенного интереса, а какие-то на заказ
                </div>
                <?php include 'admin/functions/projects.php'; ?>
                <!-- <div class="projects">
                    

                    <div class="project">
                        <div class="image_preview"><img src="img/comingsoon.jpg" alt="comingsoon"></div>
                    </div>

                    <div class="project">
                        <div class="image_preview"><img src="img/comingsoon_invert.jpg" alt="comingsoon"></div>
                    </div>

                    <div class="project">
                        <div class="image_preview"><img src="img/comingsoon.jpg" alt="comingsoon"></div>
                    </div>

                    <div class="project">
                        <div class="image_preview"><img src="img/comingsoon_invert.jpg" alt="comingsoon"></div>
                    </div>

                    <div class="project">
                        <div class="image_preview"><img src="img/comingsoon_invert.jpg" alt="comingsoon"></div> 
                    </div>

                    <div class="project">
                        <div class="image_preview"><img src="img/comingsoon.jpg" alt="comingsoon"></div>
                    </div>

                    <div class="project">
                        <div class="image_preview"><img src="img/comingsoon_invert.jpg" alt="comingsoon"></div>
                    </div>

                    <div class="project">
                        <div class="image_preview"><img src="img/comingsoon.jpg" alt="comingsoon"></div>
                    </div>

                    <div class="project">
                        <div class="image_preview"><img src="img/comingsoon.jpg" alt="comingsoon"></div>
                    </div>

                    <div class="project">
                        <div class="image_preview"><img src="img/comingsoon_invert.jpg" alt="comingsoon"></div>
                    </div>

                    <div class="project">
                        <div class="image_preview"><img src="img/comingsoon.jpg" alt="comingsoon"></div>
                    </div>

                    <div class="project">
                        <div class="image_preview"><img src="img/comingsoon_invert.jpg" alt="comingsoon"></div>
                    </div>
                </div> -->
            
        </div>
    </a>

    <a name="contacts">
        <div class="container desc contacts">
            <div class="title">
                <span class="line">Связаться со мною</span>

                <div class="text">
                    <a href="vk.com/richlex">VK</a> <br>
                    <a href="vk.com/richlex">MAIL: dezy1ex@gmail.com</a>
                </div>
            </div>
        </div>
    </a>

    <footer>© 2020 by davy1ex</footer>


    <script src="js/index.js"></script>
</body>
</html>