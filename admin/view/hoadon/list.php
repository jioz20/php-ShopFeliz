<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="purple">
                        <i class="material-icons">layers</i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title"></h4>
                        <p></p>
                        <div class="toolbar">
                            <!--        Here you can write extra buttons/actions for the toolbar              -->
                        </div>
                        <a>
                            <button class="btn btn-danger btn-round text-center">
                                    <i class="material-icons">favorite</i>
                            </button>
                        </a>
                        <p></p>                       
                        <div class="material-datatables">                             
                            <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                <thead>
                                    <tr>
                                        <th class="text-center">ID</th>
                                        <th class="text-center">MÃ HÓA ĐƠN</th>
                                        <th class="text-center">KHÁCH HÀNG</th>
                                        <th class="text-center">TRẠNG THÁI</th>
                                        <th class="disabled-sorting text-center">TÁC VỤ</th>
                                    </tr>
                                </thead>    
                                <tbody>
                            <?php 
                                foreach($dshoadon as $v)
                                {
                            ?>                                       
                                    <tr>                                        
                                        <td class="text-center"><?=$v->bill_ma;;?></td>   

                                        <td class="text-center"><?=$v->bill_mahoadon;?></td>
                                        <td class="text-center"><?=$v->bill_tenkhachhang;?></td>
                                        <td class="text-center">
                                        <?php 
                                        foreach($stb as $st)
                                        {
                                            if($v->bill_trangthaidonhang == $st->stb_ma)
                                                echo $st->stb_ten;
                                        }

                                        ?>
                                            
                                        </td>

                                        <td class="td-actions text-center">
                                           <a href="?controller=hoadon&action=chitiet&id=<?php echo $v->bill_ma; ?>"><button type="button" rel="tooltip" class="btn btn-info btn-round"><i class="material-icons">more_horiz</i></button></a>

                                           <a href="?controller=hoadon&action=sua&id=<?php echo $v->bill_ma; ?>"><button type="button" rel="tooltip" class="btn btn-success btn-round"><i class="material-icons">edit</i></button></a>

                                            <a href="?controller=hoadon&action=editsts&id=<?= $v->bill_ma; ?>&sts=<?=$v->bill_trangthai;?>">
                                                <button type="button" rel="tooltip" class="btn btn-warning btn-round">
                                                    <i class="material-icons">vpn_key</i>
                                                </button>
                                            </a>
                                            <a href="?controller=hoadon&action=xoa&id=<?= $v->bill_ma; ?>&sts=<?=$v->bill_trangthai;?>">
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