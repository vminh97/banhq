                <div class = "Zeptain_LT">
					<div class = "box_a">
						<a href = "<?php echo admin_helper::admin_url('product/add'); ?>">Thêm mới</a>
					</div>
                    <br />
                    <form method = "GET" action = "<?php echo admin_helper::admin_url('product'); ?>">
                        <div class = "row margin0">
                            <div class = "col-xs-12 col-sm-3 col-md-3 col-lg-3 padding0">
                                <input class = "form-control" value = "<?php echo $this->input->get('id'); ?>" type = "text" name = "id" placeholder = "Tìm kiếm sản phẩm theo id" /><br />
                            </div>
                            <div class = "col-xs-12 col-sm-3 col-md-3 col-lg-3" style = "padding-right:0;">
                                <input class = "form-control" type = "text" name = "name" value = "<?php echo $this->input->get('name'); ?>" placeholder = "Tìm kiếm sản phẩm theo tên" /><br />
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
					<div id = "product_table" class="table-responsive">
						<table class="table table-hover table-bordered">
							<thead>
								<tr>
                                    <th><input type = "checkbox" value = "" /></th>
									<th>ID</th>
									<th>Ảnh sản phẩm</th>
									<th>Tên sản phẩm</th>
									<th>Giá</th>
									<th>Danh mục</th>
									<th>Khối lượng</th>
									<th>Hạn SD</th>
									<th>Xuất xứ</th>
									<th>Nội dung SP</th>
									<th>Giảm giá</th>
									<th>Danh sách ảnh</th>
									<th>Lượt mua</th>
                                    <th>Đã xem</th>
                                    <th>Ngày tạo</th>
                                    <th>Chức năng</th>
								</tr>
							</thead>
                            <?php foreach($list as $row) : ?>
							<tr>
                                <td><input type = "checkbox" value = "<?php echo $row->id; ?>" name = "id" /></td>
								<td><?php echo $row->id; ?></td>
								<td><img class = "img-responsive margin0auto" src = "<?php echo base_url('uploads/product/'.$row->avatar); ?>" alt = "" /></td>
								<td><?php echo $row->name; ?></td>
								<td><?php echo $row->price; ?></td>
								<td><?php echo $row->cat_id; ?></td>
								<td><?php echo $row->weight; ?></td>
								<td><?php echo $row->expire; ?></td>
								<td><?php echo $row->madein; ?></td>
								<td><?php echo word_limiter($row->content, 20); ?></td>
								<td>
                                    <?php if($row->discount > 0): ?>
                                    <?php $price_new = ($row->price) - ($row->discount); ?>
                                    <p><?php echo number_format($price_new); ?></p>
                                    <?php else: ?>
                                        <p><?php echo number_format($row->price); ?></p>
                                    <?php endif; ?>
                                </td>
                                <td>  
                                    <div style = "height:120px; width:120px; overflow:auto">                              
                                        <?php 
                                            $list_avatar = json_decode($row->list_avatar);
                                            foreach ($list_avatar as $img) : ?>
                                        <img class = "img-responsive margin0auto" src = "<?php echo base_url('uploads/product/'.$img); ?>" alt = "" />
                                        <?php endforeach; ?>
                                    </div>
                                </td>
                                <td><?php echo $row->count_buy; ?></td>
                                <td><?php echo $row->view; ?></td>
                                <td><?php echo date('d-m-Y h:i:s',$row->create_at); ?></td>
								<td>
                                    <a href = "<?php echo admin_helper::admin_url('product/edit/'.$row->id); ?>" title = "Sửa">Sửa</a>
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
                                            <a class="btn btn-success" href="<?php echo admin_helper::admin_url('product/delete/'.$row->id); ?>">Có</a>
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