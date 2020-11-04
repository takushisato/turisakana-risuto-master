<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=960">
    <link rel="stylesheet" href="./css/styles.css">
    <script type="text/javascript" src="./js/main.js"></script>
    <title>お魚 ＆ おすすめ料理</title>
  </head>
  <body>
      <div class="container js-animation">
          <?php
          $sakana = $_POST['nerautsuki'];
          $sakana = htmlspecialchars($sakana,ENT_QUOTES,'UTF-8');

          $tsuki[] = '';
          $tsuki[] = '『白子入りマダラ』と『ソイ』';
          $tsuki[] = '『白子入りマダラ』と『ソイ』';
          $tsuki[] = '『産後から回復したマダラ』と『マス』';
          $tsuki[] = '『マス』と『春カレイ』';
          $tsuki[] = '『春カレイ』と『マス』';
          $tsuki[] = '『アイナメ』と『ヒラメ』';
          $tsuki[] = '『ヒラメ』と『ブリ』';
          $tsuki[] = '『ヒラメ』と夜釣りで『アナゴ』';
          $tsuki[] = '『ブリ』と夜釣りで『アナゴ』';
          $tsuki[] = '『ヒラメ』と『ブリ』';
          $tsuki[] = '『子持ちアイナメ』と『ソイ』などのメバル系の根魚';
          $tsuki[] = '『子持ちアイナメ』と『ソイ』などのメバル系の根魚';

          $ryouri[] = '';
          $ryouri[] = 'マダラはズバリ『白子ポン酢』<br />新鮮な白子を軽く湯引きしてポン酢で頂くと最高！！<br />他、『天ぷら』『フライ』も美味しいです。<br /><br />また、ソイは２日程度熟成させて『刺身』が美味しい';
          $ryouri[] = '１月同様ですが、マダラはズバリ『白子ポン酢』<br />新鮮な白子を軽く湯引きしてポン酢で頂くと最高！！<br />他、『天ぷら』『フライ』も美味しいです。<br /><br />また、ソイは刺身もいいですが『煮付け』が最高';
          $ryouri[] = '産後から回復したマダラは、脂が戻ってきているので『唐揚げ』『フライ』等の揚げ物にすると美味。<br />鍋にするにしても、この時期の方が冬季より美味。<br /><br />３月になるとマスが釣れる可能性が出てきます。<br />もしマスが釣れたら『塩焼き』か『ルイベ』がおすすめ';
          $ryouri[] = 'マスジギングの最盛期に突入です。<br />マスは『塩焼き』『ルイベ』。<br />※マスの刺身は寄生虫がいるのでNGです。<br /><br />春のカレイが始まります。<br />釣れたら１〜２日程度熟成させて『刺身』が美味しいですが、定番の『煮付け』も最高';
          $ryouri[] = 'マスは『塩焼き』『ルイベ』。<br />※マスの刺身は寄生虫がいるのでNGです。<br /><br />春のマコガレイが釣れたら１〜２日程度熟成させて『刺身』が最高';
          $ryouri[] = 'この時期のアイナメはとにかく脂が乗っていて何にしても美味。<br />その中でも『刺身』『唐揚げ』『フライ』がおすすめ。<br /><br />ヒラメは何と言ってもエンガワの『刺身』';
          $ryouri[] = 'ヒラメは何と言ってもエンガワの『刺身』ですよね。<br /><br />ブリ系が釣れたら、夏ですが是非とも新鮮な『ブリしゃぶ』を味わってもらいたい。<br />余計な脂や臭みが抜けて昆布の味が絡みつきとても美味になります。きっとその味に虜になる';
          $ryouri[] = 'アナゴは白焼き、煮アナゴなど。<br />蒲焼は一般家庭では敷居が高いですが、もし可能であれば挑戦してみても。<br />うまく調理できればウナギのそれより上回りる';
          $ryouri[] = '７月、８月と被りますが、ブリは『しゃぶしゃぶ』です。<br />しかし『なめろう』もいけますｗ<br />もし刺身があまったら、なめろうにしてみると良いですよ。<br /><br />アナゴは『煮アナゴ』です。<br />アナゴは臭みが抜けにくい魚なので、下処理をきちんとやるのが美味しく食べるコツ';
          $ryouri[] = 'アイナメは子持ちになり始める季節なので刺身よりは『唐揚げ』『フライ』等の揚げ物系がおすすめ。<br /><br />ブリ系は『ブリしゃぶ』『なめろう』がおすすめ';
          $ryouri[] = '子持ちアイナメは『煮付け』かな。<br />刺身は子持ちの場合は卵に栄養を持っていかれているので、あまりおすすめ出来ません。<br /><br />ソイなどの他の根魚が釣れたら『刺身』『塩焼き』辺りがおすすめ';
          $ryouri[] = '子持ちアイナメは『煮付け』かな。<br />刺身は子持ちの場合は卵に栄養を持っていかれているので、あまりおすすめ出来ません。<br /><br />ソイなどの他の根魚が釣れたら『刺身』『塩焼き』辺りがおすすめ';

          $gazou[] = '';
          $gazou[] = 'madara.jpg';
          $gazou[] = 'soi.jpg';
          $gazou[] = 'masu.jpg';
          $gazou[] = 'karei.jpg';
          $gazou[] = 'karei2.jpg';
          $gazou[] = 'ainame.png';
          $gazou[] = 'hirame.jpeg';
          $gazou[] = 'anago.jpg';
          $gazou[] = 'buri.jpg';
          $gazou[] = 'ainame2.jpg';
          $gazou[] = 'ainame2.jpg';
          $gazou[] = 'mebaru.jpg';

          $gazousetumei[] = '';
          $gazousetumei[] = 'マダラはクセのない白身なので、どんな料理にも合います。ムニエルやソテーなどもおすすめ♪';
          $gazousetumei[] = 'ソイは刺身もいいですが、出汁が美味しいので味噌汁や煮物に入れるのもOK！';
          $gazousetumei[] = 'マスは塩焼きが一番おすすめですが、一度冷凍してルイベにするのも美味しいですよ♪';
          $gazousetumei[] = '出汁が美味ので定番の煮付けが外れなし';
          $gazousetumei[] = '煮付けが定番ですが、あえて定番を外し刺身という選択も○';
          $gazousetumei[] = '夏のアイナメの薄造りは絶品！！ぜひ一度お試しあれ♪';
          $gazousetumei[] = 'ヒラメはエンガワが全て。エンガワを刺身で美味しく頂きましょう';
          $gazousetumei[] = '煮アナゴ、白焼きが調理しやすい。蒲焼は一般家庭では少々大変。';
          $gazousetumei[] = 'ブリはこの時期になるとサイズが小さくとも数が釣れます。ぜひブリしゃぶを試して頂きたい。';
          $gazousetumei[] = 'アイナメは金色がオス、茶色がメスと言われています。';
          $gazousetumei[] = 'この時期のアイナメは産卵が絡んでいるため婚姻色が強く出てきます。資源保護のためにも極力リリースを。';
          $gazousetumei[] = 'メバル類で一番美味しいのがこの赤い色をした通称『メガラ』です。鮮度の良いメガラの塩焼きは絶品！';

          if($sakana =='' || !preg_match("/^([0-9]{1,2})$/", $sakana) || $sakana > 12) {
              print '<br />';
              print '半角数字で入力してください。<br />スペースが入っていてもエラーになります。';
          } else {
              print '<br />';
              print '<h1>'.$sakana.'月のおすすめは・・・</h1>';
              print '<br />';
              print $tsuki[$sakana];
              print ' が狙い時です。<br /><br />';
              print 'おすすめの料理は';
              print $ryouri[$sakana];
              print 'でしょう。';
              print '<br /><br />';
              print '<img src="./img/'.$gazou[$sakana].'" class="ryouri-img">';
              print '<br />';
              print '<p style="color: blue;">'.$gazousetumei[$sakana].'</p>';
              print '<br /><br />';
          }
          ?>
          <a href="./index.html">戻る</a>
      </div>

  </body>
</html>