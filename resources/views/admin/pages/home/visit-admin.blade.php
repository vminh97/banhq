                    <div class = "row disable_side">
					    <div class = "col-xs-12 col-sm-8 col-md-8 col-lg-8">
							<h1>Thống kê truy cập</h1>
							<p>Thống kê lượng khách hàng truy cập vào website</p>
							<div class = "row box_connect">
								<div class = "col-xs-12 col-sm-6 col-md-4 col-lg-4">
									<div class="alert alert-success" role="alert">
										Buổi sáng: <strong>220</strong>
									</div>
							    </div>
								<div class = "col-xs-12 col-sm-6 col-md-4 col-lg-4">
									<div class="alert alert-success" role="alert">
										Buổi chiều: <strong>0</strong>
									</div>
							    </div>
							    <div class = "col-xs-12 col-sm-6 col-md-4 col-lg-4">
									<div class="alert alert-success" role="alert">
										Hôm qua: <strong>550</strong>
									</div>
							    </div>
								<div class = "col-xs-12 col-sm-6 col-md-4 col-lg-4">
									<div class="alert alert-success" role="alert">
										Hôm kia: <strong>670</strong>
									</div>
							    </div>
								<div class = "col-xs-12 col-sm-6 col-md-4 col-lg-4">
									<div class="alert alert-success" role="alert">
										Tuần trước: <strong>1250</strong>
									</div>
							    </div>
								<div class = "col-xs-12 col-sm-6 col-md-4 col-lg-4">
									<div class="alert alert-success" role="alert">
										Tháng trước: <strong>2430</strong>
									</div>
							    </div>
							</div>
					    </div>
						<div class = "col-xs-12 col-sm-4 col-md-4 col-lg-4">
							<h1>Quản trị viên</h1>
							<ul class="list-group heightAdmin">
							    <?php foreach($admin as $row) : ?>
                                <li class="list-group-item">
							        <?php echo $row->name; ?>
							    </li>
                                <?php endforeach; ?>
							</ul>
					    </div>
					</div>