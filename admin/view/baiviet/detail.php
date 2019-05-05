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
                                           value="<?= $po->pos_ma; ?>"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="col-sm-3 label-on-left">Tên</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control" type="text" disabled="disabled"
                                             value="<?= $po->pos_ten; ?>" />
                                        </div>
                                    </div>
                                </div>
                            </div>&nbsp;


                           <div class="row">
                                <div class="col-md-6">
                                    <label class="col-sm-5 label-on-left">Alias</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control" type="text" disabled="disabled" value="<?= $po->pos_alias; ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="col-sm-3 label-on-left">Tìm kiếm</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control" type="text" disabled="disabled" value="<?= $po->pos_timkiem; ?>"/>
                                        </div>
                                    </div>
                                </div>
                            </div>&nbsp;


                           <div class="row">
                                <div class="col-md-6">
                                    <label class="col-sm-5 label-on-left">Ngày tạo</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control" type="text" disabled="disabled" value="<?= $po->pos_ngaytao; ?>"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="col-sm-3 label-on-left">Ngày cập nhật</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control" type="text" disabled="disabled" value="<?= $po->pos_ngaycapnhat; ?>"/>
                                        </div>
                                    </div>
                                </div>
                            </div>&nbsp;


                           <div class="row">
                        <?php 
                            foreach($dsnhombaiviet as $v)
                            {
                                if($v->grpos_ma == $po->pos_manhomtin)
                                {
                         ?>
                                <div class="col-md-6">
                                    <label class="col-sm-5 label-on-left">Nhóm tin</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control" type="text" disabled="disabled" value="<?= $v->grpos_tennhom; ?>"/>
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
                                                <input type="checkbox"
                                                 <?=$a=($po->pos_trangthai == 1) ?'checked':''; ?> disabled="disabled" >
                                            </label>
                                         </div>
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
                                            <input class="form-control" type="text" disabled="disabled" value="<?= $po->pos_tukhoa; ?>"/>
                                        </div>
                                    </div>
                                </div>
                            </div>&nbsp;

                            <div class="row">
                                <div class="col-md-10">
                                <label class="col-sm-3 label-on-left">Ảnh chia sẻ</label>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail">
                                            <img src="<?php echo DOMAIN.'data/upload/'.@$po->pos_chiase; ?>" alt="..." style="width: 150px; height: 100px;" disabled="disabled" >
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                    </div>
                                </div>
                            </div>
                        &#11;   

                                                    
                            <div class="row">
                                <label class="col-sm-2 label-on-left">Mô tả</label>
                                <div class="col-sm-9">
                                    <div class="form-group label-floating">
                                        <label class="control-label"></label>
                                        <textarea id="contentx" rows="25" name="pos_mota" class="form-control" disabled>
                                            <?=$a = isset($_GET['id']) ?$po->pos_mota: ''; ?>
                                        </textarea>
                                    </div>
                                </div>
                            </div>&#11;

                            <div class="row">
                                <label class="col-sm-2 label-on-left">Nội dung tóm tắt</label>
                                <div class="col-sm-9">
                                    <div class="form-group label-floating">
                                        <label class="control-label"></label>
                                        <textarea id="contentxd" rows="25" name="pos_noidungtomtat" class="form-control" disabled>
                                            <?=$a = isset($_GET['id']) ?$po->pos_noidungtomtat: ''; ?>
                                                
                                            </textarea>
                                    </div>
                                </div>
                            </div>&#11;

                            <div class="row">
                                <label class="col-sm-2 label-on-left">Nội dung chi tiết</label>
                                <div class="col-sm-9">
                                    <div class="form-group label-floating">
                                        <label class="control-label"></label>
                                        <textarea id="contentxx" rows="25" name="pos_noidungchitiet" class="form-control" disabled>
                                        <?=$a = isset($_GET['id']) ?$po->pos_noidungchitiet: ''; ?>                                                
                                            </textarea>
                                    </div>
                                </div>
                            </div>&nbsp;              
  
  
                        </div>  
                                                                                                                                                                                                                                                                                                                    
                        <div class="card-footer text-center">
                            <a href="?controller=baiviet&action=danhsach" class="btn btn-default btn-fill">Trở lại</a>
                        </div>
                          
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>