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
                                            value="<?=$dezc->decentz_ma; ?>"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="col-sm-3 label-on-left">Trạng thái</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                         <div class="togglebutton">
                                            <label style="padding-top: 16px;">
                                                <input type="checkbox" <?php if($dezc->decentz_trangthai == 1) echo 'checked'; ?> disabled="disabled">
                                            </label>
                                         </div>
                                        </div>
                                    </div>
                                </div>
                            </div>&nbsp;

                           <div class="row">
                        <?php 
                            foreach($dschucnang as $val)
                            {
                                if($val->fun_ma ==$dezc->decentz_machucnang)
                                {
                            
                         ?>                            
                                <div class="col-md-6">
                                    <label class="col-sm-5 label-on-left">Chức năng</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control" type="text" value="<?=$val->fun_ten?>" disabled="disabled"/>
                                        </div>
                                    </div>
                                </div>
                        <?php 
                                }
                            }

                            foreach($dsnguoidung as $val)
                            {
                                if($val->gov_ma ==$dezc->decentz_manguoidung)
                                {
                         ?>                                
                                <div class="col-md-6">
                                    <label class="col-sm-3 label-on-left">Người dùng</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control" type="text" value="<?=$val->gov_ten;?>" disabled="disabled"/>
                                        </div>
                                    </div>
                                </div>
                        <?php 
                                }
                            }
                        ?>                                
                            </div>&nbsp;

                           <div class="row">
                                <div class="col-md-6">
                                    <label class="col-sm-5 label-on-left">Ngày tạo</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control" type="text" disabled="disabled"
                                            value="<?=$dezc->decentz_ngaytao; ?>"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="col-sm-3 label-on-left">Ngày cập nhật</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control" type="text" disabled="disabled"
                                            value="<?=$dezc->decentz_ngaycapnhat; ?>"/>
                                        </div>
                                    </div>
                                </div>
                            </div>&nbsp;
                        </div>  
                                                                                                                                                                                                                                                                                                                    
                        <div class="card-footer text-center">   
                            <a href="?controller=phanquyen&action=danhsach" class="btn btn-default btn-fill">Trở lại</a>
                        </div>
                          
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>