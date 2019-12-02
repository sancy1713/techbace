<html>
    <head>
    <meta charset="utf-8">
    </head>
    <?php
//データベース接続
$dsn = 'データベース名';
            $user = 'ユーザー名';
            $password = 'パスワード';
            $pdo = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
//
     date_default_timezone_set('Asia/Tokyo');//日本時間に設定
        if(!empty($_POST["comment"]) && !empty($_POST["name"]) && !empty($_POST["pw"])){
            if(!empty($_POST["editview"] )){//編集モード
                $id = $_POST["editview"]; //変更する投稿番号
                $name = $_POST["name"];
                $comment = $_POST["comment"]; //変更したい名前、変更したいコメントは自分で決めること
                $date = date("Y/m/d H:i:s");
                $pw = $_POST["pw"];
                $sql = 'update board set name=:name,comment=:comment,date=:date,pw=:pw where id=:id';
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':name', $name, PDO::PARAM_STR);
                $stmt->bindParam(':comment', $comment, PDO::PARAM_STR);
                $stmt->bindParam(':date', $date, PDO::PARAM_STR);
                $stmt->bindParam(':pw', $comment, PDO::PARAM_STR);
                $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                $stmt->execute();
                }
            else{//追記モード
                //データベース入力
                $sql = $pdo -> prepare("INSERT INTO board (name, comment, date, pw) VALUES (:name, :comment, :date, :pw)");
                $sql -> bindParam(':name', $name, PDO::PARAM_STR);
                $sql -> bindParam(':comment', $comment, PDO::PARAM_STR);
                $sql -> bindParam(':date', $date, PDO::PARAM_STR);
                $sql -> bindParam(':pw', $pw, PDO::PARAM_STR);
                $name = $_POST["name"];
                $comment = $_POST["comment"]; //好きな名前、好きな言葉は自分で決めること
                $date = date("Y/m/d H:i:s");
                $pw = $_POST["pw"];
                $sql -> execute();
            }
        }
        
        elseif(isset($_POST["deletenum"])){//削除したい数字を読み込み
            $id = $_POST["deletenum"];
            $deletepw =  $_POST["deletepw"];
            $sql = 'delete from board where id=:id and pw=:pw ';
            $stmt = $pdo->prepare($sql);
            $stmt -> bindParam(':pw', $deletepw, PDO::PARAM_STR);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
       }
       elseif(isset($_POST["editnum"])){
           //編集
            $id =  $_POST["editnum"];
            $pw =  $_POST["editpw"];
            $sql = 'SELECT * FROM board where id=:id and pw=:pw ';
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':pw', $pw, PDO::PARAM_STR);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            $results = $stmt->fetchAll();
            foreach ($results as $row){
                //$rowの中にはテーブルのカラム名が入る
                $editnumone=$row['id'];
                $editname=$row['name'];
                $editcomment=$row['comment'];
                
            }
           //編集
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
       $sql = 'SELECT * FROM board';
       $stmt = $pdo->query($sql);
       $results = $stmt->fetchAll();
       foreach ($results as $row){
           //$rowの中にはテーブルのカラム名が入る
           echo $row['id'].' ';
           echo $row['name'].' ';
           echo $row['comment'].' ';
           echo $row['date'].'<br>';
       }
        ?>
    </body>
</html>