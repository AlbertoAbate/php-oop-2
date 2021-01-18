<?php
    include_once __DIR__ . '/classes/domestic_appliances.php'
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <header>
        <h1>Shopping!</h1>
    </header>

    <main>
        <section>
        <?php // creiamo istanza domestic_appliances
        $domestic_appliances = new domestic_appliances('Samsung', 'Fridge', 500, 50);
        //var_dump($domestic_appliances);
        ?>
            <h2>Cosa vuoi comprare?</h2>
            <div>
                Compro un 
                <?php echo $domestic_appliances->printInfo(); ?>
            </div>
            <div>
                Applicando lo sconto sul prodotto, il prezzo è di euro
                <?php echo $domestic_appliances->fridgePrice(); ?>
            </div>
        </section>

        <section>
            <h2>section</h2>
        </section>
    </main>
    
</body>
</html>