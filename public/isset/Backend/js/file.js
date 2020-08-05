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
                                                //form upload ... delegation
                                                $(document).on('submit','form',function(e){
                                                    e.preventDefault();
                                                    //this form index
                                                    var index = $(this).index();
                                                    var formdata = new FormData($(this)[0]); //direct form not object
                                                    //append the file relation to index
                                                    formdata.append('image',fileCollection[index]);
                                                    var request = new XMLHttpRequest();
                                                    request.open('post', 'server.php', true);
                                                    request.send(formdata);
                                                });
                                      
                                      
                        // Hiển thị giờ, phút, ngày, tháng              
function refrClock() {

    var d = new Date();

    var s = d.getSeconds();

    var m = d.getMinutes();

    var h = d.getHours();

    var day = d.getDay();

    var date = d.getDate();

    var month = d.getMonth();

    var year = d.getFullYear();

    var days = new Array("Chủ Nhật", "Thứ 2", "Thứ 3", "Thứ 4", "Thứ 5", "Thứ 6", "Thứ 7");

    var months = new Array("1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12");
    var am_pm;

    if (s < 10) {
        s = "0" + s
    }

    if (m < 10) {
        m = "0" + m
    }

    if (h > 12)

    {
        h -= 12;
        AM_PM = "PM"
    } else {
        AM_PM = "AM"
    }

    if (h < 10) {
        h = "0" + h
    }

    document.getElementById("clock").innerHTML = days[day] + " - " + date + "/" + months[month] + "/" + year + " Bây giờ là:  " + " " + h + ":" + m + ":" + s + " " + AM_PM;
    setTimeout("refrClock()", 1000);
}

                                     