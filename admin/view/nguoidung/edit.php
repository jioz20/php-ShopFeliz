<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form id="RangeValidation" class="form-horizontal" action="" method="post">
                        <div class="card-header card-header-text" data-background-color="rose">
                            <h4 class="card-title">
                                <?php echo $title; ?>
                            </h4>
                        </div>

                            <div class="row">
                                <label class="col-sm-2 label-on-left">Tên</label>
                                <div class="col-sm-7">
                                    <div class="form-group label-floating">
                                        <label class="control-label"></label>
                                        <input class="form-control" type="text" name="gov_ten" 
                                        value="<?php echo @$nguoidung->gov_ten; ?>" />
                                    </div>
                                </div>
                            </div>&nbsp;

                            <div class="row">
                                <label class="col-sm-2 label-on-left">Tên đăng nhập</label>
                                <div class="col-sm-7">
                                    <div class="form-group label-floating">
                                        <label class="control-label"></label>
                                        <input class="form-control" type="text" name="gov_tendangnhap"
                                        value="<?php echo @$nguoidung->gov_tendangnhap; ?>"/>
                                    </div>
                                </div>
                            </div>&nbsp;


                            <div class="row">
                                <label class="col-sm-2 label-on-left">Mật khẩu</label>
                                <div class="col-sm-7">
                                    <div class="form-group label-floating">
                                        <label class="control-label"></label>
                                        <input class="form-control" type="password" name="gov_matkhau"
                                        value="<?php echo @$nguoidung->gov_matkhau; ?>"/>
                                    </div>
                                </div>
                            </div>&nbsp;
                            
                           <div class="row">
                                <div class="col-md-5">
                                <label class="col-sm-5 label-on-left">Nhóm quản trị</label>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-3">
                                            <select class="selectpicker" data-style="btn btn-primary btn-round" data-size="7" name="gov_manhom" >
                                            <?php
                                                    foreach($dsnhomquantri as $v1)
                                                    {                                                         
                                            ?>    
                                                    <option value="<?=@$v1->groupads_ma; ?>" <?php if(@$v1->groupads_ma == @$nguoidung->gov_manhom) echo 'selected';?>>
                                                        <?=@$v1->groupads_ten;?>
                                                    </option>
                                            <?php 
                                                    }
                                            ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-5">
                                <label class="col-sm-3 label-on-left">Trạng thái</label>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-3">
                                            <select class="selectpicker" data-style="btn btn-primary btn-round" data-size="7" name="gov_trangthai" >      
                                                <option value="1" <?php if(@$nguoidung->gov_trangthai == 1) 
                                                echo 'selected'; ?>>Kích hoạt</option>
                                                <option value="0" <?php if(@$nguoidung->gov_trangthai == 0) 
                                                echo 'selected'; ?>>Khóa</option>       
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>&nbsp;
                            <div class="row">
                                <label class="col-sm-2 label-on-left">Email</label>
                                <div class="col-sm-7">
                                    <div class="form-group label-floating">
                                        <label class="control-label"></label>
                                        <input class="form-control" type="email" name="gov_email" 
                                        value="<?php echo @$nguoidung->gov_email; ?>"/>
                                    </div>
                                </div>
                            </div>&nbsp;
                                                                                                                                                                                                                                                                                                                    
                        <div class="card-footer text-center">   
                            <button type="submit" name="submit" class="btn btn-primary btn-fill">Xác nhận</button>

                            <button type="reset" class="btn btn-info btn-fill">Làm lại</button>

                            <a href="?controller=nguoidung&action=danhsach" class="btn btn-default btn-fill">Hủy</a>
                        </div>
                          
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>