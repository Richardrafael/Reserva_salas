<?php
include '../conexa.php';
$sql = "SELECT * FROM reservas";

// Executar a consulta
$result = $conn->query($sql);

if ($result === FALSE) {
  die("Erro ao executar a consulta: " . $conn->error);
}

// Obter o número de colunas e os nomes das colunas
$columns = [];
$columnCount = $result->field_count;

for ($i = 0; $i < $columnCount; $i++) {
  $fieldInfo = $result->fetch_field_direct($i);
  $columns[] = $fieldInfo->name;
}

// // Exibir os nomes das colunas (opcional)
// foreach ($columns as $columnName) {
//   echo "Nome da coluna: " . $columnName . "<br>";
// }
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<table id="segunda_tabela" class='table table-striped' cellspacing='0' cellpadding='0'>
  <thead>
    <tr>
      <?php
      foreach ($columns as $column) {
        echo '<th style="text-align: center; padding: .1rem 1.0rem !important;">' . $column . '</th>';
      }
      ?>
    </tr>
  </thead>
  <!-- <img src="" width="200px" alt=""> -->
  <tbody>
    <?php
    while ($row = $result->fetch_assoc()) {
      echo '<tr>';
      foreach ($columns as $column) {
        if ($column == 'foto_sala') {
          echo '<td style="text-align: center; background-color: white;"> <img  src=' . $row[$column] . ' width="200px" > </td>';
        } else {
          echo '<td style="text-align: center; background-color: white;">' . $row[$column] . '</td>';
        }
      }
      echo '</tr>';
    }
    ?>
  </tbody>
</table>

<script>
  $(document).ready(() => {
    const tabela = $('#segunda_tabela').DataTable({
      dom: 'Bfrtip',
      buttons: [{
        extend: 'excelHtml5',
        text: '<i class="fa-solid fa-file-excel"></i>',
        className: 'btn btn-primary excel'
      }],
      pageLength: 3,
      colReorder: true,
      start: 1,
      responsive: false,
      // responsive: {
      //   details: false
      // },
      scrollX: true,
      // searching: false,
      ordering: false,
      deferRender: true,
      language: {
        "lengthMenu": "Mostrar _MENU_ registros por página",
        "zeroRecords": "Nenhum registro encontrado",
        "info": "Página _PAGE_ de _PAGES_",
        "infoEmpty": "Nenhum registro disponível",
        "infoFiltered": "(filtrado de _MAX_ registros no total)",
        "search": "Pesquisar:",
        "paginate": {
          "first": "Primeira",
          "last": "Última",
          "next": "<i class='fa-solid fa-angles-right'></i>",
          "previous": "<i class='fa-solid fa-angles-left'></i>"
        }
      }
    });
  });


  document.getElementById('loader_relatorio').style.display = "none";
</script>