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
            <h1>02-Construct</h1>
        </header>
        <section class="max-h-[500px] overflow-y-auto m-4">
            <?php
            class PlayList
            {
                //Atributes
            
                private $name;
                private $album = array();
                private $artist = array();
                private $cover = array();
                private $year = array();

                //Methods
            
                public function __construct($name)
                {
                    $this->name = $name;
                }

                public function setPlayList($album, $artist, $cover, $year)
                {
                    $this->album[] = $album;
                    $this->artist[] = $artist;
                    $this->cover[] = $cover;
                    $this->year[] = $year;
                }

                public function getPlayList()
                {
                    echo "<div class='p-2 flex flex-col items-center ring-1 ring-white/50 gap-2'>
                <h2 class='text-center'>
                    Play List: $this->name
                </h2>";
                    for ($i = 0; $i < count($this->artist); $i++) {
                        echo "<img class='rounded-full w-[200px] h-[200px] p-2' src='" . $this->cover[$i] . "' alt='Album Cover'>
                <p><strong>Album: </strong> " . $this->album[$i] . "</p>
                <p><strong>Artist: </strong> " . $this->artist[$i] . "</p>
                <p><strong>Year: </strong> " . $this->year[$i] . "</p>";
                    }
                    echo "</div>";
                }
            }
            $playlist = new PlayList('Solo Blessed');
            $playlist->setPlayList('Siempre Bleesd', 'Blessed', 'https://tinyurl.com/3t2cwvj5', 2022);
            $playlist->setPlayList('Hecho en medellin', 'Blessed', 'https://tinyurl.com/2k64pbu7', 2021);
            $playlist->setPlayList('Real Hasta La Muerte', 'Anuel AA', 'https://tinyurl.com/2p8w34jw', 2018);
            $playlist->setPlayList('AP', 'Blessed', 'https://i.scdn.co/image/ab67616d00001e02f2db014d608cc16eb45aaf61', 2023);
            $playlist->setPlayList('Real G4 Life Part 2', 'Ñengo Flow', 'https://tinyurl.com/3fxvyrdm', 2012);
            $playlist->getPlayList();


            ?>
        </section>
    </main>
    <script src="js/tailwild-3.2.4.js"></script>
</body>

</html>