<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form id="RangeValidation" class="form-horizontal" action="" method="post" 
                    enctype="multipart/form-data">
                        <div class="card-header card-header-text" data-background-color="rose">
                            <h4 class="card-title">
                                <?php echo $tittle; ?>
                            </h4>
                        </div>
                        <div class="card-content">

                           <div class="row">
                                <div class="col-md-6">
                                    <label class="col-sm-5 label-on-left">Tên</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control" type="text" name="pos_ten" 
                                            value="<?php echo @$po->pos_ten; ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="col-sm-3 label-on-left">Alias</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control" type="text" name="pos_alias"
                                             value="<?php echo @$po->pos_alias ; ?>" />
                                        </div>
                                    </div>
                                </div>
                            </div>&nbsp;

                           <div class="row">
                                <div class="col-md-6">
                                <label class="col-sm-5 label-on-left">Nhóm tin</label>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-3">
                                            <select class="selectpicker" data-style="btn btn-primary btn-round" data-size="7" name="pos_manhomtin" >
                                            <?php
                                                    foreach($dsnhombaiviet as $v1)
                                                    {                                                    
                                            ?>    
                                                    <option value="<?=@$v1->grpos_ma; ?>" <?php if(@$v1->grpos_ma == @$po->pos_manhomtin) echo 'selected';?>>
                                                        <?=@$v1->grpos_tennhom;?>
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
                                            <select class="selectpicker" data-style="btn btn-primary btn-round" data-size="7" name="pos_trangthai" >
    
                                                <option value="1" <?php if(@$po->pos_trangthai == 1) 
                                                echo 'selected'; ?>>Hiển thị</option>
                                                <option value="0" <?php if(@$po->pos_trangthai == 0) 
                                                echo 'selected'; ?>>Tắt</option>

                                         ?>        
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>&nbsp;

                           <div class="row">
                                <div class="col-md-6">
                                    <label class="col-sm-5 label-on-left">Từ khóa</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control" type="text" name="pos_tukhoa" 
                                            value="<?php echo @$po->pos_tukhoa; ?>"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label class="col-sm-3 label-on-left">Tìm kiếm</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control" type="text" name="pos_timkiem" 
                                            value="<?php echo @$po->pos_timkiem; ?>"/>
                                        </div>
                                    </div>
                                </div>
                            </div>&nbsp;

                            <div class="row">
                                <div class="col-md-10">
                                <label class="col-sm-3 label-on-left">Ảnh chia sẻ</label>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail">
                                            <img src="<?php echo DOMAIN.'data/upload/'.@$po->pos_chiase; ?>"
                                             style="width: 250px; height: 187px;">
                                             <input type="hidden" name="pos_chiase" value="<?php echo @$po->pos_chiase; ?>" readonly> 
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                        <div>
                                            <span class="btn btn-primary btn-round btn-file">
                                                <span class="fileinput-new">Chọn ảnh</span>
                                                <span class="fileinput-exists">Thay đổi</span>
                                                <input name="pos_chiase[]" type="file">
                                            </span>
                                            <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times" ></i> Xóa</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        &nbsp;         

                            &nbsp;
                            <div class="row">
                                <label class="col-sm-2 label-on-left">Mô tả</label>
                                <div class="col-sm-9">
                                    <div class="form-group label-floating">
                                        <label class="control-label"></label>
                                        <textarea id="contentx" rows="25" name="pos_mota" class="form-control">
                                            <?php echo @$po->pos_mota; ?>
                                        </textarea>
                                    </div>
                                </div>
                            </div>&#11;

                            <div class="row">
                                <label class="col-sm-2 label-on-left">Nội dung tóm tắt</label>
                                <div class="col-sm-9">
                                    <div class="form-group label-floating">
                                        <label class="control-label"></label>
                                        <textarea id="contentxd" rows="25" name="pos_noidungtomtat" class="form-control">
                                            <?php echo @$po->pos_noidungtomtat; ?>
   
                                            </textarea>
                                    </div>
                                </div>
                            </div>&#11;

                            <div class="row">
                                <label class="col-sm-2 label-on-left">Nội dung chi tiết</label>
                                <div class="col-sm-9">
                                    <div class="form-group label-floating">
                                        <label class="control-label"></label>
                                        <textarea id="contentxx" rows="25" name="pos_noidungchitiet" class="form-control">
                                        <?php echo @$po->pos_noidungchitiet; ?>                                                
                                            </textarea>
                                    </div>
                                </div>
                            </div>&nbsp;                                                                                                   
  
                         &nbsp;
   
  
                        </div>  
                                                                                                                                                                                                                                                                                                                    
                        <div class="card-footer text-center">   
                            <button type="submit" name="submit" class="btn btn-primary btn-fill">Xác nhận</button>
                            <button type="reset" class="btn btn-info btn-fill">Làm lại</button>
                            <a href="?controller=baiviet&action=danhsach"><button type="submit" class="btn btn-default btn-fill">Hủy</button></a>
                        </div>
                          
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>