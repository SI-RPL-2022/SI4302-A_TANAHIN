@extends('master')
@section('profil')
active
@endsection

@section('content')
<div class="mr-4 ml-4">
    <div class="row">
        <div class="col-lg-8 grid-margin">
            <div id="chartTotalTanah"></div>
            <!-- {{json_encode($dataRataanTanah, JSON_NUMERIC_CHECK)}} -->
        </div>
        <div class="col grid-margin">
            
            <table class="table table-hover">
                <thead>
                    <tr>
                        <td class="table-info" colspan="3"><center><b>Tanah Paling Potensial</b></center></td>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-secondary">
                        <th scope="col">No</th>
                        <th scope="col">Letak/Alamat</th>
                        <th scope="col">Harga</th>
                    </tr>
                    <?php $i=1; ?>
                    @foreach ($dataTanahPotensial as $data)
                    <tr>
                        <th scope="row">{{$i++}}</th>
                        <td>{{$data->alamat}}</td>
                        <td>{{$data->harga}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="mt-3 grid-margin">
            <div id="chartRataanTanah"></div>
        </div>
    </div>
</div>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">
Highcharts.chart('chartTotalTanah', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Harga Tanah Total Per Bulan'
    },
    xAxis: {
        categories: {!!json_encode($kategoriTanah)!!},
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Harga Total'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{#388e3c};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:1f}</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Total',
        data: {!!json_encode($dataTotalTanah, JSON_NUMERIC_CHECK)!!}
    }]
});

Highcharts.chart('chartRataanTanah', {

title: {
    text: 'Harga Rataan Tanah Per Bulan'
},

yAxis: {
    title: {
        text: 'Harga Rataan'
    }
},

xAxis: {
    categories: {!!json_encode($kategoriTanah)!!}
},

legend: {
    layout: 'vertical',
    align: 'right',
    verticalAlign: 'middle'
},

plotOptions: {
    series: {
        label: {
            connectorAllowed: false
        }
    }
},

series: [{
    name: 'Harga',
    data: {!!json_encode($dataRataanTanah, JSON_NUMERIC_CHECK)!!}
}],

responsive: {
    rules: [{
        condition: {
            maxWidth: 500
        },
        chartOptions: {
            legend: {
                layout: 'horizontal',
                align: 'center',
                verticalAlign: 'bottom'
            }
        }
    }]
}

});

</script>


  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="vendors/progressbar.js/progressbar.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/jquery.cookie.js" type="text/javascript"></script>
  <script src="js/dashboard.js"></script>
@endsection