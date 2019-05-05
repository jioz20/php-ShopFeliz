<?php 
    $ds = new nguoidung_model();
    $pq = $ds->loaddata($_SESSION['gov_ma']);
 ?>
<div class="sidebar" data-active-color="rose" data-background-color="black" data-image="<?php echo TEMPLATE_PATH; ?>/assets/img/sidebar-1.jpg">
    <div class="logo">
        <a href="http://felizshop.us:81/admin/" class="simple-text logo-mini">
            FS
        </a>
        <a href="http://felizshop.us:81/admin/" class="simple-text logo-normal">
            Feliz Shop
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="">
                <a href="http://felizshop.us:81/admin/">
                    <i class="material-icons">home</i>
                    <p> Trang chủ </p>
                </a>
            </li>

<!-- Hệ thống -->
<?php 
    if($pq->gov_manhom == 1)
    {
 ?>
            <li>
                <a data-toggle="collapse" href="#pagesExamples">
                    <i class="material-icons">settings</i>
                    <p> Quản lý hệ thống
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="pagesExamples">
                    <ul class="nav">
                        <li>
                            <a href="?controller=nguoidung&action=danhsach">
                                <i class="material-icons">person</i>
                                <span class="sidebar-normal"> Người dùng </span>
                            </a>
                        </li>
                        <li>
                            <a href="?controller=cauhinh&action=danhsach">
                                <i class="material-icons">build</i>
                                <span class="sidebar-normal"> Cấu hình </span>
                            </a>
                        </li>
                        <li>
                            <a href="?controller=chucnang&action=danhsach">
                                <i class="material-icons">functions</i>
                                <span class="sidebar-normal"> Chức năng </span>
                            </a>
                        </li>
                        <li>
                            <a href="?controller=phanquyen&action=danhsach">
                                <i class="material-icons">fingerprint</i>
                                <span class="sidebar-normal"> Phân quyền </span>
                            </a>
                        </li>
                        <li>
                            <a href="?controller=history&action=danhsach">
                                <i class="material-icons">history</i>
                                <span class="sidebar-normal"> Lịch sử người dùng </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
<?php
    } 
 ?>

<!-- Sản phẩm -->

<?php 
    if($pq->gov_manhom == 3 || $pq->gov_manhom == 1)
    {
 ?>
            <li>
                <a data-toggle="collapse" href="#componentsExamples">
                    <i class="material-icons">apps</i>
                    <p> Quản lý sản phẩm
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="componentsExamples">
                    <ul class="nav">
                        <li>
                            <a href="?controller=sanpham&action=danhsach">
                                <i class="material-icons">gesture</i>
                                <span class="sidebar-normal"> Sản phẩm </span>
                            </a>
                        </li>
                        <li>
                            <a href="?controller=nhomsanpham&action=danhsach">
                                <i class="material-icons">trip_origin</i>
                                <span class="sidebar-normal"> Nhóm sản phẩm </span>
                            </a>
                        </li>
                        <li>
                            <a href="?controller=nhacungcap&action=danhsach">
                                <i class="material-icons">meeting_room</i>
                                <span class="sidebar-normal"> Nhà cung cấp </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
<?php 
    }
 ?>
<!-- Người dùng  -->
<?php 
    if($pq->gov_manhom == 2 || $pq->gov_manhom == 1)
    {
 ?>
            <li>
                <a data-toggle="collapse" href="#formsExamples">
                    <i class="material-icons">store</i>
                    <p> Quản lý bán hàng
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="formsExamples">
                    <ul class="nav">
                        <li>
                            <a href="?controller=hoadon&action=danhsach">
                                <i class="material-icons">layers</i>
                                <span class="sidebar-normal"> Hóa đơn </span>
                            </a>
                        </li>
                        <li>
                            <a href="?controller=chitiethoadon&action=danhsach">
                                <i class="material-icons">visibility</i>
                                <span class="sidebar-normal"> Chi tiết hóa đơn </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
<?php 
    }
 ?>
<!-- Bài viết -->
<?php 
    if($pq->gov_manhom == 4 || $pq->gov_manhom == 1)
    {
 ?>
            <li>
                <a data-toggle="collapse" href="#tablesExamples">
                    <i class="material-icons">create</i>
                    <p> Quản lý bài viết
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="tablesExamples">
                    <ul class="nav">
                        <li>
                            <a href="?controller=baiviet&action=danhsach">
                                <i class="material-icons">event_note</i>
                                <span class="sidebar-normal"> Bài viết </span>
                            </a>
                        </li>
                        <li>
                            <a href="?controller=nhombaiviet&action=danhsach">
                                <i class="material-icons">group_work</i>
                                <span class="sidebar-normal"> Nhóm bài viết </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
<?php 
    }
 ?>
<!--             <li>
                <a href="./widgets.html">
                    <i class="material-icons">person</i>
                    <p> Liên hệ </p>
                </a>
            </li> -->
            <li>
                <a href="?controller=hethong&action=logout">
                    <i class="material-icons">input</i>
                    <p> Đăng xuất </p>
                </a>
            </li>
        </ul>
    </div>
</div>