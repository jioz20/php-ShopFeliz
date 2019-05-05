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
                                            <input class="form-control" value="<?=$func->fun_ma;?>" type="text" disabled="disabled"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="col-sm-3 label-on-left">Alias</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control" value="<?=$func->fun_link;?>" type="text" disabled="disabled"/>
                                        </div>
                                    </div>
                                </div>
                            </div>&nbsp;

                           <div class="row">
                                <div class="col-md-6">
                                    <label class="col-sm-5 label-on-left">Tên chức năng</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control" value="<?=$func->fun_ten;?>" type="text" disabled="disabled"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="col-sm-3 label-on-left">Ngày cập nhật</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control" type="text" value="<?=$func->fun_ngaycapnhat;?>" disabled="disabled"/>
                                        </div>
                                    </div>
                                </div>                                
                            </div>&nbsp;

                           <div class="row">
                        <?php 
                            foreach($dsnhomquantri as $val)
                            {
                                if($val->groupads_ma == $func->fun_chucnangcha)
                                {
                            
                         ?>
                                <div class="col-md-6">
                                    <label class="col-sm-5 label-on-left">Nhóm</label>
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
                                <div class="col-md-6">
                                    <label class="col-sm-3 label-on-left">Trạng thái</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                         <div class="togglebutton">
                                            <label style="padding-top: 16px;">
                                                <input type="checkbox" <?php if($func->fun_trangthai == 1) echo 'checked'; ?> disabled="disabled">
                                            </label>
                                         </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                                                                                                                                                                                                                                                                                                                    
                        <div class="card-footer text-center">   
                            <a href="?controller=chucnang&action=danhsach" class="btn btn-default btn-fill">Trở lại</a>
                        </div>
                          
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>