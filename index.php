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
    <?php
        /* create a json  */
        // $myArray = array();

        // $myArray[] = array("Nome" => "Marcelo", "Anni" => 29, "Lingue" => "Portoguese");
        // $myArray[] = array("Nome" => "Tatielli", "Anni" => 29, "Lingue" => "Portoguese");
        // $myArray[] = array("Nome" => "Arnaldo", "Anni" => 40, "Lingue" => "Italiano");
        // $myArray[] = array("Nome" => "Joshua", "Anni" => 8, "Lingue" => "Inglese");
        // $myArray[] = array("Nome" => "Marco", "Anni" => 30, "Lingue" => "Francese");
        // $myArray[] = array("Nome" => "Mathias", "Anni" => 30, "Lingue" => "Inglese");
        // $myArray[] = array("Nome" => "Ieda", "Anni" => 58, "Lingue" => "Italiano");
        // $myArray[] = array("Nome" => "Jose", "Anni" => 61, "Lingue" => "Francese");
        // $myArray[] = array("Nome" => "Fatima", "Anni" => 13, "Lingue" => "Francese");
        // $myArray[] = array("Nome" => "Ailto", "Anni" => 26, "Lingue" => "Italiano");
        // $myArray[] = array("Nome" => "Pedro", "Anni" => 18, "Lingue" => "Francese");
        // $myArray[] = array("Nome" => "Franciele", "Anni" => 8, "Lingue" => "Portoguese");
        // $myArray[] = array("Nome" => "Augusto", "Anni" => 15, "Lingue" => "Francese");
        // $myArray[] = array("Nome" => "Andrea", "Anni" => 55, "Lingue" => "Inglese");
        // $myArray[] = array("Nome" => "Daniela", "Anni" => 89, "Lingue" => "Inglese");
        // $myArray[] = array("Nome" => "Carlos", "Anni" => 60, "Lingue" => "Francese");
        // $myArray[] = array("Nome" => "Maria", "Anni" => 45, "Lingue" => "Portoguese");

        // echo "<pre>";
        // print_r($myArray);
        // echo "</pre>";
        
        // $json = json_encode($myArray);
        // echo "<pre>";
        // print_r($json);
        // echo "</pre>";

    ?>

    <!-- <table id="table_id" class="display"> -->
    <table id="table_id" class="display">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Idade</th>
                <th>Lingue</th>
            </tr>
        </thead>
        <?php
            $file = file_get_contents("myjson.json");
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