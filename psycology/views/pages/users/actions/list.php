<?php 

$url = "http://localhost/ArTeM02-045/psycology/apiRest/controllers/campers.php?op=GetAll";

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

$output = json_decode(curl_exec($curl));
// print_r($output);

?>

<div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Edad</th>
                    <th>Promedio</th>
                    <th>Nivel Campus</th>
                    <th>Nivel Ingles</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($output as $out){?>
                  <tr>
                    <td> <?= $out->nombre ?> </td>
                    <td> <?= $out->edad ?> </td>
                    <td> <?= $out->promedio ?> </td>
                    <td> <?= $out->nivelCAmpus ?> </td>
                    <td> <?= $out->nivelIngles ?> </td>
                  </tr>
                  <?php } ?>
                  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Nombre</th>
                    <th>Edad</th>
                    <th>Promedio</th>
                    <th>Nivel Campus</th>
                    <th>Nivel Ingles</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

            <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

  });
</script>