<div class="row">
    <div class="row frmtitle">
        <h1>DANH SÁCH TÀI KHOẢN</h1>
    </div>
    <div class="row frmcontent">
        <div class="row mb10 frmdsloai">
            <table>
                <tr>
                    <th></th>
                    <th>ID</th>
                    <th>Nội dung bình luận</th>
                    <th>ID User</th>
                    <th>ID Pro</th>
                    <th>Ngày bình luận</th>
                    <th></th>
                </tr>
                
                <?php
                    foreach($listbinhluan as $binhluan){
                        extract($binhluan);
                        $xoabl="index.php?act=xoabl&id=".$id;
                        echo '
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>'.$id.'</td>
                            <td>'.$noidung.'</td>
                            <td>'.$iduser.'</td>
                            <td>'.$idpro.'</td>
                            <td>'.$ngaybinhluan.'</td>
                            <td><a href="'.$xoabl.'"><input type="button" value="Xóa"></a></td>
                        </tr>';
                    }
                ?>
            </table>
        </div>
        <div class="row mb10">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn">
        </div>
    </div>
</div>