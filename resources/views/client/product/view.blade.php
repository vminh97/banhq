                             <?php 
                                $cat_model->db->where('id',$product->cat_id);
                                $cat = $cat_model->db->get('tb_category')->row();
                            ?>
                            <article id = "detail_product">
								<div id = "absolute" class = "row">
								    <div class = "col-xs-12 col-sm-6 col-md-6 col-lg-6">
										<div class="page">
											<div class="sp-loading"><img src="<?php echo common_helper::front_end(); ?>images/sp-loading.gif" alt=""><br>Chờ tí nhé!</div>
											<div class="sp-wrap">
                                                <?php $images = json_decode($product->list_avatar); ?>
                                                <?php foreach($images as $item) : ?>
                                                    <a href = "<?php echo base_url(); ?>uploads/product/<?php echo $item; ?>"><img src="<?php echo base_url(); ?>uploads/product/<?php echo $item; ?>" alt=""></a>  
                                                <?php endforeach; ?>
                                            </div>
										</div>
										<script type="text/javascript">
											$(window).load(function() {
												$('.sp-wrap').smoothproducts();
											});
										</script>
								    </div>
								    <div class = "col-xs-12 col-sm-6 col-md-6 col-lg-6 padding0 space_two_side">
										<h2><?php echo $product->name; ?></h2>
										<time>Loại sản phẩm: <?php echo $cat->name; ?> <br />
                                        Ngày đăng: <?php echo date('d/m/Y',$product->create_at); ?></time>
										<p>
											- Tiêu chuẩn ISO 9002. <br />
                                            - Cam kết chính hãng. <br />
                                            - Sản phẩm có bán trên toàn quốc.
										</p>
										<hr />
										<h6><?php echo number_format($product->price, 0, '', '.'); ?></h6>
                                        <br /><br />
                                        <a href = "<?php echo base_url('cart/add/'.$product->id); ?>"><span class = "button_cart">Thêm vào giỏ hàng</span></a>
                                        <br /><br /><br />
										<p class = "font_italic">
											Siêu thị Văn Minh cam kết giao hàng đến tận nơi cho khách hàng theo đúng thời gian quy định									
										</p>
										<div class = "icon_validate">
											<ul>
												<li>Giao hàng bởi Siêu thị Văn Minh</li>
												<li>Giao hàng trên toàn quốc</li>
												<li>Thủ tục đơn giản, đổi trả trong 03 ngày</li>
											</ul>
										</div>
								    </div>
								</div>
								<div id = "myTabs">
									<ul class="nav nav-tabs" role="tablist">
										<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Thông tin sản phẩm</a></li>
										<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Đánh giá khách hàng</a></li>
									</ul>
									<div class="tab-content">
										<div role="tabpanel" class="tab-pane fade in active" id="home">
											<div class="table-responsive">
												 <table class="table table-hover table-bordered">
													<tr>
														 <td>Khối lượng</td>
														<td><?php echo $product->weight; ?></td>
													</tr>
													<tr>
														<td>Hạn sử dụng</td>
														<td><?php echo $product->expire; ?></td>
													</tr>
													<tr>
														<td>Xuất xứ</td>
														<td><?php echo $product->madein; ?></td>
													</tr>
												</table>
											</div>
										</div>
										<div role="tabpanel" class="tab-pane fade" id="profile">
											<div class="table-responsive">
												<table class="table">
													<tr>
														<td>Rất tốt</td>
														<td>
															<div class="progress">
																<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>Bình thường</td>
														<td>
															<div class="progress">
																<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
																</div>
															</div>
														</td>
													</tr>			
													<tr>
														<td>Rất tệ</td>
														<td>
															<div class="progress">
																<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
																</div>
															</div>
														</td>
													 </tr>			
												</table>
											</div>
										</div>
									</div>
									<script type = "text/javascript">
										$('#myTabs a').click(function (e) {
											e.preventDefault()
											$(this).tab('show')
										})
									</script>
								</div>
								<p><?php echo $product->content; ?></p>
								<img class = "img-responsive margin0auto" src = "images/facebook_comment.png" alt = "" />
								<section>
									<h3>Sản phẩm mới nhất</h3>
									<div class = "row">
                                        <?php foreach ($product_newsest as $row) : ?>
									    <div class = "col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                            <div class = "product">
                                                <a href = "<?php echo base_url('product/view/'.$row->id); ?>"><img class = "img-responsive margin0auto" src = "<?php echo base_url('uploads/product/'.$row->avatar); ?>" alt = "" /></a>
                                                <h5><a href = "<?php echo base_url('product/view/'.$row->id); ?>"><?php echo $row->name; ?></a></h5>
                                                <h4><?php echo number_format($row->price, 0, '', '.'); ?></h4>
                                                <h6><?php echo $cat->name; ?></h6>
                                                <p><?php echo word_limiter($row->content, 20); ?></p>
                                                <div class = "row">
                                                    <div class = "col-xs-12 col-sm-6 col-md-6 col-lg-6 add_cart">
                                                        <a href = "detail_product.html">Mua</a>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <?php endforeach; ?>
									</div>
								</section>
							</article>