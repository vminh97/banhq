                    <form method = "POST" enctype = "multipart/form-data">
						<div class = "row disable_side">
						    <div class = "col-xs-12 col-sm-12 col-md-9 col-lg-9">
								<div class="form-group">
									<label>Tên bài viết</label>
									<input type="text" name = "name" class="form-control" value = "<?php echo $news->name; ?>" placeholder="Nhập tiêu đề bài viết">
								</div>
								<div class="form-group">
									<label>Ảnh đại diện bài viết</label>
									<input type="file" name = "avatar" id = "avatar">
                                    <input type="hidden" name = "avatar" value = "<?php echo $news->avatar; ?>" >
                                    <div class = "row margin0">
                                        <div class = "col-xs-12 col-sm-3 col-md-3 col-lg-3 padding0">
                                            <p>Ảnh đang chọn</p>
                                            <img id = "avatar" class = "img-responsive margin0auto" width = "100" style = "float:left;" src = "<?php echo base_url('uploads/news/'.$news->avatar); ?>" alt = "" />
                                        </div> 
                                        <div class = "col-xs-12 col-sm-3 col-md-3 col-lg-3 padding0">
                                            <p>Ảnh sẽ thay đổi</p>
                                            <img width = "100" id = "img_avatar" src = "" alt = "" />
                                        </div> 
                                    </div>
									<p class="help-block">Chọn ảnh đại diện cho bài viết</p>
                                    <div class = "clr"></div>
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
											<label>Danh mục</label>
											<p class="help-block">Chọn danh mục cho bài viết</p>
											<select class = "form-control" name = "cat_id">
                                                <option value = ""></option>
                                                <?php foreach($category as $row): ?>
                                                <?php if(count($row->subs) > 1): ?>
                                                <optgroup label = "<?php echo $row->name; ?>">
                                                    <?php foreach($row->subs as $subs): ?>
                                                    <option value = "<?php echo $subs->id; ?>" <?php if($subs->id == $news->cat_id) echo 'selected'; ?>><?php echo $subs->name; ?></option>
                                                    <?php endforeach; ?>
                                                </optgroup>
                                                <?php else: ?>
                                                    <option value = "<?php echo $row->id; ?>" <?php if($row->id == $news->cat_id) echo 'selected'; ?>><?php echo $row->name; ?></option>
                                                <?php endif; ?>
                                                <?php endforeach; ?>
                                            </select>
										</div>
								    </div>
								    <div class = "col-xs-12 col-sm-6 col-md-6 col-lg-6"> 
								    </div>
								</div>
                                <div class="form-group">
									<label>Tóm tắt</label>
									<p class="help-block">Đây là phần tóm tắt của bài viết</p>
									<textarea class = "form-control summary" name = "summary" rows = "4"><?php echo $news->summary; ?></textarea>
								</div>
								<div class="form-group">
									<label>Nội dung</label>
									<p class="help-block">Đây là phần chi tiết của bài viết</p>
									<textarea class = "form-control content" name = "content" rows = "10"><?php echo $news->content; ?></textarea>
								</div>
						    </div>
						    <div class = "col-xs-12 col-sm-12 col-md-3 col-lg-3">
								<div class = "panel panel-default">
								    <div class = "panel-heading">
								        Đăng bài viết
								    </div>
								    <div class = "panel-body">
										<div class="form-group">
											<label>Thời gian đăng</label>
											<p class = "help-block">Ngày : Tháng : Năm</p>
											<input type="text" class="form-control" name = "create_at" value = "<?php echo date('d-m-Y h:i:s', $news->create_at); ?>" placeholder="04/10/2016">
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