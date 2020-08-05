                <div class = "Zeptain_LT">
					<div class = "box_a">
						<a href = "<?php echo admin_helper::admin_url('order/add'); ?>">Thêm mới</a>
					</div>
                    <br />
                    <form method = "GET" action = "<?php echo admin_helper::admin_url('order'); ?>">
                        <div class = "row margin0">
                            <div class = "col-xs-12 col-sm-3 col-md-3 col-lg-3 padding0">
                                <input class = "form-control" value = "<?php echo $this->input->get('id'); ?>" type = "text" name = "id" placeholder = "Tìm kiếm đơn hàng theo id" /><br />
                            </div>
                            <div class = "col-xs-12 col-sm-3 col-md-3 col-lg-3" style = "padding-right:0;">
                                <input class = "form-control" type = "text" name = "name" value = "<?php echo $this->input->get('name'); ?>" placeholder = "Tìm kiếm đơn hàng theo tên" /><br />
                            </div>
                            <div class = "col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                <select class = "form-control" name = "cat_id">
                                    <option value = ""></option>
                                    <?php foreach($category as $row): ?>
                                    <?php if(count($row->subs) > 1): ?>
                                    <optgroup label = "<?php echo $row->name; ?>">
                                        <?php foreach($row->subs as $subs): ?>
                                        <option value = "<?php echo $subs->id; ?>"
                                            <?php echo ($this->input->get('cat_id') == $subs->id) ? 'selected' : ''; ?>
                                        ><?php echo $subs->name; ?></option>
                                        <?php endforeach; ?>
                                    </optgroup>
                                    <?php else: ?>
                                        <option value = "<?php echo $row->id; ?>"  <?php echo ($this->input->get('cat_id') == $row->id) ? 'selected' : ''; ?>><?php echo $row->name; ?></option>
                                    <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class = "col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                <input class = "btn btn-success" type = "submit" value = "Lọc" />
                            </div>
                        </div>
                    </form>
                    <h5>Tổng số: <?php echo $total_rows; ?></h5><br />
					<div id = "order_table" class="table-responsive">
						<table class="table table-hover table-bordered">
							<thead>
								<tr>
                                    <th><input type = "checkbox" value = "" /></th>
									<th>ID</th>
									<th>ID thành viên</th>
									<th>Tên khách hàng</th>
									<th>Email khách hàng</th>
									<th>Số điện thoại</th>
									<th>Tổng giá</th>
									<th>Thanh toán</th>
									<th>Thông tin thanh toán</th>
									<th>Ghi chú</th>
									<th>Mã bảo mật</th>
									<th>Tình trạng</th>
                                    <th>Ngày tạo</th>
                                    <th>Chức năng</th>
								</tr>
							</thead>
                            <?php foreach($list as $row) : ?>
							<tr>
                                <td><input type = "checkbox" value = "<?php echo $row->id; ?>" name = "id" /></td>
								<td><?php echo $row->id; ?></td>
								<td><?php echo $row->member_id; ?></td>
								<td><?php echo $row->guest_name; ?></td>
								<td><?php echo $row->guest_email; ?></td>
								<td><?php echo $row->guest_phone; ?></td>
								<td><?php echo $row->amount; ?></td>
								<td><?php echo $row->payment; ?></td>
								<td><?php echo $row->payment_info; ?></td>
								<td><?php echo $row->message; ?></td>
                                <td><?php echo $row->security; ?></td>
                                <td><?php echo $row->status; ?></td>
                                <td><?php echo date('d-m-Y h:i:s',$row->create_at); ?></td>
								<td>
                                    <a href = "<?php echo admin_helper::admin_url('order/view/'.$row->id); ?>">Xem</a>
                                    <a href = "<?php echo admin_helper::admin_url('order/edit/'.$row->id); ?>" title = "Sửa">Sửa</a>
                                    <a data-toggle="modal" href = "#model-<?php echo $row->id;?>" title = "Xóa">Xóa</a>
                                </td>
							</tr>	
                            <div class="modal fade" id="model-<?php echo $row->id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class = "panel-body">
                                            <h4 class = "text-center">Bạn có chắc chắn xóa không?</h4>
                                        </div>
                                        <div class="modal-footer">
                                            <a data-dismiss="modal" class="btn btn-default" href = "#">Không</a>
                                            <a class="btn btn-success" href="<?php echo admin_helper::admin_url('order/delete/'.$row->id); ?>">Có</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
						</table>
					</div>
					<nav aria-label="Page navigation">
						<ul class="pagination pull-right">
						    <li><?php echo $this->pagination->create_links(); ?></li>
						</ul>
					</nav>
					<div class = "clr"></div>
				</div>
                <?php
                    if(isset($message) && $message){
                        $this->load->view('backend/message', $this->data); 
                    }
                ?>