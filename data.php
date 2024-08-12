<?php
//print_r($_GET);
//echo "name is : " . $_GET['name'] . "& age is" . $_GET['age']; 
echo '<pre>';
echo "Student name is " . $_POST['name'] .
" <br>age is " . $_POST['age'] .
" <br>gender is " . $_POST['gender'] .
" <br>and intrested in learning " . $_POST['course'][0] . ' , '. $_POST['course'][1];
echo '<pre>';

?>