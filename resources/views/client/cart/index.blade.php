        <br />        
        <h4 class = "text-uppercase">Thông tin giỏ hàng</h4>
        <br />
        <p>Có <?php echo $total_items; ?> sản phẩm</p>
        <?php 
            if($total_items > 0) :    
        ?>
        <form action = "<?php echo base_url('cart/update'); ?>" method = "POST">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Ảnh sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Đơn giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <?php
                    $total_amount = 0;
                    foreach($carts as $row) : 
                    $total_amount = $total_amount + $row['subtotal'];
                ?>
                <tr>
                    <td><img width = "100" class="img-responsive margin0auto" src="<?php echo base_url('uploads/product/'.$row['avatar']); ?>" alt="" /></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo number_format($row['price'], 0, '', '.'); ?></td>
                    <td><input class = "form-control" type = "text" size = "1" name = "qty_<?php echo $row['id']; ?>" value = "<?php echo $row['qty']; ?>" /></td>
                    <td><?php echo number_format($row['subtotal'], 0, '', '.'); ?></td>
                    <td><a class = "btn btn-success btn-xs" href = "<?php echo base_url('cart/del/'.$row['id']); ?>">Xóa</a></td>
                </tr>
                <?php endforeach; ?>
            </table>
            <a class = "btn btn-danger" href = "<?php echo base_url('cart/del'); ?>">Xóa toàn bộ</a>
            <input class = "btn btn-success" type = "submit" value = "Cập nhật" />
            <div class="pull-right">
                <h5 style = "font-size:17px;">Thành tiền: 
                <strong><?php echo number_format($total_amount, 0, '', '.'); ?> VND</strong></h5>
                <p class = "text-right">(Đã bao gồm thuế VAT)</p>
            </div>
            <div class="clr"></div>
            <br />
            <div class="row margin0 pull-right">
                <a class = "btn btn-danger" href = "<?php echo base_url('order/checkout'); ?>">Tiến hành thanh toán</a>
            </div>
        </form>
        <?php else: ?>
        <br />
        <h4 class = "text-success">Không có sản phẩm nào trong giỏ hàng</h4>
        <?php endif; ?>
        <div class="clr"></div>