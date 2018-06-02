<!DOCTYPE html>
<html lang="en">

<head>

  <meta http-equiv="content-type" content="text/html; charset=UTF-8">

  <title>Sci-Blogger: An automated science journalism initiative</title>

  <link href='https://fonts.googleapis.com/css?family=Lato:400,300,400italic,700,900' rel='stylesheet' type='text/css'>

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="Sci-Blogger: An automated science journalism initiative">
  <meta name="keywords" content="bootstrap 3, skin, flat">
  <meta name="author" content="bootstraptaste">

  <!-- Bootstrap css -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/bootstrap.techie.css" rel="stylesheet">
  <link href="assets/css/rainbow.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Techie
    Theme URL: https://bootstrapmade.com/techie-free-skin-bootstrap-3/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->

<script type="text/javascript">
  
  function load_animation()
  {

    document.getElementById("magic").style.display = "none";
    //document.getElementById("margins").style.marginLeft= "70px"
    document.getElementById("animation").style.display= "block";
    // document.getElementById("animation").style.margin-left= "70px";
  }

</script>

  <!-- Docs Custom styles -->
  <style>
    body,
    html {
      overflow-x: hidden
    }

    body {
      padding: 60px 20px 0
    }

    footer {
      border-top: 1px solid #ddd;
      padding: 30px;
      margin-top: 50px
    }

    .row>[class*=col-] {
      margin-bottom: 40px
    }

    .navbar-container {
      position: relative;
      min-height: 100px
    }

    .navbar.navbar-fixed-bottom,
    .navbar.navbar-fixed-top {
      position: absolute;
      top: 50px;
      z-index: 0
    }

    .navbar.navbar-fixed-bottom .container,
    .navbar.navbar-fixed-top .container {
      max-width: 90%
    }

    .btn-group {
      margin-bottom: 10px
    }

    .form-inline input[type=password],
    .form-inline input[type=text],
    .form-inline select {
      width: 180px
    }

    .input-group {
      margin-bottom: 10px
    }

    .pagination {
      margin-top: 0
    }

    .navbar-inverse {
      margin: 110px 0
    }
    
  </style>

</head>

<body>

  <div class="container">

    <div class="jumbotron container-fluid">
      <h2><b>Sci-Blogger</b></h2>
      <h4><i>An automated science journalism initiative...</i></h4>
      <h5 align="right"> Made with ♥ at IREL, IIIT Hyderabad </h5>
      
    </div>
    <br/>
    <br/>
    

    <!-- Controls -->

      <div class="col-sm-16 col-lg-16">
        <h4 align="center">Our engine processes the information via craftly built <mark>heuristic functions</mark> and then applies <mark>neural networks</mark> to generate your blog... </h4>
        <br/>
        <br/>
        <div class="col-sm-6 col-lg-6" >
        <div class="panel panel" id="panels" data-effect='helix'>
         <div class="panel-footer"> 
          <h2 class="panel-title">Research Paper</h2>
         </div>
          <div class="panel-body">
          <form method="POST" action="index.php">

            <textarea name="title" class="form-control" rows = "2" placeholder="Title..."><?php echo $_REQUEST['title'];?></textarea>
            <br/>
            <textarea  name="abstract" class="form-control" rows="4" placeholder="Type your abstract here"><?php echo $_REQUEST['abstract'];?></textarea>
            <br/>
            <ul class="list-inline">

              <li><h5> Select heuristic function</h5></li>
            <li><select name="heuristic" class="form">
              <option value="1">H(pt, abs) = pt</option>
              <option value="2">H(pt, abs) = RP(abs) </option>
              <option value="3">H(pt, abs) = RD(abs)</option>
              <option value="4">H(pt, abs) = RPD(abs)</option>
              <option value="5">H(pt, abs) = pt | RP(abs)</option>
              <option value="6">H(pt, abs) = pt | RD(abs)</option>
              <option value="7">H(pt, abs) = pt | RPD(abs)</option>

              <option value="8">H(pt, abs) = pt | abs</option>
            </select>
          </li>
          </ul>
          <?php
            $selectoption = $_POST['heuristic'];
          ?>
          </div>
          <div class="panel-footer">

            <button class="btn btn-warning" onclick="load_animation()" type="submit">Run the engine!</a>
     
          </div>
        </div>


      </form>
      </div>

        <div id="margins" class="wrapper">
        <div id ="animation" style="margin-left: 870px; display: none;" class="tube">
          <br/>
          <br/>
          <br/>
          <br/>
          <br/>
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
            <div class="colored-tube"></div>
            <div class="bubbles" id="b1"></div>
            <div class="bubbles" id="b2"></div>
            <div class="bubbles" id="b3"></div>
            <div class="bubbles" id="b4"></div>
            <div class="bubbles" id="b5"></div>
            <div class="solution-ck">
                <div class="ck1 wobble"></div>
                <div class="ck2 wobble"></div>
                <div class="ck3 wobble"></div>
                <div class="ck4 wobble"></div>
                <div class="ck5 wobble"></div>
            </div>
            <div class="tube-cover"></div>
        </div>
      </div>
        <div class="row">
        
        <div style="/*display: none" id="magic" class="col-sm-6 col-lg-6" >

        <span align="center"><h4>Stage 1 intermediate sequence  </h4></span>
        <div class="panel-group" id="accordion-panel2">
          <div class="panel panel-info">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a class="accordion-toggle"  data-parent="#accordion-panel2" href="#collapseOnePanel2">
                  After applying our selected heuristic function <i>H</i>
                </a>
              </h4>
            </div>
            <div id="collapseOnePanel2" >
              <div class="panel-body">
        <?php          
	 if( isset($_POST['title']) && trim($_POST['title'] != '') && trim($_POST['abstract'] != '') && trim($selectoption)!='')
                    { 
                      global $sequence;
                      #putenv('PYTHONPATH=/home/bakhtiyar/sciblogger/env/bin/python');
                      $command = "/usr/bin/python3 run.py -t {$_POST['title']} -a {$_POST['abstract']} -heu {$selectoption}";
                     # echo "hello";   
                      #echo $command;
                      $command = str_replace(array('(',')'),'',$command); #replace () in string
                  $command = str_replace(array(';',),' ',$command);
                     # echo $command;
                      exec($command, $sequence);
                      $len = count($sequence);
                      #echo $len;
                      echo $sequence[0];
                      /*
                      for ($x = 0; $x < $len; $x++){
                        echo $sequence[$x];
                        echo "<br/>";
                      }
                      */
                      #echo $sequence[1];
                    }

		#	exec($command, $out);
		
		#	foreach($out as $key => $value)
			#{
		#		echo $key." ".$value."<br>";
		#	}
                     #echo shell_exec($command);
                   #   ob_start();
                      #passthru($command);
                      #$output = ob_get_contents();
			#ob_end_clean();
                  #    echo $output;

                    
                  
               ?>
              </div>
            </div>
          </div>
          <br/>
         <span align="center"><h4>Stage 2 neural output </h4></span>

          <div class="panel panel-primary">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a class="accordion-toggle" data-parent="#accordion-panel2" href="#collapseTwoPanel2">
                  Blog title
                </a>
              </h4>
            </div>
            <div id="collapseTwoPanel2" >
              <div class="panel-body">

                <?php

                echo $sequence[1];
                /*
                  if( isset($_POST['title']) && trim($_POST['title'] != '') && trim($_POST['abstract'] != '') && trim($selectoption)!='')
                    { 
                      #putenv('PYTHONPATH=/home/bakhtiyar/sciblogger/env/bin/python');
                      $command = "/usr/bin/python3 run.py -t {$_POST['title']} -a {$_POST['abstract']} -heu {$selectoption}";
                     # echo "hello";   
                     # echo $command;
                      $sequence = shell_exec($command);
                      echo $sequence;

                      $var =  $sequence;
                      #putenv('PYTHONPATH=/home/bakhtiyar/sciblogger/env/bin/python');
                      $neu_comm = "/usr/bin/python3 runserver.py -seq $var -heur {$selectoption}";
                     #echo "hello";   
                     echo $neu_comm;
                     ob_start();

                      passthru($neu_comm);
                      $final = ob_get_clean();
                      echo $final;
                    }
                    */
                    ?>
             
		</div>
            </div>
          </div>
         
        </div>
      </div>
        
          
        </div>

        


      </div>
      <br/>
      <br/>

      <!-- Thumbnails container -->

      <div class="row">
        <hr/>
        <br/>
        <h4 align="center">The architecture of our engine <i>Sci-Blogger</i> is explained below... </h4>
        <br/>
        <br/>
      <div class="col-sm-12 col-lg-12">
            <div class="row" align="center">
              <div class="col-lg-12 col-sm-12 ">
                <div class="thumbnail">
                  <img src="assets/img/cikm.png" alt="">
                  <hr>
                  <div class="caption">
                    <h3>Thumbnail label</h3>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a href="#" class="btn btn-primary">Action</a> <a href="#" class="btn btn-default">Action</a></p>
                  </div>
                </div>
              </div>
        </div>
      </div>
    

  </div>
  <!-- /container -->

  <footer class="text-center">
    <p>&copy; Information Retrieval & Extraction Lab, IIIT-H</p>
    <div class="credits">
      <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version form: https://bootstrapmade.com/buy/?theme=Techie
      -->
      
    </div>
  </footer>

  <!-- Main Scripts-->
  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>

  <!-- Bootstrap 3 has typeahead optionally -->
  <script src="assets/js/typeahead.min.js"></script>

</body>

</html>
