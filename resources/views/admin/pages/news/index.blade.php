                <div class = "Zeptain_LT">
					<div class = "box_a">
						<a href = "<?php echo admin_helper::admin_url('news/add'); ?>">Thêm mới</a>
					</div>
                    <br />
                    <form method = "GET" action = "<?php echo admin_helper::admin_url('news'); ?>">
                        <div class = "row margin0">
                            <div class = "col-xs-12 col-sm-3 col-md-3 col-lg-3 padding0">
                                <input class = "form-control" value = "<?php echo $this->input->get('id'); ?>" type = "text" name = "id" placeholder = "Tìm kiếm bài viết theo id" /><br />
                            </div>
                            <div class = "col-xs-12 col-sm-3 col-md-3 col-lg-3" style = "padding-right:0;">
                                <input class = "form-control" type = "text" name = "name" value = "<?php echo $this->input->get('name'); ?>" placeholder = "Tìm kiếm bài viết theo tên" /><br />
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
                    <br />
                    <h5>Tổng số: <?php echo $total_rows; ?></h5><br />
					<div id = "news_table" class="table-responsive">
						<table class="table table-hover table-bordered">
							<thead>
								<tr>
                                    <th><input type = "checkbox" value = "" /></th>
									<th>ID</th>
									<th>Ảnh bài viết</th>
									<th>Tên bài viết</th>
									<th>Danh mục</th>
									<th>Tóm tắt</th>
									<th>Nội dung</th>
                                    <th>Đã xem</th>
                                    <th>Ngày tạo</th>
                                    <th>Chức năng</th>
								</tr>
							</thead>
                            <?php foreach($list as $row) : ?>
							<tr>
                                <td><input type = "checkbox" value = "<?php echo $row->id; ?>" name = "id" /></td>
								<td><?php echo $row->id; ?></td>
								<td><img class = "img-responsive margin0auto" src = "<?php echo base_url('uploads/news/'.$row->avatar); ?>" width = "400" alt = "" /></td>
								<td><?php echo $row->name; ?></td>
								<td><?php echo $row->cat_id; ?></td>
								<td><?php echo word_limiter($row->summary,30); ?></td>
								<td><?php echo word_limiter($row->content,30); ?></td>
                                <td><?php echo $row->view; ?></td>
                                <td><?php echo date('d-m-Y h:i:s',$row->create_at); ?></td>
								<td>
                                    <a href = "<?php echo admin_helper::admin_url('news/edit/'.$row->id); ?>" title = "Sửa">Sửa</a>
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
                                            <a class="btn btn-success" href="<?php echo admin_helper::admin_url('news/delete/'.$row->id); ?>">Có</a>
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