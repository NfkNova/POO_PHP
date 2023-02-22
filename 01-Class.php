<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Files</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="min-h-[100vh] flex justify-center items-center">
    <main class="w-[300px] h-[600px] bg-black/20 rounded text-white">
        <header
            class="flex gap-4 justify-center items-center text-2xl font-extralight border-b border-blue-200 border-dashed pb-3">
            <a href="index.php">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-10 h-10 hover:scale-75 transition text-blue-400">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M11.25 9l-3 3m0 0l3 3m-3-3h7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </a>
            <h1> Class </h1>
        </header>
        <section>
            <?php



            class Vehicle
            {

                //Attributes
                public $brand;
                public $refer;
                public $model;
                public $color;

                //Methods
                public function setAttributes($brand, $refer, $model, $color)
                {
                    $this->brand = $brand;
                    $this->refer = $refer;
                    $this->model = $model;
                    $this->color = $color;
                }
                public function getAttribute()
                {
                    return "<div class='p-4 ring-2'>
                                <p><strong>Brand:</strong>$this->brand</p>
                                <p><strong>Refer:</strong>$this->refer</p>
                                <p><strong>Model:</strong>$this->model</p>
                                <p><strong>Color:</strong>$this->color</p>
                                </div>";
                }

            }

            //Create on Object
            $vehicle1 = new Vehicle();
            $vehicle2 = new Vehicle();
            $vehicle3 = new Vehicle();

            $vehicle1->setAttributes('Volkswagen', 'Tiguan', '2023', 'SpaceGray');
            $vehicle2->setAttributes('Renault', 'Twingo', '2007', 'Berenjena');
            $vehicle3->setAttributes('Mercedez', 'Benz', '2023', 'GrayMetallic');

            echo $vehicle1->getAttribute();
            echo $vehicle2->getAttribute();
            echo $vehicle3->getAttribute();
            //Access Attributes
            
            //echo $vehicle1->brand;
            //$vehicle1->brand = 'Toyota';
            //echo $vehicle1->brand;
            
            ?>
        </section>
    </main>
    <script src="js/tailwild-3.2.4.js"></script>
</body>

</html>