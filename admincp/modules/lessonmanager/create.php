<p>Thêm bài học</p>
<table border="1" width="100%" style="border-collapse: collapse";>
    <form method="POST" action="modules/lessonmanager/process.php" enctype="multipart/form-data">
        <tr>
            <td>Tên bài học</td>
            <td><input type="text" name="name"></td>
        </tr>
        <!-- <tr>
            <td>Nội dung bài học</td>
            <td><input type="int" name="lesson_number"></td>
        </tr> -->
        <tr>
            <td>Nội dung bài học</td>
            <td><textarea rows="10" name="content" style="resize: none"></textarea></td>
        </tr>
        <tr>
            <td>Hình ảnh</td>
            <td><input type="file" name="thumbnail"></td>
        </tr>
        <tr>
            <td>Video</td>
            <td><input type="file" name="video"></td>
        </tr>
        <tr>
            <td>File</td>
            <td><input type="file" name="file"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="create" value="Thêm khóa học"></td>
        </tr>
    </form>
</table>