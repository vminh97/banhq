                    <form method = "POST" enctype = "multipart/form-data">
						<div class = "row disable_side">
						    <div class = "col-xs-12 col-sm-12 col-md-9 col-lg-9">
								<div class="form-group">
									<label>Tên sản phẩm</label>
									<input type="text" name = "name" class="form-control" placeholder="Nhập tiêu đề sản phẩm">
								</div>
								<div class="form-group">
									<label>Ảnh đại diện sản phẩm</label>
									<input type="file" name = "avatar" id = "avatar">
                                    <img width = "100" id = "img_avatar" src = "" alt = "" />
									<p class="help-block">Chọn ảnh đại diện cho sản phẩm</p>
                                    <script type = "text/javascript">
                                        function imagesload(file, image, val) {
                                            var fileCollection = new Array();
                                            $('#' + file).on('change', function (e) {
                                                var files = e.target.files;
                                                $.each(files, function (i, file) {
                                                    fileCollection.push(file);
                                                    var reader = new FileReader();
                                                    reader.readAsDataURL(file);
                                                    reader.onload = function (e) {
                                                        var template = e.target.result;
                                                        $('#' + image).attr({
                                                            'src': template
                                                        });
                                                        $("#" + val).val("");
                                                    };
                                                });
                                            });
                                        }
                                      imagesload('avatar', 'img_avatar', '');
                                    </script>
								</div>
								<div class = "row">
								    <div class = "col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <div class="form-group">
											<label>Danh sách ảnh sản phẩm</label>
											<input type="file" name = "list_avatar[]" id = "images_list" multiple />
                                            <div id="images-to-upload"></div>
                                            <script type = "text/javascript">
                                                var fileCollection = new Array();
                                                $('#images_list').on('change',function(e){
                                                    var files = e.target.files;
                                                    $.each(files, function(i, file){
                                                        fileCollection.push(file);
                                                        var reader = new FileReader();
                                                        reader.readAsDataURL(file);
                                                        reader.onload = function(e){
                                                            var template = '<img width = "100" src="'+e.target.result+'">';
                                                            $('#images-to-upload').append(template);
                                                        };
                                                    });
                                                });
                                            </script>
										</div>
										<div class="form-group">
											<label>Giá</label>
											<input type="text" name = "price" class="form-control" placeholder="Nhập giá">
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
                                                    <option value = "<?php echo $subs->id; ?>"><?php echo $subs->name; ?></option>
                                                    <?php endforeach; ?>
                                                </optgroup>
                                                <?php else: ?>
                                                    <option value = "<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
                                                <?php endif; ?>
                                                <?php endforeach; ?>
                                            </select>
										</div>
								    </div>
								    <div class = "col-xs-12 col-sm-6 col-md-6 col-lg-6">
										<div class="form-group">
											<label>Khối lượng</label>
											<input type="text" name = "weight" class="form-control" placeholder="Nhập khối lượng cho sản phẩm (nếu có)">
										</div>
										<div class="form-group">
											<label>Hạn sử dụng</label>
											<input type="text" name = "expire" class="form-control" placeholder="Nhập HSD cho sản phẩm (nếu có)">
										</div>
                                        <div class="form-group">
											<label>Giảm giá</label>
											<input type="text" name = "discount" class="form-control" placeholder="Nhập số tiền giảm giá">
										</div>
										<div class="form-group">
											<label>Xuất xứ</label>
											<input type="text" name = "madein" class="form-control" placeholder="Nhập xuất xứ cho sản phẩm (nếu có)">
										</div>
								    </div>
								</div>
								<div class="form-group">
									<label>Nội dung</label>
									<p class="help-block">Đây là phần chi tiết của sản phẩm</p>
									<textarea class = "form-control content" name = "content" rows = "10"></textarea>
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
											<input type="text" class="form-control" name = "create_at" placeholder="04/10/2016">
										</div>
								    </div>
								    <div class = "panel-footer">
								        <div class = "pull-right">
											<input type = "submit" name = "submit" class="btn btn-success" value = "Đăng SP" />
										</div>
										<div class = "clr"></div>
								    </div>
								</div>	
						    </div>
						</div>
					</form>
                     <?php $this->load->view('backend/tinymce'); ?>