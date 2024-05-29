<x-app-layout>

<a href="./" class="header-logo">
        <img src="assets/img/logo.svg" alt="POSSE">
        </a>
        <button class="header-button" id="js-headerButton">
            <span class="header-buttonLine"></span>
            <span class="header-buttonLine"></span>
            <span class="header-buttonLine"></span>
        </button>
        <nav class="header-nav">
        <ul class="header-navList">
            <li  class="header-navItem">
                <a href="#about" class="header-navLink">POSSEとは</a>
            </li>
            <li class="header-navItem">
                <a href="#event" class="header-navLink">イベント</a>
            </li>
            <li class="header-navItem">
                <a href="#daily" class="header-navLink">日常生活</a>
            </li>
        </ul>
        <ul class="header-info">
            <li>
                <a href="https://line.me/R/ti/p/@651htnqp?from=page" class="cta-button header-ctaLink" target="_blank" rel="noopener noreferrer">
                    LINE追加
                </a>
            </li>
            <li>
                <a href="#" class="header-corporateLink" target="_blank" rel="noopener noreferrer">POSSE 公式サイト</a>
            </li>
        </ul>
        <ul class="header-snsList">
            <li class="header-snsItem">
                <a href="#" class="header-snsLink" target="_blank" rel="noopener noreferrer">
                <img src="./assets/img/icon-X.png" alt="Twitter" width="40" height="40">
                </a>
            </li>
            <li class="header-snsItem">
                <a href="#" class=""header-snsLink target="_blank" rel=""noopener noreferrer>
                    <img src="./assets/img/icon-instagram.png" alt="LINE登録" width="40" height="40">
                </a>
            </li>
        </ul>
        </nav>
    <section class="mainvisual" id="js-mainVisual">
<div class="mainvisual-inner">
    <div class="mainvisual-head" data-scroll>
    <h1 class="mainvisual-title">学生プログラミングコミュニティ POSSE（ポッセ）</h1>
    <p class="mainvisual-lead">自分史上最高を仲間と。</p>
    </div>
</div>
<div class="mainvisual-scroll">SCROLL DOWN</div>
</section>
<section id="about" class="section about">
    <div class="section_head">
    <h2 class="title" data-scroll>
        <span class="title-ja">POSSEとは</span>
        <span class="title-en">About POSSE</span>
    </h2>
    </div>
    <div class="section-body">
    <div class="container">
        <div class="about-column">
        <figure class="about-image" data-scroll>
            <img src="img/img-about.jpg" alt="" />
        </figure>
        <div class="about-text" data-scroll>
            <p>
            学生プログラミングコミュニティ「POSSE(ポッセ)」は、人格とプログラミング、二つの面での成長をスローガンに活動しており、大学生だけが集まって学びを深めるコミュニティです。<br />プログラミングだけではありません。オフラインでのイベントや、旅行など様々な企画を行っています！<br
                class="is-pc"
            />それらを通じて、夏休みの大半をPOSSEで出来た仲間と過ごす人もたくさんいるほどメンバーとの仲が深まります。
            </p>
        </div>
        </div>
    </div>
    </div>
</section>
<section id="event" class="section">
    <div class="section-head">
    <h2 class="title" data-scroll>
        <span class="title-ja">イベント</span>
        <span class="title-en">Event</span>
    </h2>
    <div class="section-lead" data-scroll>
        <p class="about-text"style="text-align: center;">
        POSSEでは、年内に数多くのイベントを行っています。こちらに掲示してあるのはイベントの一部です。<br />プログラミングだけでなく、これらのイベントを共に経験し、仲間との友情はより深まります。
        </p>
    </div>
    </div>
    <div class="section-body">
    <div id="js-eventSlide" class="splide event-slide">
        <div class="splide__track event-slideTrack">
        <ul class="splide__list">
            <li class="splide__slide event-item" data-scroll>
            <figure class="event-itemImage">
                <img src="./assets/img/img-event01.jpg" alt="" />
            </figure>
            <div class="event-itemBody">
                <p class="event-itemDate">
                <time datetime="2021-04">2021.April</time>
                </p>
                <p class="event-itemName">入学式</p>
            </div>
            </li>
            <li class="splide__slide event-item" data-scroll>
            <figure class="event-itemImage">
                <img src="./assets/img/img-event02.jpg" alt="" />
            </figure>
            <div class="event-itemBody">
                <p class="event-itemDate">
                <time datetime="2021-03">2021.Mar</time>
                </p>
                <p class="event-itemName">軽井沢旅行</p>
            </div>
            </li>
            <li class="splide__slide event-item" data-scroll>
            <figure class="event-itemImage">
                <img src="./assets/img/img-event03.jpg" alt="" />
            </figure>
            <div class="event-itemBody">
                <p class="event-itemDate">
                <time datetime="2021-04">2021.April</time>
                </p>
                <p class="event-itemName">オープン講演会</p>
            </div>
            </li>
            <li class="splide__slide event-item" data-scroll>
            <figure class="event-itemImage">
                <img src="./assets/img/img-event04.jpg" alt="" />
            </figure>
            <div class="event-itemBody">
                <p class="event-itemDate">
                <time datetime="2021-04">2021.April</time> -
                <time datetime="2021-06">June</time>
                </p>
                <p class="event-itemName">チーム開発</p>
            </div>
            </li>
        </ul>
        </div>
    </div>
    </div>
</section class="section">
<section id="daily">
    <div class="section-head"></div>
        <h2  class="title" data-scroll>
            <span class="title-ja">日常生活</span><span class="title-en">Daily Record</span>
        </h2>
    </div>
    <div class="section-lead">
        <p class="about-text"style="text-align: center;">様々な日々の活動について紹介します。<br>
            POSSEでは、プログラミングを学んでいくにあたってメンバー同士が共に学習するような時間を数多く設けています。<br>
            入会時期が半年毎にあるため、縦の繋がりから学べることは非常に多く、この繋がりを意識した班を構成したり、<br>
            それとは別に同期のみの班を構成して共に学習するようなシステムを採用しています。</p>
    </div>
    <div class="section-body">
        <div class="container">
            <div id="js-dailySlide" class="splide daily-slide">
                <div class="splide__track">
                    <ul class="splide__list daily-list">
                        <li class="splide__slide daily-item">
                            <figure class="daily-itemImage">
                                <img src="assets/img/img-daily01.jpg" alt="">
                            </figure>
                            <div class="daily-itemBody">
                                <h2 class="daily-title">
                                    <span class="daily-titleNumber">01</span>
                                    <span class="daily-titleText">ミートアップ</span>
                                </h2>
                            <ul class="daily-outline">
                                <li class="daily-outlineItem">毎週月曜日 19:30～22:30</li>
                                <li class="daily-outlineItem">全員参加</li>
                            </ul>
                            <div class="daily-description">
                                <p>全体ミーティングです。<br>各局からのお知らせや、講演会など目白押しです。</p>
                            </div>
                            </div>
                        </li>
                        <li class="splide__slide daily-item">
                            <figure class="daily-itemImage">
                                <img src="assets/img/img-daily02.jpg" alt="">
                            </figure>
                            <div class="daily-itemBody">
                                <h2 class="daily-title">
                                    <span class="daily-titleNumber">02</span>
                                <span class="daily-titleText">縦もく</span>
                            </h2>
                            <ul class="daily-outline">
                                <li class="daily-outlineItem">週1回 2時間</li>
                            </ul>
                            <div class="daily-description">
                                <p>期生関係なくzoomを繋ぎ、わからないところを先輩に質問できます。わかるまで丁寧に教えてくれます。</p>
                            </div>
                        </div>
                        </li>
                        <li class="splide__slide daily-item">
                            <figure class="daily-itemImage">
                                <img src="assets/img/img-daily03.jpg" alt="">
                            </figure>
                            <div class="daily-itemBody">
                                <h2 class="daily-title">
                                    <span class="daily-titleNumber">03</span>
                                <span class="daily-titleText">横もく</span>
                            </h2>
                            <ul class="daily-outline">
                                <li class="daily-outlineItem">週1回 3時間</li>
                            </ul>
                            <div class="daily-description">
                                <p>同期と3~4任一組で学習しながら、わからないところを共有、質問できます。オフラインで集合したり、共にハッカソンに挑んだりします。</p>
                            </div>
                            </div>
                        </li>
                        <li class="splide__slide daily-item">
                            <figure class="daily-itemImage">
                                <img src="assets/img/img-daily04.jpg" alt="">
                            </figure>
                            <div class="daily-itemBody">
                                <h2 class="daily-title">
                                    <span class="daily-titleNumber">04</span>
                                <span class="daily-titleText">スペもく</span>
                            </h2>
                            <ul class="daily-outline">
                                <li class="daily-outlineItem">週1回 1時間</li>
                                <li class="daily-outlineItem">自由参加</li>
                            </ul>
                            <div class="daily-description">
                                <p>メンターさんからのアドバイスを受けることができます。<br>
                                毎回得る知識が多く、とてもありがたい機会です。</p>
                            </div>
                            </div>
                        </li>
                        <li class="splide__slide daily-item">
                            <figure class="daily-itemImage">
                                <img src="assets/img/img-daily05.jpg" alt="">
                            </figure>
                            <div class="daily-itemBody">
                                <h2 class="daily-title">
                                    <span class="daily-titleNumber">05</span>
                                <span class="daily-titleText">飯もく</span>
                            </h2>
                            <ul class="daily-outline">
                                <li class="daily-outlineItem">不定期 3時間</li>
                                <li class="daily-outlineItem">全員参加</li>
                            </ul>
                            <div class="daily-description">
                                <p>ご飯を食べながら作業します。表参道の美味しいお店をたくさん発見できることが楽しいです！</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="cta">
    <h2 class="cta-title">
        <img src="./assets/img/icon-line.svg" alt="" width="40" height="40" />
        POSSE 公式LINE
    </h2>
    <div class="cta-content">
    <p>
        公式LINEにてご質問を随時受け付けております。<br />詳細やPOSSE最新情報につきましては、公式LINEにてお知らせ致しますので<br />下記ボタンより友達追加をお願いします！
    </p>
    </div>
    <a
        href="https://line.me/R/ti/p/@651htnqp?from=page"
        class="cta-button"
        target="_blank"
        rel="noopener noreferrer"
    >
        LINE追加
        <svg
            class="cta-icon"
            fill="none"
            height="15"
            viewBox="0 0 14 15"
            width="14"
            xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink"
        >
            <clipPath id="a">
            <path d="m0 .693604h14v14h-14z" />
            </clipPath>
            <g
                clip-path="url(#a)"
                stroke="#0071bc"
                stroke-linecap="round"
                stroke-linejoin="round"
            >
            <path
                d="m12.5416 8.27698v5.05752c0 .5891-.4783 1.0675-1.0675 1.0675h-10.11497c-.589171 0-1.067504-.4784-1.067504-1.0675v-10.11502c0-.58917.478333-1.0675 1.067504-1.0675h5.0575"
            />
            <path d="m10.2084.985229h3.5" />
            <path d="m13.7084 4.48523v-3.500001" />
            <path d="m7.29163 7.4019 6.41667-6.416671" />
            </g>
        </svg>
    </a>
</section>
    <footer class="footer">
        <div class="footer-inner">
            <a href="./" class="footer-logo">
                <img src="./assets/img/logo.svg" alt="POSSE" width="202" height="39">
            </a>
            <a href="#" class="footer-corporateLink" target="_blank" rel="noopener noreferrer">POSSE 公式サイト</a>
                <ul class="footer-snsList">
                    <li class="footer-snsItem">
                        <a href="#" class="footer-snsLink" target="_blank" rel="noopener noreferrer">
                            <img src="./assets/img/icon-X.png" alt="Twitter" width="40" height="40">
                        </a>
                    </li>
                    <li class="footer-snsItem">
                        <a href="#" class="footer-snsLink" target="_blank" rel="noopener noreferrer">
                            <img src="./assets/img/icon-instagram.png" alt="instagram" width="40" height="40">
                        </a>
                    </li>
                </ul>
        </div>
        <div class="footer-copyright">
            <small lang="en">&copy; 2023 POSSE</small>
        </div>
    </footer>
    <script src="./assets/js/splide.min.js"></script>
    <script src="assets/js/script.js"></script>
    </x-app-layout>