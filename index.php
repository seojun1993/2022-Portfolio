<?php

$conn = mysqli_connect($db_host,$db_user,$db_passwd,$db_name);
mysqli_query($conn,"set names utf8");
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>이서준의 Portfolio</title>
    <meta name="description" content="이서준의 포트폴리오입니다.">
    <meta name="keyword" content="웹 퍼블리셔 포트폴리오">
    <meta name="robots" content="noindex">
    <meta property="og:title" content="이서준의 포트폴리오">
    <meta property="og:description" content="웹 퍼블리셔 포트폴리오">

    <!-- 파비콘 -->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/fav/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/fav//apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/fav//apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/fav//apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/fav//apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/fav//apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/fav//apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/fav//apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/fav//apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="assets/img/fav//android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/fav//favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/fav//favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/fav//favicon-16x16.png">
    <link rel="manifest" href="assets/img/fav//manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/img/fav//ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- 파비콘 -->

    <!-- 기본 CSS -->
    <link rel="stylesheet" href="assets/css/common/common.css">
    <link rel="stylesheet" href="assets/css/common/style.css">
    <link rel="stylesheet" href="assets/css/common/button.css">
    <!-- 기본 CSS -->

    <!-- Layout CSS -->
    <link rel="stylesheet" href="assets/css/scss/layout/layout.css">
    <link rel="stylesheet" href="assets/css/scss/loading/loading.css">
    <link rel="stylesheet" href="assets/css/scss/main.css">
    <link rel="stylesheet" href="assets/css/common/animation.css">
    <!-- Layout CSS -->

    <!-- 웹폰트아이콘 -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- 웹폰트아이콘 -->

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="assets/css/plugin/swiper-bundle.min.css">
    <!-- Swiper CSS -->

    <script src="assets/js/lib/jquery.js"></script>
    <script src="assets/js/layout/loading.js"></script>
    <script src="assets/js/layout/header.js"></script>
    <script src="assets/js/layout/main.js"></script>
    <script src="assets/js/layout/txtanimation.js"></script>
    <script src="assets/js/layout/top.js"></script>
    <script src="assets/js/layout/gnb.js"></script>
    <script src="assets/js/layout/star.js"></script>
</head>

<body>
    <!-- 로딩바 -->
    <div class="loading">
        <div class="loading-line"></div>
    </div>
    <!-- 로딩바 -->

    <!-- Wrap -->
    <div id="wrap">
        <!-- Header -->
        <header>
            <div class="container">
                <div class="header_inner">
                    <a href="#;" class="material-icons gnb_open" id="gnb_btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                    <div class="logo">
                        <h1><a href="#;"><img src="assets/img/common/logo.png" alt="logo"><span class="hide_txt">logo</span></a></h1>
                    </div>
                    <nav>
                        <ul>
                            <li class="active"><a href="#home">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#portfolio">Portfolio</a></li>
                            <li><a href="#skills">Skills</a></li>
                            <li><a href="#timeline">Timeline</a></li>
                            <li><a href="#contact">Contact</a></li>
                            <li class="resume"><a href="#;" class="btn btn_orange">Resume</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <!-- Header -->

        <!-- gnb -->
        <div class="mobile_gnb_wrap d-p-standard">
            <div class="mobile_gnb_overlay"></div>
            <nav class="mobile_gnb">
                <a href="#;" class="gnb_close material-icons">close</a>
                <ul>
                    <li class="active"><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#skills">Skills</a></li>
                    <li><a href="#timeline">Timeline</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li class="resume"><a href="#;">Resume</a></li>
                </ul>

            </nav>
        </div>
        <!-- gnb -->

        <!-- Article01 -->
        <article class="visual_article" id="home">
            <h2 class="hide_txt">Visual article</h2>
            <div class="bg">
                <div></div>
            </div>
            <div class="container">
                <section>
                    <div class="content">
                        <div class="visual_left">
                            <div class="txt_wrap">
                                <span class="intro_desc">이서준의</span>
                                <h2>Portfolio</h2>

                                <div class="org_box">
                                    <span class="typing_txt">Web Design</span>
                                    <span class="typing_txt">Web Publishing</span>
                                    <span class="typing_txt">to keep growing</span>
                                </div>
                                <div class="typing_box">
                                    <span>I Like</span>
                                    <span class="typing"></span>
                                </div>

                                <p>코딩 할 때 가장 행복한 웹 퍼블리셔입니다.</p>
                                <p>단기간 내 목표는 Mysql, Php, React 학습입니다.<br>
                                    장기적인 목표는 Front 개발 및<br>
                                    Html canvas를 활용한<br class="mobile_render" /> 웹 인터랙션 개발자가 되는것입니다.</p>

                                <h3 class="stroke_txt stroke1">SEOJUN</h3>
                                <h3 class="stroke_txt stroke2">LEE</h3>
                            </div>
                            <div class="intro_btn">
                                <a href="#;" class="contact_btn btn btn_blue">Contact</a>
                                <a href="#;" class="about_btn btn">About</a>
                            </div>
                        </div>
                        <div class="visual_right">
                            <div class="img_box">
                                <img src="assets/img/layout/visual_me1_1.jpg" alt="my picture">
                                <div class="img_deco circle">
                                    <img src="assets/img/layout/circle.png" alt="circle">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </article>
        <!-- Article01 -->

        <!-- Article Wrap -->
        <div class="article_wrap">
        <!-- Article02 -->
        <article class="intro_article">
            <h2 class="hide_txt">Intro article</h2>
            <div class="container">
                <section class="intro_first">
                    <h3 class="hide_txt">Intro first</h3>
                    <div class="content">
                        <ul>
                            <li class="fadeInUp">
                                <dl>
                                    <dt><span>01</span> 성격</dt>
                                    <dd>
                                        <p>조용하고 차분한 유년시절을 보냈습니다.<br class="mobile_render" /><br class="tablet_render /">
                                            몰두 하는것을 좋아하고 또 잘합니다.<br class="mobile_render" /><br class="tablet_render /">
                                            풀리지 않는게 있으면 끝까지 해결해야 
                                            하는 성격입니다. 
                                        </p>
                                    </dd>
                                </dl>
                            </li>

                            <li class="fadeInUp">
                                <dl>
                                    <dt><span>02</span> 집중</dt>
                                    <dd>
                                        <p>개발에 가장 필요한 것은
                                            노력과 집중이라고 생각합니다.<br class="mobile_render" /><br class="tablet_render /">
                                            같은 시간을 앉아있어도 집중력에 따라
                                            업무 효율이 달라진다고 생각합니다.</p>
                                    </dd>
                                </dl>
                            </li>

                            <li class="fadeInUp">
                                <dl>
                                    <dt><span>03</span> 협업</dt>
                                    <dd>
                                        <p>IT에서 가장 중요한 것은 협업입니다.<br class="mobile_render" /><br class="tablet_render /">
                                            기획, 디자인 등 다른 업무를 가진 사람들과
                                            좋은 완성도를 내기 위해 끊임없는 소통을 해야합니다.
                                        </p>
                                    </dd>
                                </dl>
                            </li>
                        </ul>
                    </div>
                </section>

                <section class="intro_second" id="about">
                    <h3 class="hide_txt">Intro second</h3>
                    <div class="content">
                        <div class="left">
                            <div class="img_box">
                                <img src="assets/img/layout/visual_me3.jpg" alt="img">
                                <span class="icon_01 fadeInUp"><img src="assets/img/common/icon/icon_html.png" alt="img"></span>
                                <span class="icon_02 fadeInUp"><img src="assets/img/common/icon/icon_css.png" alt="img"></span>
                                <span class="icon_03 fadeInUp"><img src="assets/img/common/icon/icon_js.png" alt="img"></span>
                                <span class="icon_04 fadeInUp"><img src="assets/img/common/icon/icon_php.png" alt="img"></span>
                            </div>
                        </div>
                        <div class="right">
                            <div class="title_box">
                                <span>About Me</span>
                                <h3>
                                    저는 자유롭고 감각적인<br />웹 퍼블리셔입니다.
                                </h3>
                                <p>
                                    안녕하세요. <br />
                                      UI/UX및 마크업, SEO, 크로스 브라우징 등<br class="mobile_render" /> 
                                      웹퍼블리셔 기술에 관심을 기울이고<br/>
                                      다양한 웹 인터랙션에 관심이 많은<br class="mobile_render" /> 
                                      개발자 이서준입니다. 
                                </p>
                                <p>
                                    총 경력은 웹 디자인/퍼블리싱 1년 + <br class="mobile_render" />
                                    퍼블리싱 1년 6개월입니다. <br />
                                    웹 퍼블리셔 및 능력있는<br class="mobile_render" /> 
                                    프론트엔드 개발자로 성장하고 싶습니다.
                                </p>
                                <a href="#;" class="portfolio_btn btn btn_blue">Portfolio</a>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="intro_third">
                    <h3 class="hide_txt">Intro third</h3>
                    <div class="content">
                        <ul>
                            <li class="fadeInUp">
                                <div>
                                    <span class="count_num">
                                        <span class="count" data-from="0" data-to="30">0</span>
                                        <span class="count_plus">+</span>
                                    </span>
                                    <div class="count_desc plus">
                                        <h3>Age</h3>
                                        <p>1993.07.10</p>
                                    </div>
                                </div>
                            </li>
                            <li class="fadeInUp">
                                <div>
                                    <span class="count_num">
                                        <span class="count" data-from="0" data-to="4">0</span>
                                        <span class="count_plus">+</span>
                                    </span>
                                    <div class="count_desc plus">
                                        <h3>Skills</h3>
                                        <p>HTML/CSS/JS/PHP</p>
                                    </div>
                                </div>
                            </li>
                            <li class="fadeInUp">
                                <div>
                                    <span class="count_num">
                                        <span class="count" data-from="0" data-to="3">0</span>
                                    </span>
                                    <div class="count_desc">
                                        <h3>Years</h3>
                                        <P>2019 - Ing</P>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </section>
            </div>
        </article>
        <!-- Article02 -->

        <!-- Article03 -->
        <article class="portfolio_article" id="portfolio">
            <h2 class="hide_txt">Portfolio article</h2>
            <div class="container">
                <section>
                    <div class="title_box">
                        <span>Portfolio</span>
                        <h3>작업 현황</h3>
                        <p>지난 3년간 웹 퍼블리셔로<br class="mobile_render" /> 근무하며 했던 작업물들입니다.</p>
                        <p>DeskTop, Mobile, Responsive 등<br class="mobile_render" /> 설명글 참조하고 봐주시면 감사하겠습니다.</p>
                    </div>

                    <div class="list_inner">
                        <ul>
                            <li class="list fadeInUp">
                                <a href="#;" class="company">
                                    <div class="bg"></div>
                                    <div class="overlay"></div>
                                    <div class="content">
                                        <div class="details">
                                            <span class="category">Responsive</span>
                                            <h3 class="title">PHP & 게시판 제작<br />에이전시 페이지</h3>
                                            <span class="view_project">VIEW PROJECT<i class="material-icons">arrow_forward</i></span>
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li class="list fadeInUp">
                                <a href="#;" class="kkanbu_service">
                                    <div class="bg"></div>
                                    <div class="overlay"></div>
                                    <div class="content">
                                        <div class="details">
                                            <span class="category">Responsive</span>
                                            <h3 class="title">모두의 깐부<br/> 서비스 페이지</h3>
                                            <span class="view_project">VIEW PROJECT<i class="material-icons">arrow_forward</i></span>
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li class="list fadeInUp">
                                <a href="#;" class="kkanbu_admin">
                                    <div class="bg"></div>
                                    <div class="overlay"></div>
                                    <div class="content">
                                        <div class="details">
                                            <span class="category">Responsive</span>
                                            <h3 class="title">모두의 깐부<br/> 관리자 페이지</h3>
                                            <span class="view_project">VIEW PROJECT<i class="material-icons">arrow_forward</i></span>
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li class="list fadeInUp">
                                <a href="#;" class="modoo_service">
                                    <div class="bg"></div>
                                    <div class="overlay"></div>
                                    <div class="content">
                                        <div class="details">
                                            <span class="category">Mobile</span>
                                            <h3 class="title">모두의 방역<br/>서비스 페이지</h3>
                                            <span class="view_project">VIEW PROJECT<i class="material-icons">arrow_forward</i></span>
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li class="list fadeInUp">
                                <a href="#;" class="modoo_intro">
                                    <div class="bg"></div>
                                    <div class="overlay"></div>
                                    <div class="content">
                                        <div class="details">
                                            <span class="category">Responsive</span>
                                            <h3 class="title">모두의 방역<br/>소개 페이지</h3>
                                            <span class="view_project">VIEW PROJECT<i class="material-icons">arrow_forward</i></span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="list fadeInUp">
                                <a href="#;" class="onemore">
                                    <div class="bg"></div>
                                    <div class="overlay"></div>
                                    <div class="content">
                                        <div class="details">
                                            <span class="category">Desktop</span>
                                            <h3 class="title">원모어트립(국가 사업)<br/>테이블 코딩</h3>
                                            <span class="view_project">VIEW PROJECT<i class="material-icons">arrow_forward</i></span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="list fadeInUp">
                                <a href="#;" class="wallet">
                                    <div class="bg"></div>
                                    <div class="overlay"></div>
                                    <div class="content">
                                        <div class="details">
                                            <span class="category">Mobile</span>
                                            <h3 class="title">전자지갑</h3>
                                            <span class="view_project">VIEW PROJECT<i class="material-icons">arrow_forward</i></span>
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li class="list fadeInUp">
                                <a href="#;" class="coin">
                                    <div class="bg"></div>
                                    <div class="overlay"></div>
                                    <div class="content">
                                        <div class="details">
                                            <span class="category">Mobile</span>
                                            <h3 class="title">Coin8949</h3>
                                            <span class="view_project">VIEW PROJECT<i class="material-icons">arrow_forward</i></span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <!-- <li class="list fadeInUp">
                                <a target="_blank" href="tree/index.html">
                                    <div class="bg"></div>
                                    <div class="overlay"></div>
                                    <div class="content">
                                        <div class="details">
                                            <span class="category">Desktop</span>
                                            <h3 class="title">임업 진흥원<br />리뉴얼</h3>
                                            <span class="view_project">VIEW PROJECT<i class="material-icons">arrow_forward</i></span>
                                        </div>
                                    </div>
                                </a>
                            </li> -->
                            <li class="list fadeInUp">
                                <a href="#;" class="carrot">
                                    <div class="bg"></div>
                                    <div class="overlay"></div>
                                    <div class="content">
                                        <div class="details">
                                            <span class="category">Responsive</span>
                                            <h3 class="title">당근 라디오</h3>
                                            <span class="view_project">VIEW PROJECT<i class="material-icons">arrow_forward</i></span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="list fadeInUp">
                                <a href="#;" class="first">
                                    <div class="bg"></div>
                                    <div class="overlay"></div>
                                    <div class="content">
                                        <div class="details">
                                            <span class="category">Desktop</span>
                                            <h3 class="title">국비 수강<br>Portfolio</h3>
                                            <span class="view_project">VIEW PROJECT<i class="material-icons">arrow_forward</i></span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
        </article>
        <!-- Article03 -->

        <!-- Article04 -->
        <article class="skills_article" id="skills">
            <h2 class="hide_txt">Skills article</h2>
            <div class="container">
                <section>
                    <div class="title_box">
                        <span>My Skills</span>
                        <h3>기술 현황</h3>
                        <p>HTML5와 CSS3와 jQuery, JS(ES6+), PHP로<br class="mobile_render" /> 
                            퍼블리싱을 하며 코드 편집기는<br class="mobile_render" /> 
                            Vscode를 사용하고 있습니다.<br />
                            개발 툴로는 Github, 디자인 툴로는<br class="mobile_render" /> 
                            Photoshop, Zeplin, Figma, XD<br class="mobile_render" /> 
                            협업 경험이 있습니다.
                        </p>
                    </div>

                    <div class="skills_inner">
                        <div class="content">
                            <ul>
                                <li>
                                    <div class="skills_desc">
                                        <span>HTML5</span>
                                        <span>90%</span>
                                    </div>
                                    <div class="progress_inner" data-minvalue="0" data-maxvalue="90">
                                        <div class="bg">
                                            <div class="bar">
                                                <div class="bar_in"></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="skills_desc">
                                        <span>CSS3</span>
                                        <span>90%</span>
                                    </div>
                                    <div class="progress_inner" data-minvalue="0" data-maxvalue="90">
                                        <div class="bg">
                                            <div class="bar">
                                                <div class="bar_in"></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="skills_desc">
                                        <span>JQUERY</span>
                                        <span>90%</span>
                                    </div>
                                    <div class="progress_inner" data-minvalue="0" data-maxvalue="90">
                                        <div class="bg">
                                            <div class="bar">
                                                <div class="bar_in"></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="content">
                            <ul>
                                <li>
                                    <div class="skills_desc">
                                        <span>JAVA SCRIPT</span>
                                        <span>75%</span>
                                    </div>
                                    <div class="progress_inner" data-minvalue="0" data-maxvalue="75">
                                        <div class="bg">
                                            <div class="bar">
                                                <div class="bar_in"></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="skills_desc">
                                        <span>SCSS</span>
                                        <span>70%</span>
                                    </div>
                                    <div class="progress_inner" data-minvalue="0" data-maxvalue="70">
                                        <div class="bg">
                                            <div class="bar">
                                                <div class="bar_in"></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="skills_desc">
                                        <span>PHP</span>
                                        <span>60%</span>
                                    </div>
                                    <div class="progress_inner" data-minvalue="0" data-maxvalue="60">
                                        <div class="bg">
                                            <div class="bar">
                                                <div class="bar_in"></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="service_inner">
                        <div class="content">
                            <ul>
                                <li>
                                    <div class="content_inner">
                                        <a target="_blank" href="https://codepen.io/lbc1993/pen/ZExvRNR?editors=1000" class="fadeInLeft">
                                            <h3 class="material-icons">html</h3>
                                            <p>
                                                클릭하시면 CodePen에서 현재 사이트의 HTML 구조를 확인 할 수 있습니다.
                                            </p>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="content_inner">
                                        <a target="_blank" href="https://codepen.io/lbc1993/pen/YzaYvmP?editors=0100" class="fadeInRight">
                                            <h3 class="material-icons">css</h3>
                                            <p>
                                            클릭하시면 CodePen에서 현재 사이트의 CSS를 확인 할 수 있습니다.
                                            </p>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="content_inner">
                                        <a target="_blank" href="https://codepen.io/lbc1993/pen/oNqpyKK?editors=0010" class="fadeInLeft">
                                            <h3 class="material-icons">javascript</h3>
                                            <p>
                                            클릭하시면 CodePen에서 현재 사이트의 스크립트를 확인 할 수 있습니다.
                                            </p>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="content_inner">
                                        <a target="_blank" href="https://codepen.io/lbc1993/pen/KKoZBPZ?editors=1000" class="fadeInRight">
                                            <h3 class="material-icons">php</h3>
                                            <p>
                                            클릭하시면 CodePen에서 현재 사이트의 PHP를 확인 할 수 있습니다.
                                            </p>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
        </article>
        <!-- Article04 -->

        <!-- Article05 -->
        <article class="process_article">
            <h2 class="hide_txt">Process article</h2>
            <div class="container">
                <section>
                    <div class="process_inner">
                        <div class="left">
                            <div class="title_box">
                                <span>Process</span>
                                <h3>일련의 과정을 거쳐<br/>작업합니다.</h3>
                                <p>벤치마킹 - 와이어 프레임 - 스토리보드 -  개발</p>
                            </div>
                        </div>
                        <div class="right">
                            <ol>
                                <li class="fadeInRight">
                                    <div class="accodian_inner">
                                        <div class="acc_head">
                                            <span class="material-icons">add</span>
                                            <p>벤치마킹</p>
                                        </div>
                                        <div class="acc_body">
                                            <p>
                                                개발 시작 전 최대한 많은 레퍼런스들을 참고하며<br />
                                                섹션별 기능 및 디자인을 벤치마킹 하여 정리합니다.
                                            </p>
                                        </div>
                                    </div>
                                </li>

                                <li class="fadeInRight">
                                    <div class="accodian_inner">
                                        <div class="acc_head">
                                            <span class="material-icons">add</span>
                                            <p>와이어 프레임</p>
                                        </div>
                                        <div class="acc_body">
                                            <p>
                                                레퍼런스들을 확보 후 대략적인 사이트 컨셉을 잡기 위해<br/>
                                                간단한 스케치 또는 카카오 오븐을 이용한 와이어 프레임 작업을 합니다.
                                            </p>
                                        </div>
                                    </div>
                                </li>

                                <li class="fadeInRight">
                                    <div class="accodian_inner">
                                        <div class="acc_head">
                                            <span class="material-icons">add</span>
                                            <p>스토리보드</p>
                                        </div>
                                        <div class="acc_body">
                                            <p>
                                                와이어 프레임이 작성 된 후 들어가야 할 필수 구성 요소를 <br /> 
                                                짚어본 후 각기 화면의 동작과 전환을 확인하는 문서를 만듭니다.
                                                
                                            </p>
                                        </div>
                                    </div>
                                </li>

                                <li class="fadeInRight">
                                    <div class="accodian_inner">
                                        <div class="acc_head">
                                            <span class="material-icons">add</span>
                                            <p>개발</p>
                                        </div>
                                        <div class="acc_body">
                                            <p>
                                                스토리보드까지 이상 없이 진행이 되었으면<br /> 
                                                디자이너, 기획자, 개발자들과 소통하며 개발을 시작합니다.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </div>
                </section>
            </div>
        </article>
        <!-- Article05 -->

        <!-- Article06 -->
        <article class="timeline_article" id="timeline">
            <h2 class="hide_txt">Timeline article</h2>
            <div class="container">
                <section>
                    <div class="timeline_inner">
                        <div class="title_box">
                            <span>Timeline</span>
                            <h3>타임라인</h3>
                        </div>

                        <div class="carousel_inner fadeInUp">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <h3 class="title">그린컴퓨터 아카데미</h3>
                                        <div class="desc">
                                            <p>2019.04 종로 그린 컴퓨터 아카데미<br /> 
                                                웹디자인/웹퍼블리셔 과정 수강
                                            </p>
                                            <p>
                                                2019.09 산업인력공단 주최<br />
                                                웹디자인 기능사 자격증 취득
                                            </p>
                                        </div>
                                        <span class="date">2019.04 - 2019.10</span>
                                    </div>
                                    <div class="swiper-slide">
                                        <h3 class="title">디자인 교과서</h3>
                                        <div class="desc">
                                            <p>2019.11 서울 용산구에 위치한<br /> 디자인 교과서 웹 디자인/퍼블리셔로 입사<br /></p>
                                            <p>카페24 및 고도몰5 솔루션을 이용한<br />스킨 제작 및 판매, 유지보수, 배너 제작 등</p>
                                        </div>
                                        <span class="date">2019.11 - 2020.10</span>
                                    </div>
                                    <div class="swiper-slide">
                                        <h3 class="title">타이드플로</h3>
                                        <div class="desc">
                                            <p>2021.02 서울 금천구에 위치한<br />타이드플로 웹 퍼블리셔로 입사</p>
                                            <p>자사 서비스 및 국가사업 업무 등<br />현재 재직 중에 있습니다.</p>
                                        </div>
                                        <span class="date">2021.02 - Ing</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </section>
            </div>
        </article>
        <!-- Article06 -->

        <!-- Article07 -->
        <article class="form_article" id="contact">
            <h2 class="hide_txt">Form article</h2>
            <div class="container">
                <section>
                    <div class="form_inner">
                        <div class="form_bg">
                            <div class="title_box">
                                <span>Contact</span>
                                <h3>연락하는 법</h3>
                            </div>
                            <div class="content">
                                <div class="left">
                                    <form action="info.php" method="POST">
                                        <input type="hidden" name="date" value="<?php echo $date?>">
                                        <div class="input_inner fadeInLeft">
                                            <div><input type="text" placeholder="이름을 입력하세요." name="name"></div>
                                            <div><input type="text" placeholder="이메일을 입력하세요." name="email"></div>
                                            <div><textarea cols="30" rows="6" placeholder="메시지를 입력하세요." name="message"></textarea></div>
                                            <button type="button" class="btn btn_orange">Send</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="right">
                                    <div class="info fadeInRight">
                                        <ul>
                                            <li>
                                                <div class="location">
                                                    <span class="material-icons">location_on</span>
                                                    <div>
                                                        <p>Address</p>
                                                        <span>서울시 금천구 가산동</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="email">
                                                    <span class="material-icons">email</span>
                                                    <div>
                                                        <p>Email</p>
                                                        <span><a href="#;">qudcks5078@naver.com</a></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="phone">
                                                    <span class="material-icons">phone_iphone</span>
                                                    <div>
                                                        <p>Phone</p>
                                                        <span>+010 6625 5078</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </article>
        <!-- Article07 -->
        </div>
        <!-- Article Wrap -->

        <!-- Footer -->
        <footer>
            <div class="container">
                <div class="footer_inner">
                    <div class="copyright">
                        <p>Developed by LeeSeoJun © 2022</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer -->
        
        <!-- 탑버튼 -->
        <div id="top">
            <a href="#;" class="top_btn">To Top</a>
            <div class="progress_bar">
                <span class="line"></span>
            </div>
        </div>
    </div>
    <!-- 탑버튼 -->
    <!-- Wrap -->

    <!-- 상업이용 공지 -->
    <div class="notice">
        <button class="material-icons">close</button>
        <div class="notice_wrap">
            <p>본 사이트는 상업적 목적이 아닌 개인 포트폴리오 용도로 만들었습니다. 일부 내용 및 이미지 등은 출처가 따로 있음을 밝힙니다.</p>
        </div>
    </div>
    <!-- 상업이용 공지 -->

    <!-- ajax 모달창 -->
    <div class="work_list">
        <div class="list_wrap">
            <button class="material-icons">close</button>
            <div id="result">
                <ul class="list_content"></ul>
            </div>
        </div>
        <div class="overlay"></div>
    </div>
    <!-- ajax 모달창 -->

    <script src="assets/js/layout/ajax.js"></script>
    <script src="assets/js/plugin/swiper-bundle.min.js"></script>
    <script src="assets/js/layout/custom_swiper.js"></script>
</body>

</html>