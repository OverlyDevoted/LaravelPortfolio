<h1>
    <?php
        echo $heading . "<br>";
        foreach($listings as $listing)
        {
            foreach($listing as $key => $value)
            {
                echo strtoupper($key) . " = " . $value . "<br>";
            }
            echo "<hr>";
        }
    ?>
</h1>