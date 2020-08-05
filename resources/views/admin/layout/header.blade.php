<header>
    <?php date_default_timezone_set('Asia/Ho_Chi_Minh'); ?>
        <div class = "header_1">
            <div class = "row margin0 Zeptain_LT">
                
                <div class = "col-xs-12 col-sm-9 col-md-9 col-lg-9 padding0">
                    <div class = "timeZone text-right padding_side">
                        <h6>Chào mừng bạn <strong> Minh</strong> | <a href = "">Thoát</a></h6>
                        <p id = "clock"></p>
                        <script type="text/javascript"> 
                            function refrClock() {
                                var d=new Date(); 
                                var s=d.getSeconds(); var m=d.getMinutes(); var h=d.getHours();
                                var day=d.getDay(); var date=d.getDate(); var month=d.getMonth();
                                var year=d.getFullYear(); var am_pm;
                                var days=new Array("Chủ nhật","Thứ hai","Thứ 3","Thứ 4","Thứ 5","Thứ 6","Thứ 7");
                                var months=new Array("1","2","3","4","5","6","7","8","9","10","11","12"); 
                                if (s<10) {s="0" + s}
                                if (m<10) {m="0" + m}
                                if (h>12) {h-=12;AM_PM = "PM"} else {AM_PM="AM"}
                                if (h<10) {h="0" + h}
                                /* document.getElementById("clock").innerHTML=days[day] + " Ngày " + date + "/" +months[month] + "/" + year + " Bây giờ là "+ " [" + h + ":" + m + ":" + s + "] " + AM_PM; setTimeout("refrClock()",1000);} refrClock(); */
                                document.getElementById("clock").innerHTML=h + ":" + m + ":" + s + " " + AM_PM; setTimeout("refrClock()",1000);} refrClock(); 
                        </script>
                    </div>
                </div>
            </div>
        </div>
        <div class = "header_2">
            <div class = "Zeptain_LT">
                <div id = "cssmenu">
                    <ul>
                        <li><a href = "">Tổng quan</a></li>
                        <li class = "has-sub"><a href = "">Bài viết</a>
                            
                        </li>
                        <li class = "has-sub"><a href = "">Sản phẩm</a>
                            <ul>
                                <li><a href = "">Tất cả sản phẩm</a></li>
                                <li><a href = "">Danh mục sản phẩm</a></li>
                            </ul>
                        </li>
                        <li><a href = "">Khách hàng</a></li>
                        <li><a href = "">Order</a></li>
                        <li><a href = "">Quản trị viên</a></li>
                    </ul>
                    <div class = "clr"></div>
                </div>
            </div>
        </div>
</header>