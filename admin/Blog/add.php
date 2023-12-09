<main class="app-content">
    <div class="row">
        <div class="col-md-12">
            <form action="index.php?act=blog" method="post" enctype="multipart/form-data">
                <div class="tile">
                    <h3 class="tile-title">Blog</h3>
                    <div class="tile-body row">
                        <div class="form-group col-md-3">
                            <label class="control-label">Blog Name</label>
                            <input class="form-control" type="text" name="Blog_name" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Blog content</label>
                            <textarea class="form-control" name="Blog_content" cols="30" rows="10"></textarea required>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Date</label>
                            <input class="form-control" type="Date" name="Date" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Image</label>
                            <input class="form-control1" type="file" name="Image" required>
                        </div>
                    </div>
                    <input class="btn btn-save" type="submit" value="Thêm Mới" name="themmoi"></input>
                    <input class="btn btn-cancel" type="reset" value="Nhập lại">

                    <a href="index.php?act=list_blog"><input class="btn btn-save" type="button" value="Danh sách"></input></a>
                    <div class="thongbao btn">
                        <?php
                        if (isset($thongbao) && ($thongbao != ""))
                            echo $thongbao;
                        ?>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>