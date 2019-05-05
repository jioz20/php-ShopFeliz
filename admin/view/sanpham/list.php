<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="purple">
                        <i class="material-icons">assignment</i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title"></h4>
                        <p></p>
                        <div class="toolbar">
                            <!--        Here you can write extra buttons/actions for the toolbar              -->
                        </div>
                        <a href="?controller=sanpham&action=them">
                            <button class="btn btn-primary btn-round text-center">
                                    <i class="material-icons">favorite</i> Thêm sản phẩm
                            </button>
                        </a>

                        <a href="#" style="margin-left: 615px; " onclick="return confirm('Bạn có muốn xóa hết dữ liệu vừa chọn');">
                            <button class="btn btn-danger btn-round text-center">
                                    <i class="material-icons">close</i> Xóa sản phẩm
                            </button>
                        </a>
                        <p></p>                       
                        <div class="material-datatables">                             
                            <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                <thead>
                                    <tr>
                                        <th class="disabled-sorting text-center">
                                               
                                            <label>
                                                <input name="optionsCheckboxes" type="checkbox">
                                            </label>
                                                                                 
                                        </th> 

                                        <th class="text-center">ID</th>
                                        <th class="text-center">TÊN</th>
                                        <th class="text-center">NHÓM</th>
                                        <th class="text-center">GIÁ</th>
                                        <th class="text-center">TRẠNG THÁI</th>
                                        <th class="disabled-sorting text-center">TÁC VỤ</th>
                                    </tr>
                                </thead>    
                                <tbody>
                            <?php 
                                foreach($dssanpham as $v)
                                {
                                    if($v->pro_trangthai == 1 || $v->pro_trangthai == 0)
                                        {                                    
                            ?>                                       
                                    <tr>

                                    <td class=" text-center">
                                            <label>
                                                <input name="optionsCheckboxes" type="checkbox">
                                            </label>
                                    </td>                                         
                                        <td class="text-center"><?=$v->pro_ma;?></td>  

 

                                        <td class="text-center"><?=$v->pro_ten;?></td>
                                        <td class="text-center"><?=$v->grpro_ten;?></td>
                                        <td class="text-center">&euro;<?=$v->pro_gia;?></td>
                                        <td class="text-center"><?=$a=($v->pro_trangthai == 1) ? 'Bật' : 'Tắt';?></td>

                                        <td class="td-actions text-center">
                                           <a href="?controller=sanpham&action=chitiet&id=<?php echo $v->pro_ma; ?>"><button type="button" rel="tooltip" class="btn btn-info btn-round"><i class="material-icons">more_horiz</i></button></a>

                                           <a href="?controller=sanpham&action=sua&id=<?php echo $v->pro_ma; ?>"><button type="button" rel="tooltip" class="btn btn-success btn-round"><i class="material-icons">edit</i></button></a>

                                            <a href="?controller=sanpham&action=xoa&id=<?=$v->pro_ma;?>&sts=<?=$v->pro_trangthai;?>">
                                                <button type="button" rel="tooltip" class="btn btn-warning btn-round">
                                                    <i class="material-icons">vpn_key</i>
                                                </button>
                                            </a>
                                            
                                            <a href="?controller=sanpham&action=xoa&id=<?=$v->pro_ma; ?>&sts=<?=$v->pro_trangthai;?>">
                                                <button type="button" rel="tooltip" class="btn btn-danger btn-round" onclick="return confirm('Bạn có muốn xoá không?')">
                                                    <i class="material-icons">delete</i>
                                                </button>
                                            </a>
                                           
                                        </td>
                                    </tr>
                            <?php 
                                    }
                                }
                             ?>                                       
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- end content-->
                </div>
                <!--  end card  -->
            </div>
            <!-- end col-md-12 -->
        </div>
        <!-- end row -->
    </div>
</div>