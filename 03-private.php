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
        <header class="flex justify-center items-center text-2xl font-mono border-b border-blue-200 border-dashed pb-3">
            <a href="index.php">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-10 h-10 hover:scale-75 transition text-blue-400">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M11.25 9l-3 3m0 0l3 3m-3-3h7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </a>
            <h1>03-Private</h1>
        </header>
        <section class="max-h-[500px] overflow-y-auto m-1">
            <h2 class="text-center text-2xl">Table Maker</h2>
            <form class="p-2 ring-1 mb-4 grid grid-cols-2 ring-white/50 overflow-y-auto bg-white/10 gap-4" action="" method="post">
                
            <div class="flex flex-col gap-4 items-center">
                    <label>Rows:</label>
                    <input type="range" name="nr" min="1" max="15" step="1" oninput="onr.value=this.value">
                    <output id="onr" value="10"></output>
                </div>
                <div class="flex flex-col gap-4 items-center">
                    <label>Columns:</label>
                    <input type="range" name="nc" min="1" max="15" step="1" oninput="onc.value=this.value">
                    <output id="onc" value="10"></output>
                </div>
                <button class="p-2 bg-green-600 w-[275px] rounded-md hover:scale-95 transition-all" >Make Table</button>
            </form>
            <?php 
                class Table{
                    private $nr;
                    private $nc;

                    public function __construct($nc,$nr)
                    {
                        $this->nr=$nr;
                        $this->nc=$nc;
                        $this->makeTable();
                    }

                    private function makeTable()
                    {
                        echo"<table class='border-collapse mx-auto'>";
                        for($r = 1; $r <= $this->nr; $r++){
                            echo "<tr>";
                            for($c = 1; $c <= $this->nc; $c++){
                                echo "<td class='p-2 border ring-white/50'></td>";
                            }
                            echo "</tr>";
                        }
                        echo"</table>";
                    }
                }
                
                if ($_POST) {
                    $Table = new Table($_POST['nr'], $_POST['nc']);
                }
            ?>
        </section>
    </main>
    <script src="js/tailwild-3.2.4.js"></script>
</body>

</html>