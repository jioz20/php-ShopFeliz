<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form id="RangeValidation" class="form-horizontal" action="" method="">
                        <div class="card-header card-header-text" data-background-color="rose">
                            <h4 class="card-title">DETAIL</h4>
                        </div>
                        <div class="card-content">

                           <div class="row">
                                <div class="col-md-6">
                                    <label class="col-sm-5 label-on-left">ID</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control" type="text" disabled="disabled"
                                            value="<?=$bi->bill_ma;?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="col-sm-3 label-on-left">Mã hóa đơn</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control" type="text" disabled="disabled"
                                             value="<?=$bi->bill_mahoadon;?>"/>
                                        </div>
                                    </div>
                                </div>
                            </div>&nbsp;

                           <div class="row">
                                <div class="col-md-6">
                                    <label class="col-sm-5 label-on-left">Ngày đặt</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control" type="date" disabled="disabled"
                                             value="<?=$bi->bill_ngaydat;?>"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="col-sm-3 label-on-left">Trạng thái</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                         <div class="togglebutton">
                                            <label style="padding-top: 16px;">
                                                <input type="checkbox" <?=$a=($bi->bill_trangthai==1)?'checked' : ''; ?> disabled="disabled">
                                            </label>
                                         </div>
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
                                            <input class="form-control" type="text" disabled="disabled"
                                            value="<?=$bi->bill_trigia;?>"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="col-sm-3 label-on-left">Mã giảm giá</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control" type="text" disabled="disabled"
                                            value="<?=$bi->bill_magiamgia;?>"/>
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
                                            <input class="form-control" type="text" disabled="disabled"
                                            value="<?=$bi->bill_tenkhachhang;?>"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="col-sm-3 label-on-left">Số điện thoại</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control" type="text" disabled="disabled"
                                            value="<?=$bi->bill_sodienthoai;?>"/>
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
                                            <input class="form-control" type="text" disabled="disabled"
                                            value="<?=$bi->bill_diachi;?>"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="col-sm-3 label-on-left">Email</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control" type="text" disabled="disabled"
                                            value="<?=$bi->bill_email;?>"/>
                                        </div>
                                    </div>
                                </div>
                            </div>&nbsp;

                           <div class="row">
                            <?php 
                                foreach($stbill as $v)
                                {
                                    if($v->stb_ma == $bi->bill_trangthaidonhang)
                                    {
                             ?>
                                <div class="col-md-6">
                                    <label class="col-sm-5 label-on-left">Trạng thái đơn hàng</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control" type="text" disabled="disabled"
                                            value="<?=$v->stb_ten;?>"/>
                                        </div>
                                    </div>
                                </div>
                            <?php 
                                    }
                                }
                             ?>
                                <div class="col-md-6">
                                    <label class="col-sm-3 label-on-left">Ngày tạo</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control" type="text" disabled="disabled"
                                            value="<?=$bi->bill_ngaytao;?>"/>
                                        </div>
                                    </div>
                                </div>
                            </div>&nbsp;

                        </div>  
                                                                                                                                                                                                                                                                                                                    
                        <div class="card-footer text-center">
                            <a href="?controller=hoadon&action=danhsach" class="btn btn-default btn-fill">Trở lại</a>
                        </div>
                          
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>