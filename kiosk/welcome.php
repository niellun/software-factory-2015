
<?php
// Include header
include( dirname(__FILE__) . '/header.php' );

//$id = $_GET['id'];
$id = $_COOKIE['userid'];
// Connect to DB
$db = mysqli_connect(SQL_HOST, SQL_USER, SQL_PASS, SQL_DB )
or die( "MySQL connection error: " . mysqli_connect_error() );
$query = "SELECT * FROM user WHERE uid = $id";
$result = mysqli_query( $db, $query );
if($row = mysqli_fetch_assoc($result))
{
	$name = $row['name'];
	//setcookie('username',$name);
}else {
	//what if get nothing?
	$name = $row;
}?>

<div class="wrapper" id="welcome">

<div class="content welcome">
   	<h1 id='text-name'><?=WELCOME?>
   	<?php 
   	if($_COOKIE['isfirst']){
   	echo " ".$name."!";
   	}else{
   	echo "Back ".$name."!";
   	}


   	?></h1>
<div class="row">
<a href="#" class="col left exercise highlight" onclick=onBtnClick('exercise')>Exercise</a>
<a href="#" class="col right goal highlight" onclick=onBtnClick('goal')>Goals</a>
<a href="#" class="col left challenge highlight" onclick=onBtnClick('challenge')>Challenge</a>
<a href="#" class="col left profile highlight" onclick=onBtnClick('profile')>Profile</a>
<a href="#" class="col right rank highlight" onclick=onBtnClick('rank')>Top users</a>
</div>
</div>
</div>

<script>
/*	$().ready(function(){
var name = $.cookie("username");
    $("#text-name").append(' '+name+'!');
})*/

function onBtnClick(pagename){
var uid = $.cookie('userid');
switch(pagename){
case 'exercise':
window.location ='exercise-type.php';
break;
case 'goal':
window.location ='goals.php';
break;
case 'profile':
window.location ='profile.php?id='+uid;
break;
case 'rank':
window.location ='rank.php';
break;
case 'challenge':
window.location='challenge.php?id=<?php echo $id?>';
break;
}
}
</script>

</body></html>
