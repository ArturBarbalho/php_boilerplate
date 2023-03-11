
<!-- UPLOAD -->
<?php
$id = htmlspecialchars($_GET['id']);

?>
<form enctype="multipart/form-data" method="POST" action="../core/controllers/upload.php">
    <label for="">Select the file</label>
    <input type="file" name="file" accept="image/png, image/jpeg">
    <button type="submit" >Send</button>
</form>

<div id="countDiv">
<button class="btn btn-primary" @click="startCount('<?= $id ?>')">...</button>
<div >{{count}}</div>
</div>
<div><?= $idem ?></div>

<script>
   const id = "<?= $id ?>"

    console.log(id)
</script>


