
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>

  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

  <style>
    .accordion .panel-heading .panel-title a:after, .accordion .panel-heading .panel-title a.active:after {
      font-family: fontAwesome, sans-serif;
      float: right;
      font-size: 18px;
      margin-top: -2px;
    }

    .accordion .panel-heading .panel-title .accordion-toggle:after {
      content: "\f107";
    }

    .accordion .panel-heading .panel-title .active:after {
      content: "\f106" !important;
    }
  </style>

</head>
<body class="container">
  
  <header>
      <h1>Multiverse Warriors - Game Guide</h1>
      <p>
        <strong>Last Updated - [INSERT DATE]</strong>
      </p>  
  </header>

  <section class="row">
    <div class="col-md-10 col-lg-8 col-lg-offset-2 col-md-offset-1 col-xs-12">

      <div class="block-area" id="collapse">
        <div class="accordion tile">
          <div class="panel-group block" id="accordion">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">
                  <a class="accordion-toggle active" data-toggle="collapse" data-parent="#accordion"
                      href="#mhrules">
                    Rules
                  </a>
                </h3>
              </div>
              <div id="mhrules" class="panel-collapse collapse">
                <div class="panel-body">
                  <?php include('rules.html');?>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                      href="#mhabout">
                    About The Game
                  </a>
                </h3>
              </div>
              <div id="mhabout" class="panel-collapse collapse in">
                <div class="panel-body">
                    <?php include('about.html');?>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                      href="#mhobjective">
                  Objective
                  </a>
                </h3>
              </div>
              <div id="mhobjective" class="panel-collapse collapse in">
                <div class="panel-body">
                    <?php include('objective.html');?>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                      href="#mhelp1">
                    Command Center
                  </a>
                </h3>
              </div>
              <div id="mhelp1" class="panel-collapse collapse in">
                <div class="panel-body">
                    <?php include('base.html');?>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                      href="#mhelp2">
                  Universe
                  </a>
                </h3>
              </div>
              <div id="mhelp2" class="panel-collapse collapse in">
                <div class="panel-body">
                    <?php include('universe.html');?>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                      href="#mhelp3">
                  Population
                  </a>
                </h3>
              </div>
              <div id="mhelp3" class="panel-collapse collapse in">
                <div class="panel-body">
                    <?php include('population.html');?>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                      href="#mhelp4">
                    Ships
                  </a>
                </h3>
              </div>
              <div id="mhelp4" class="panel-collapse collapse in">
                <div class="panel-body">
                    <?php include('ships.html');?>

                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                      href="#mhelp5">
                    Ships - Exploration Mission
                  </a>
                </h3>
              </div>
              <div id="mhelp5" class="panel-collapse collapse in">
                <div class="panel-body">
                    <?php include('exploration.html');?>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                      href="#mhelp6">
                    Covert Operations
                  </a>
                </h3>
              </div>
              <div id="mhelp6" class="panel-collapse collapse in">
                <div class="panel-body">
                    <?php include('covert.html');?>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                      href="#mhelp10">
                    Logs
                  </a>
                </h3>
              </div>
              <div id="mhelp10" class="panel-collapse collapse in">
                <div class="panel-body">
                    <?php include('logs.html');?>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                      href="#mhelp11">
                    MV Points
                  </a>
                </h3>
              </div>
              <div id="mhelp11" class="panel-collapse collapse in">
                <div class="panel-body">
                    <?php include('mvpoints.html');?>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                      href="#mhelp12">
                    Preferences
                  </a>
                </h3>
              </div>
              <div id="mhelp12" class="panel-collapse collapse in">
                <div class="panel-body">
                    <?php include('preferences.html');?>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                      href="#mhelp13">
                    Tips for Success
                  </a>
                </h3>
              </div>
              <div id="mhelp13" class="panel-collapse collapse in">
                <div class="panel-body">
                    <?php include('tips.html');?>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                      href="#mhelp14">
                    Misc / Registration Issues
                  </a>
                </h3>
              </div>
              <div id="mhelp14" class="panel-collapse collapse in">
                <div class="panel-body">
                    <?php include('misc.html');?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <script
    src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>
  (function() {
    /* Collapse */
    $(".collapse").collapse();

    /* Accordion */
    $(".panel-collapse").on("shown.bs.collapse", function() {
      $(this).prev().find(".panel-title a").removeClass("active");
    });

    $(".panel-collapse").on("hidden.bs.collapse", function() {
      $(this).prev().find(".panel-title a").addClass("active");
    });

  })();
</script>

</body>
</html>

