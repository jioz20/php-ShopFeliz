<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="purple">
                        <i class="material-icons">create</i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title"></h4>
                        <p></p>
                        <div class="toolbar">
                            <!--        Here you can write extra buttons/actions for the toolbar              -->
                        </div>
                        <a href="?controller=baiviet&action=them">
                            <button class="btn btn-primary btn-round text-center">
                                    <i class="material-icons">favorite</i> Thêm bài viết
                            </button>
                        </a>
                        <p></p>                       
                        <div class="material-datatables">                             
                            <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                <thead>
                                    <tr>
                                        <th class="text-center">ID</th>
                                        <th class="text-center">TÊN BÀI VIẾT</th>
                                        <th class="text-center">NHÓM BÀI VIẾT</th>
                                        <th class="text-center">TRẠNG THÁI</th>
                                        <th class="disabled-sorting text-center">TÁC VỤ</th>
                                    </tr>
                                </thead>    
                                <tbody>
                            <?php 
                                foreach($dsbaiviet as $v)
                                {
                            ?>                                       
                                    <tr>                             
                                        <td class="text-center"><?=$v->pos_ma;;?></td>  

 

                                        <td class="text-center"><?=$v->pos_ten;?></td>
                                        <td class="text-center"><?=$v->grpos_tennhom;?></td>
                                        <td class="text-center"><?=$a=($v->pos_trangthai == 1) ? 'Hiển thị' : 'Tắt';?></td>

                                        <td class="td-actions text-center">
                                           <a href="?controller=baiviet&action=chitiet&id=<?php echo $v->pos_ma; ?>"><button type="button" rel="tooltip" class="btn btn-info btn-round"><i class="material-icons">more_horiz</i></button></a>

                                           <a href="?controller=baiviet&action=sua&id=<?php echo $v->pos_ma; ?>"><button type="button" rel="tooltip" class="btn btn-success btn-round"><i class="material-icons">edit</i></button></a>

                                            <a href="?controller=baiviet&action=editsts&id=<?= $v->pos_ma; ?>&sts=<?=$v->pos_trangthai;?>">
                                                <button type="button" rel="tooltip" class="btn btn-warning btn-round">
                                                    <i class="material-icons">vpn_key</i>
                                                </button>
                                            </a>
                                            <a href="?controller=baiviet&action=xoa&id=<?= $v->pos_ma; ?>&sts=<?=$v->pos_trangthai;?>">
                                                <button type="button" rel="tooltip" class="btn btn-danger btn-round" onclick="return confirm('Bạn có muốn xoá không?')">
                                                    <i class="material-icons">delete</i>
                                                </button>
                                            </a>
                                           
                                        </td>
                                    </tr>
                            <?php 
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