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
                             <div class="col-md-6">
                                <label class="col-sm-4 label-on-left">Chức năng</label>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-3">
                                            <select  class="selectpicker" data-style="btn btn-primary btn-round"name="decentz_machucnang">
                                            <?php
                                                    foreach($dschucnang as $v1)
                                                    {                                                                              
                                            ?>    
                                                    <option value="<?=@$v1->fun_ma; ?>" <?php if(@$v1->fun_ma == @$phanquyen->decentz_machucnang) echo 'selected';?>>
                                                        <?=@$v1->fun_ten;?>
                                                    </option>
                                            <?php 
                                                    }
                                            ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                             <div class="col-md-6">
                                <label class="col-sm-3 label-on-left">Người dùng</label>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-3">
                                            <select class="selectpicker" data-style="btn btn-primary btn-round"   name="decentz_manguoidung">
                                            <?php 
                                                 foreach($dsnguoidung as $v2)
                                                    {                                                      
                                            ?>    

                                                <option value="<?=@$v2->gov_ma; ?>" <?php if(@$v2->gov_ma == @$phanquyen->decentz_manguoidung) echo 'selected';?>><?=@$v2->gov_ten;?></option>

                                            <?php 
                                                    }

                                            ?>
                                            </select>
                                        </div>
                                    </div>
                            </div>
                        </div>&nbsp;

                           <div class="row">
                                <div class="col-md-6">
                                <label class="col-sm-4 label-on-left">Trạng thái</label>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-3">
                                            <select class="selectpicker" data-style="btn btn-primary btn-round"   name="decentz_trangthai">
                                                <option value="1" <?php if(@$phanquyen->decentz_trangthai == 1) 
                                                echo 'selected'; ?>>Bật</option>
                                                <option value="0" <?php if(@$phanquyen->decentz_trangthai == 0) 
                                                echo 'selected'; ?>>Tắt</option>       
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label class="col-sm-3 label-on-left">Ngày cập nhật</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control" type="text" value="<?php echo @$phanquyen->decentz_ngaycapnhat; ?>" name="decentz_ngaycapnhat" disabled="disabled"/>
                                        </div>
                                    </div>
                                </div>                                
                            </div>                           
                                                                                                                                                                                                                                                                                                                    
                        <div class="card-footer text-center">   
                            <button type="submit" name="submit" class="btn btn-primary btn-fill">Xác nhận</button>

                           <button type="reset" class="btn btn-info btn-fill">Làm lại</button>

                            <a href="?controller=phanquyen&action=danhsach"><button type="submit" class="btn btn-default btn-fill">Hủy</button></a>
                        </div>
                          
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>