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
          <h1 class="panel-title" align="center" ><b>Research Paper</b></h1>
         </div>
          <div class="panel-body">
          <form method="POST" action="index.php">

            <textarea name="title" class="form-control" rows = "2" placeholder="Title..."><?php echo $_REQUEST['title'];?></textarea>
            <br/>
            <textarea  name="abstract" class="form-control" rows="4" placeholder="Type your abstract here"><?php echo $_REQUEST['abstract'];?></textarea>
            <br/>
            <ul class="list-inline">


              <li><h5><b>&bull; Select heuristic function</b></h5></li>
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

            <button type="submit" class="btn btn-labeled btn-success" onclick="load_animation()">
              <span class="btn-label">
                <i class="fa fa-check"></i>
              </span>
              Run the engine!
            </button>     
          </div>
        </div>


      </form>
      </div>

        <div id="margins" class="wrapper">
        <div id ="animation" style="margin-left: 690px; display: none;" class="tube">
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
                <a class="accordion-toggle" data-parent="#accordion-panel2" href="#collapseOnePanel2">
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
                      echo '<h5>';
                      echo '<b>';

                      echo $sequence[0];

                      echo '</b>';
                      echo '</h5>';
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
                <a class="accordion-toggle" style="text-align: center;" data-parent="#accordion-panel2" href="#collapseTwoPanel2">
                 <span style="align: center;" ><b> Blog title </b></span>
                </a>
              </h4>
            </div>
            <div id="collapseTwoPanel2" >
              <div class="panel-body">

                <?php
                      echo '<h5>';
                      echo '<b>';
                echo $sequence[1];
                 echo '</h5>';
                      echo '</b>';
                unset($sequence);
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
      <div class="col-sm-16 col-lg-16">
            <div class="row" align="center">
              <div class="col-lg-16 col-sm-16 ">
                <div class="thumbnail">
                  <img src="assets/img/cikm.png" alt="">
                  
                </div>
                <br/>
                <div style="width:80%" >
             <h4 align="left" ><p align="center">   <i>Sci-Blogger</i> consists of a two-stage pipeline, which is described in detail as follows:</p>
<br/>
<p> We employ a heuristic-based function which takes the title and abstract of the <mark>research paper</mark> and extracts relevant information to feed it into the next step. This is done by experimenting with various heuristics as we will describe below.
The output from the previous step is fed into a sequence-to-sequence neural generation model in order to generate the title of the <mark>blog post</mark>.
</p>
<br/>
<hr width="75%">
<br/>
<p><mark>For stage 1</mark> - given our dataset, <span style="font-weight: 1000">T = (bt, pt, abs)</span>, where, <span style="font-weight: 1000">bt</span> is the blog title, <span style="font-weight: 100">pt</span> is the paper title and <span style="font-weight: 1000">abs</span> is the abstract, we define a heuristic function <span style="font-weight: 1000">H(pt, abs)</span> which takes a paper title and abstract as parameters and outputs a <span style="font-weight: 1000">sequence s</span>.  We train our seq2seq models SS to take s as input and generates bt' as output with a loss function <span style="font-weight: 1000">L (bt, bt')</span></p>
<br/>
<p align="center"><i> The various heuristic functions H we explored are outlined below:</i> </p>
<br/>
<p><span style="font-weight: 1000">&bull; H (pt, abs) = pt </span> : In this heuristic, we assume that the paper title will encapsulate sufficient information to generate the blog title.</p>
<br/>
<p><span style="font-weight: 1000">&bull; H (pt, abs) = RP (abs) </span>: Here, we define RP (abs) as the most representative sentence in abs.  We used the sum of TF-IDF values of words in a sentence as representativeness of a sentence and follow a similar procedure like the previous approach.</p>
<br/>
<p><span style="font-weight: 1000">&bull; H(pt, abs) = RPD(abs)</span>: Let RD(abs) and RP(abs) be the normalized readability and representativeness of a sentence respectively, where normalization is performed across all sentences. We define RPD(abs) = nRD(abs) x nRP(abs).</p>
<br/>
<p>We also experimented with different combinations of the above heuristics: 

<span style="font-weight: 1000">H (pt, abs) = pt | RD(abs), 
H (pt, abs) = pt | RP (abs), 
H (pt, abs) = pt | RPD (abs) and
H (pt, abs) = pt | abs</span>; where | implies concatenation of the associated heuristics. </p>

<br/>
<hr width="80%">
<br/>
<p><mark>In stage 2</mark> - we leverage a competent sequence-to-sequence (seq2seq) architecture for generating the blog titles using the intermediate output sequence from stage 1.</p>
<br/>
 <p>Sequence-to-sequence networks have been successfully applied to summarization and neural machine translation tasks where an <span style="font-weight: 1000">attention</span> is defined over the input sequence to allow the network to focus on specific parts of the input text to generate the text.</p>
<br/>
 <p>One of the recent advancements in this direction is the <span style="font-weight: 1000">pointer-generator</span> framework where the model extends over the attention-based frameworks to compute a probability <span style="font-weight: 1000">P<sub>gen</sub></span> to decide whether the next word in sequence should be copied from the source or generated from the rest of the vocabulary. Such a framework aids in copying factual information from the source, and we hypothesize that this will be useful when generating blog titles.Hence, we use this pointer-generator model as our sequence-to-sequence framework for the 2nd stage.</p>
</h4>
</div>
              </div>
        </div>
      </div>
    

  </div>
  <!-- /container -->

  <footer class="text-center">
    <p>&copy; Information Retrieval & Extraction Lab, IIIT-H </p>
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
