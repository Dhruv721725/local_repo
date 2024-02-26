<!-- Backend codes written in php for webtech assignment -->

<!-- problem 1 -->
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $price=(int)$_POST["price"];
    $tp=$price;
    if ($price>5000){
        $tp=$price*(0.9);
    }
    echo "$tp is atotal price.";
    ?>

    <!-- problem 2 -->
    <?php
    $col=$_POST["color"];
    if ($col=="red"){
        echo "stop";
    }
    elseif ($col=="yellow") {
        echo "ignite your engine";
    }
    elseif ($col=="green") {
        echo "go";
    }
    else{
        echo "traffic light isn't working properly.";
    }
}
?>

<!-- problem 3 -->
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $steps=(int)$_POST["steps"];
    echo "Fitness level: ";
    if($steps<5000){
        echo "Beginner";
    }
    elseif ($steps>5000 and $steps<10000) {
        echo "Intermediate";
    }
    else{
        echo "Advanced"
    }
}
?>

<!-- problem 4 -->
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $scr=(int)$_POST["score"];
    echo "Your Grade: ";
    if($scr<=60){
        echo "F";
    }
    elseif ($scr<=70) {
        echo "D";
    }
    elseif ($scr<=80) {
        echo "C";
    }
    elseif ($scr<=90) {
        echo "B";
    }
    elseif ($scr>90 and $scr<=100) {
        echo "A";
    }
    else{
        echo "Ye scr toh kisi ka ho hi nhi sakta"
    }
}
?>

<!-- problem 5 -->
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $price=(int)$_POST["price"];
    $tp=$price;
    $n=1000;
    if ($price>1000){
        $ovp=$price - $n
        echo "You will get a discount on $ovp <br>as you have shopped over 1000<br>";
        $tp=1000 + $ovp*0.9;
        echo "now the price is: $tp <br>";
    }
    echo "payable amount is: $tp";
}
?>

<!-- problem 6 -->
<?php
$users=array(
    array("name"=>"Dhruv","pass"=>7474),
    array("name"=>"Ankshu","pass"=>2121),
    array("name"=>"Rishi","pass"=>1414),
    array("name"=>"Jatin","pass"=>9494),
    array("name"=>"Peepu","pass"=>3232)
);
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $usr=$_POST["usrnm"];
    $pass=$_POST["pass"];
    $nm=FALSE;
    $ps=FALSE;
    foreach ($users as $el) {
        if ($usr==$el["name"]){
            $nm=TRUE;
            if ($pass==$el["pass"]){
                $ps=TRUE;
                echo "access granted<br>";
                echo "Hi $usr <br>";
                break;
            }
        }
    }
    if (!$nm){
        echo "user dosen't exists<br>";
    }
    elseif(!$ps){
        echo "invalid password<br>";    
    }
    else{
        echo "hogya na login ab kya jaan loge<br>";
    }
}
?>

<!-- problem 7 -->
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $tmp=(int)$_POST["tmp"];
    echo "Your should ";
    if($tmp>=36){
        echo "stay inside, you may get dehydrate and skin burns☀️.";
    }
    elseif ($tmp>=28) {
        echo "try to be in shed during outing, sun shine will be vitamin d full🌞";
    }
    elseif ($tmp>=22) {
        echo "go for a picnic or outing weather seems to be really good🌤️.";
    }
    elseif ($tmp>=18) {
        echo "take umbrella with you it may rain and you will be wet🌦️.";
    }
    elseif ($tmp>=12) {
        echo "wear jacket, weather seems to be colder";
    }
    else{
        echo "stay inside, try to avoid cold stuff and wear hot clothes else you will be deceased."
    }
}
?>

<!-- problem 8 -->
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $scr=(int)$_POST["score"];
    echo "Your Grade: ";
    if($scr<=60){
        echo "F";
    }
    elseif ($scr<=70) {
        echo "D";
    }
    elseif ($scr<=80) {
        echo "C";
    }
    elseif ($scr<=90) {
        echo "B";
    }
    elseif ($scr>90 and $scr<=100) {
        echo "A";
    }
    else{
        echo "Ye scr toh kisi ka ho hi nhi sakta"
    }
}
?>

<!-- problem 9 -->
<?php
$users=array(
    array("name"=>"Dhruv","pass"=>7474,"Premium"=>FALSE),
    array("name"=>"Ankshu","pass"=>2121,"Premium"=>TRUE),
    array("name"=>"Rishi","pass"=>1414,"Premium"=>TRUE),
    array("name"=>"Jatin","pass"=>9494,"Premium"=>TRUE),
    array("name"=>"Peepu","pass"=>3232,"Premium"=>TRUE)
);
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $usr=$_POST["usrnm"];
    $pass=$_POST["pass"];
    $nm=FALSE;
    $ps=FALSE;
    foreach ($users as $el) {
        if ($usr==$el["name"]){
            $nm=TRUE;
            if ($pass==$el["pass"]){
                $ps=TRUE;
                if ($el["Premium"]){
                    echo "Premium features ke naam pr tumhara kaata ja sakta hai🤣<br>";
                    echo "Hi $usr the raees🤑<br>";
                    break;
                }
                else {
                    echo "Hi! $usr, mujhe pata hai tum jugaadu ho😎<br>";
                }
            }
        }
    }
    if (!$nm){
        echo "user dosen't exists🥲<br>";
    }
    elseif(!$ps){
        echo "invalid password🤧<br>";    
    }
    else{
        echo "hogya na login ab kya jaan loge🥱<br>";
    }
}
?>

<!-- problem 10 -->
<?php
$st="this is a sample string which we are going to truncate";
// $st=$_POST["title"];
if (strlen($st)>50){
    $title=substr($st,0,50);
} 
else{
    $title=$st;
}
echo $title;
?>

<!-- problem 11 -->
<?php
// array containing different questions with options and answers inside associative arrays
$questions=array(
    array("question"=>"Who is she?",
    "opt1"=>"Ankshu","opt2"=>"4*3","opt3"=>"softie","opt4"=>"dead",
    "ans"=>"Ankshu")
);
// creating questions on page
$n=0;
foreach ($questions as $arr) {
    echo ++$n.".".$arr["question"]."<br>";
    echo "<input type='radio' name='q".$n."' value='".$arr["opt1"]."'>".$arr["opt1"]."<br>";
    echo "<input type='radio' name='q".$n."' value='".$arr["opt2"]."'>".$arr["opt2"]."<br>";
    echo "<input type='radio' name='q".$n."' value='".$arr["opt3"]."'>".$arr["opt3"]."<br>";
    echo "<input type='radio' name='q".$n."' value='".$arr["opt4"]."'>".$arr["opt4"]."<br><br>";
}
echo "<input type='submit' value='submit'><br>";
// checking answes and giving marks
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $i=0;
    $scr=0;
    while ($i < $n) {
        $i++;
        if (isset($_POST["q".$i])){
            $q=$_POST["q".$i];
            if ($q==$questions[$i-1]["ans"]){
                $scr++;
            }
        }
    }
    $per=$scr*100/$n;
    echo "Your Score is: $per%";
}
?>

<!-- problem 12 -->
<?php
$users=array(
    array("name"=>"Dhruv","pass"=>7474,"email"=>"dhruv721725@gmail.com"),
    array("name"=>"Ankshu","pass"=>2121,"email"=>"ankshu@gmail.com"),
    array("name"=>"Rishi","pass"=>1414,"email"=>"assnoti@gmail.com"),
    array("name"=>"Jatin","pass"=>9494,"email"=>"nachaniya@gmail.com"),
    array("name"=>"Peepu","pass"=>3232,,"email"=>"peepu@gmail.com")
);
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $usr=$_POST["usrnm"];
    $mail=$_POST["email"];
    $pass=$_POST["pass"];
    $nm=FALSE;
    $ps=FALSE;
    $ue=FALSE;

    foreach ($users as $el) {
        if ($el["email"]==$mail) {
            $ue=TRUE;
            if ($usr==$el["name"]){
                $nm=TRUE;
                if ($pass==$el["pass"]){
                    $ps=TRUE;
                    echo "access granted<br>";
                    echo "Hi $usr <br>";
                    break;
                }
            }
        }
    }
    if(!$ue){
        echo "seems like you are new user you will get a free subscription for a month";
    }
    elseif (!$nm){
        echo "user dosen't exists<br>";
    }
    elseif(!$ps){
        echo "invalid password<br>";    
    }
    else{
        echo "hogya na login ab kya jaan loge<br>";
    }
}
?>



