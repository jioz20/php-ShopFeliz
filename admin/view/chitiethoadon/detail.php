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

                    <?php 
                        foreach($cthd as $v)
                        {
                     ?>
                            <div class="row">
                               <div class="col-md-6">
                                    <label class="col-sm-5 label-on-left">Mã hóa đơn</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control" type="text" disabled="disabled"
                                            value="<?=$v->detail_mahoadon; ?>" />
                                        </div>
                                    </div>
                                </div> 
            

                                <div class="col-md-6">
                                    <label class="col-sm-3 label-on-left">Sản phẩm</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control" type="text" disabled="disabled"
                                            value="<?=$v->detail_masanpham;?>" />
                                        </div>
                                    </div>
                                </div>
                            </div>&nbsp;
                           <div class="row">
                                <div class="col-md-6">
                                    <label class="col-sm-5 label-on-left">Số lượng</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control" type="text" disabled="disabled"
                                            value="<?=$v->detail_soluong;?>"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="col-sm-3 label-on-left">Đơn giá</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control" type="text" disabled="disabled"
                                             value="<?=$v->detail_dongia;?>"/>
                                        </div>
                                    </div>
                                </div>
                            </div>&nbsp;

                            <div class="row">
                                <div class="col-md-6">
                                    <label class="col-sm-5 label-on-left">Ngày tạo</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control" type="text" disabled="disabled"
                                             value="<?=$v->detail_ngaytao;?>"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="col-sm-3 label-on-left">Trạng thái</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                         <div class="togglebutton">
                                            <label style="padding-top: 16px;">
                                                <input type="checkbox" disabled="disabled" 
                                                <?=$a=($v->detail_trangthai == 1) ? 'checked': ''; ?>>
                                            </label>
                                         </div>
                                        </div>
                                    </div>
                                </div>
                            </div>&nbsp;
                        <?php 
                            }
                         ?>

                        
                        </div> 
                                                                                                                                                                                                                                                                                                                    
                        <div class="card-footer text-center">   
                            <a href="?controller=chitiethoadon&action=danhsach" class="btn btn-default btn-fill">Trở lại</a>
                        </div>
                          
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>