<html>
    <head>
    <meta charset="utf-8">
    </head>
    <?php
     $text="mission_3-5.txt";//テキストをtextに代入
     date_default_timezone_set('Asia/Tokyo');//日本時間に設定
     if(!file_exists($text)){
       touch($text);
     //   $num=0;
     }
        if(!empty($_POST["comment"]) && !empty($_POST["name"]) && !empty($_POST["pw"])){
       // if($_POST["comment"]!=="" && $_POST["name"]!==""){//コメント欄と名前らんが空欄でなかったら
            $name=$_POST["name"];//変数nameに名前を代入
            $comment=$_POST["comment"];//変数commentにコメントを代入
            $pw=$_POST["pw"];
            $date=date("Y/m/d H:i:s");//現在時刻をdateに代入
            $lines=file($text);//Lineに1行ずつ配列にしたものを代入する
            if(!empty($_POST["editview"] )){//編集モード
                //if($_POST["editview"]!==""){//編集番号欄が空欄でなかったら
                    $editview=$_POST["editview"];//編集番号を代入
                    $fp = fopen($text,"w");//テキストを開きいったん空欄にする。
                        foreach($lines as $line)://配列の数だけループ
                            $space=explode("<>",$line);//配列を<>で区切ってspaceに代入
                                if($editview==$space[0]){//編集の行頭の数字と一緒だったら
                                    fwrite($fp,$editview."<>".$name."<>".$comment."<>".$date."<>".$pw."<>"."\n");//テキストファイルを編集する
                                }
                                else{
                                    fwrite($fp,$space[0]."<>".$space[1]."<>".$space[2]."<>".$space[3]."<>".$space[4]."<>"."\n");//テキストファイルの中に書き込み
                                }
                        endforeach;
                        fclose($fp);
                }
            else{//追記モード
                $fp = fopen($text,"a");//テキストを追記もーどで開く
                if(count($lines)==0){
                $num=1;
                }
                else{
                $numfile=end($lines);//配列の最後の行を代入
                $num=explode("<>",$numfile);//配列の最後の行を区切る？
                $num=$num[0]+1;//最後の行の一番最初に使われている番号に１をたす
                }
                fwrite($fp,$num."<>".$name."<>".$comment."<>".$date."<>".$pw."<>"."\n");//テキストファイルに追記する
                fclose($fp);
            }
        }
        
        elseif(isset($_POST["deletenum"])){//削除したい数字を読み込み
            $deletenum=$_POST["deletenum"];//削除したい数字を変数に代入
            $lines=file($text);//テキストファイル1行ごとに配列にする
            $fp = fopen($text,"w");//テキストファイルをいったん空白しにして再度書き込みモードにする
            foreach($lines as $line)://配列の数だけループする
                $space=explode("<>",$line);//<>て配列の中を区切る
                if($deletenum==$space[0] && $space[4]==$_POST["deletepw"]){
                }
                else{
                    fwrite($fp,$space[0]."<>".$space[1]."<>".$space[2]."<>".$space[3]."<>".$space[4]."<>"."\n");
                }
            endforeach;
            fclose($fp);
       }
       elseif(isset($_POST["editnum"])){
           $editnum=$_POST["editnum"];
            $lines=file($text);
            $fp = fopen($text,"r");
            foreach($lines as $line)://配列の数だけループする
                $space=explode("<>",$line);//<>て配列の中を区切る
                if($editnum==$space[0] && $space[4]==$_POST["editpw"]){//もしも入力された数字と、配列の数が一緒だったら
                    $editnumone=$space[0];
                    $editname=$space[1];
                    $editcomment=$space[2];
                }
            endforeach;
            fclose($fp);
       }

    ?>
    <body>
        <form method="POST" action="">
            <input type="text" name="name" value="<?php if(!empty($editname)){echo $editname;} ?>"
            placeholder="名前"><br>
            <input type="text" name="comment" value="<?php if(!empty($editcomment)){echo $editcomment;} ?>"
            placeholder="コメント"><br>
            <input type="text" name="pw" 
            placeholder="パスワード">
            <input type="submit" name="submit" value="送信"></p>
            <input type="hidden" name="editview" value="<?php if(!empty($editnumone)){echo $editnumone;} ?>">
        </form>
        <form method="POST" action="">
            <input type="text" name="deletenum" placeholder="削除対象番号"><br>
            <input type="text" name="deletepw" 
            placeholder="パスワード">
            <input type="submit" name="delete" value="削除"></p>
        </form>
        <form method="POST" action="">
            <input type="text" name="editnum" placeholder="編集対象番号"><br>
            <input type="text" name="editpw" 
            placeholder="パスワード">
            <input type="submit" name="edit" value="編集"></p>
        </form>
        <?php
        if(file_exists($text)){
            $lines=file($text);//Lineに1行ずつ配列にしたものを代入する
            foreach($lines as $line)://配列の数だけループ
            $space=explode("<>",$line);//配列を<>で区切ってspaceに代入
            echo $space[0]." ".$space[1]." ".$space[2]." ".$space[3]."<br>";//一つ一つスペースをつけて出力していく
            endforeach;
        }
        ?>
    </body>
</html>