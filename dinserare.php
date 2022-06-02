<?php 

$error='';
if (!empty($_POST['id']))
{ if (isset($_POST['submit']))
{ 
if (is_numeric($_POST['id']))
{ 
$id = $_POST['id'];
$simptome = htmlentities($_POST['simptome'], ENT_QUOTES);
$dataInceput = htmlentities($_POST['dataInceput'], ENT_QUOTES);
$comentarii = htmlentities($_POST['comentarii'], ENT_QUOTES);
$diagnostic = htmlentities($_POST['diagnostic'], ENT_QUOTES);
$medicamente = htmlentities($_POST['medicamente'], ENT_QUOTES);
if ($simptome == '' || $dataInceput == ''||$comentarii=='')
{
echo "<div> ERROR: Completati campurile obligatorii!</div>";
}else
{ 
if ($stmt = $mysqli->prepare("UPDATE inserare SET simptome=?,dataInceput=?,comentarii=?diagnostic=?,medicamente=? WHERE id='".$id."'"))
{
$stmt->bind_param("sssss", $simptome, $dataInceput,$comentarii, $diagnostic, $medicamente);
$stmt->execute();
 $stmt->close();
 }
else
{echo "ERROR: nu se poate executa update.";}
}
}
else
{echo "id incorect!";} }}?>
<html> <head><title> <?php if ($_GET['id'] != '') { echo "Modificare inregistrare"; }?> </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf8"/></head>
<body>
<h1><?php if ($_GET['id'] != '') { echo "Modificare Inregistrare"; }?></h1>
<?php if ($error != '') {
echo "<div style='padding:4px; border:1px solid red; color:red'>" . $error."</div>";} ?>
<form action="" method="post">
<div>
<?php if ($_GET['id'] != '') { ?>
<input type="hidden" name="id" value="<?php echo $_GET['id'];?>" />
<p>ID : <?php echo $_GET['id'];


if ($result = $mysqli->query("SELECT * FROM inserare where id='".$_GET['id']."'"))

{
if ($result->num_rows > 0)
{ $row = $result->fetch_object();?></p>
<strong>Simptome: </strong> <input type="text" name="simptome" value="<?php echo$row->simptome;
?>"/><br/>
<strong>dataInceput: </strong> <input type="text" name="dataInceput" value="<?php echo$row->dataInceput;
?>"/><br/>
<strong>comentarii: </strong> <input type="text" name="comentarii" value="<?php echo$row->comentarii;
?>"/><br/>
<strong>diagnostic: </strong> <input type="text" name="diagnostic" value="<?php echo$row->diagnostic;
?>"/><br/>
<strong>tratament: </strong> <input type="text" name="tratament" value="<?php echo$row->tratament;
}}


}?>"/><br/>

<input type="submit" name="submit" value="Submit" />
<a href="Vizualizare2.php">Index</a>
</div></form></body> </html>