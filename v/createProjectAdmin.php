<h1>Project - Add project</h1>
<h2>Welcome <?=$_SESSION['theName']?></h2>
<?php
# aaa102 if create error
if(isset($error)) echo "<h3>$error</h3>";
?>
<form action="" name="oneName" method="post">
    <input type="text" name="thetitle" placeholder="Le titre" required><br>
    <textarea name="thetext" placeholder="Votre texte" required></textarea><br>
    <input type="hidden" name="utilIdutil" value="<?=$_SESSION['idutil']?>">
    <!-- # aaa098 before choosing a datetime picker -->
    <input type="text" name="thedate" value="<?=date("Y-m-d H:i:s")?>"><br>
    <input type="submit" value="Envoyer">
</form>
</body>
</html>
