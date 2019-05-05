
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form id="RangeValidation" class="form-horizontal" action="" method="post" 
                    enctype='multipart/form-data'>
                        <div class="card-header card-header-text" data-background-color="purple">
                            <h4 class="card-title">
                                <?php echo @$a; ?>                                   
                            </h4>
                        </div>
                        <div class="card-content">               
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="col-sm-4 label-on-left">Tên sản phẩm</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control" type="text" name="pro_ten" 
                                            value="<?php echo @$sanpham->pro_ten; ?>"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label class="col-sm-3 label-on-left">Alias</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control" type="text" name="pro_alias" 
                                            value="<?php echo @$sanpham->pro_alias; ?>"/>
                                        </div>
                                    </div>
                                </div>
                            </div>&nbsp;
                            <div class="row">
                             <div class="col-md-6">
                                <label class="col-sm-4 label-on-left">Nhà cung cấp</label>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-3">
                                            <select  class="selectpicker" data-style="btn btn-primary btn-round"name="pro_manhacungcap">
                                            <?php
                                                    foreach($dsnhacungcap as $v1)
                                                    {
                                                            
                                            ?>    
                                                    <option value="<?=$v1->supplier_ma; ?>" <?php if(@$v1->supplier_ma == @$sanpham->pro_manhacungcap) echo 'selected';?>>
                                                        <?=$v1->supplier_ten;?>
                                                    </option>
                                            <?php 
                                                    }
                                            ?>
                                            </select>
                                        </div>
                                    </div>
                            </div>

                             <div class="col-md-6">
                                <label class="col-sm-3 label-on-left">Nhóm</label>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-3">
                                            <select class="selectpicker" data-style="btn btn-primary btn-round"   name="pro_manhom">
                                            <?php
 
                                                 foreach($dsnhomsanpham as $v2)
                                                    {                                                      
                                            ?>    

                                                <option value="<?=$v2->grpro_ma; ?>" <?php if(@$v2->grpro_ma == @$sanpham->pro_manhom) echo 'selected';?>><?=$v2->grpro_ten;?></option>

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
                                <label class="col-sm-4 label-on-left">Thương hiệu</label>
                                <div class="col-sm-7">
                                    <div class="form-group label-floating">
                                        <label class="control-label"></label>
                                        <input class="form-control" type="text" name="pro_thuonghieu" 
                                        value="<?php echo @$sanpham->pro_thuonghieu; ?>"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="col-sm-3 label-on-left">Giá</label>
                                <div class="col-sm-7">
                                    <div class="form-group label-floating">
                                        <label class="control-label"></label>
                                        <input class="form-control" type="text" name="pro_gia" 
                                        value="<?php echo @$sanpham->pro_gia; ?>"/>
                                    </div>
                                </div>
                            </div>
                        </div>&nbsp;
                        <div class="row">
                            <div class="col-md-6">
                                <label class="col-sm-4 label-on-left">Xuất xứ</label>
                                <div class="col-sm-7">
                                    <div class="form-group label-floating">
                                        <label class="control-label"></label>
                                        <input class="form-control" name="pro_xuatxu"
                                       value="<?php echo @$sanpham->pro_xuatxu; ?>"  />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="col-sm-3 label-on-left">Số lượng</label>
                                <div class="col-sm-7">
                                    <div class="form-group label-floating">
                                        <label class="control-label"></label>
                                        <input class="form-control" type="text" name="pro_soluong" 
                                        value="<?php echo @$sanpham->pro_soluong; ?>"/>
                                    </div>
                                </div>
                            </div>
                        </div>&nbsp;
                        <div class="row">
                            <div class="col-md-6">
                                <label class="col-sm-4 label-on-left">Từ khóa</label>
                                <div class="col-sm-7">
                                    <div class="form-group label-floating">
                                        <label class="control-label"></label>
                                        <input class="form-control" type="text" name="pro_tukhoa" 
                                        value="<?php echo @$sanpham->pro_tukhoa; ?>" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="col-sm-3 label-on-left">Chất liệu</label>
                                <div class="col-sm-7">
                                    <div class="form-group label-floating">
                                        <label class="control-label"></label>
                                        <input class="form-control" type="text" 
                                        value="<?php echo @$sanpham->pro_chatlieu; ?>" name="pro_chatlieu" />
                                    </div>
                                </div>
                            </div>
                        </div>&nbsp;

                        <div class="row">
                            <div class="col-md-6">
                                <label class="col-sm-4 label-on-left">Tìm kiếm</label>
                                <div class="col-sm-7">
                                    <div class="form-group label-floating">
                                        <label class="control-label"></label>
                                        <input class="form-control" type="text" name="pro_timkiem" 
                                        value="<?php echo @$sanpham->pro_timkiem; ?>"/>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="col-sm-3 label-on-left">SKU</label>
                                <div class="col-sm-7">
                                    <div class="form-group label-floating">
                                        <label class="control-label"></label>
                                        <input class="form-control" type="text" name="pro_sku" 
                                        value="<?php echo @$sanpham->pro_sku; ?>"/>
                                    </div>
                                </div>
                            </div>
                        </div>&nbsp;

                            <div class="row">
                                <label class="col-sm-2 label-on-left">Trạng thái</label>
                                    <div class="row">
                                        <div class="col-lg-2 col-md-2 col-sm-3">
                                            <select class="selectpicker" data-style="btn btn-primary btn-round"   name="pro_trangthai">     
                                                <option value="1" <?php if(@$sanpham->pro_trangthai == 1) 
                                                echo 'selected'; ?>>Bật</option>
                                                <option value="0" <?php if(@$sanpham->pro_trangthai == 0) 
                                                echo 'selected'; ?>>Tắt</option>     
                                            </select>
                                        </div>
                                    </div>
                            </div>&nbsp;&nbsp; &nbsp;&nbsp;&#10;

                            <div class="row">
                                <div class="col-md-6">
                                <label class="col-sm-4 label-on-left">Ảnh chia sẻ</label>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail">
                                        
                                            <img src="<?php echo DOMAIN.'data/upload/'.@$sanpham->pro_hinhchiase; ?>"
                                            style="width: 187px; height: 187px; ">

                                            <input type="hidden" name="pro_hinhchiase" value="<?php echo
                                             @$sanpham->pro_hinhchiase; ?>" readonly> 

                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail"></div>

                                        <div>
                                            <span class="btn btn-primary btn-round btn-file">
                                                <span class="fileinput-new">Choose</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="pro_hinhchiase[]" >
                                            </span>

                                            <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times" ></i> Delete</a>
                                        </div>
                                    </div>
                                </div>



                        
                                <div class="col-md-6">
                                <label class="col-sm-3 label-on-left">Ảnh sản phẩm</label>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">

                                        <div class="fileinput-new thumbnail">
                                            
                                            <img src="<?php echo DOMAIN.'data/upload/'.@$sanpham->pro_hinh ?>" 
                                            style="width: 187px; height: 187px; ">
                                                <input type="hidden" name="pro_hinh" value="<?php echo @$sanpham->pro_hinh;?>" readonly> 

                                        </div>

                                        <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                        <div>
                                            <span class="btn btn-primary btn-round btn-file">
                                                <span class="fileinput-new">Choose</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="pro_hinh[]">
                                            </span>
                                            <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times" ></i> Delete </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        &nbsp; &nbsp;&nbsp;&nbsp;

                        <?php 
                                for($i = 0; $i < count(@$dsh); $i++)
                                {
                         ?>            
                            <div class="row">
                                <label class="col-sm-2 label-on-left">Ảnh <?=$i+1;?></label>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail" style="max-width: 100px; max-height: 70px;">
  

                                            <img src="<?php echo DOMAIN.'data/upload/'.@$dsh[$i];?>" 
                                            style="width: 70px; height: 70px; ">        
                                            <input type="hidden" name="pro_danhsachhinh[]" 
                                                    value="<?=@$dsh[$i];?>" readonly style="width: 200px; " multiple>


                                        </div>&nbsp;
                                        

                                        <div>
                                            <span class="btn btn-primary btn-file" >
                                                <span class="fileinput-new">Choose</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="pro_danhsachhinh[]" multiple>
                                            </span>
                                            <a href="#pablo" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Delete</a>
                                        </div>

                                    </div>
                            </div>
                                    <?php 
                                        }
                                     ?>
                            &nbsp;
                            <div class="row">
                                <label class="col-sm-2 label-on-left">Mô tả</label>
                                <div class="col-sm-9">
                                    <div class="form-group label-floating">
                                        <label class="control-label"></label>
                                        <textarea id="contentx" rows="25" name="pro_mota" class="form-control">
                                            <?php echo @$sanpham->pro_mota; ?>
                                        </textarea>
                                    </div>
                                </div>
                            </div>&#11;

                            <div class="row">
                                <label class="col-sm-2 label-on-left">Nội dung tóm tắt</label>
                                <div class="col-sm-9">
                                    <div class="form-group label-floating">
                                        <label class="control-label"></label>
                                        <textarea id="contentxd" rows="25" name="pro_noidungtomtat" class="form-control">
                                            <?php echo @$sanpham->pro_noidungtomtat; ?>
                                                
                                            </textarea>
                                    </div>
                                </div>
                            </div>&#11;

                            <div class="row">
                                <label class="col-sm-2 label-on-left">Nội dung chi tiết</label>
                                <div class="col-sm-9">
                                    <div class="form-group label-floating">
                                        <label class="control-label"></label>
                                        <textarea id="contentxx" rows="25" name="pro_noidungchitiet" class="form-control">
                                        <?php echo @$sanpham->pro_noidungchitiet; ?>                                                
                                            </textarea>
                                    </div>
                                </div>
                            </div>&nbsp;                                                                                 
                                                                                                                                                                                                                                                                                                                   
                        <div class="card-footer text-center">   
                            <button type="submit" name="submit" class="btn btn-primary btn-fill">Xác nhận</button>
                            <button type="reset" class="btn btn-info btn-fill">Làm lại</button>;
                            <a href="?controller=sanpham&action=danhsach"><button type="button" class="btn btn-default btn-fill">Hủy</button></a>
                        </div>                                  
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>