                    <form method = "POST">
						<div class = "row disable_side">
						    <div class = "col-xs-12 col-sm-12 col-md-9 col-lg-9">
								<div class="form-group">
									<label>Tên danh mục</label>
									<input type="text" class="form-control" name = "name" value = "<?php echo set_value('name'); ?>" placeholder="Nhập tên danh mục">
                                    <br />
                                    <h6><?php echo form_error('name'); ?></h6>
								</div>
                                <div class="form-group">
									<select name = "type">
                                        <option value = "0">Là danh mục cha</option>
                                        <?php foreach($list as $row) : ?>
                                         <option value = "<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <h6><?php echo form_error('type'); ?></h6>
								</div>
                                <div class="form-group">
									<label>Vị trí hiển thị</label>
									<input type="text" class="form-control" name = "position" value = "<?php echo set_value('position'); ?>" placeholder="Nhập vị trí hiển thị">
                                    <br />
                                    <h6><?php echo form_error('position'); ?></h6>
								</div>
								<button type="submit" class="btn btn-success">Thêm mới</button>
						    </div>
						    <div class = "col-xs-12 col-sm-12 col-md-3 col-lg-3">
							
						    </div>
						</div>
					</form>