
<?php

// セッションの利用開始
session_start();

// ワンタイムトークン生成
$toke_byte = openssl_random_pseudo_bytes(16);
$csrf_token = bin2hex($toke_byte);

// トークンをセッションに保存
$_SESSION['csrf_token'] = $csrf_token;


?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>my Portfolio</title>
        <meta name="description" content="私のポートフォリオ">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rampart+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Rampart+One&family=Zen+Maru+Gothic:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="http://unpkg.com/ress/dist/ress.min.css">
        <link rel="icon" type="image/png" href="image/R.png">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/move.css">
    </head>


    <body>
        <header>
            <h1 class="site-title">Rie Tomoyasu Portfolio</h1>
            <h2 class="sub-title">Let me introduce you to me</h2>
       
        </header>
    <main>
        <div id="top" class="wrapper">
           
            <ul class="nav-list"> 
                <li><a href="#plofile"><img src="image/Vectorplofile.png" alt=""></a></li>
                <li><a href="#skill"><img src="image/skil.png" alt=""></a></li>
                <li><a href="#work"><img src="image/work.png" alt=""></a></li>
                <li><a href="#contact"><img src="image/contact.png" alt=""></a></li>
            </ul>
        </div>

        <p id="page-top" class="UpMove">
            <a href="#"><img src="image/top.png" alt=""></a></p>
        <hr>

        <section id="plofile" class="plofile box fadeUpTrigger">
            <h2 class="plof-title">plofile</h2>
            <div class="plofile-wrapper">
            
            <div class="prof-image"><img src="image/photo.png" alt="顔写真"></div>
           <table>
            <tr>
                <td>氏名：</td>
                <td>友安里依</td>
            </tr>
            <tr>
                <td>生誕：</td>
                <td>1992.04.28(32歳)</td>
            </tr>
            <tr>
                <td>出身：</td>
                <td>兵庫県西宮市（甲子園球場のある所）</td>
            </tr>
            <tr>
                <td>趣味：</td>
                <td>バスケットボール(player歴22年)</td>
            </tr>
            <tr>
                <td>尊敬する人：</td>
                <td>KobeBryant/東郷剛さん</td>
            </tr>
            <tr>
                <td>仕事で大切な事：</td>
                <td>チームワーク</td>
            </tr>
            <tr>
                <td>好きなこと：</td>
                <td>挑戦すること</td>
            </tr>
            <tr>
                <td>嫌いなこと：</td>
                <td>やらないこと</td>
            </tr>
            <tr>
                <td>得意：</td>
                <td>集中（気が付くと2,3時間...）</td>
            </tr>
            <tr>
                <td>苦手：</td>
                <td>自分の話をする事</td>
            </tr>
            <tr>
                <td>はまっていること：</td>
                <td>友人のHP制作/青太を目標にトレーニング<td>
            </tr>

           </table>
            </div>
        
        </div>
            <h2 class="plof-title">history</h2>
            <div class="timeline-container">
            <ul class="timeline">
                <li>1992.04 兵庫県西宮市にて生誕</li>
                <li>1995.01 阪神淡路大震災にて被災、祖父母の住む岡山県蒜山に移住</li>
                <li>2002.05 バスケットボールスクールへ通い始める</li>
                <li>2010.12 ニュージーランドへファームステイ</li>
                <li>2011.04 神戸松蔭女子学院大学 管理栄養士専攻へ入学</li>
                <li>2015.04 株式会社アルペンへ入社</li>
                <li>2016.10 宮崎県延岡市へ新店立上げの為転勤(その後5県6店舗へ転勤)</li>
                <li>2021.10 宮崎県宮崎市の店舗へ配属</li>
                <li>2023.10 新しい挑戦をする為に退職</li>
                <li>2023.12 フロントエンジニア養成課程の職業訓練校へ通う</li>
                <li>2023.12 並行してWEBデザインスクールHerTechで学ぶ</li>
                <li>2023.03 WEBデザインスクールHerTech修了</li>
                <li>2024.06 職業訓練を皆勤にて修了</li>
            </ul>
            </div>
            <div class="about-image"><img src="image/ball.png" alt=""></div>
            <div class="about">
            <p>好奇心旺盛で新しいことに挑戦することが好きです。</p>
            <P>どんな人の話でも興味が湧き、深堀する事が特技です。仕事でもプライベートでも、チームワークを重視します。</P>
            <p>常に成長していることを実感したいと考えておりプログラミングは奥が深くとても楽しく取り組んでいます。</p>
            </div>

            <div class="gole">
                <p>目標はフルスタックエンジニアになり子供たちにプログラミングを教える事！</p>
                </div>
            </section>

        <hr>
    <section id="skill" class="skill  box fadeUpTrigger">
        <h2 class="skill-title">skill</h2>
        <div class="skill-list">
           <p><span class="marker">資格</span></p>
           <p class="text">情報セキュリティマネジメント/WEBクリエイター能力認定試験エキスパート/WEBマーケティング検定/普通自動車第一種免許/栄養士</p>
           <p><span class="marker">言語・フレームワーク</span></p>
           <p class="text">HTML/CSS/JavaScript/PHP/SQL/Larabel</p>
           <p><span class="marker">使用ツール</span></p>
           <p class="text">VScode/Github/Sourcetree/FileZilla/Figma/WordPress/Photoshop
        <div class="about">
           <p>上記はフロントエンジニアの職業訓練校とHerTechというデザインのオンラインスクールと独学で学びました。</p>
           <p>Laravelは、放課後や休日に講師の先生に教えていただき、口コミサイトを制作しました。</p>
           <p>とても難しかったですが、出来た時の達成感は大きかったです。</p>
           <p>デザインやマーケティングの勉強は学校では講義がなくエンジニアになるにあたり</p>
           <p>知っておく方が良いと思ったので独学で勉強しました。</p>
           <p>サーバーの構築は、サーバーへの理解度がとても深まり、また勉強したいと思いました。</p>
           <p>今はLaravelを学んだ経験からバックエンドをやりたいと思っていますがフロントエンドも</p>
           <p>とても興味があるのでどちらも極めてフルスタックエンジニアになりたいです！</p>
            </div>
        </div>
    </section>

    <hr>
    <section id="work" class="work  box fadeUpTrigger">
        <div class="update"><p>\随時更新中/</p>
        <h2 class="work-title">Work</h2>
        <div class="exposition">
        <p>①じゃがじゃが宮崎~宮崎県に特化した口コミサイト~</p>
        <p><a href="https://jmiyazaki.com/">URL:https://jmiyazaki.com/</a></p>
        <p>Github<a href="https://github.com/chip1116/live93.git"><img src="image/github-mark.svg" alt=""></a></p>
        <div class="work-image"><img src="image/home.png" alt=""></div>
        <div class="detail">
            <h3>制作理由</h3>
            <p>宮崎の魅力を伝えたい。複数人で製作経験が積みたい。この理由から、宮崎の地元民がおすすめする口コミサイトを作りました。</p>
            <h4>使用言語等</h4>
            <p>HTML,CSS,Javascript,Laravel(rivewire),Bootstrap</p>
            <h4>使用ツール</h4>
            <p>Github,Sourcetree,FileZilla,VScode,GCP,XAMPP,Figma</p>
            <h4>製作期間</h4>
            <p>3ヶ月300時間（打合せも含め）</p>
            <h4>制作人数</h4>
            <p>5人</p>
            <h4>担当</h4>
            <p>プロジェクトリーダー、デザイン、メンバー紹介・検索一覧・詳細画面のフロントバック、DB調整、サーバーの構築</p>
            <h4>苦労した点</h4>
            <p>最初は5人での制作の為、進行状況やデータの共有が難しく、終盤になるとlaravelで参考にできる教材が少なく</p>
            <p>情報を集めることに苦労しました。また、テーブル定義の構造が未熟で、何度もデータベースをやり直したところも大変でした。</p>
            <h4>こだわった点</h4>
            <p>宮崎県の観光協会にリンクしてもらえるようにデザインやセキュリティを考え、観光協会を意識したデザインや</p>
            <p>Laravelを使用しセキュリティを考慮しました。SNSのように、いいねボタンやランキングを作って承認欲求が</p>
            <p>満たされるように作る事やシンプルで使いやすい使用であることも意識しました。
            <p>また早く発表するためにMVP開発を行っているつもりで製作し今後アップデートしていく形にしました。</p>
            <h4>改善点</h4>
            <p>レスポンシブに全ページ対応させる点、ユーザーが投稿を修正できるようにする点。</p>
            <h4>学べたこと</h4>
            <p>多くの人で1つの制作物を制作するには細かいコミュニケーションが重要と感じました。</p>
            <p>デザインからサーバーの構築、データベースの定義書の作成などコードを書く以外の事も学ぶことができたので全体の流れが学べました。</p>
            <p>また、エラーコードがたくさん出て、その際どのあたりを直すなど考えられるようになったので自己解決能力があがったと感じました。</p>
        </div>
        <div class="photo">
            <figure>
                <figcaption>計画書:Figmaで製作</figcaption>
                <img src="image/figma.png" alt="figma">
            </figure>
            <figure>
                <figcaption>テーブル定義:Excelで製作</figcaption>
                <img src="image/date.png" alt="date">
            </figure>
            <figure>
                <figcaption>画面設計:figmaで製作</figcaption>
                <img src="image/screen.png" alt="screen">
            </figure>
        </div>

        <div class="exposition">
            <p>②オーガニックレストランSIZENのHP制作</p>
            <p>公開していない為URLはありません</p>
        <p>Github<a href="https://github.com/chip1116/live93.git"><img src="image/github-mark.svg" alt=""></a></p>
        <div class="sizen-image">
            <img src="image/sizen.png" alt="toppage">
            <img src="image/sizen2.png" alt="midlepage">
            <img src="image/sizen3.png" alt="endpage">
        </div>
        <div class="detail">
        <h3>制作理由</h3>
        <p>授業で身についたスキルをアウトプットする為。クライアントがいる制作を実践する為</p>
        <h4>使用言語等</h4>
        <p>HTML,CSS,Javascript</p>
        <h4>使用ツール</h4>
        <p>Github,Sourcetree,VScode,Figma</p>
        <h4>製作期間</h4>
        <p>30時間（打合せも含め）</p>
        <h4>制作人数</h4>
        <p>1</p>
        <h4>苦労した点</h4>
        <p>クライアントの要望を反映したデザインがとても難しく時間がかかりました。HTMLの要素の理解が甘く</p>
        <p>うまくCSSが反映されない事があり、もっと勉強が必要と感じました。</p>
        <h4>こだわった点</h4>
        <p>クライアントの要望のナチュラルな雰囲気や農家さんを前面に出すなど要望を踏まえた上で、</p>
        <p>現状のHPの課題であるSNSをアピールして集客を増やす為に、</p>
        <p>常にSNSへのリンクがスクロールでついてくるようにした事です。</p>
        <h4>改善点</h4>
        <p>自社販売ページをPHPで作りたかったが時間が足りずできなかった事と、</p>
        <p>レスポンシブまで考えたコーディングができるようになりたいと思いました。</p>
        <h4>学べたこと</h4>
        <p>HTML/CSSの書き方がとても多くあり、最適な方法を探りながらコーディングする必要を感じました。</p>
        <p>クライアントとの認識のすり合わせが非常に難しく時間がかかる工程で工夫が大切だと学びました。</p>
        </div>

        <div class="exposition">
            <div class="gap">
                <p>③Portfolio紹介サイト</p>
                <p>URL:<a href="https://rerechip.click/portfolio.html">https://rerechip.click/portfolio.html</a></p>
                <p>Github<a href="https://github.com/chip1116/portfolio.git"><img src="image/github-mark.svg" alt=""></a></p>
            <div class="Portfolio-image">
                <img src="image/portfolio2.png" alt="toppage">
            </div>
            </div>
        <div class="detail">
        <h3>制作理由</h3>
        <p>自分の制作した作品を管理し記録してアウトプットすることでスキルアップにつなげる為に制作</p>
        <h4>使用言語等</h4>
        <p>HTML,CSS,Javascript,PHP,jquery</p>
        <h4>使用ツール</h4>
        <p>Github,Sourcetree,VScode,XAMPP,Figma</p>
        <h4>製作期間</h4>
        <p>30時間</p>
        <h4>制作人数</h4>
        <p>1</p>
        <h4>苦労した点</h4>
        <p>いいデザインが浮かばなかった事と、レスポンシブが難しく大変でした。</p>
        <p>また、初めてセキュリティに関するコードを書いたのでその点も難しかったです。</p>
        <h4>こだわった点</h4>
        <p>シンプルに要点をまとめること</p>
        <h4>改善点</h4>
        <p>デザインやUIをブラッシュアップしていきたいです。</p>
        <h4>学べたこと</h4>
        <p>学校で習った時よりCSSの書き方や出来ることが検索すると新しい事を発見し</p>
        <p>短期間にどんどん変わっていく変化の速さを感じました。</p>
        <p>その変化に対応するために、こまめに調べる大切さを学べました。</p>
        <p>また、レスポンシブが少しわかり始めたと感じました。</p>
        </div>
       
    
    <div class="exposition">
        <div class="gap">
            <p>④チーム分けWEBシステム</p>
            <p>URL:<a href="https://team.rerechip.click">https://team.rerechip.click</a></p>
            <p>Github<a href="https://github.com/chip1116/Team-.git"><img src="image/github-mark.svg" alt=""></a></p>
        <div class="Portfolio-image">
            <img src="image/team1.png" alt="toppage">
        </div>
        </div>
    <div class="detail">
    <h3>制作理由</h3>
    <p>チーム分けを簡単にしたい。JSで制作した経験が少ない、Bootstrap以外のCSSフレームワークを使用したかった為</p>
    <h4>使用言語</h4>
    <p>HTML,CSS,Javascript,Bulma</p>
    <h4>使用ツール</h4>
    <p>Github,Sourcetree,VScode</p>
    <h4>製作期間</h4>
    <p>15時間</p>
    <h4>制作人数</h4>
    <p>1人</p>
    <h4>苦労した点</h4>
    <p>javascriptが非常に難しく、複数の本やサイトを探して時間がかかりました。</p>
    <p>またBulmaも資料が少なくやりたいことを実現することが大変でした。</p>
    <h4>こだわった点</h4>
    <p>JSで製作すること。そのためにJSに干渉しないBulmaを選んで使用しました。</p>
    <h4>改善点</h4>
    <p>あらかじめ登録して選択式になるようにしてみたいと思いました。</p>
    <h4>学べたこと</h4>
    <p>JSの奥深さに少し触れ、授業の内容だけでは全く足りず、もっとたくさん勉強しなければと思いました。</p>
    <p>フレームワークでレスポンシブがすぐできており、手軽さを体感しました。</p>
    <p>しかし、手軽なだけではなく、何ができるのかしっかり把握する必要性を学びました。</p>
    </div>
   
</section>
<hr>
    <section id="contact" class="work  box fadeUpTrigger">
        <h2 class="contact-title">Contact</h2>

        <form action="contact.php" method="POST">
            <div>
                <label for="name">お名前</label>
                <input type="text" id="name" name="name">
            </div>
            <div>
                <label for="email">メールアドレス</label>
                <input type="email" name="email" id="email">
            </div>
            <div>
                <label for="message">メッセージ</label>
                <textarea id="message" name="message"></textarea>
            </div>
            <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>"/>

            <button type="submit">送信</button>
        </form>
    </section>

    </main>

    <footer id="footer" class="wrapper">
        
        <p><small>&copy; 2024 Rie.t</small></p>
    </footer>




    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="js/move.js"></script>
</body>

</html>