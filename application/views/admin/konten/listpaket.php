
            <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            List Paket
                        </h1>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul Paket</th>
                                        <th>Deskripsi</th>
                                        <th>Gambar</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $enum = 1;
                                    foreach($data as $row)
                                    {
                                        echo '<tr>
                                            <td>'. $enum .'</td>
                                            <td>'. $row['judul'] .'</td>
                                            <td>'. $row['intro'] .'</td>
                                            <td><img src="'.base_url().$row['path'] .'" width="100px"/></td>
                                            <td>
                                            <a href='. base_url()."admin/artikel/editArtikel/".$row['id_artikel'].' class="btn btn-warning fa fa-edit" title="Edit"></a>
                                            <a href='. base_url()."admin/artikel/hapusArtikel/".$row['id_artikel'].' class="btn btn-danger fa fa-trash" title="Hapus"></a>

                                            </td>
                                            </tr>';
                                            $enum +=1;
                                    }
                                    ?>
                                </tbody>
                            </table>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->