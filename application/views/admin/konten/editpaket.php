<?php
echo validation_errors();
?>
            <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Edit Paket
                        </h1>
                        <form enctype="multipart/form-data" role="form" class="form-horizontal" method="POST" action="<?php echo base_url();?>admin/artikel/editArtikel/<?php echo $data['id_artikel']?>">
                             <div class="form-group">
                                <label for="inputJudul" class="control-label col-xs-4">Judul Paket</label>
                                <div class="col-xs-4">
                                    <input name="judul" type="text" class="form-control" id="inputJudul" value="<?php echo $data['judul'];?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputIntro" class="control-label col-xs-4">Intro Paket</label>
                                <div class="col-xs-4">
                                    <input name="intro" type="text" class="form-control" id="inputIntro" value="<?php echo $data['intro'];?>">
                                </div>
                            </div>
                           <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Deskripsi Paket</label>
                                <textarea name="isi" rows="5" class="form-control" placeholder="Konten" id="message" required data-validation-required-message="Please enter a message."><?php echo $data['isi'];?></textarea>
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
                                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
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