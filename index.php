<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
<style type="text/css">
<!--
body {
	font: 100%/1.4 "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", "メイリオ", Meiryo, Osaka, "ＭＳ Ｐゴシック", "MS P Gothic", sans-serif;
	background: #4E5869;
	margin: 0;
	padding: 0;
	color: #000;
}

/* ~~ エレメント / タグセレクター ~~ */
ul, ol, dl { /* ブラウザー間の相違により、リストの余白とマージンをゼロにすることをお勧めします。一貫性を保つために、量をここで指定するか、リストに含まれるリスト項目 (LI、DT、DD) で指定できます。より詳細なセレクターを記述しない限り、ここで指定する内容が .nav リストにも適用されることに注意してください。 */
	padding: 0;
	margin: 0;
}
h1, h2, h3, h4, h5, h6, p {
	margin-top: 0;	 /* 上マージンを削除すると、マージンを含む div からマージンがはみ出す場合があるという問題を回避できます。残った下マージンにより、後続のエレメントからは離されます。 */
	padding-right: 15px;
	padding-left: 15px; /* div 自体ではなく div 内でエレメントの両側に余白を追加すると、ボックスモデル計算が不要になります。代わりに、両側に余白を指定した div をネストして使用することもできます。 */
}
a img { /* このセレクターは、一部のブラウザーでイメージをリンクで囲んだ場合にイメージの周囲に表示される初期設定の青いボーダーを削除します。 */
	border: none;
}

/* ~~ サイトのリンクのスタイル付けは、ホバー効果を作成するセレクターグループも含め、この順序にする必要があります。~~ */
a:link {
	color:#414958;
	text-decoration: underline; /* 非常に特殊な表示方法でリンクをスタイル付けする場合を除き、一目で見分けられるように下線を指定することをお勧めします。 */
}
a:visited {
	color: #4E5869;
	text-decoration: underline;
}
a:hover, a:active, a:focus { /* このセレクターグループは、キーボードを使用するユーザーに対し、マウスを使用するユーザーと同じホバー効果を提供します。 */
	text-decoration: none;
}

/* ~~ このコンテナが他のすべての div を囲み、パーセンテージに基づいた幅を指定します。~~ */
.container {
	width: 80%;
	max-width: 1260px;/* レイアウトが大型モニターで広がりすぎないように、最大幅を指定することをお勧めします。これにより、読みやすい行の長さを保つことができます。IE6 ではこの宣言は無視されます。 */
	min-width: 780px;/* レイアウトが狭くなりすぎないように、最小幅を指定することをお勧めします。これにより、サイドカラムで読みやすい行の長さを保つことができます。IE6 ではこの宣言は無視されます。 */
	background: #FFF;
	margin: 0 auto; /* 幅に加え、両側を自動値とすることで、レイアウトが中央に揃います。.container の幅を 100% に設定した場合、これは必要ありません。 */
}

/* ~~ これはレイアウト情報です。~~ 

1) 余白は、div の上部または下部にのみ配置されます。この div 内のエレメントには、それ自体に余白があるので、ボックスモデル計算を行う必要がありません。ただし、div 自体に両側の余白やボーダーを指定した場合、その値が加算されたものが合計幅になることに注意してください。div 内のエレメントの余白を削除し、さらにその div 内に、全体のデザインに必要な幅や余白を指定していない 2 つ目の div を追加することもできます。

*/
.content {
	padding: 10px 0;
}

/* ~~ このセレクターグループは、.content 内のリストに領域間隔を指定します。~~ */
.content ul, .content ol { 
	padding: 0 15px 15px 40px; /* この余白は、上述の見出しと段落ルールの右の余白を表します。下の余白はリスト内の他のエレメントとの間隔用に配置され、左の余白はインデント作成用に配置されています。これは必要に応じて調整できます。 */
}

/* ~~ その他の float/clear クラス ~~ */
.fltrt {  /* このクラスを使用すると、ページ内でエレメントを右にフローティングさせることができます。フローティングさせるエレメントは、ページ内で横に並べて表示するエレメントの前に指定する必要があります。 */
	float: right;
	margin-left: 8px;
}
.fltlft { /* このクラスを使用すると、ページ内でエレメントを左にフローティングさせることができます。フローティングさせるエレメントは、ページ内で横に並べて表示するエレメントの前に指定する必要があります。 */
	float: left;
	margin-right: 8px;
}
.clearfloat { /* このクラスは、.container で overflow:hidden が削除されている場合に、<br /> または空の div で、フローティングさせる最後の div に続く最後のエレメントとして (#container 内に) 配置できます。 */
	clear:both;
	height:0;
	font-size: 1px;
	line-height: 0px;
}
-->
</style></head>

<body>

<div class="container">
  <div class="content">
    <h1>説明3</h1>
    <p>このレイアウト用の CSS には、多くのコメントが記述されています。大部分の作業をデザインビューで行う場合、コードを確認して、CSS でリキッドレイアウトを使用する際の参考にしてください。コメントは、サイトを立ち上げる前に削除できます。これらの CSS レイアウトで使用されているテクニックについてさらに学ぶには、アドビデベロッパーセンターの記事 (<a href=http://www.adobe.com/go/adc_css_layouts">http://www.adobe.com/go/adc_css_layouts</a>) をお読みください。</p>
    <h2>レイアウト</h2>
    <p>これは 1 カラムレイアウトなので、.content はフローティングされません。.container 内に .footer を追加する場合、.content div に従うだけです。 </p>
    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
    <!-- end .content --></div>
  <!-- end .container --></div>
</body>
</html>
