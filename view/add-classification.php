<!DOCTYPE html>
<html lang="en-us">

<?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/head.php'; ?>


<main>

<?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/header.php'; ?>

<nav>
<?php echo $navList; ?>
</nav>


<h1>Add Car Classification</h1>
<form class="add" action="/phpmotors/vehicles/index.php" method="post">
<table class="regForm">
<tr><td>
<label id="classificationName">Classification Name<abbr class="req">*</abbr></label>
</td><td>
<input type="text" id="classificationName" name="classificationName" required>
  
</td></tr>

<tr><td colspan="2">
<input type="submit" name="submit" id="regbtn" value="Add Classification"> 

<!-- Add the action name - value pair -->
<input type="hidden" name="action" value="insertclassification">
</td></tr>
</table>
</form>


</main>
<hr>
<footer>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; ?>
</footer>

</body>
</html>
    