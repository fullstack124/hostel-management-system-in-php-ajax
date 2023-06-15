<?php

$url = "http://localhost:3000/";

?>
<!-- Required JS -->
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
<script src="<?php echo $url ?>assets/vendor/bootstrap/bootstrap.bundle.min.js"></script>
<script src="<?php echo $url ?>assets/vendor/simplebar/simplebar.min.js"></script>
<script src="<?php echo $url ?>assets/js/script.min.js"></script>
<script src="<?php echo $url ?>assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js "></script>
<script src="<?php echo $url ?>assets/js/main.js"></script> 
<script>

toastr.options = {
  "closeButton": false,
  "debug": false,
  "newestOnTop": false,
  "progressBar": false,
  "positionClass": "toast-top-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}
  window.Apex = {
    chart: {
      parentHeightOffset: 0,
      toolbar: {
        show: false,
      },
    },
    grid: {
      padding: {
        left: 0,
        right: 0,
      },
    },
  }

  // Campaign Sent
  new ApexCharts(document.querySelector('#campaign-sent-chart'), {
    chart: {
      type: 'bar',
      height: 50,
      sparkline: {
        enabled: true,
      },
    },
    plotOptions: {
      bar: {
        columnWidth: '60%',
      },
    },
    colors: ['#6366f1'],
    series: [{
      data: [25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54],
    }, ],
    labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
    xaxis: {
      crosshairs: {
        width: 1,
      },
    },
    tooltip: {
      fixed: {
        enabled: false,
      },
      x: {
        show: false,
      },
      y: {
        title: {
          formatter: function(o) {
            return ''
          },
        },
      },
      marker: {
        show: false,
      },
    },
  }).render()

  // New leads
  new ApexCharts(document.querySelector('#new-leads-chart'), {
    chart: {
      type: 'line',
      height: 60,
      sparkline: {
        enabled: true,
      },
    },
    series: [{
      data: [25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54],
    }, ],
    stroke: {
      width: 2,
      curve: 'smooth',
    },
    markers: {
      size: 0,
    },
    colors: ['#16a34a'],
    tooltip: {
      fixed: {
        enabled: false,
      },
      x: {
        show: false,
      },
      y: {
        title: {
          formatter: function(o) {
            return ''
          },
        },
      },
      marker: {
        show: false,
      },
    },
  }).render()

  // Deals
  new ApexCharts(document.querySelector('#deals-chart'), {
    chart: {
      type: 'bar',
      height: 60,
      sparkline: {
        enabled: true,
      },
    },
    plotOptions: {
      bar: {
        columnWidth: '60%',
      },
    },
    colors: ['#6366f1'],
    series: [{
      data: [12, 14, 2, 47, 42, 15, 47, 75, 65, 19, 14],
    }, ],
    labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
    xaxis: {
      crosshairs: {
        width: 1,
      },
    },
    tooltip: {
      fixed: {
        enabled: false,
      },
      x: {
        show: false,
      },
      y: {
        title: {
          formatter: function(o) {
            return ''
          },
        },
      },
      marker: {
        show: false,
      },
    },
  }).render()

  // Booked Revenue
  new ApexCharts(document.querySelector('#booked-revenue-chart'), {
    chart: {
      type: 'bar',
      height: 60,
      sparkline: {
        enabled: true,
      },
    },
    plotOptions: {
      bar: {
        columnWidth: '60%',
      },
    },
    colors: ['#16a34a'],
    series: [{
      data: [47, 45, 74, 14, 56, 74, 14, 11, 7, 39, 82],
    }, ],
    labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
    xaxis: {
      crosshairs: {
        width: 1,
      },
    },
    tooltip: {
      fixed: {
        enabled: false,
      },
      x: {
        show: false,
      },
      y: {
        title: {
          formatter: function(o) {
            return ''
          },
        },
      },
      marker: {
        show: false,
      },
    },
  }).render()

  // Campaigns
  new ApexCharts(document.querySelector('#dash-campaigns-chart'), {
    chart: {
      height: 304,
      type: 'radialBar',
    },
    colors: ['#facc15', '#6366f1', '#16a34a'],
    series: [86, 36, 50],
    labels: ['Total Sent', 'Reached', 'Opened'],
    plotOptions: {
      radialBar: {
        track: {
          margin: 8,
        },
      },
    },
  }).render()

  // Revenue
  new ApexCharts(document.querySelector('#dash-revenue-chart'), {
    chart: {
      height: 300,
      type: 'line',
      toolbar: {
        show: false,
      },
    },
    stroke: {
      curve: 'smooth',
      width: 2,
    },
    series: [{
        name: 'Total Revenue',
        type: 'area',
        data: [44, 55, 31, 47, 31, 43, 26, 41, 31, 47, 33, 43],
      },
      {
        name: 'Total Pipeline',
        type: 'line',
        data: [55, 69, 45, 61, 43, 54, 37, 52, 44, 61, 43, 56],
      },
    ],
    fill: {
      type: 'solid',
      opacity: [0.35, 1],
    },
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    markers: {
      size: 0,
    },
    colors: ['#16a34a', '#ef4444'],
    yaxis: [{
      title: {
        text: 'Revenue (USD)',
      },
      min: 0,
    }, ],
    tooltip: {
      shared: true,
      intersect: false,
      y: {
        formatter: function(o) {
          return void 0 !== o ? o.toFixed(0) + 'k' : o
        },
      },
    },
    grid: {
      borderColor: '#f1f3fa',
      padding: {
        bottom: 5,
      },
    },
    legend: {
      fontSize: '14px',
      fontFamily: '14px',
      offsetY: 5,
    },
    responsive: [{
      breakpoint: 600,
      options: {
        yaxis: {
          show: false,
        },
        legend: {
          show: false,
        },
      },
    }, ],
  }).render()
</script>
</body>

</html>