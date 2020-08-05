                    <form method = "POST" enctype = "multipart/form-data">
						<div class = "row disable_side">
						    <div class = "col-xs-12 col-sm-12 col-md-9 col-lg-9">
								<div class="form-group">
									<label>Tên sản phẩm</label>
									<input type="text" name = "name" class="form-control" value = "<?php echo $product->name; ?>" placeholder="Nhập tiêu đề bài viết">
								</div>
								<div class="form-group">
									<label>Ảnh đại diện sản phẩm</label>
									<input type="file" name = "avatar">
                                    <img class = "img-responsive margin0auto" width = "100" src = "<?php echo base_url('uploads/product/'.$product->avatar); ?>" alt = "" />
									<p class="help-block">Chọn ảnh đại diện cho sản phẩm</p>
								</div>
								<div class = "row">
								    <div class = "col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <div class="form-group">
											<label>Danh sách ảnh sản phẩm</label>
											<input type="file" name = "list_avatar[]" multiple />
                                            <?php 
                                                $list_avatar = json_decode($product->list_avatar);
                                                foreach ($list_avatar as $img) :
                                            ?>
                                            <img width = "100" class = "img-responsive margin0auto" src = "<?php echo base_url('uploads/product/'.$img); ?>" />
                                            <?php endforeach; ?>
										</div>
										<div class="form-group">
											<label>Giá</label>
											<input type="text" name = "price" value = "<?php echo $product->price; ?>" class="form-control" placeholder="Nhập giá">
										</div>
										<div class="form-group">
											<label>Danh mục</label>
											<p class="help-block">Chọn danh mục cho sản phẩm</p>
											<select class = "form-control" name = "cat_id">
                                                <option value = ""></option>
                                                <?php foreach($category as $row): ?>
                                                <?php if(count($row->subs) > 1): ?>
                                                <optgroup label = "<?php echo $row->name; ?>">
                                                    <?php foreach($row->subs as $subs): ?>
                                                    <option value = "<?php echo $subs->id; ?>" <?php if($subs->id == $product->cat_id) echo 'selected'; ?>><?php echo $subs->name; ?></option>
                                                    <?php endforeach; ?>
                                                </optgroup>
                                                <?php else: ?>
                                                    <option value = "<?php echo $row->id; ?>" <?php if($row->id == $product->cat_id) echo 'selected'; ?>><?php echo $row->name; ?></option>
                                                <?php endif; ?>
                                                <?php endforeach; ?>
                                            </select>
										</div>
								    </div>
								    <div class = "col-xs-12 col-sm-6 col-md-6 col-lg-6">
										<div class="form-group">
											<label>Khối lượng</label>
											<input type="text" name = "weight" class="form-control" value = "<?php echo $product->weight; ?>" placeholder="Nhập khối lượng cho sản phẩm (nếu có)">
										</div>
										<div class="form-group">
											<label>Hạn sử dụng</label>
											<input type="text" name = "expire" class="form-control" value = "<?php echo $product->expire; ?>" placeholder="Nhập HSD cho sản phẩm (nếu có)">
										</div>
                                        <div class="form-group">
											<label>Giảm giá</label>
											<input type="text" name = "discount" class="form-control" value = "<?php echo $product->discount; ?>" placeholder="Nhập số tiền giảm giá">
										</div>
										<div class="form-group">
											<label>Xuất xứ</label>
											<input type="text" name = "madein" class="form-control" value = "<?php echo $product->madein; ?>" placeholder="Nhập xuất xứ cho sản phẩm (nếu có)">
										</div>
								    </div>
								</div>
								<div class="form-group">
									<label>Nội dung</label>
									<p class="help-block">Đây là phần chi tiết của sản phẩm</p>
									<textarea class = "form-control content" name = "content" rows = "10"><?php echo $product->content; ?></textarea>
								</div>
						    </div>
						    <div class = "col-xs-12 col-sm-12 col-md-3 col-lg-3">
								<div class = "panel panel-default">
								    <div class = "panel-heading">
								        Đăng Sản Phẩm
								    </div>
								    <div class = "panel-body">
										<div class="form-group">
											<label>Thời gian đăng</label>
											<p class = "help-block">Ngày : Tháng : Năm</p>
											<input type="text" class="form-control" name = "create_at" value = "<?php echo date('d-m-Y h:i:s',$product->create_at); ?>" placeholder="04/10/2016">
										</div>
								    </div>
								    <div class = "panel-footer">
								        <div class = "pull-right">
											<input type = "submit" name = "submit" class="btn btn-success" value = "Cập nhật"></button>
										</div>
										<div class = "clr"></div>
								    </div>
								</div>	
						    </div>
						</div>
					</form>
                     <?php $this->load->view('backend/tinymce'); ?>