<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form id="RangeValidation" class="form-horizontal" action="" method="post">
                        <div class="card-header card-header-text" data-background-color="rose">
                            <h4 class="card-title">
                                <?php echo $tittle; ?>
                            </h4>
                        </div>
                        <div class="card-content">
                            <div class="row">
                                <label class="col-sm-2 label-on-left">CODE</label>
                                <div class="col-sm-7">
                                    <div class="form-group label-floating">
                                        <label class="control-label"></label>
                                        <input class="form-control" type="text" name="config_code" 
                                        value="<?php echo @$config->config_code; ?>"/>
                                    </div>
                                </div>
                            </div>&nbsp;

                            <div class="row">
                                <label class="col-sm-2 label-on-left">Trạng thái</label>
                                    <div class="row">
                                        <div class="col-lg-2 col-md-6 col-sm-3">
                                            <select class="selectpicker" data-style="btn btn-primary btn-round" data-size="7" name="config_trangthai" >

                                                <option value="1" <?php if(@$config->config_trangthai == 1) 
                                                echo 'selected'; ?>>Bật</option>
                                                <option value="0" <?php if(@$config->config_trangthai == 0) 
                                                echo 'selected'; ?>>Tắt</option> 

                                            </select>
                                        </div>
                                    </div>
                                </div>
                            &nbsp;


                            <div class="row">
                                <label class="col-sm-2 label-on-left">Giá trị</label>
                                <div class="col-sm-9">
                                    <div class="form-group label-floating">
                                        <label class="control-label"></label>
                                        <textarea id="contentx" rows="25" name="config_giatri" class="form-control">
                                            <?php echo @$config->config_giatri; ?>
                                        </textarea>
                                    </div>
                                </div>
                            </div>&#11;                                                                                                                                                                                                                                                                                                                    
                        <div class="card-footer text-center">   
                            <button type="submit" name="submit" class="btn btn-primary btn-fill">Xác nhận</button>
                                <button type="reset" class="btn btn-info btn-fill">Làm lại</button>
                            <a href="?controller=cauhinh&action=danhsach"><button class="btn btn-default btn-fill">Hủy</button></a>
                        </div>
                          
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>