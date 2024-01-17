# tabere_app

O aplicație web care gestionează desfășurarea taberelor.
MVC
PHP + MySql + Apache2



## Structura aplicației

-arhitectura mvc

tabere_app/
│
├── .env
├── .gitignore
├── README.md
├── composer.json
├── composer.lock
│
├── app/
│   ├── controllers/
│   │   ├── _404.php
│   │   ├── Home.php
│   │   ├── Login.php
│   │   ├── Logout.php
│   │   ├── Signup.php
│   │   └── Admin.php 
│   │
│   ├── core/
│   │   ├── App.php
│   │   ├── config.php
│   │   ├── Controller.php 
│   │   ├── Database.php
│   │   ├── functions.php
│   │   ├── init.php 
│   │   └── Model.php
│   │
│   ├── models/
│   │   ├── Camp.php
│   │   └── User.php
│   │
│   └── views/
│       ├── 404.view.php
│       ├── home.view.php
│       ├── login.view.php
│       ├── signup.view.php
│       ├── admin/  //  View-urile specifice adminilor
│       │   ├── dashboard.view.php
│       │   └── manage.view.php
│       ├── user/  // View-urile specifice utilizatorilor logați
│       │   ├── home.loggedin.view.php
│       │   └── profile.view.php
│       └── partials/  // Elemente reutilizabile
│           ├── header.php 
│           └── footer.php  
│
├── public/
│   ├── .htaccess
│   ├── index.php
│   ├── robots.txt
│   ├── css/
│   │   └── style.css
│   ├── images/
│   └── js/
│
└── vendor/  // Directorul creat de Composer pentru dependențe


## De implementat


## Tabele de Audit

## Export date din aplicatie sub format PDF

## Optimizari SEO
-Tokenuri formulare