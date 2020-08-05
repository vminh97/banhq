// Hiển thị 1 ảnh sau khi chọn
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
                                      
                                      // Hiển thị nhiều ảnh sau khi chọn
                                      
                                                


                                     