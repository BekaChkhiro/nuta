<form action="" method="post">
    <input type="text" name="title" value="<?php echo $row->title; ?>" placeholder="title...">
    <input type="text" name="price" value="<?php echo $row->price; ?>" placeholder="price...">
    <input type="text" name="category_id" value="<?php echo $row->category_id; ?>" placeholder="category...">
    <button type="submit">Edit</button>
</form>