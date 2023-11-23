<main class="app-content">
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Danh sách khách hàng</h3>
                <div class="tile-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <!-- <th width="10"><input type="checkbox" id="all"></th> -->
                                <th>Blog_ID</th>
                                <th>Blog_name</th>
                                <th>Blog_content</th>
                                <th>Date</th>
                                <th>Image</th>
                                <th>Chức Năng</th>
                            </tr>
                        </thead>
                        <?php
                        foreach ($list_blog as $blog) {
                            extract($blog);
                            $delete_blog = "index.php?act=delete_blog&id=" . $Blog_ID;
                            $hinhpath = "../upload/" . $Image;
                            if (is_file($hinhpath)) {
                                $hinh = "<img src='" .  $hinhpath . "' height='50px'>";
                            } else {
                                $hinh = "No image found";
                            }
                            echo '<tr>
                                    <td>' . $Blog_ID . '</td>
                                    <td>' . $Blog_name . '</td>
                                    <td>' . $Blog_content . '</td> 
                                    <td>' . $Date . '</td> 
                                    <td>' . $hinh . '</td>
                                    <td>
                                   <a href="' . $delete_blog . '"><input class="btn btn-primary btn-sm" type="button" value="Xóa"></a>
                                    </td>
                                    </tr>';
                        }
                        ?>
                    </table>
                </div>
                <input class="btn btn-save" type="submit" value="Chọn Tất Cả"></input>
                <input class="btn btn-cancel" type="reset" value="Bỏ Chọn Tất Cả">
                <a href="index.php?act=blog"><input class="btn btn-save" type="button" value="Nhập Thêm"></input></a>

            </div>
        </div>
    </div>
</main>