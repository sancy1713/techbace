<html>
    <head>
    <meta charset="utf-8">
    </head>
    <body>
        <h1>ジャンプの基礎点計算表</h1>
        <?php
            $jumpkind1 = array('トゥループ', 'サルコウ', 'ループ', 'フリップ', 'ルッツ', 'アクセル');
        ?>
        <!--3連続ジャンプフォーム -->
        <p>
        <form method="POST" action="">
            <select name="speed1">
                <option value="speed1">回転数</option>
                <?php
                    for($i=1;$i<=4;$i++){
                    echo "<option value='{$i}'>{$i}</option>";
                    }
                ?>
            </select>
        <select name="jumpkind1">
            <option value="jumpkind1">ジャンプの種類</option>
            <?php
                foreach($jumpkind1 as $sent1){
                echo "<option value='$sent1'>$sent1</option>";
                }
            ?>
        </select>
        <select name="speed2">
            <option value="speed2">回転数</option>
            <?php
                for($i=1;$i<=4;$i++){
                echo "<option value='{$i}'>{$i}</option>";
                }
            ?>
        </select>
        <?php
            $jumpkind2 = array('トゥループ', 'サルコウ', 'ループ', 'フリップ', 'ルッツ', 'アクセル', 'オイラー');
        ?>
        <select name="jumpkind2">
            <option value="jumpkind2">ジャンプの種類</option>
            <?php
                foreach($jumpkind2 as $sent2){
                echo "<option value='$sent2'>$sent2</option>";
                }
            ?>
        </select>
        <select name="speed3">
            <option value="speed3">回転数</option>
            <?php
                for($i=1;$i<=4;$i++){
                echo "<option value='{$i}'>{$i}</option>";
                }
            ?>
        </select>
        <select name="jumpkind3">
            <option value="ジャンプの種類">ジャンプの種類</option>
            <?php
                foreach($jumpkind1 as $sent1){
                echo "<option value='$sent1'>$sent1</option>";
                }
            ?>
        </select>
        <input type="checkbox" name="bonus1" value="後半ボーナス">後半ボーナス
        <input type="checkbox" name="sequence1" value="ジャンプシークエンス">ジャンプシークエンス
        </p>
        <!--2連続ジャンプフォーム1 -->
        <p>
        <select name="speed4">
            <option value="speed4">回転数</option>
            <?php
            for($i=1;$i<=4;$i++){
            echo "<option value='{$i}'>{$i}</option>";
            }
            ?>
        </select>
        <select name="jumpkind4">
            <option value="ジャンプの種類">ジャンプの種類</option>
            <?php
            foreach($jumpkind1 as $sent1){
            echo "<option value='$sent1'>$sent1</option>";
            }
            ?>
        </select>
        <select name="speed5">
            <option value="speed5">回転数</option>
            <?php
            for($i=1;$i<=4;$i++){
            echo "<option value='{$i}'>{$i}</option>";
            }
            ?>
        </select>
        <select name="jumpkind5">
            <option value="ジャンプの種類">ジャンプの種類</option>
            <?php
            foreach($jumpkind1 as $sent1){
            echo "<option value='$sent1'>$sent1</option>";
            }
            ?>
        </select>
        <input type="checkbox" name="bonus2" value="後半ボーナス">後半ボーナス
        <input type="checkbox" name="sequence2" value="ジャンプシークエンス">ジャンプシークエンス
        </p>
        <!--2連続ジャンプフォーム2-->
        <p>
        <select name="speed6">
            <option value="speed6">回転数</option>
            <?php
            for($i=1;$i<=4;$i++){
            echo "<option value='{$i}'>{$i}</option>";
            }
            ?>
        </select>
        <select name="jumpkind6">
            <option value="jumpkind6">ジャンプの種類</option>
            <?php
            foreach($jumpkind1 as $sent1){
            echo "<option value='$sent1'>$sent1</option>";
            }
            ?>
        </select>
        <select name="speed7">
            <option value="speed7">回転数</option>
            <?php
            for($i=1;$i<=4;$i++){
            echo "<option value='{$i}'>{$i}</option>";
            }
            ?>
        </select>
        <select name="jumpkind7">
            <option value="jumpkind7">ジャンプの種類</option>
            <?php
            foreach($jumpkind1 as $sent1){
            echo "<option value='$sent1'>$sent1</option>";
            }
            ?>
        </select>
        <input type="checkbox" name="bonus3" value="後半ボーナス">後半ボーナス
        <input type="checkbox" name="sequence3" value="ジャンプシークエンス">ジャンプシークエンス
        </p>
        <!--単独ジャンプフォーム1-->
        <p>
        <select name="speed8">
            <option value="speed8">回転数</option>
            <?php
            for($i=1;$i<=4;$i++){
            echo "<option value='{$i}'>{$i}</option>";
            }
            ?>
        </select>
        <select name="jumpkind8">
            <option value="jumpkind8">ジャンプの種類</option>
            <?php
            foreach($jumpkind1 as $sent1){
            echo "<option value='$sent1'>$sent1</option>";
            }
            ?>
        </select>
        <input type="checkbox" name="bonus4" value="後半ボーナス">後半ボーナス
        </p>
        <!--単独ジャンプフォーム2-->
        <p>
        <select name="speed9">
            <option value="speed9">回転数</option>
            <?php
            for($i=1;$i<=4;$i++){
            echo "<option value='{$i}'>{$i}</option>";
            }
            ?>
        </select>
        <select name="jumpkind9">
            <option value="ジャンプの種類">ジャンプの種類</option>
            <?php
            foreach($jumpkind1 as $sent1){
            echo "<option value='$sent1'>$sent1</option>";
            }
            ?>
        </select>
        <input type="checkbox" name="bonus5" value="後半ボーナス">後半ボーナス
        </p>
        <!--単独ジャンプフォーム3-->
        <p>
        <select name="speed10">
            <option value="speed10">回転数</option>
            <?php
            for($i=1;$i<=4;$i++){
            echo "<option value='{$i}'>{$i}</option>";
            }
            ?>
        </select>
        <select name="jumpkind10">
            <option value="jumpkind10">ジャンプの種類</option>
            <?php
            foreach($jumpkind1 as $sent1){
            echo "<option value='$sent1'>$sent1</option>";
            }
            ?>
        </select>
        <input type="checkbox" name="bonus6" value="後半ボーナス">後半ボーナス
        </p>
        <!--単独ジャンプフォーム4-->
        <p>
        <select name="speed11">
            <option value="speed11">回転数</option>
            <?php
            for($i=1;$i<=4;$i++){
            echo "<option value='{$i}'>{$i}</option>";
            }
            ?>
        </select>
        <select name="jumpkind11">
            <option value="jumpkind11">ジャンプの種類</option>
            <?php
            foreach($jumpkind1 as $sent1){
            echo "<option value='$sent1'>$sent1</option>";
            }
            ?>
        <input type="checkbox" name="bonus7" value="bonus7">後半ボーナス
        </select>
        <input type="submit" name="keisan" value="計算">
        </p>
        </from>
        <?php
$num=0;//合計点を集計するための関数を初期化
$num1=0;//一つ一つのジャンプを計算するための関数
if(!empty($_POST["bonus1"])){//もしボーナスのチェックが入っていたら
$bonus1=1;
}
else{
$bonus1=0;
}
if(!empty($_POST["bonus2"])){//もしボーナスのチェックが入っていたら
$bonus2=1;
}
else{
$bonus2=0;
}

if(!empty($_POST["bonus3"])){//もしボーナスのチェックが入っていたら
$bonus3=1;
}
else{
$bonus3=0;
}

if(!empty($_POST["bonus4"])){//もしボーナスのチェックが入っていたら
$bonus4=1;
}
else{
$bonus4=0;
}

if(!empty($_POST["bonus5"])){//もしボーナスのチェックが入っていたら
$bonus5=1;
}
else{
$bonus5=0;
}

if(!empty($_POST["bonus6"])){//もしボーナスのチェックが入っていたら
$bonus6=1;
}
else{
$bonus6=0;
}

if(!empty($_POST["bonus7"])){//もしボーナスのチェックが入っていたら
$bonus7=1;
}
else{
$bonus7=0;
}
if(!empty($_POST["sequence1"])){//もしジャンプシークエンスのチェックが入っていたら
$sequence1=1;
}
else{
$sequence1=0;
}

if(!empty($_POST["sequence2"])){//もしジャンプシークエンスのチェックが入っていたら
$sequence2=1;
}
else{
$sequence2=0;
}

if(!empty($_POST["sequence3"])){//もしジャンプシークエンスのチェックが入っていたら
$sequence3=1;
}
else{
$sequence3=0;
}
$sequence4=0;//４は問答無用で０にする（単独ジャンプにシークエンスはないため）

function jump($speed1,$jumpkind1,$bonus1,$sequence1){//回転数、ジャンプの種類、ボーナス、シークエンスの有無によって
    $num1=0;//いったん初期化
    if($speed1==1){//回転数が一回だったら
        if($jumpkind1=="トゥループ"){//一回転かつトゥループジャンプだったら
            $num1=+0.4;//点数を加算

        }
        elseif($jumpkind1=="サルコウ"){
            $num1=+0.4;
        }
        elseif($jumpkind1=="ループ"){
            $num1=+0.5;
        }
        elseif($jumpkind1=="フリップ"){
            $num1=+0.5;
        }
        elseif($jumpkind1=="ルッツ"){
            $num1=+0.6;
        }
        elseif($jumpkind1=="アクセル"){
            $num1=+1.1;
        }
        elseif($jumpkind1=="オイラー"){
            $num1=+0.5;
        }

    }
    elseif($speed1==2){
        if($jumpkind1=="トゥループ"){
            $num1=+1.3;
        }
        elseif($jumpkind1=="サルコウ"){
            $num1=+1.3;
        }
        elseif($jumpkind1=="ループ"){
            $num1=+1.7;
        }
        elseif($jumpkind1=="フリップ"){
            $num1=+1.8;
        }
        elseif($jumpkind1=="ルッツ"){
            $num1=+2.1;
        }
        elseif($jumpkind1=="アクセル"){
            $num1=+3.3;
        }
    }
    elseif($speed1==3){
        if($jumpkind1=="トゥループ"){
            $num1=+4.2;
        }
        elseif($jumpkind1=="サルコウ"){
            $num1=+4.3;
        }
        elseif($jumpkind1=="ループ"){
            $num1=+4.9;
        }
        elseif($jumpkind1=="フリップ"){
            $num1=+5.3;
        }
        elseif($jumpkind1=="ルッツ"){
            $num1=+5.9;
        }
        elseif($jumpkind1=="アクセル"){
            $num1=+8;
        }
    }
    elseif($speed1==4){
        if($jumpkind1=="トゥループ"){
            $num1=+9.5;
        }
        elseif($jumpkind1=="サルコウ"){
            $num1=+9.7;
        }
        elseif($jumpkind1=="ループ"){
            $num1=+10.5;
        }
        elseif($jumpkind1=="フリップ"){
            $num1=+11;
        }
        elseif($jumpkind1=="ルッツ"){
            $num1=+11.5;
        }
        elseif($jumpkind1=="アクセル"){
            $num1=+12.5;
        }
    }
    if($bonus1==1){//ボーナスにチェックが入っていたら
        $num1=$num1*1.1;//1.1点をかける
    }
    if($sequence1==1){
        $num1=$num1*0.8;
    }
    return $num1;//これまでで出てきた一つのジャンプの基礎点をnumに加算する
    
}
        if(!empty($_POST["speed1"]) && !empty($_POST["jumpkind1"])){//回転数とジャンプの種類になんらかの入力があったら
            $speed1=$_POST["speed1"];//代入
            $jumpkind1=$_POST["jumpkind1"];
            $num+=jump($speed1,$jumpkind1,$bonus1,$sequence1);//Numに上のジャンプの基礎点を加算する
            
        }
        if(!empty($_POST["speed2"]) && !empty($_POST["jumpkind2"])){
            $speed2=$_POST["speed2"];
            $jumpkind2=$_POST["jumpkind2"];
            $num+=jump($speed2,$jumpkind2,$bonus1,$sequence1);
            
        }
        if(!empty($_POST["speed3"]) && !empty($_POST["jumpkind3"])){
            $speed3=$_POST["speed3"];
            $jumpkind3=$_POST["jumpkind3"];
            $num+=jump($speed3,$jumpkind3,$bonus1,$sequence1);
        }
        if(!empty($_POST["speed4"]) && !empty($_POST["jumpkind4"])){
            $speed4=$_POST["speed4"];
            $jumpkind4=$_POST["jumpkind4"];
            $num+=jump($speed4,$jumpkind4,$bonus2,$sequence2);
        }
        if(!empty($_POST["speed5"]) && !empty($_POST["jumpkind5"])){
            $speed5=$_POST["speed5"];
            $jumpkind5=$_POST["jumpkind5"];
            $num+=jump($speed5,$jumpkind5,$bonus2,$sequence2);
        }
        if(!empty($_POST["speed6"]) && !empty($_POST["jumpkind6"])){
            $speed6=$_POST["speed6"];
            $jumpkind6=$_POST["jumpkind6"];
            $num+=jump($speed6,$jumpkind6,$bonus3,$sequence3);
        }
        if(!empty($_POST["speed7"]) && !empty($_POST["jumpkind7"])){
            $speed7=$_POST["speed7"];
            $jumpkind7=$_POST["jumpkind7"];
            $num+=jump($speed7,$jumpkind7,$bonus3,$sequence3);
        }
        if(!empty($_POST["speed8"]) && !empty($_POST["jumpkind8"])){
            $speed8=$_POST["speed8"];
            $jumpkind8=$_POST["jumpkind8"];
            $num+=jump($speed8,$jumpkind8,$bonus4,$sequence4);
        }
        if(!empty($_POST["speed9"]) && !empty($_POST["jumpkind9"])){
            $speed9=$_POST["speed9"];
            $jumpkind9=$_POST["jumpkind9"];
            $num+=jump($speed9,$jumpkind9,$bonus5,$sequence4);
        }
        if(!empty($_POST["speed10"]) && !empty($_POST["jumpkind10"])){
            $speed10=$_POST["speed10"];
            $jumpkind10=$_POST["jumpkind10"];
            $num+=jump($speed10,$jumpkind10,$bonus6,$sequence4);
        }
        if(!empty($_POST["speed11"]) && !empty($_POST["jumpkind11"])){
            $speed11=$_POST["speed11"];
            $jumpkind11=$_POST["jumpkind11"];
            $num+=jump($speed11,$jumpkind11,$bonus7,$sequence4);
        }



        echo $num;//最終的な合計点を加算する。
        ?>
            </body>
    </html>