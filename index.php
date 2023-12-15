<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/sidebar.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <?php include "header.php" ?>
    <div class="contentbar">
            <!--nav시작-->
            <nav>
                <i class='bx bx-menu'></i>
                <form action="#">
                    <div class="form-input">
                        <input type="search" placeholder="Search...">
                        <button class="search-btn" type="submit"><i class='bx bx-search'></i></button>
                    </div>
                </form>
                <input type="checkbox" name="" id="theme-toggle" hidden>
                <label for="theme-toggle" class="theme-toggle"></label>
            </nav>
            <!--nav끝-->
        <!-- </div>
    </div>
    -->
        
    <!--
    <nav>
        <div class="nav-logo">
            
            <a href="">
                <img src="IMG/logo.png" alt="">
            </a>
            
        </div>
        
        <ul class="nav-ul">
            <li class="link"><a href="#">Home</a></li>
            <li id="link1" class="link"><a href="#">Features</a></li>
            <li id="link2" class="link"><a href="#">Project</a></li>
            <li id="link3" class="link"><a href="#">About</a></li>
        </ul>
        
    </nav>
    -->

    <header class="container">
        <div class="content">
            <span class="blur"></span>
            <span class="blur"></span>
            <h4>개발 포트폴리오 기록 사이트</h4>
            <h1>안녕하세요 주니어 개발자<span>양민호</span>입니다
            </h1>
            <p>
                C#과 Unity를 사용한 게임을 개발하며 C++과 언리얼에 대한 지식도 있습니다, 그래픽스와 AI에 관심이 많으며 
                클라이언트 프로그래머 또는 그래픽스 프로그래머를 지망하며 후에 TA가 되는것이 목표입니다
            </p>
            <button id="linkStart" class="button">시작하기</button>
        </div>
        <div class="img">
            <img src="IMG/header.png" alt="">
        </div>
    </header>

    <section class="container">
    <div>
        <h2 class="header">나의 스킬</h2>
        <div class="features">
            <div class="card">
                <span><i class="ri-window-line"></i></span>
                <h4>Main C# & C++</h4>
                <p>
                    C, C++, C#, Java 언어들을 배우면서 C계열 언어에
                     대한 이해도가있고 객체지향프로그래밍에 대한 지식이있습니다.
                </p>
                <a target="_blank" href="https://github.com/GEMPRayelle/Csrp-in-action">See now <i class="ri-arrow-right-line"></i></a>
            </div>
            <div class="card">
                <span><i class="ri-tools-line"></i></span>
                <h4>Unity & Unreal</h4>
                <p>
                    유니티 언리얼 엔진을 사용하여 게임을 개발한 경험이있고
                    기본적인 게임개발엔진에 사용법이나 작동원리에 대한 이해가 있습니다
                </p>
                <a href="">See now <i class="ri-arrow-right-line"></i></a>
            </div>
            <div class="card">
                <span><i class="ri-braces-line"></i></span>
                <h4>코드 작성 요령</h4>
                <p>
                    디자인 패턴과 자료구조 알고리즘을 배우면서 코드를 생산성있게 작성할 수 있게 되었고
                    더 많은 패턴을 꾸준하게 공부하고 있습니다
                </p>
                <a target="_blank" href="https://github.com/GEMPRayelle/DataStructure_in_action">See now <i class="ri-arrow-right-line"></i></a>
            </div>
            <div class="card">
                <span><i class="ri-shake-hands-line"></i></span>
                <h4>협업 프로젝트</h4>
                <p>여러번 팀으로 프로젝트를 진행하며 팀단위 프로젝트 필요한 커뮤니케이션 기술과 배려심을 가지고 되었습니다</p>
                <a href="">See now <i class="ri-arrow-right-line"></i></a>
            </div>
        </div>
    </div>
    </section>

    <section class="container">
        <div class="conteudo">
        <h2 class="header">나의 프로젝트</h2>
            <div class="carrousel">
                <article class="card1">
                    <h1>실감피지컬 컴퓨팅</h1>
                    <a href="">
                        <img src="IMG/UnityArduino.png" alt="">
                    </a>
                </article>
                <article class="card1">
                    <h1>웹기초 프로그래밍</h1>
                    <a href="">
                        <img src="IMG/Web.png" alt="">
                    </a>
                </article>
                <article class="card1">
                    <h1>소프트웨어공학 소나기</h1>
                </article>
                <article class="card1">
                    <h1>2d게임 프로그래밍</h1>
                </article>
                <article class="card1">
                    <h1>사이드 프로젝트</h1>
                </article>
            </div>
        </div>
    </section>
    <?php include "footer.php" ?>
    
    <script src="JS/Scroll.js"></script>
    <script src="JS/SideBar.js"></script>
</body>
</html>