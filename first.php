<!DOCTTYPE html>
<html>
    <head>
        <title>First</title>
</head>
<body>
    <h1>This is my first File in php</h1>
    
</body>

</html>

<!-- <form method="GET">
  Name: <input type="text" name="name"><br><br>
  Father Name: <input type="text" name="fname"><br><br>
  Id: <input type="text" name="id"><br><br>
  <input type="submit">
</form> -->








<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Website: <input type="text" name="website">
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>



<!-- 
<?php
if($_SERVER['REQUEST_METHOD']=='GET'){
    $name=$_GET['name'];
    $fname=$_GET['fname'];
    $id=$_GET['id'];

    echo $fname,$name,$id;
}

?>


 -->
<?php
// this is for post code 
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   $name= $_POST['name'];
//   $fname= $_REQUEST['name'];
//   $id=$_REQUEST['id'];

//   if(empty($name && $fname && $id)){
//     echo 'fill filed';
//   }
//   else{
//     echo $name,'  ',$fname,' ',$id;
//   }
// }
?>



<?php 
// $name="saba atta";

// function simple(){
//     global $name;
//     echo $name;
// }
// simple();

?>


<?php
// $a = 1;
// $b = 2;

// function Sum()
// {
//     global $a, $b;

//     $b = $a + $b;
// } 

// Sum();
// echo $b;
?>

<?php
// $a = 1;
// $b = 2;

// function Sums()
// {
//     $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
// } 

// Sums();
// echo $b;
?> 

<?php







// echo $_SERVER['PHP_SELF'];
// echo "<br>";
// echo $_SERVER['SERVER_NAME'];
// echo "<br>";
// echo $_SERVER['HTTP_HOST'];
// echo "<br>";
// echo $_SERVER['HTTP_REFERER'];
// echo "<br>";
// echo $_SERVER['HTTP_USER_AGENT'];
// echo "<br>";
// echo $_SERVER['SCRIPT_NAME'];


//SUPER GLOBELS
// $GLOBALS

// $x=10;$y='saba';$z='sulmi123';

// function xyz(){
//     $ab = 20;
//     $ba=30;
//     return $ab+$ba+$GLOBALS['x'].$GLOBALS['y'];
// }
// echo xyz();



// Arrays Concepts

//simple aray (index ary), aray with keyword 'array', associativ array (key and valu),
//  multidimentional array and assosiative

//simple array

// $simple_ary=[10,20,13,224,5];
// $simple_ary1=array(' asif','mariam','sahar','saba','asifa','samra');

// // before sorting
// for($i=0;$i<count($simple_ary) || $i<count($simple_ary1);$i++){
//     echo $simple_ary[$i],'<br>';
//     ECHO $simple_ary1[$i],'<br>';
// }
// echo '<br>';

// // after sorting

// echo sort($simple_ary);
// rsort($simple_ary1);
// for($i=0;$i<count($simple_ary) || $i<count($simple_ary1);$i++){
//     echo $simple_ary[$i],'<br>';
//     ECHO $simple_ary1[$i],' , ';
// }


//assosiative array

$asso_ary1=array('a'=>'apple','b'=>'ball','c'=>'cat','a'=>'alina','c'=>'camera','n'=>'naila');


// for($i=0; $i<sizeof($asso_ary1);$i++){
//     echo $asso_ary1[$i];
// }

// echo $asso_ary1['c'];
// echo $asso_ary1['c'];





// String function consepts and practices

// $text="hy im saba, im student of umt university i have done bs software engineering";
// echo $text;
// echo '<br>';
// echo strlen($text);
// echo implode('  ', str_split($text));
// echo str_repeat($text,5);
// echo str_shuffle($text);
// echo str_word_count($text);
// $texte = "This is an example text.<br>";
// echo $texte;
// echo str_ireplace("example", "sample", $texte);
// echo str_pad($text,100,"*",STR_PAD_BOTH);
// $text = "Hello";
// $padded_text = str_pad($text, 10, "*", STR_PAD_RIGHT);
// echo $padded_text;
// echo str_rot13($text);//replaces each letter with the letter 13 positions
// echo strrev($text);
// echo strpos($text,'saba');

//example of constatnt veriables

// define("GREETING", "Welcome to W3Schools.com!");
// echo GREETING;
// define('greetings','Asslamo Alaikum ');
// echo greetings;
// function constatnts(){
//     echo greetings,'directly accesable from global scope';
// }
// constatnts();
// define('ary',[1=>'saba',2,3,4,5,6]);
// echo ary[4];





    // exmaples of class


    // class Human{
        
        // var $eyes;
        // public $nose;
        // public $lips;

        // public function __construct($eyes,$nose,$lips){
        //     $this->eyes= $eyes;
        //     $this->nose=$nose;
        //     $this->lips= $lips;
        // }

//         function eyes($eyes,$nose,$lips){
//         //    echo 'human has 2 ', $this->eyes, ' and '. $this->nose .' nose',' '.$this->lips;
//            echo 'human has 2 ','<b>', $eyes,'<b>', ' and '. $nose .' nose',' '.$lips.' its working ';
//         }

//     }
// $human = new Human;

// echo $human->eyes('eyes','nose','lips'),'<br>';
// echo $human->eyes('aaa','bbb','lipcccs'),'<br>';
// echo $human->eyes('ey222es','234','9978'),'<br>';

    
    // echo 'this is start of class';
    // class MyClass{
    //     var $v = "GeeksforGeeks";
    //     var $f_name='atta';
    //     var $s_name='shabo';

    //     function myname(){
    //         echo $name;
    //     }
    //     function myf_name($f_name){
    //         echo $f_name;
    //     }
    //     function mys_name(){
    //         echo $s_name;
    //     }
    // }
    
    // $obj1 = new MyClass();
    // $obj1->myf_name('ddtdyt');
    // echo $obj1->v;



    ?>