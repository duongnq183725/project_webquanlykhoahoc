<p>Thêm khóa học</p>
<table border="1" width="100%" style="border-collapse: collapse";>
    <form method="POST" action="modules/coursemanager/process.php">
        <tr>
            <td>Tên khóa học</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Số lượng bài học</td>
            <td><input type="int" name="lesson_number"></td>
        </tr>
        <tr>
            <td>Mô tả</td>
            <td><textarea rows="10" name="description" style="resize: none"></textarea></td>
        </tr>
        <tr>
            <td>Hình ảnh</td>
            <td><input type="file" name="avatar"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="create" value="Thêm khóa học"></td>
        </tr>
    </form>
</table>