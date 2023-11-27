<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>Other</h2>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li class="active">Register</li>
            </ul>
        </div>
    </div>
</div>
<!-- Hiraola's Breadcrumb Area End Here -->
<!-- Begin Hiraola's Login Register Area -->
<div class="hiraola-login-register_area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12" style="margin: 0 auto;">
                <?php
                $dsthongke = list_thongke();  
                ?>

                <html>

                <head>
                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                    <script type="text/javascript">
                        google.charts.load("current", {
                            packages: ["corechart"]
                        });
                        google.charts.setOnLoadCallback(drawChart);

                        function drawChart() {
                            var data = new google.visualization.DataTable();
                            data.addColumn('string', 'Tên Đanh Mục');
                            data.addColumn('number', 'Số Lượng');

                            <?php  
                            foreach ($dsthongke as  $value) {    
                                echo "data.addRow(['".$value['ten_dm']."', ".$value['so_luong']."]);";
                            }
                            ?>

                            var options = {
                                title: 'My Daily Activities',
                                bars: 'vertical',
                                vAxis: {format: 'decimal'},
                                height: 500,
                                colors: ['#1b9e77', '#d95f02', '#7570b3']
                            };

                            var chart = new google.visualization.ColumnChart(document.getElementById('columnchart'));
                            chart.draw(data, options);
                        }
                    </script>
                </head>

                <body>
                    <div id="columnchart" style="width: 500px; height: 500px;"></div>
                </body>

                </html>

            </div>
        </div>
    </div>
</div>
</div>