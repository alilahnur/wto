
            <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Tambah Paket
                        </h1>
                        <form role="form" class="form-horizontal" method="POST" action="<?php echo base_url();?>admin/artikel/insertArtikel" enctype="multipart/form-data">
                             <div class="form-group">
                                <label for="inputJudul" class="control-label col-xs-4">Judul Paket</label>
                                <div class="col-xs-4">
                                    <input name="judul" type="text" class="form-control" id="inputJudul" placeholder="Judul Artikel">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputIntro" class="control-label col-xs-4">Intro Paket</label>
                                <div class="col-xs-4">
                                    <input name="intro" type="text" class="form-control" id="inputIntro" placeholder="Intro Artikel">
                                </div>
                            </div>
                           <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Deskripsi Paket</label>
                                <textarea name="isi" rows="5" class="form-control" placeholder="Konten" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            </div>
                             <div class="form-group">
                                <label for="inputGambar" class="control-label col-xs-4">Gambar Paket</label>
                                <div class="col-xs-4">
                                    <input name="path" type="file" id="inputGambar" placeholder="Gambar" required accept="image/*">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-offset-4 col-xs-9">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </form>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->