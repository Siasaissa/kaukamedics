<?php echo $__env->make('layouts.adminhead', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<body class="g-sidenav-show bg-gray-100">
  <?php echo $__env->make('layouts.aside', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
    <?php echo $__env->make('layouts.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <div class="container-fluid py-2">
      <div class="row">
        <div class="ms-3">
          <h3 class="mb-0 h4 font-weight-bolder">Dashboard</h3>
          <p class="mb-4">Review real sales performance and recent orders from your store.</p>
        </div>
        <div class="col-xl-4 col-sm-7 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-2 ps-3">
              <div class="d-flex justify-content-between">
                <div>
                  <p class="text-sm mb-0 text-capitalize">Total Sales</p>
                  <h4 class="mb-0">Tsh <?php echo e(number_format($totalRevenue ?? 0, 0)); ?></h4>
                </div>
                <div class="icon icon-md icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-lg">
                  <i class="material-symbols-rounded opacity-10">weekend</i>
                </div>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-2 ps-3"></div>
          </div>
        </div>
        <div class="col-xl-4 col-sm-7 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-2 ps-3">
              <div class="d-flex justify-content-between">
                <div>
                  <p class="text-sm mb-0 text-capitalize">Total Orders</p>
                  <h4 class="mb-0"><?php echo e($totalOrders ?? 0); ?></h4>
                </div>
                <div class="icon icon-md icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-lg">
                  <i class="material-symbols-rounded opacity-10">person</i>
                </div>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-2 ps-3"></div>
          </div>
        </div>
        <div class="col-xl-4 col-sm-7 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-2 ps-3">
              <div class="d-flex justify-content-between">
                <div>
                  <p class="text-sm mb-0 text-capitalize">Total Products</p>
                  <h4 class="mb-0"><?php echo e($totalProducts ?? 0); ?></h4>
                </div>
                <div class="icon icon-md icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-lg">
                  <i class="material-symbols-rounded opacity-10">leaderboard</i>
                </div>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-2 ps-3"></div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12 col-md-12 mt-4 mb-4">
          <div class="card">
            <div class="card-body">
              <h6 class="mb-0">Monthly Sales Overview</h6>
              <p class="text-sm">Real sales totals for the last 6 months</p>
              <div class="pe-2">
                <div class="chart">
                  <canvas id="salesChart" class="chart-canvas" height="170"></canvas>
                </div>
              </div>
              <hr class="dark horizontal">
              <div class="d-flex">
                <i class="material-symbols-rounded text-sm my-auto me-1">schedule</i>
                <p class="mb-0 text-sm">Updated in real-time</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row mb-4">
        <div class="col-lg-12 col-md-12 mb-md-0 mb-4">
          <div class="card">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-lg-6 col-7">
                  <h6>Recent Orders</h6>
                  <p class="text-sm mb-0">
                    <i class="fa fa-check text-info" aria-hidden="true"></i>
                    <span class="font-weight-bold ms-1"><?php echo e($recentOrders->count() ?? 0); ?> recent orders</span> from latest activity
                  </p>
                </div>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Order Details</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Quantity</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $recentOrders ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                      <?php $__currentLoopData = ($order->items ?? []); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <td>
                            <div class="d-flex px-2 py-1">
                              <div>
                                <div class="icon icon-sm icon-shape bg-gradient-info shadow text-center border-radius-md">
                                  <i class="material-symbols-rounded opacity-10 text-white">receipt</i>
                                </div>
                              </div>
                              <div class="d-flex flex-column justify-content-center ms-3">
                                <h6 class="mb-0 text-sm"><?php echo e($item['name'] ?? 'Item'); ?></h6>
                                <p class="text-xs text-secondary mb-0">
                                  <?php echo e(\Carbon\Carbon::parse($order->created_at)->format('M d, Y')); ?>

                                </p>
                              </div>
                            </div>
                          </td>
                          <td class="align-middle text-center text-sm">
                            <span class="text-xs font-weight-bold"><?php echo e($item['quantity'] ?? 0); ?></span>
                          </td>
                        </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                      <tr>
                        <td colspan="2" class="text-center py-4">
                          <h6 class="mb-0 text-sm">No Recent Orders</h6>
                          <p class="text-xs text-secondary mb-0">When orders are placed, they'll appear here</p>
                        </td>
                      </tr>
                    <?php endif; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php echo $__env->make('layouts.adminfooter', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </div>
  </main>

  <script src="<?php echo e(url('assets/js/core/popper.min.js')); ?>"></script>
  <script src="<?php echo e(url('assets/js/core/bootstrap.min.js')); ?>"></script>
  <script src="<?php echo e(url('assets/js/plugins/perfect-scrollbar.min.js')); ?>"></script>
  <script src="<?php echo e(url('assets/js/plugins/smooth-scrollbar.min.js')); ?>"></script>
  <script src="<?php echo e(url('assets/js/plugins/chartjs.min.js')); ?>"></script>

  <script>
    var ctx = document.getElementById("salesChart").getContext("2d");
    var salesMonths = <?php echo json_encode($salesMonths ?? [], 15, 512) ?>;
    var salesValues = <?php echo json_encode($salesValues ?? [], 15, 512) ?>;
    var maxSalesValue = salesValues.length ? Math.max(...salesValues) : 0;

    new Chart(ctx, {
      type: "bar",
      data: {
        labels: salesMonths,
        datasets: [{
          label: "Sales (Tsh)",
          tension: 0.4,
          borderWidth: 0,
          borderRadius: 4,
          borderSkipped: false,
          backgroundColor: "#43A047",
          data: salesValues,
          barThickness: "flex"
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false
          },
          tooltip: {
            callbacks: {
              label: function (context) {
                return "Tsh " + context.parsed.y.toLocaleString();
              }
            }
          }
        },
        interaction: {
          intersect: false,
          mode: "index"
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: "#e5e5e5"
            },
            ticks: {
              suggestedMin: 0,
              suggestedMax: maxSalesValue > 0 ? maxSalesValue * 1.2 : 1000,
              beginAtZero: true,
              padding: 10,
              font: {
                size: 14,
                lineHeight: 2
              },
              color: "#737373",
              callback: function (value) {
                return "Tsh " + value.toLocaleString();
              }
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: "#737373",
              padding: 10,
              font: {
                size: 14,
                lineHeight: 2
              }
            }
          }
        }
      }
    });

    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl);
    });
  </script>
  <script>
    var win = navigator.platform.indexOf("Win") > -1;
    if (win && document.querySelector("#sidenav-scrollbar")) {
      var options = {
        damping: "0.5"
      };
      Scrollbar.init(document.querySelector("#sidenav-scrollbar"), options);
    }
  </script>
  <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>
</html>
<?php /**PATH /Users/dope/Downloads/public_html-6/resources/views/admin/dashboard.blade.php ENDPATH**/ ?>