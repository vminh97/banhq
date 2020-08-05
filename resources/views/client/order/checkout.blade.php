                                            <br />
                                           	<h3>Tiến hành thanh toán</h3>
                                            <br /><br />
                                            <form method = "POST">
                                                <p>Tổng số tiền cần thanh toán: <?php echo isset($total_amount) ? number_format($total_amount, 0, '', '.') : 0; ?></p>
												<div class="form-group">
													<label>Tên tài khoản</label>
													<input type="text" name = "guest_name" class="form-control" value = "<?php echo isset($user->name) ? $user->name : ''; ?>" placeholder="Tên tài khoản của bạn">
                                                    <?php echo form_error('guest_name'); ?>
												</div>
												<div class="form-group">
													<label>Email của bạn</label>
													<input type="email" name = "guest_email" class="form-control" value = "<?php echo isset($user->email) ? $user->email : ''; ?>" placeholder="Nhập email của bạn">
                                                    <?php echo form_error('guest_email'); ?>
                                                </div>
												<div class="form-group">
													<label>Số điện thoại</label>
													<input type="text" name = "guest_phone" class="form-control" value = "<?php echo isset($user->phone) ? $user->phone : '';  ?>" placeholder="Nhập số điện thoại của bạn">
                                                    <?php echo form_error('guest_phone'); ?>
                                                </div>
                                                <div class="form-group">
													<label>Ghi chú</label>
													<input type="text" name = "message" class="form-control" value = "" placeholder="Nhập số điện thoại của bạn">
                                                    <?php echo form_error('message'); ?>
                                                </div>
                                                <div class="form-group">
                                                    <label>Kiểu thanh toán</label>
                                                    <select class = "form-control" name = "payment">
                                                        <option>Ngân lượng</option>
                                                        <option>Paypal</option>
                                                    </select>
                                                </div>
												<div class = "row margin0">
													<input type = "submit" name = "submit" class = "btn btn-lg btn-success" value = "Thanh toán" />
												</div>
											</form>                                      

