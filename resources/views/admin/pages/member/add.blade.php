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
									<label>Email</label>
									<input type="text" class="form-control" name = "email" value = "<?php echo set_value('email'); ?>" placeholder="Nhập email">
                                    <br />
                                    <h6><?php echo form_error('email'); ?></h6>
								</div>
                                <div class="form-group">
									<label>Số điện thoại</label>
									<input type="text" class="form-control" name = "phone" value = "<?php echo set_value('phone'); ?>" placeholder="Nhập số điện thoại">
                                    <br />
                                    <h6><?php echo form_error('phone'); ?></h6>
								</div>
								<button type="submit" class="btn btn-success">Thêm mới</button>
						    </div>
						    <div class = "col-xs-12 col-sm-12 col-md-3 col-lg-3">
							
						    </div>
						</div>
					</form>