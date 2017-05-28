<!DOCTYPE HTML>
<HTML>
<HEAD>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="">
    
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="js/bootstrap.js"></script>


<title>Halaman Admin</title>
</HEAD>
<body>
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Beranda</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Beranda</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Paket<!-- <span class="sr-only">(current)</span> --></a></li>
        <li><a href="#">Artikel</a></li>
        <li><a href="#">Gallery</a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <!-- <li><a href="#">About</a></li> -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">NamaAdmin<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Beranda</a></li>
            <li><a href="#">Logout</a></li>
            <!-- <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
 -->          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    <div class="row">
      <div class="col-md-4" style="background-color: blue;">
        <a href="#" class="thumbnail">
            <img src="paris.jpg" alt="...">
        </a>
        </div>
      <div class="col-md-4" style="background-color: yellow;">
            <form>
                <div class="form-group">
                <label for="exampleInputEmail1">Judul</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Judul" style="width: 30%; height: 100%">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Deskripsi</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Deskripsi">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Keterangan</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Keterangan">
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Foto</label>
                <input type="file" id="exampleInputFile">
                <!-- <p class="help-block">Example block-level help text here.</p> -->
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox"> Pastikan data yang diisikan benar!
                </label>
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
      <div class="col-md-4" style="background-color: green;">
        <a href="#" class="thumbnail">
            <img src="paris.jpg" alt="...">
        </a>
        </div>
    </div>
    <script type="text/javascript">
        $('.dropdown-toggle').dropdown()
    </script>
</body>
</HTML>