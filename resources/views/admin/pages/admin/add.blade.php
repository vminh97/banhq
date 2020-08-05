                    <form method = "POST">
						<div class = "row disable_side">
						    <div class = "col-xs-12 col-sm-12 col-md-9 col-lg-9">
								<div class="form-group">
									<label>Tên tài khoản</label>
									<input type="text" class="form-control" name = "name" value = "<?php echo set_value('name'); ?>" placeholder="Nhập tên tài khoản">
                                    <br />
                                    <h6><?php echo form_error('name'); ?></h6>
								</div>
								<div class="form-group">
									<label>Mật khẩu</label>
									<input type="password" class="form-control" name = "password" value = "<?php echo set_value('password'); ?>" placeholder="Nhập mật khẩu">
                                    <br />
                                    <h6><?php echo form_error('password'); ?></h6>
								</div>
								<div class="form-group">
									<label>Họ và tên</label>
									<input type="text" class="form-control" name = "fullname" value = "<?php echo set_value('fullname'); ?>" placeholder="Nhập họ và tên">
                                    <br />
                                    <h6><?php echo form_error('fullname'); ?></h6>
								</div>
								<button type="submit" class="btn btn-success">Thêm mới</button>
						    </div>
						    <div class = "col-xs-12 col-sm-12 col-md-3 col-lg-3">
							
						    </div>
						</div>
					</form>