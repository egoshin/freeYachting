# Шаблон для верстки на bootstrap, адаптированный под 1C-Bitrix

## Глобальные константы находятся в файле /include/define.php.inc:

    <?
    define("SITE_TITLE", "FreeYachting");
    define("SITE_DIR", "/");
    define("SITE_TEMPLATE_PATH", "/");
    ?>

## Верстка

<http://fy.egoshin.net>

<http://fy.egoshin.net/404.php>

<http://fy.egoshin.net/help.php>

<http://fy.egoshin.net/search.php>

<http://fy.egoshin.net/skipper.php>

<http://fy.egoshin.net/travel-archives.php>

<http://fy.egoshin.net/travel-booked.php>

<http://fy.egoshin.net/travel-list.php>

<http://fy.egoshin.net/travel-story.php>

<http://fy.egoshin.net/traveller-cabin.php>

<http://fy.egoshin.net/traveller-profile.php>

<http://fy.egoshin.net/traveller-registration.php>

<http://fy.egoshin.net/skipper-profile.php>

<http://fy.egoshin.net/skipper-registration.php>

<http://fy.egoshin.net/new-travel.php>

<http://fy.egoshin.net/bron-travel.php>

<http://fy.egoshin.net/yachta-about.php>

<http://fy.egoshin.net/yachta-history.php>

<http://fy.egoshin.net/yachta-booked.php>

<http://fy.egoshin.net/yachta-bron.php>

<http://fy.egoshin.net/typo.php>

<http://fy.egoshin.net/template.php>

## Структура шаблона

.

├── css  
│   ├── bootstrap.min.css  
│   ├── font-awesome.min.css  
│   └── style.min.css  
├── favicon  
├── fonts  
├── images  
│   └── slide.png  
├── img  
│   └── logotype.png  
├── include  
│   ├── define.php.inc  
│   ├── footer.php  
│   └── header.php  
├── index.php  
├── js  
│   ├── bootstrap.min.js  
│   ├── ie9  
│   │   ├── html5shiv-printshiv.min.js  
│   │   ├── html5shiv.min.js  
│   │   └── respond.js  
│   ├── jquery.min.js  
│   └── script.js  
├── less  
│   ├── bootstrap  
│   │   └── wells.less  
│   ├── bootstrap.less  
│   ├── style.less  
│   └── variables.less  
└── template.php  

##Поддержка совместимости bootstrap 3 с Internet Explorer меньшей или равной версии 9 посредством CDN в файле /include/header.php:

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

