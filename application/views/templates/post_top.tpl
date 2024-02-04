<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>洋館探訪</title>
    <link href="application/css/reset.css" rel="stylesheet" />
    <link rel="stylesheet" href="application/css/index.css">
    <link rel="stylesheet" href="application/css/hamburger.css">
    <!-- <link　href="https://unpkg.com/sanitize.css" rel="stylesheet"/> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script type="text/javascript" src="application/js/hamburger.js"></script>
</head>

<body>
    <header class="header">
        <div><a href="/">ブログです</a></div>
        <nav class="header__nav nav" id="js-nav">
            <ul class="nav__items nav-items">
                <li class="nav-items__item"><a href="">メニュー</a></li>
                <li class="nav-items__item"><a href="">メニュー</a></li>
                <li class="nav-items__item"><a href="">メニュー</a></li>
                <li class="nav-items__item"><a href="">メニュー</a></li>
            </ul>
        </nav>
        <div class='hamburger_btn_wrapper'>
            <button class="header__hamburger hamburger" id="js-hamburger">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
        </div>
    </header>
    <article>
        {if $post}
            {foreach $post as $item}
                <div class="content">
                    <ul class="hoge-list">
                        <li class="hoge-item">
                            <a href="/post" class="hoge-item-link">
                                <div class="hoge-item-picture"><img src="https://image.jimcdn.com/app/cms/image/transf/none/path/s801baca4fdd4a1c3/image/i99629c914f61d576/version/1524213874/image.jpg" alt="洋館の画像"></div>
                                <div class="hoge-item-body">
                                    <div class="hoge-item-title">{$item.post_title}</div>
                                    <div class="hoge-item-text">{$item.post_content}</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            {/foreach}
        {else}
            <div>投稿はまだありません。</div>
        {/if}
        <div class="side">
            <p>サイドバー</p>
        </div>
    </article>
    <footer class="hooter">
        建物探訪
    </footer>
</body>

<script>
    console.log("%cなにみてんだよオメー",
        "font-size:30px; padding:2px 4px; border-radius:4px;font-family: 'ＭＳ 明朝', 'MS Mincho',sans-serif; font-weight: bold; background-color:#EEEEEE;"
        );
</script>