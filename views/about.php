
<h1><?= $parameter ?></h1>

<!-- UPLOAD -->
<form enctype="multipart/form-data" method="POST" action="../core/controllers/upload.php">
    <label for="">Select the file</label>
    <input type="file" name="file" accept="image/png, image/jpeg">
    <button type="submit" >Send</button>
</form>

<?php
