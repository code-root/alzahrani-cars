@extends('dashboard.layouts.footer')

@extends('dashboard.layouts.navbar')
@section('title')
    {{ 'Home' }}
@endsection
@section('page-title')
    {{-- <li class="breadcrumb-item"><a href="#">Dashboard</a></li> --}}
    <li class="breadcrumb-item active">Dashboard</li>
@endsection
@section('body')
    <!-- Content wrapper -->
    <div class="content-wrapper">
      <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
          <div class="col-sm-6 col-lg-3 mb-4">
            <div class="card card-border-shadow-success h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2 pb-1">
                        <div class="avatar me-2">
                            <span class="avatar-initial rounded bg-success text-white">
                                <i class="bx bx-line-chart"></i>
                            </span>
                        </div>
                        <h4 class="ms-1 mb-0">{{ $todaySales ?? 0 }}</h4>
                    </div>
                    <p class="mb-1">Today's Sales</p>
                </div>
            </div>
        </div>
        
          <div class="col-sm-6 col-lg-3 mb-4">
            <div class="card card-border-shadow-primary h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2 pb-1">
                        <div class="avatar me-2">
                            <span class="avatar-initial rounded bg-primary text-white">
                                <i class="bx bx-bar-chart-alt"></i>
                            </span>
                        </div>
                        <h4 class="ms-1 mb-0">{{ $currentMonthSales ?? 0 }}</h4>
                    </div>
                    <p class="mb-1">Current Month Sales</p>
                </div>
            </div>
        </div>
        
        <div class="col-sm-6 col-lg-3 mb-4">
            <div class="card card-border-shadow-warning h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2 pb-1">
                        <div class="avatar me-2">
                            <span class="avatar-initial rounded bg-warning text-white">
                                <i class="bx bx-line-chart"></i>
                            </span>
                        </div>
                        <h4 class="ms-1 mb-0">{{ $previousMonthSales ?? 0 }}</h4>
                    </div>
                    <p class="mb-1">Previous Month Sales</p>
                </div>
            </div>
        </div>
        
        <div class="col-sm-6 col-lg-3 mb-4">
            <div class="card card-border-shadow-danger h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2 pb-1">
                        <div class="avatar me-2">
                            <span class="avatar-initial rounded bg-danger text-white">
                                <i class="bx bx-pie-chart"></i>
                            </span>
                        </div>
                        <h4 class="ms-1 mb-0">{{ $currentYearSales ?? 0 }}</h4>
                    </div>
                    <p class="mb-1">Current Year Sales</p>
                </div>
            </div>
        </div>
        
            <div class="col-sm-6 col-lg-3 mb-4">
                <div class="card card-border-shadow-primary h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2 pb-1">
                            <div class="avatar me-2">
                                <span class="avatar-initial rounded bg-label-primary">
                                    <i class="bx bx-book"></i>
                                </span>
                            </div>
                            <h4 class="ms-1 mb-0">{{ $bookCount ?? 0 }}</h4>
                        </div>
                        <p class="mb-1">Book Count</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4">
                <div class="card card-border-shadow-warning h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2 pb-1">
                            <div class="avatar me-2">
                                <span class="avatar-initial rounded bg-label-warning">
                                    <i class="bx bx-user"></i>
                                </span>
                            </div>
                            <h4 class="ms-1 mb-0">{{ $authorCount ?? 0 }}</h4>
                        </div>
                        <p class="mb-1">Author Count</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4">
                <div class="card card-border-shadow-danger h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2 pb-1">
                            <div class="avatar me-2">
                                <span class="avatar-initial rounded bg-label-danger">
                                    <i class="bx bx-category"></i>
                                </span>
                            </div>
                            <h4 class="ms-1 mb-0">{{ $categoryCount ?? 0 }}</h4>
                        </div>
                        <p class="mb-1">Category Count</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4">
                <div class="card card-border-shadow-info h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2 pb-1">
                            <div class="avatar me-2">
                                <span class="avatar-initial rounded bg-label-info">
                                    <i class="bx bx-collection"></i>
                                </span>
                            </div>
                            <h4 class="ms-1 mb-0">{{ $seriesCount ?? 0 }}</h4>
                        </div>
                        <p class="mb-1">Series Count</p>
                    </div>
                </div>
            </div>
        </div>
  

      <div class="row">
        <!-- Vehicles overview -->
        <div class="col-lg-12 col-xxl-12 mb-4 order-3 order-xxl-1">
          <div class="card h-100">
              <div class="card-header d-flex align-items-center justify-content-between">
                  <div class="card-title mb-0">
                      <h5 class="m-0 me-2">Sales statistics</h5>
                      <small class="text-muted">Total number of users <span id="totalUsers">0</span></small>
                    </div>
                  <div class="dropdown">
                      <button type="button" class="btn btn-label-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" id="selectedMonth">January</button>
                      <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="javascript:void(0);" onclick="changeMonth('January')">January</a></li>
                          <li><a class="dropdown-item" href="javascript:void(0);" onclick="changeMonth('February')">February</a></li>
                          <li><a class="dropdown-item" href="javascript:void(0);" onclick="changeMonth('March')">March</a></li>
                          <li><a class="dropdown-item" href="javascript:void(0);" onclick="changeMonth('April')">April</a></li>
                          <li><a class="dropdown-item" href="javascript:void(0);" onclick="changeMonth('May')">May</a></li>
                          <li><a class="dropdown-item" href="javascript:void(0);" onclick="changeMonth('June')">June</a></li>
                          <li><a class="dropdown-item" href="javascript:void(0);" onclick="changeMonth('July')">July</a></li>
                          <li><a class="dropdown-item" href="javascript:void(0);" onclick="changeMonth('August')">August</a></li>
                          <li><a class="dropdown-item" href="javascript:void(0);" onclick="changeMonth('September')">September</a></li>
                          <li><a class="dropdown-item" href="javascript:void(0);" onclick="changeMonth('October')">October</a></li>
                          <li><a class="dropdown-item" href="javascript:void(0);" onclick="changeMonth('November')">November</a></li>
                          <li><a class="dropdown-item" href="javascript:void(0);" onclick="changeMonth('December')">December</a></li>
                      </ul>
                  </div>
              </div>
              <div class="card-body">
                  <canvas id="shipmentStatisticsChart"></canvas>
              </div>
          </div>
      </div>
  
    
  
      
          <div class="row">
            <!-- Subscription User Chart -->
            <div class="col-lg-6 mb-4">
                <div class="card h-100">
                    <div class="card-header">
                        <h5 class="card-title">Subscription User Chart</h5>
                    </div>
                    <div class="card-body">
                        <canvas id="subscriptionUserChart"></canvas>
                    </div>
                </div>
            </div>
        
            <!-- Last Ten Users Table -->
            <div class="col-lg-6 mb-4">
                <div class="card h-100">
                    <div class="card-header">
                        <h5 class="card-title">Last Ten Users</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>User ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>created</th>
                                    
                                    <!-- Add more columns as needed -->
                                </tr>
                            </thead>
                            <tbody id="lastTenUsersTable">
                                <!-- User data will be dynamically added here -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
        <!--/ Delivery Performance -->
        <!-- Reasons for delivery exceptions -->
        <div class="col-lg-12 col-xxl-12 mb-4 order-3 order-xxl-1">
          <div class="card h-100">
              <div class="card-header d-flex align-items-center justify-content-between">
                  <div class="card-title mb-0">
                    <h5 class="m-0 me-2">top Book Reviews</h5>
                  </div>
              </div>
              <div class="card-body">
                  <canvas id="bookReviewsChart"></canvas>
              </div>
          </div>
      </div>
      
        <!--/ Reasons for delivery exceptions -->
        <!-- Orders by Countries -->
        <div class="col-md-8 col-xxl-12 mb-4 order-0 order-xxl-4">
          <div class="card h-100">
            <div class="card-header d-flex align-items-center justify-content-between">
              <div class="card-title mb-0">
                <h5 class="m-0 me-2">top Category Reviews</h5>
              </div>
              <div class="card-body">
                <canvas id="categoryChart"></canvas>
            </div>
            </div>
          </div>
        </div>
        <!--/ Orders by Countries -->
        <!-- On route vehicles Table -->
        <div class="col-md-8 col-xxl-12 mb-4 order-0 order-xxl-4">
          <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
              <div class="card-title mb-0">
                <h5 class="m-0 me-2">top Authors Reviews</h5>
              </div>
       
            </div>
            <div class="card-body">
              <canvas id="authorsReviewsChart"></canvas>
          </div>
          </div>
        </div>
      </div>
      <!--/ On route vehicles Table -->
      
      
                </div>
    
          @endsection
          @section('footer-script')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

      
    <script>
 $(document).ready(function() {
    var currentDate = new Date();
    var currentMonth = currentDate.toLocaleString('default', { month: 'long' });
    document.getElementById('selectedMonth').innerText = currentMonth;
    changeMonth(currentMonth);
});

   // استرجاع البيانات من Laravel وتخزينها في متغير JavaScript
   var topAuthorsReviews = {!! json_encode($topAuthorsReviews) !!};
    
    // تحضير البيانات للرسم البياني
    var authorNames = Object.values(topAuthorsReviews).map(item => item.name);
    var totalReviews = Object.values(topAuthorsReviews).map(item => item.total_reviews);
    
    // الحصول على عنصر canvas
    var ctx = document.getElementById('authorsReviewsChart').getContext('2d');
    
    // إنشاء الرسم البياني
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: authorNames,
            datasets: [{
                label: 'Total Reviews',
                data: totalReviews,
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

var categoryData = {!! json_encode($categoryData) !!};
    var categoryNames = categoryData.category_names;
    var usageCounts = categoryData.usage_counts;

    var ctx = document.getElementById('categoryChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: categoryNames,
            datasets: [{
                label: 'Usage Count',
                data: usageCounts,
                backgroundColor: 'rgba(255, '+categoryNames.length+', '+categoryNames.length+', 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

var topBooksReviews = {!! json_encode($topBooksReviews) !!};
var bookNames = Object.values(topBooksReviews).map(book => book.name);
var totalReviews = Object.values(topBooksReviews).map(book => book.total_reviews);

var ctx = document.getElementById('bookReviewsChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: bookNames,
        datasets: [{
            label: 'Total Reviews',
            data: totalReviews,
            backgroundColor:getRandomColorArray(totalReviews.length),
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});


var subscriptionData = {!! json_encode($packagePurchaseRatio) !!}; // استخدم البيانات المحضرة في السيرفر لرسم الرسم البياني

var lastTenUsersTable = document.getElementById("lastTenUsersTable");

// تكوين بيانات المستخدمين
var usersData = subscriptionData.last_ten_users_with_packages;

// إضافة بيانات المستخدمين إلى الجدول
usersData.forEach(function(user) {
    var row = document.createElement("tr");

    // إضافة بيانات المستخدم كأعمدة في الصف
    var userIdCell = document.createElement("td");
    userIdCell.textContent = user.id;
    row.appendChild(userIdCell);

    var nameCell = document.createElement("td");
    nameCell.textContent = user.name;
    row.appendChild(nameCell);

    var emailCell = document.createElement("td");
    emailCell.textContent = user.email;
    row.appendChild(emailCell);

    var registrationDateCell = document.createElement("td");
    var registrationDate = new Date(user.created_at); // تحويل تاريخ التسجيل إلى كائن تاريخي
    var currentTime = new Date(); // الوقت الحالي
    var elapsedTime = currentTime - registrationDate; // الوقت المنقضي من التسجيل بالميلي ثانية

    var timeText;

    // حساب الزمن المنقضي بالدقائق
    var minutesElapsed = Math.floor(elapsedTime / (1000 * 60));
    if (minutesElapsed < 60) {
        timeText = "منذ " + minutesElapsed + " دقيقة";
    } else {
        // حساب الزمن المنقضي بالساعات
        var hoursElapsed = Math.floor(minutesElapsed / 60);
        if (hoursElapsed < 24) {
            timeText = "منذ " + hoursElapsed + " ساعة";
        } else {
            // حساب الزمن المنقضي بالأيام
            var daysElapsed = Math.floor(hoursElapsed / 24);
            timeText = "منذ " + daysElapsed + " يوم";
        }
    }

    registrationDateCell.textContent = timeText;
    row.appendChild(registrationDateCell);

    // إضافة الصف إلى الجدول
    lastTenUsersTable.appendChild(row);
});



var packageNames = [];
var purchaseRatios = [];

for (var key in subscriptionData.package_purchase_ratio) {
    if (subscriptionData.package_purchase_ratio.hasOwnProperty(key)) {
        packageNames.push(subscriptionData.package_purchase_ratio[key].package_name);
        purchaseRatios.push(subscriptionData.package_purchase_ratio[key].purchase_ratio);
    }
}


var backgroundColors = getRandomColorArray(packageNames.length);

var ctx = document.getElementById('subscriptionUserChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: packageNames,
        datasets: [{
            label: 'Purchase Ratio (%)',
            data: purchaseRatios,
            backgroundColor: backgroundColors,
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

// توليد ألوان عشوائية للباقات
function getRandomColorArray(length) {
    var colors = [];
    for (var i = 0; i < length; i++) {
        colors.push(getRandomColor());
    }
    return colors;
}

// توليد لون عشوائي
function getRandomColor() {
    var letters = '0123456789ABCDEF';
    var color = '#';
    for (var i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}





function changeMonth(month) {
    document.getElementById('selectedMonth').innerText = month;
    
    var currentYear = new Date().getFullYear();
    $.ajax({
        url: '{{ route("getReports") }}',
        type: 'GET',
        data: {
            type: 'monthly',
            start_date: currentYear + '-01-01',
            end_date: currentYear + '-12-31'
        },
        success: function(response) {
            if (response && response.length > 0) {
                var totalUsers = response.reduce((acc, report) => acc + report.unique_users, 0);
                document.getElementById('totalUsers').innerText = totalUsers.toLocaleString();
                updateChart(response);
            } else {
                document.getElementById('totalUsers').innerText = '0';
                updateChart([]);
            }
        },
        error: function(xhr, status, error) {
            console.error(error);
            document.getElementById('totalUsers').innerText = 'Error';
        }
    });
}

function updateChart(reports) {
    if (reports && reports.length > 0) {
        const labels = reports.map(report => `${report.month}/${report.year}`);
        const sales = reports.map(report => report.sales);
        const totalAmounts = reports.map(report => parseFloat(report.total_amount));
        const uniqueUsers = reports.map(report => report.unique_users);

        var ctx = document.getElementById('shipmentStatisticsChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Sales',
                    data: sales,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1,
                    yAxisID: 'y-sales',
                    fill: false
                }, {
                    label: 'Total Amount',
                    data: totalAmounts,
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1,
                    yAxisID: 'y-totalAmount',
                    fill: false
                }, {
                    label: 'Unique Users',
                    data: uniqueUsers,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1,
                    yAxisID: 'y-uniqueUsers',
                    fill: false
                }]
            },
            options: {
                scales: {
                    'y-sales': {
                        type: 'linear',
                        position: 'left',
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Sales'
                        }
                    },
                    'y-totalAmount': {
                        type: 'linear',
                        position: 'right',
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Total Amount'
                        },
                        grid: {
                            drawOnChartArea: false
                        }
                    },
                    'y-uniqueUsers': {
                        type: 'linear',
                        position: 'right',
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Unique Users'
                        },
                        grid: {
                            drawOnChartArea: false
                        }
                    }
                }
            }
        });
    } else {
        console.error("No data to display");
    }
}


  </script>
  
  
          @endsection

  