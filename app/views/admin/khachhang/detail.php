<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Thông tin chi tiết</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form>
                                
                                <?php
                                    if(!empty($list)){
                                        echo "
                                            <div class='form-group'>
                                                <label>Tên khách hàng</label>
                                                <input type='text' class='form-control' value='{$list['ten_nd']}' disabled>
                                            </div>

                                            <div class='form-group'>
                                                <label>Ảnh</label>
                                                <div style='width:15%'>
                                                    <img src='../../../public/image/anhnguoidung/{$list['anh_nd']}' alt='' class='img-fluid'>
                                                </div>
                                            </div>

                                            <div class='form-group'>
                                                <label>Email</label>
                                                <input type='text' class='form-control' value='{$list['email_nd']}' disabled>
                                            </div>

                                            <div class='form-group'>
                                                <label>Mật khẩu</label>
                                                <input type='text' class='form-control' value='{$list['mk_nd']}' disabled>
                                            </div>

                                            <div class='form-group'>
                                                <label>Ngày sinh</label>
                                                <input type='text' class='form-control' value='{$list['ngaysinh_nd']}' disabled>
                                            </div>
    
                                            <div class='form-group'>
                                                <label>Số điện thoại</label>
                                                <input type='text' class='form-control' value='{$list['sdt_nd']}' disabled>
                                            </div>

                                            <div class='form-group'>
                                                <label for='role'>Địa chỉ</label>
                                                <textarea class='form-control' rows='3' disabled>{$list['diachi_nd']}</textarea>
                                            </div>
    
                                            <a href='index.php?act=kh&type=edit&id={$list['id_nd']}' class='btn btn-success'>Chỉnh sửa thông tin</a>
                                        ";
                                    }
                                ?>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>