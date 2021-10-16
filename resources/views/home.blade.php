 @extends('layouts.admin')
 @section('title')
 <title>
   Trang chủ
 </title>
 @endsection
 @section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header',['name'=>'Home','key'=>''])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          
          
          <!-- a -->
          <div class="col-md-10 center">
          <div class="shadow-lg rounded-lg overflow-hidden">
  <div class="py-3 px-5 bg-gray-50">
      Biểu đồ doanh thu theo tháng
  </div>
  <canvas class="p-10 " id="chartLine"></canvas>
</div>

<!-- Required chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- Chart line -->
<script>

    const labels = [
        'January',
        'February',
        'March',
        'April',
        'May',
        'June',
    ];
    const data = {
        labels: labels,
        datasets: [{
            label: 'My First dataset',
            backgroundColor: 'hsl(252, 82.9%, 67.8%)',
            borderColor: 'hsl(252, 82.9%, 67.8%)',
            data: [0, 10, 5, 2, 20, 30, 45],
        }]
    };

    const configLineChart = {
        type: 'line',
        data,
        options: {}
    };

    var chartLine = new Chart(
        document.getElementById('chartLine'),
        configLineChart
    );
</script>
          </div>
          <!-- a -->
        </div>
        
        
      </div>

      
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 @endsection
 
 <!-- sdhsdhfijldshfls -->
 
 
