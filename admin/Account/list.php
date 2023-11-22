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
                                <th>User_ID</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Email</th>
                                <th>FullName</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Chức Năng</th>
                            </tr>
                        </thead>
                        <?php
                        foreach ($list_account as $account) {
                            extract($account);
                            $edit_account = "index.php?act=edit_account&id=" . $User_ID;
                            $delete_account = "index.php?act=delete_account&id=" . $User_ID;
                            // $hinhpath = "../upload/" . $Image;
                            // if (is_file($hinhpath)) {
                            //     $hinh = "<img src='" .  $hinhpath . "' height='50px'>";
                            // } else {
                            //     $hinh = "No image found";
                            // }
                            echo '<tr>
                                    <td>' . $User_ID . '</td>
                                    <td>' . $User . '</td>
                                    <td>' . $Password . '</td> 
                                    <td>' . $Email . '</td> 
                                    <td>' . $FullName . '</td>
                                    <td>' . $role . '</td>
                                    <td>' . $Status . '</td>
                                    <td>
                                    <a href="' . $edit_account . '"><input class="btn btn-primary btn-sm trash" type="button" value="Sửa"></a>
                                    <a href="' . $delete_account . '"><input class="btn btn-primary btn-sm" type="button" value="Xóa"></a>
                                    </td>
                                    </tr>';
                        }
                        ?>
                    </table>
                </div>
                <input class="btn btn-save" type="submit" value="Chọn Tất Cả"></input>
                <input class="btn btn-cancel" type="reset" value="Bỏ Chọn Tất Cả">
                <input class="btn btn-save" type="button" value="Xóa Các Mục Đã Chọn">
            </div>
        </div>
    </div>
</main>