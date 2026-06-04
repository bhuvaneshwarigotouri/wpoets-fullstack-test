<!DOCTYPE html>
<html>
<head>
<title>Add Slide</title>
</head>

<body>

<form action="save.php" method="POST" enctype="multipart/form-data">

    <input type="text"
           name="tab_title"
           placeholder="Tab Title"
           required>

    <input type="text"
           name="slide_title"
           placeholder="Slide Title"
           required>

    <textarea name="slide_description"></textarea>

    <input type="file"
           name="image"
           required>

    <button type="submit">
        Save
    </button>

</form>

</body>
</html>
