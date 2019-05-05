    <div class="content">  
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form id="RangeValidation" class="form-horizontal" action="" method="">
                        <div class="card-header card-header-text" data-background-color="purple">
                            <h4 class="card-title">DETAIL</h4>
                        </div>
                        <div class="card-content">              
                           <div class="row">
                                <div class="col-md-6">
                                    <label class="col-sm-5 label-on-left">Tên sản phẩm</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control" type="text" value="<?= $sanpham->pro_ten; ?>" disabled="disabled"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="col-sm-2 label-on-left">Alias</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control" type="text" value="<?= $sanpham->pro_alias; ?>" disabled="disabled"/>
                                        </div>
                                    </div>
                                </div>
                            </div>&nbsp;

                           <div class="row">
                            <?php  
                                foreach($dsnhacungcap as $val)
                                {
                                    if($val->supplier_ma == $sanpham->pro_manhacungcap)
                                    {
                            ?>
                                <div class="col-md-6">
                                    <label class="col-sm-5 label-on-left">Nhà cung cấp</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control" type="text" 
                                            value="<?=$val->supplier_ten; ?>"
                                            
                                            disabled="disabled"/>
                                        </div>
                                    </div>
                                </div>
                            <?php 
                                    }
                                } 
                            ?>

                             <?php  
                                foreach($dsnhomsanpham as $value)
                                {
                                    if($value->grpro_ma == $sanpham->pro_manhom)
                                    {
                            ?>
                                <div class="col-md-6">
                                    <label class="col-sm-2 label-on-left">Nhóm</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control" type="text" 
                                            value="<?= $value->grpro_ten; ?>" disabled="disabled"/>
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
                                    <label class="col-sm-5 label-on-left">Thương hiệu</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control" type="text" value="<?= $sanpham->pro_thuonghieu; ?>" disabled="disabled"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="col-sm-2 label-on-left">Giá</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control" type="text" value="<?= number_format($sanpham->pro_gia); ?>đ" disabled="disabled"/>
                                        </div>
                                    </div>
                                </div>
                            </div>&nbsp;

                           <div class="row">
                                <div class="col-md-6">
                                    <label class="col-sm-5 label-on-left">Xuất sứ</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control" type="text" value="<?= $sanpham->pro_xuatxu; ?>"  disabled="disabled"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="col-sm-2 label-on-left">Số lượng</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control" type="text" value="<?= $sanpham->pro_soluong; ?>"  disabled="disabled"/>
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
                                            <input class="form-control" type="text" value="<?= $sanpham->pro_tukhoa; ?>" disabled="disabled"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="col-sm-2 label-on-left">Chất liệu</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control" type="text" value="<?= $sanpham->pro_chatlieu; ?>" disabled="disabled"/>
                                        </div>
                                    </div>
                                </div>
                            </div>&nbsp;


                           <div class="row">
                                <div class="col-md-6">
                                    <label class="col-sm-5 label-on-left">Tìm kiếm</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control" type="text" value="<?= $sanpham->pro_timkiem; ?>" disabled="disabled"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="col-sm-2 label-on-left">SKU</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control" type="text" value="<?= $sanpham->pro_sku; ?>" disabled="disabled"/>
                                        </div>
                                    </div>
                                </div>
                            </div>&nbsp; 

                            <div class="row">
                                <label class="col-sm-2 label-on-left">Trạng thái</label>
                                <div class="col-sm-7">
                                    <div class="form-group label-floating">
                                        <label class="control-label"></label>
                                        <input class="form-control" type="text"  disabled="disabled" 
                                        value="<?= $a = ($sanpham->pro_trangthai == 1) ? 'Bật' : 'Tắt'; ?>"/>
                                    </div>
                                </div>
                            </div>&nbsp;

                            <div class="row">
                                <div class="col-md-6">
                                <label class="col-sm-4 label-on-left">Ảnh chia sẻ</label>&nbsp;
                                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail">
                                             <img src="<?php echo DOMAIN.'data/upload/'.@$sanpham->pro_hinhchiase; ?>" alt=". . . "
                                            style="width: 150px; height: 150px; ">
                                        </div>
                                    </div>
                                </div>  
                                <div class="col-md-5">
                                <label class="col-sm-3 label-on-left">Ảnh sản phẩm</label>&nbsp;&nbsp;
                                   <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail">
                                            <img src="<?php echo DOMAIN.'data/upload/'.@$sanpham->pro_hinh ?>" alt=". . . "
                                            style="width: 150px; height: 150px; ">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        &nbsp; &nbsp;&nbsp;&nbsp;  
  

                        <div class="row">
                            <label class="col-sm-2 label-on-left">Danh sách ảnh</label>&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                        <?php 
                                for($i = 0; $i < count(@$dsh); $i++)
                                {
                         ?>                                
                                <div class="fileinput-new thumbnail">
                                    <img src="<?php echo DOMAIN.'data/upload/'.@$dsh[$i]; ?>" alt=". . . "
                                    style="width: 100px; height: 100px; "> 
                                </div>&nbsp;
                        <?php
                                } 
                         ?>                                                                                                                      
                            </div>
                        </div>       
                    </div>  


                            <div class="row">
                                <label class="col-sm-2 label-on-left">Mô tả</label>
                                <div class="col-sm-9">
                                    <div class="form-group label-floating">
                                        <label class="control-label"></label>
                                        <textarea id="contentx" rows="25" name="pro_mota" class="form-control" disabled>
                                            <?php echo $sanpham->pro_mota; ?>
                                        </textarea>
                                    </div>
                                </div>
                            </div>&#11;

                            <div class="row">
                                <label class="col-sm-2 label-on-left">Nội dung tóm tắt</label>
                                <div class="col-sm-9">
                                    <div class="form-group label-floating">
                                        <label class="control-label"></label>
                                        <textarea id="contentxd" rows="25" name="pro_noidungtomtat" class="form-control" disabled>
                                            <?php echo $sanpham->pro_noidungtomtat; ?>
                                                
                                            </textarea>
                                    </div>
                                </div>
                            </div>&#11;

                            <div class="row">
                                <label class="col-sm-2 label-on-left">Nội dung chi tiết</label>
                                <div class="col-sm-9">
                                    <div class="form-group label-floating">
                                        <label class="control-label"></label>
                                        <textarea id="contentxx" rows="25" name="pro_noidungchitiet" class="form-control" disabled>
                                        <?php echo $sanpham->pro_noidungchitiet; ?>                                                
                                            </textarea>
                                    </div>
                                </div>
                            </div>&nbsp;

                        <div class="card-footer text-center">   
                            <a href="?controller=sanpham&action=danhsach" class="btn btn-default btn-fill">Trở lại</a>
                        </div>                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>