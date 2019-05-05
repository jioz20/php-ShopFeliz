<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">                    
                    <div class="card-header card-header-icon" data-background-color="purple">
                        <i class="material-icons">gesture</i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title"></h4>

                            <a href="?controller=sanpham&action=them">
                                <button class="btn btn-primary btn-round text-center">
                                        <i class="material-icons">favorite</i> Thêm sản phẩm
                                </button>
                            </a>
                            <table class="table table-striped">        
                                    <thead>
                                        <tr >
                                            <th class="text-center">ID</th>
                                            <th class="text-center"></th>
                                            <th class="text-center">TÊN</th>
                                            <th class="text-center">GIÁ</th>
                                            <th class="text-center">TRẠNG THÁI</th>
                                            <th class="text-center">TÁC VỤ</th>
                                        </tr>
                                    </thead>                                   
                                    <tbody id="kq">
                            <?php 
                                foreach($dssanpham as $v)
                                {
                            ?>
                                    <tr>
                                        <td class="text-center"><?=$v->pro_ma;?></td>
                                        <td class="text-center"><img style="width: 50px; height: 50px; " src="<?php echo DOMAIN.'data/upload/'.@$v->pro_hinh; ?>"></td>

                                        <td class="text-center"><?=$v->pro_ten;?></td>
                                        <td class="text-center"><?=number_format($v->pro_gia);?>đ</td>
                                        <td class="text-center"><?=$a=($v->pro_trangthai == 1) ? 'Bật' : 'Tắt';?></td>

                                        <td class="td-actions text-center">
                                        <a href="?controller=sanpham&action=chitiet&id=<?=$v->pro_ma;?>"><button type="button" rel="tooltip" class="btn btn-info btn-round"><i class="material-icons">more_horiz</i></button></a>

                                        <a href="?controller=sanpham&action=sua&id=<?=$v->pro_ma;?>"><button type="button" rel="tooltip" class="btn btn-success btn-round"><i class="material-icons">edit</i></button></a>
                                        
                                        <a href="?controller=sanpham&action=editsts&id=<?= $v->pro_ma; ?>&sts=<?=$v->pro_trangthai;?>">
                                            <button type="button" rel="tooltip" class="btn btn-warning btn-round">
                                                <i class="material-icons">vpn_key</i>
                                            </button>
                                        </a>
                                        <a href="?controller=sanpham&action=xoa&id=<?=$v->pro_ma;?>&sts=<?=$v->pro_trangthai;?>">
                                        <button type="button" rel="tooltip" onclick="return confirm('Bạn có muốn xoá không?')" class="btn btn-danger btn-round">
                                        <i class="material-icons">close</i>
                                        </button>
                                        </a>

                                        </td>
                                        </tr>
                            <?php
                                }
                              ?>
                                    </tbody>
                            
                            </table>
                            <p></p>

                            <div class="material-datatables">
                                <div id="datatables_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                                <div class="row">
                                    <div class="col-sm-7">
                                        <div class="dataTables_paginate paging_full_numbers" id="datatables_paginate">
                                            <ul class="pagination">

                                                <li class="paginate_button first " id="datatables_first">
                                                    <a  class="trang" aria-controls="datatables" data-dt-idx="0" tabindex="0" data-trang="1">First</a>
                                                </li>
                                            
                                                    <li class="paginate_button" >
                                                        <a class="trang" id="previous" aria-controls="datatables" data-dt-idx="1" data-trang=""  data-id="truoc"  tabindex="0">Previous</a>
                                                    </li>  

                                            <?php
                                                for($i = 1; $i <= $sotrang; $i++)
                                                {
                                             ?>                                      
                                                <li class="paginate_button">
                                                    <a class="trang" aria-controls="datatables" data-dt-idx="2" data-trang="<?=$i?>" tabindex="0"><?=$i;?></a>
                                                </li>
                                            <?php 
                                                }
                                                ?>

                                                <li class="paginate_button next" id="datatables_next">
                                                    <a class="trang" id="next" aria-controls="datatables" data-dt-idx="6"  tabindex="0">Next</a>
                                                </li>

                                                <li class="paginate_button last" id="datatables_last">
                                                    <a class="trang" data-trang="<?=$sotrang; ?>" aria-controls="datatables" data-dt-idx="7" tabindex="0">Last</a>
                                                </li>
 
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>                            

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(function()
    {
        $('.trang').click(function()
        {
            var _current = $(this), _trang = _current.data('trang');
            $.get('http://felizshop.us:81/admin/?controller=sanpham&action=loadapi', {trang: _trang})
            .done(function(data)
            {
             $('#previous').data('trang',_trang-1);
             $('#next').data('trang',_trang+1);
             $('#kq').html(data);
            })  
        })
    })

</script>