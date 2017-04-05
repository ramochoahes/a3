<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>LessonTap</title>
    <!--link rel="stylesheet" type="text/css" href="styles.css"-->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  </head>

  <body>
    <header class="navbar-inverse"> <!--this mod gives you the full dscreen black navbar-->
      <div class="container">
        <nav>
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">LessonTap</a>
            </div>
          </div><!-- /.container-fluid -->
        </nav>
      </div>
    </header>

    <div class="container">
      <!--Panel-->
      <div class="panel panel-default">
        <div class="panel-heading">
        <h3 class="panel-title">Rick Astley Quiz</h3>
        </div>
        <div class="panel-body">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0" allowfullscreen></iframe>
        </div><!--?rel=0;&autoplay=1-->
      </div>
      <!--Checkboxes-->
      <form action="site.php">
        <h1>Rick Astley would never?</h1>
        <input type="checkbox" name="chk" value="0"> Give you up<br><!--name needed to send to DB-->
        <input type="checkbox" name="chk" value="1"> Let you down<br>
        <input type="checkbox" name="chk" value="2"> Run around<br>
        <input type="checkbox" name="chk" value="3"> Desert you<br>
        <input type="checkbox" name="chk" value="4"> Make you cry<br>
        <input type="checkbox" name="chk" value="5"> Say goodbye<br>
        <input type="checkbox" name="chk" value="6"> Tell a lie<br>
        <input type="checkbox" name="chk" value="7"> Hurt you<br>
        <input type="checkbox" name="chk" value="8"> All of the above<br>
        <input type="submit" value="Submit" name='chksub'>
      </form>
