                                <div class = "box_a">
                                    <a href = "<?php echo admin_helper::admin_url('category/add'); ?>">Thêm mới</a>
                                    <p>Tổng số: <?php echo count($list); ?></p>
                                </div>
                                <table id = "category" class="post_table table table-hover table-bordered">
									<thead>
										<tr>
											<th>ID</th>
											<th>Tên danh mục</th>
											<th>Thuộc danh mục</th>
											<th>Vị trí hiển thị</th>
											<th>Chức năng</th>
										</tr>
									</thead>
                                    <?php foreach ($list as $row) : ?>
									<tr>
										<td><?php echo $row->id; ?></td>
										<td><?php echo $row->name; ?></td>
										<td><?php echo $row->type; ?></td>
										<td><?php echo $row->position; ?></td>
										<td>
                                            <a href = "<?php echo admin_helper::admin_url('category/edit/'.$row->id); ?>" title = "Sửa">Sửa</a>
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
                                                    <a class="btn btn-success" href="<?php echo admin_helper::admin_url('category/delete/'.$row->id); ?>">Có</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
								</table>
                                <?php
                                    if(isset($message) && $message){
                                        $this->load->view('backend/message', $this->data); 
                                    }
                                ?>
                                