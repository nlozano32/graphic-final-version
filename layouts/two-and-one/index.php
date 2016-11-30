<!DOCTYPE html>
<html>
<head>
  <title>Dashboard Starter UI, by Keen IO</title>
  <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no' />
  <link rel="stylesheet" type="text/css" href="../../assets/lib/bootstrap/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="../../assets/css/keen-dashboards.css" />
</head>
<body class="application">

  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="../">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="navbar-brand" href="./">Damatex control systems</a>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-left">
          <li><a href="https://keen.io">Services</a></li>
          <li><a href="https://keen.io/team">Sensor</a></li>
          <li><a href="https://github.com/keenlabs/dashboards/tree/gh-pages/layouts/two-and-one"> Sensors Cumul.</a></li>
          <li><a href="https://github.com/keenlabs/dashboards/tree/gh-pages/layouts/two-and-one">English</a></li>
          <li><a href="https://groups.google.com/forum/#!forum/keen-io-devs">Francais</a></li>
          <li><a href="http://stackoverflow.com/questions/tagged/keen-io?sort=newest&pageSize=15">Espanol</a></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">

      <div class="col-sm-6">
        <div class="chart-wrapper">
          <div class="chart-title">
            Pageviews by browser (past 24 hours)
          </div>
          <div class="chart-stage">
          	<div style="padding-top:40px;">
            	<h1>Test layoud 1</h1>
             </div>
          </div>
          <div class="chart-notes">
            This is a sample text region to describe this chart.
          </div>
        </div>
      </div>

      <div class="col-sm-6">
        <div class="chart-wrapper">
          <div class="chart-title">
            Pageviews by browser (past 5 days)
          </div>
          <div class="chart-stage">
            <img data-src="holder.js/100%x350/white">
          </div>
          <div class="chart-notes">
            Notes go down here
          </div>
        </div>
      </div>

    </div>


    <div class="row">

      <div class="col-sm-12">
        <div class="chart-wrapper">
          <div class="chart-title">
            Impressions by advertiser
          </div>
          <div class="chart-stage">
            <img data-src="holder.js/100%x150/white">
          </div>
          <div class="chart-notes">
            Notes go down here
          </div>
        </div>
      </div>

    </div>

    <hr>

    <p class="small text-muted">Built with &#9829; by <a href="https://keen.io">Keen IO</a></p>

  </div>

  <script type="text/javascript" src="../../assets/lib/jquery/dist/jquery.min.js"></script>
  <script type="text/javascript" src="../../assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>

  <script type="text/javascript" src="../../assets/lib/holderjs/holder.js"></script>
  <script>
    Holder.add_theme("white", { background:"#fff", foreground:"#a7a7a7", size:10 });
  </script>

  <script type="text/javascript" src="../../assets/lib/keen-js/dist/keen.min.js"></script>
  <script type="text/javascript" src="../../assets/js/meta.js"></script>

</body>
</html>
