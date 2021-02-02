<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link type="text/css" rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table id="table_id" class="display">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Idade</th>
                <th>Lingue</th>
            </tr>
        </thead>
        <?php
            $file = file_get_contents("data.json");
            $file = json_decode($file);
            echo "<tbody>";
            foreach($file as $key => $array) {
                echo "<tr>";
                    foreach($array as $key => $value){
                        echo "<td>$value</td>";
                    }
                echo "</tr>";
            }
            echo "</tbody>";
        ?>
    </table>
    
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="data.json"></script>
<script>
    $(document).ready( function () {
        $('#table_id').DataTable({
            paging: true,
            scrollY: false   
        });
    } );
</script>
</body>
</html>