<!DOCTYPE html>
<html lang="en">
<?php include "partials/header.php" ?>
<?php

$inventory1 = 0;
$category1 = new Category1();
$data = $category1->findAll();
$category1_total = count($data);
// convertion of obj into array
$array = json_decode(json_encode($data), true);
// var_dump($array); - for testing
foreach ($array as $value) {
    $inventory1 += $value['inventory'];
}



$inventory2 = 0;
$category2 = new Category2();
$data = $category2->findAll();
$category2_total = count($data);
$array = json_decode(json_encode($data), true);
foreach ($array as $value) {
    $inventory2 += $value['inventory'];
}



$inventory3 = 0;
$category3 = new Category3();
$data = $category3->findAll();
$category3_total = count($data);
$array = json_decode(json_encode($data), true);
foreach ($array as $value) {
    $inventory3 += $value['inventory'];
}


$price = 0;
$sales = new Sale();
$data = $sales->findAll();

$array = json_decode(json_encode($data), true);
foreach ($array as $value) {
    $price += $value['total_price'];
}


?>

<body>
    <div class="wrapper">
        <?php include "partials/sidebar.php" ?>
        <div class="container mt-5">

            <!-- Content Row -->
            <div class="row">
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4" style="height:111.5px">
                    <div class="card border-left-primary shadow h-100 py-2" style="border-left: .25rem solid #456cea">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center  border-left">
                                <a class="col mr-2" href="<?= ROOT ?>/sales">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="font-weight: bolder;">
                                        Total Sales
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">₱<?= $price ?></div>
                                </a>

                                <div class="col-auto">
                                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                    <a class="col mr-2" href="<?= ROOT ?>/sales">
                                        <img src="data:image/gif;base64,R0lGODlhMAAwAPcAAAD/AEywUU6vUU+wUk+wVFCxU1CxVVGyVFGyVlSyV1W0WFeyWlizXFi0Wlm1XVq2Xl22YV63YF63Yl+4Y2K4ZWO5aGS6aWS7Z2a6aWe7ami8a2i8bWu8bmy9bmy9cG2+cW6/cnC/cnG/dXHAc3LAdnTCd3XBd3XDeXbCeXfDennCfHrDfXvEfn3Ff37EgX/Fg3/GgIHHhILIhYPHh4PJhoTIiIbJh4bJiYjJiorKjIvLj4vMjYzNjo3MkI/NkZDNlJDOkpHPlZPOlZTPlZTPl5XQmJbPmJjQmZnRnJnSmprSnZzSnZ3SoJ3Tnp7UoJ/VoaHUo6LVpKPWpaTXpqbWqKfXqajZq6narKrYq6vZrKzarazar63brq3bsLDbsbHcsrHctLLdtLLdtrTctrXdt7bfuLfgubnfu7rgurrgvLvhu7vhvbziv77hv7/iwL/iwsDjw8DkwcHkxMPkxMTlxcXlyMXmxsjmyMjmysnny8vozMznzM3ozc3oz87p0NDq0dHq0dHs09Lr09Ts1NXt19bs19ft2Nnu2drt29rv2tvu3Nvv2t3v3t3w3N7x39/y4ODx4OLy4eLy4+Pz5Obz5ef05+f06ej16On06uv16+z37O337+347e/37/D47vD48PH58vL68/X69PX69vb79/f8+Pj69/n7+vn8+Pr9+fv9/fv++/7+/v///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////yH/C05FVFNDQVBFMi4wAwEAAAAh+QQFBAAAACwAAAAAMAAwAIcA/wBMsFFOr1FPsFJPsFRQsVNQsVVRslRRslZUsldVtFhXslpYs1xYtFpZtV1atl5dtmFet2Bet2JfuGNiuGVjuWhkumlku2dmumlnu2povGtovG1rvG5svW5svXBtvnFuv3Jwv3Jxv3VxwHNywHZ0wnd1wXd1w3l2wnl3w3p5wnx6w317xH59xX9+xIF/xYN/xoCBx4SCyIWDx4eDyYaEyIiGyYeGyYmIyYqKyoyLy4+LzI2MzY6NzJCPzZGQzZSQzpKRz5WTzpWUz5WUz5eV0JiWz5iY0JmZ0ZyZ0pqa0p2c0p2d0qCd056e1KCf1aGh1KOi1aSj1qWk16am1qin16mo2aup2qyq2Kur2ays2q2s2q+t266t27Cw27Gx3LKx3LSy3bSy3ba03La13be237i34Lm537u64Lq64Ly74bu74b284r++4b+/4sC/4sLA48PA5MHB5MTD5MTE5cXF5cjF5sbI5sjI5srJ58vL6MzM58zN6M3N6M/O6dDQ6tHR6tHR7NPS69PU7NTV7dfW7NfX7djZ7tna7dva79rb7tzb79rd797d8Nze8d/f8uDg8eDi8uHi8uPj8+Tm8+Xn9Ofn9Ono9ejp9Orr9evs9+zt9+/t+O3v9+/w+O7w+PDx+fLy+vP1+vT1+vb2+/f3/Pj4+vf5+/r5/Pj6/fn7/f37/vv+/v7///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////8I/wBPtVLVSiBBgwUHJjyoEKHDhhAZEmzFiqLFihgvaszIcaNHjhIXinwYkuTIiAk/quzIcuVHkzBZ+ZniAgOBAwEUUKDBZJBAmChdZqSUZEGAo0iTHn1wpFJLliUjfsqBE2eBAFaxBrhqVUAQSygfCjWTQKnZs0cVkBEKdJSPrVq5ws1Kdy6OVVEntgyVAq1fvyZIPY1qasXcw3IHPkAcF6sIvCc/8vibtKJRygFyvIzIhnHdqwUXf258YExQjpzKUi4xB1VFVY+oMKCcINPGkDnk6tZa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" width="60px"></a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Category 1 -->
                <div class="col-xl-3 col-md-6 mb-4" style="height: 111.5px">
                    <div class="card border-left-success shadow h-100 py-2" style="border-left: .25rem solid #1cc88a;">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <a class="col mr-2" href="<?= ROOT ?>/category1s">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1" style="font-weight: bolder;">
                                        Category 1
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $category1_total ?> Products</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">Inventory: <?= $inventory1 ?></div>
                                </a>
                                <div class="col-auto">
                                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                    <a class="col mr-2" href="<?= ROOT ?>/category1s">
                                        <video autoplay muted loop src="https://cdn-icons-mp4.flaticon.com/512/15309/15309750.mp4" width="60px"></video>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Category 2 -->
                <div class="col-xl-3 col-md-6 mb-4" style="height: 111.5px">
                    <div class="card border-left-info shadow h-100 py-2" style="border-left: .25rem solid #36b9cc;">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <a class="col mr-2" href="<?= ROOT ?>/category2s">
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1" style="font-weight: bolder;">
                                        Category 2
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $category2_total ?> Products</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">Inventory: <?= $inventory2 ?></div>
                                </a>
                                <div class="col-auto">
                                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                    <a class="col mr-2" href="<?= ROOT ?>/category2s">
                                        <video autoplay muted loop src="https://cdn-icons-mp4.flaticon.com/512/15309/15309750.mp4" width="60px"></video>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Category 3 -->
                <div class="col-xl-3 col-md-6 mb-4" style="height: 111.5px">
                    <div class="card border-left-warning shadow h-100 py-2" style="border-left: .25rem solid #f6c23e">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <a class="col mr-2" href="<?= ROOT ?>/category3s">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1" style="font-weight: bolder;">
                                        Category 3
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $category3_total ?> Products</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">Inventory: <?= $inventory3 ?></div>
                                </a>
                                <div class="col-auto">
                                    <i class="fas fa-comments fa-2x text-gray-300"></i>
                                    <a class="col mr-2" href="<?= ROOT ?>/category3s">
                                        <video autoplay muted loop src="https://cdn-icons-mp4.flaticon.com/512/15309/15309750.mp4" width="60px"></video>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <h1>sales</h1>
            </div>
    <!-- Sales Graph -->
    
        <div class="content">
            <div class="container mt-3">
                 <h2>Sales Revenue</h2>
                      <div class="card border-left-primary shadow h-100 py-2 " style="border: 1px blue solid; text-align: center; height:500px; width: 500px">
                             <canvas id="salesChart" style="max-width:10000px"></canvas>
                      </div>
            </div>
        </div>

        <script src="path_to_your_js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Data for sales chart
        var salesData = {
            labels: ['January', 'February', 'March', 'April', 'May', 'June'],
            datasets: [{
                label: 'Sales Revenue',
                data: [1000, 1500, 1200, 1800, 2000, 2500], 
                backgroundColor: 'rgba(54, 162, 235,)',
                borderColor: 'black',
                borderWidth: 3
            }]
        };

        // Draw sales chart
        var ctx = document.getElementById('salesChart').getContext('2d');
        var salesChart = new Chart(ctx, {
            type: 'line',
            data: salesData
        });

        // Calculate and update total sales count
        var totalSalesCount = salesData.datasets[0].data.reduce((a, b) => a + b, 0);
        document.getElementById('totalSalesCount').getElementsByTagName('p')[0].innerText = totalSalesCount;
    </script>

        

    <!-- footer -->
    <?php include "partials/footer.php" ?>