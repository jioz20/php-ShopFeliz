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
                                            <input class="form-control" type="text" value="<?=$config->config_ma;?>" disabled="disabled" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="col-sm-2 label-on-left">Tên</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control" type="text" disabled="disabled" value="<?=$config->config_code;?>"/>
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
                                                <input type="checkbox" disabled="disabled" <?php if($config->config_trangthai == 1) echo 'checked'; ?> >
                                            </label>
                                         </div>
                                        </div>
                                    </div>
                                </div>
                            </div>&nbsp;

                           <div class="row">
                                <div class="col-md-6">
                                    <label class="col-sm-5 label-on-left">Ngày cập nhật</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control" type="text" disabled="disabled" value="<?=$config->config_ngaycapnhat;?>"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="col-sm-2 label-on-left">Ngày tạo</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control" type="text" disabled="disabled" value="<?=$config->config_ngaytao;?>"/>
                                        </div>
                                    </div>
                                </div>
                            </div>&nbsp;

                            <div class="row">
                                <label class="col-sm-2 label-on-left">Giá trị</label>
                                <div class="col-sm-9">
                                    <div class="form-group label-floating">
                                        <label class="control-label"></label>
                                        <textarea id="contentx" rows="25" name="config_giatri" class="form-control" disabled>
                                            <?php echo $config->config_giatri; ?>
                                        </textarea>
                                    </div>
                                </div>
                            </div>&#11;
                        </div>&nbsp;
                                                                                                                                                                                                                                                                                                                    
                        <div class="card-footer text-center">   
                            <a href="?controller=cauhinh&action=danhsach" class="btn btn-default btn-fill">Trở lại</a>
                        </div>
                          
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>