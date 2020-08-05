<table class="table table-hover table-bordered">
	<thead>
        <tr>    
            <th>ID</th>
            <th>ID Order</th>
            <th>ID sản phẩm</th>
            <th>Số lượng</th>
            <th>Tổng tiền</th>
            <th>Dữ liệu</th>
            <th>Tình trạng</th>
            <th>Ngày khởi tạo</th>
        </tr>
    </thead>
    <?php 

        foreach($list as $row) :
    ?>
    <tr>
        <td><?php echo $row->id; ?></td>
        <td><?php echo $row->order_id; ?></td>
        <td><?php echo $row->product_id; ?></td>
        <td><?php echo $row->quantity; ?></td>
        <td><?php echo $row->total; ?></td>
        <td><?php echo $row->data; ?></td>
        <td><?php echo $row->status; ?></td>
        <td><?php echo $row->create_at; ?></td>
    </tr>
    <?php endforeach; ?>
</table>
<a class = "btn btn-success" href = "<?php echo admin_helper::admin_url('order'); ?>">Quay trở lại</a>