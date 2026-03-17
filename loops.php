<!-- loops.php -->
 <?php
 // WHILE (DO...WHILE)
$couter = 10;
$packs = 5;
$price = 1.99;

 // FOREACH

$products = [
    'toffee' => 2.99,
    'Mints'  => 1.99,
    'Fudge'  => 3.49,
];
?>
<!DOCTYPE html>

<html>
    <head>
        <title>if, switch, match</title>
        <link rel="stylesheet" href="./css/style.css">

    <body>

        <h2>Mints</h2>
        <ul>
        <?php 
        for ($i = 0; $i <=100; $i = $i + 10) {
            echo '<li>';
            echo " $i packs cost $";
            echo $price * $i;
            echo '</li>';
            $couter++;
        }while ($counter <=$packs);
        ?>
        </ul>

        <h2>$products</h2>
        <table>
            <tr>
                <th>Item</th>
                <th>Price</th>
            </tr>
            <?php foreach ($products as $item => $price) { ?>
                <tr>
                    <td><?= $item; ?></td>
                    <td><?= $price; ?></td>
             
            <?php } ?>
        </tabel>
    </body>
</html>