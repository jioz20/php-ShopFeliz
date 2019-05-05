&nbsp;
<div class="text-center" style="color: red;">Quý khách vui lòng kiểm tra mail để xác nhận đơn hàng sau khi thanh toán.</div>
&nbsp;
<form method="post">
<table width="70%" align="center" cellpadding="10" cellspacing="0" border="1" style="border-collapse:collapse"> 
    <tr style="text-align: center">
		<td>Mã</td>    
        <td>Sản phẩm</td>    
        <td>Giá</td>    
        <td>Số lượng</td>
        <td>Thành tiền</td>
        <td style="width: 110px; height: 30px;"><button name="capnhat" class="button" style="background-color: red; color: white; width: 110px; height: 30px; ">Cập nhật</button></td>    
    </tr>

<?php 
	foreach($session as $item)
	{
        $thanhtien = $item['soluong']*$item['gia'];
 ?>
    <tr style="text-align: center">
		<td><?=$item['id']?></td>    
        <td style="text-align: left">&nbsp; <img src="<?= '/data/upload/'.$item['hinh']; ?>" width="50" /> <?=$item['ten']?></td>    
        <td><?=number_format($item['gia'])?>đ</td>    

        <td style="width: 300px; height: 52px; text-align: center; color: red; "><input type="number" min=1 name="soluong[<?=$item['id']?>]" value="<?=$item['soluong']?>" 
            style="width: 300px; height: 52px; text-align: center; color: red; "/>
        </td>

         <td ><?=number_format($thanhtien)?>đ</td> 
        <td><a href="<?=DOMAIN.'xoahang/'.$item['id'].'.html';?>" onclick="return confirm('Bạn có muốn xóa khỏi giỏ hàng?')"> <i class="fa fa-trash-o" style="font-size: 30px; color: red;"></i> </a></td>    
    </tr>
<?php 
	}
 ?>
    <tr>		
         <td colspan="5" style="padding-left: 685px; ">Tổng: <?=number_format($tongtien);?>đ</td> 
         <td>&nbsp;</td>        
    </tr>
    </table>
</form>
&nbsp;
<div style="text-align:right; width:800px; margin-left: 100px; ">
<fieldset>

        <a href="<?=DOMAIN.'index.html';?>" class="hvr-outline-out button2">
            <button class="button" style="background-color: #2fdab8; color: white; width: 130px; height: 50px;">Mua tiếp</button>
        </a>

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        <a href="<?=DOMAIN.'thanhtoan.html';?>" class="hvr-outline-out button2">
            <button class="button" style="background-color: #2fdab8; color: white; width: 130px; height: 50px;">Thanh toán</button>
        </a>
</fieldset>

</div>
    