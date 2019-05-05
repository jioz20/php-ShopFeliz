<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="purple">
                        <i class="material-icons">history</i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title"></h4>
                        <p></p>
                        <div class="toolbar">
                            <!--        Here you can write extra buttons/actions for the toolbar              -->
                        </div>
                            <button class="btn btn-primary btn-round text-center">
                                    <i class="material-icons">favorite</i>
                            </button>
                        <p></p>                       
                        <div class="material-datatables">                             
                            <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                <thead>
                                    <tr>
                                        <th class="text-center">ID</th>
                                        <th class="text-center">NỘI DUNG</th>
                                        <th class="text-center">NGƯỜI TẠO</th>
                                        <th class="text-center">NGÀY TẠO</th>
                                    </tr>
                                </thead>    
                                <tbody>
                            <?php 
                                foreach($lichsu as $v)
                                {
                            ?>                                       
                                    <tr>
                                       
                                        <td class="text-center"><?=$v->log_ma;?></td>  

 

                                        <td class="text-center"><?=$v->log_noidung;?></td>
                                        <td class="text-center"><?=$v->gov_ten;?></td>
                                        <td class="text-center"><?=$v->log_ngaytao;?></td>
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