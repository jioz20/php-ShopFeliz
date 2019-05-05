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
                                            <input class="form-control" type="text" value="<?=$nd->gov_ma;?>" disabled="disabled"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="col-sm-3 label-on-left">Tên</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control" value="<?=$nd->gov_ten;?>" type="text" disabled="disabled"/>
                                        </div>
                                    </div>
                                </div>
                            </div>&nbsp; 

                           <div class="row">
                                <div class="col-md-6">
                                    <label class="col-sm-5 label-on-left">Tên đăng nhập</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control" value="<?=$nd->gov_tendangnhap;?>" type="text" disabled="disabled"/>
                                        </div>
                                    </div>
                                </div>
                        <?php 
                            foreach($dsnhomquantri as $val)
                            {
                                if($val->groupads_ma == $nd->gov_manhom)
                                {
                            
                         ?>
                                <div class="col-md-6">
                                    <label class="col-sm-3 label-on-left">Nhóm</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control" type="text" value="<?=$val->groupads_ten; ?>" disabled="disabled"/>
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
                                    <label class="col-sm-5 label-on-left">IP Address</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control" value="<?=$nd->gov_ip_dangnhap;?>" type="text" disabled="disabled"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="col-sm-3 label-on-left">Truy cập lần cuối</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control" type="text" value="<?=$nd->gov_truycaplancuoi;?>" disabled="disabled"/>
                                        </div>
                                    </div>
                                </div>
                            </div>&nbsp; 

                            <div class="row">
                               <div class="col-md-6">                                
                                    <label class="col-sm-5 label-on-left">Trạng thái</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                             <div class="togglebutton">
                                                <label style="padding-top: 16px;">
                                                    <input type="checkbox" <?php if($nd->gov_trangthai == 1) echo 'checked'; ?> disabled="disabled">
                                                </label>
                                             </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="col-sm-3 label-on-left">Ngày tạo</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control" type="text" value="<?=$nd->gov_ngaytao;?>" disabled="disabled"/>
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                                                                                                                                                                                                                                                                                    
                        <div class="card-footer text-center">   
                            <a href="?controller=nguoidung&action=danhsach" class="btn btn-default btn-fill">Trở lại</a>
                        </div>
                          
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>