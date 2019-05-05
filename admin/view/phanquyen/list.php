<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="purple">
                        <i class="material-icons">fingerprint</i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title"></h4>
                        <p></p>
                        <div class="toolbar">
                            <!--        Here you can write extra buttons/actions for the toolbar              -->
                        </div>
                        <a href="?controller=phanquyen&action=them">
                            <button class="btn btn-primary btn-round text-center">
                                    <i class="material-icons">favorite</i> Thêm dữ liệu
                            </button>
                        </a>

                        <p></p>                       
                        <div class="material-datatables">                             
                            <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                <thead>
                                    <tr>

                                        <th class="text-center">ID</th>
                                        <th class="text-center">NGƯỜI DÙNG</th>
                                        <th class="text-center">CHỨC NĂNG</th>
                                        <th class="text-center">TRẠNG THÁI</th>
                                        <th class="disabled-sorting text-center">TÁC VỤ</th>
                                    </tr>
                                </thead>    
                                <tbody>
                            <?php 
                                foreach($dez as $v)
                                {
                            ?>                                       
                                    <tr>
                                         
                                        <td class="text-center"><?=$v->decentz_ma;;?></td>  
                                        <td class="text-center"><?=$v->gov_ten;?></td>
                                        <td class="text-center"><?=$v->fun_ten;?></td>
                                        <td class="text-center"><?=$a=($v->decentz_trangthai == 1) ? 'Bật' : 'Tắt';?></td>

                                        <td class="td-actions text-center">
                                           <a href="?controller=phanquyen&action=chitiet&id=<?php echo $v->decentz_ma; ?>"><button type="button" rel="tooltip" class="btn btn-info btn-round"><i class="material-icons">more_horiz</i></button></a>

                                           <a href="?controller=phanquyen&action=sua&id=<?php echo $v->decentz_ma; ?>"><button type="button" rel="tooltip" class="btn btn-success btn-round"><i class="material-icons">edit</i></button></a>

                                            <a href="?controller=phanquyen&action=editsts&id=<?= $v->decentz_ma; ?>&sts=<?=$v->decentz_trangthai;?>">
                                                <button type="button" rel="tooltip" class="btn btn-warning btn-round">
                                                    <i class="material-icons">vpn_key</i>
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