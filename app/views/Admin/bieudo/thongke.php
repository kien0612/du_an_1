
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <!-- <h1 class="m-0">Thông Kê Đanh Mục </h1> -->
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
    </div>
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