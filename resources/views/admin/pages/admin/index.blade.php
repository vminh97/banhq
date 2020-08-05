 

                    <div class = "box_a">
						<a href = "<?php echo admin_helper::admin_url('admin/add'); ?>">Thêm mới</a>
                        
					</div>
					<div id = "admin" class="post_table table-responsive">
						<table class="table table-hover table-bordered">
							<thead>
								<tr>
									<th>ID</th>
									<th>Tên tài khoản</th>
									<th>Mật khẩu</th>
									<th>Họ và tên</th>
									<th>Ngày tạo</th>
									<th>Chức năng</th>
								</tr>
							</thead>
                            <?php foreach ($list as $row) : ?>
							<tr>
								<td><?php echo $row->id; ?></td>
								<td><?php echo $row->name; ?></td>
								<td><?php echo $row->password; ?></td>
								<td><?php echo $row->fullname; ?></td>
								<td><?php echo date('d-m-Y h:i:s',$row->create_at); ?></td>
								<td>
									<a href = "<?php echo admin_helper::admin_url('admin/edit/'.$row->id); ?>" title = "Sửa">Sửa</a>
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
                                            <a class="btn btn-success" href="<?php echo admin_helper::admin_url('admin/delete/'.$row->id); ?>">Có</a>
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