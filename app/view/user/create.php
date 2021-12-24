<!-- form -->
<form action="#" method="POST" enctype="multipart/form-data">
    <label>Заголовок записи:</label>
    <input type="text" class="form-control" name="post_title" placeholter="Заголовок поста">
    <label>Текст записи</label>
    <textarea id="editor" class="form-control" name="post_content"></textarea>
    <label>Добавить изображение:</label>
    <input type="file" class="form-control" name="title_img">
    <label>Тема записи:</label>
    <input type="checkbox" class="form-check-input" name="status"><label>Опубликовать</label><br>
    <input type="reset" class="btn btn-secondary">
    <input type="submit" class="btn btn-primary" name="create_post" value="Добавить пост">
</form>

<!-- script -->
<script src="<?=FILE?>ckeditor5/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector("#editor"))
        .cache(error=>{
            console.error(error)
        });
</script>