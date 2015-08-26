# Шаблон для верстки на bootstrap, адаптированный под 1C-Bitrix

## Глобальные константы находятся в файле /include/define.php.inc:

    <?
    define("SITE_TITLE", "Храм Рождества Иоанна Предтечи");
    define("SITE_DIR", "/prototype/");
    define("SITE_TEMPLATE_PATH", "/prototype/");
    ?>

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

