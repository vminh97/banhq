                    <div class = "box_a">
						<a href = "<?php echo admin_helper::admin_url('member/add'); ?>">Thêm mới</a>
					</div>
                    <br />
                    <form method = "GET" action = "<?php echo admin_helper::admin_url('member'); ?>">
                        <div class = "row margin0">
                            <div class = "col-xs-12 col-sm-3 col-md-3 col-lg-3 padding0">
                                <input class = "form-control" value = "<?php echo $this->input->get('id'); ?>" type = "text" name = "id" placeholder = "Tìm kiếm thành viên theo id" /><br />
                            </div>
                            <div class = "col-xs-12 col-sm-3 col-md-3 col-lg-3" style = "padding-right:0;">
                                <input class = "form-control" type = "text" name = "name" value = "<?php echo $this->input->get('name'); ?>" placeholder = "Tìm kiếm thành viên theo tên" /><br />
                            </div>
                            <div class = "col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <input class = "btn btn-success" type = "submit" value = "Lọc" />
                            </div>
                        </div>
                    </form>
                    <h5>Tổng số: <?php echo $total; ?></h5><br />
					<div id = "customer" class="post_table table-responsive">
						<table class="table table-hover table-bordered">
							<thead>
								<tr>
									<th>ID</th>
									<th>Tên tài khoản</th>
									<th>Mật khẩu</th>
									<th>Email</th>
                                    <th>Số điện thoại</th>
									<th>Ngày tạo</th>
									<th>Chức năng</th>
								</tr>
							</thead>
                            <?php foreach ($list as $row) : ?>
							<tr>
								<td><?php echo $row->id; ?></td>
								<td><?php echo $row->name; ?></td>
								<td><?php echo $row->password; ?></td>
                                <td><?php echo $row->email; ?></td>
								<td><?php echo $row->phone; ?></td>
								<td><?php echo date('d-m-Y h:i:s',$row->create_at); ?></td>
								<td>
									<a href = "<?php echo admin_helper::admin_url('member/edit/'.$row->id); ?>" title = "Sửa">Sửa</a>
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
                                            <a class="btn btn-success" href="<?php echo admin_helper::admin_url('member/delete/'.$row->id); ?>">Có</a>
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
                    <?php
                        if(isset($message) && $message){
                            $this->load->view('backend/message', $this->data); 
                        }
                    ?>