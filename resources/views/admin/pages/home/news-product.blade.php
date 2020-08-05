                    <div class = "row disable_side">
					    <div class = "col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<h1>Bài viết mới nhất</h1>
							<ul class="list-group">
							    <?php foreach($newsest as $row) : ?>
                                <li class="list-group-item">
							        <span class="badge"><?php echo date('d-m-Y h:i:s',$row->create_at); ?></span>
							        <?php echo $row->name; ?>
							    </li>
                                <?php endforeach; ?>
							</ul>
							<div class = "text-right button_a">
								<a href = "<?php echo admin_helper::admin_url('news/index'); ?>">Xem tất cả</a>							
							</div>
					    </div>
					    <div class = "col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<h1>Sản phẩm mới nhất</h1>
							<ul class="list-group">
							   <?php foreach($product_new as $row) : ?>
                               <li class="list-group-item">
							        <span class="badge"><?php echo date('d-m-Y h:i:s',$row->create_at); ?></span>
							        <?php echo $row->name; ?>
							    </li>
							    <?php endforeach; ?>
							</ul>
							<div class = "text-right button_a">
								<a href = "<?php echo admin_helper::admin_url('product/index'); ?>">Xem tất cả</a>								
							</div>
					    </div>
					</div>