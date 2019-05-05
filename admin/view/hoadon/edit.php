<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form id="RangeValidation" class="form-horizontal" action="" method="post">
                        <div class="card-header card-header-text" data-background-color="rose">
                            <h4 class="card-title">
                                <?php echo $tittle;?>
                            </h4>
                        </div>
                        <div class="card-content">

                           <div class="row">
                                <div class="col-md-6">
                                    <label class="col-sm-5 label-on-left">Mã hóa đơn</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control" type="text" name="bill_mahoadon" 
                                            value="<?php echo @$bi->bill_mahoadon; ?>"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label class="col-sm-3 label-on-left">Ngày đặt</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>

                                            <input class="form-control" type="date" name="bill_ngaydat"
                                            value="<?php echo @$bi->bill_ngaydat; ?>"/>
                                        </div>
                                    </div>
                                </div>
                            </div>&nbsp;                          


                           <div class="row">
                    
                            <div class="col-md-6">
                            <label class="col-sm-5 label-on-left">Trạng thái đơn hàng</label>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-3">
                                        <select class="selectpicker" data-style="btn btn-primary btn-round" data-size="7" name="bill_trangthaidonhang">
                                            <?php
                                                    foreach($stt as $v1)
                                                    {                                                                                               
                                            ?>    
                                                    <option value="<?=@$v1->stb_ma; ?>" <?php if(@$v1->stb_ma == @$bi->bill_trangthaidonhang) echo 'selected';?>>
                                                        <?=@$v1->stb_ten;?>
                                                    </option>
                                            <?php 
                                                    }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                                 <div class="col-md-6">
                                <label class="col-sm-3 label-on-left">Trạng thái</label>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-3">
                                            <select class="selectpicker" data-style="btn btn-primary btn-round" data-size="7" name="bill_trangthai">
       
                                                <option value="1" <?php if(@$bi->bill_trangthai == 1) 
                                                echo 'selected'; ?>>Đã xác nhận</option>
                                                <option value="0" <?php if(@$bi->bill_trangthai == 0) 
                                                echo 'selected'; ?>>Chưa xác nhận</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>&nbsp;

                           <div class="row">
                                <div class="col-md-6">
                                    <label class="col-sm-5 label-on-left">Trị giá</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control" type="text" name="bill_trigia" 
                                            value="<?php echo @$bi->bill_trigia; ?>"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="col-sm-3 label-on-left">Mã giảm giá</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control" type="text" name="bill_magiamgia"
                                            value="<?php echo @$bi->bill_magiamgia; ?>"/>
                                        </div>
                                    </div>
                                </div>
                            </div>&nbsp;

                           <div class="row">
                                <div class="col-md-6">
                                    <label class="col-sm-5 label-on-left">Tên khách hàng</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control" type="text" name="bill_tenkhachhang"
                                            value="<?php echo @$bi->bill_tenkhachhang; ?>"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="col-sm-3 label-on-left">Số điện thoại</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control" type="text" name="bill_sodienthoai"
                                            value="<?php echo @$bi->bill_sodienthoai; ?>"/>
                                        </div>
                                    </div>
                                </div>
                            </div>&nbsp;


                           <div class="row">
                                <div class="col-md-6">
                                    <label class="col-sm-5 label-on-left">Địa chỉ</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control" type="text" name="bill_diachi"
                                            value="<?php echo @$bi->bill_diachi; ?>"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="col-sm-3 label-on-left">Email</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control" type="email" name="bill_email"
                                            value="<?php echo @$bi->bill_email; ?>"/>
                                        </div>
                                    </div>
                                </div>
                            </div>&nbsp;

                        </div>  
                                                                                                                                                                                                                                                                                                                    
                        <div class="card-footer text-center">
                            <button type="submit" name="submit" class="btn btn-primary btn-fill">Xác nhận</button>
                            
                            <button type="reset" class="btn btn-info btn-fill">Làm lại</button>

                            <a href="?controller=hoadon&action=danhsach" class="btn btn-default btn-fill">Hủy</a>
                        </div>
                          
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>