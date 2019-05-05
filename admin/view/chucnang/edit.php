<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form id="RangeValidation" class="form-horizontal" action="" method="post">
                    <div class="card-header card-header-text" data-background-color="purple">
                        <h4 class="card-title">
                             <?php echo $title; ?>
                        </h4>
                    </div>
                        <div class="card-content">

                           <div class="row">
                                <div class="col-md-5">
                                    <label class="col-sm-5 label-on-left">Tên chức năng</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control" type="text" name="fun_ten" 
                                            value="<?php echo @$func->fun_ten; ?>"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <label class="col-sm-3 label-on-left">Alias</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control" type="text" name="fun_link" 
                                            value="<?php echo @$func->fun_link; ?>"/>
                                        </div>
                                    </div>
                                </div>
                            </div>&nbsp;

                           <div class="row">
                                <div class="col-md-5">
                                <label class="col-sm-5 label-on-left">Chức năng cha</label>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-3">
                                            <select class="selectpicker" data-style="btn btn-primary btn-round" data-size="7" name="fun_chucnangcha" >
                                            <?php
                                                    foreach($dsnhomquantri as $v1)
                                                    {
                                                                                           
                                            ?>    
                                                    <option value="<?=@$v1->groupads_ma; ?>" <?php if(@$v1->groupads_ma == @$func->fun_chucnangcha) echo 'selected';?>>
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
                                            <select class="selectpicker" data-style="btn btn-primary btn-round" data-size="7" name="fun_trangthai" >       
                                                <option value="1" <?php if(@$func->fun_trangthai == 1) 
                                                echo 'selected'; ?>>Bật</option>
                                                <option value="0" <?php if(@$func->fun_trangthai == 0) 
                                                echo 'selected'; ?>>Tắt</option>      
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>&nbsp;  
                                                                                                                                                                                                                                                                                                                    
                        <div class="card-footer text-center">
                            <button type="submit" name="submit" class="btn btn-primary btn-fill">Xác nhận</button>

                             <button type="reset" class="btn btn-info btn-fill">Làm lại</button>
                            <a href="?controller=chucnang&action=danhsach" class="btn btn-default btn-fill">Hủy</a>
                        </div>
                          
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>  