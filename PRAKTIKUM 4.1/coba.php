<?php

echo "Enter n for nxn : <br>";
echo "<form method='POST'>
	Row:<input type='number' min='2'
			max='5' name='1d' value='1'/>
	Column:<input type='number' min='2'
			max='5' name='2d' value='1'/>
    Nilai:<input type='text' name='nilai'/>
	<input type='submit' name='submit'
			value='Submit'/>
</form>";

// Submit user input data for 2D array
if (isset($_POST['submit'])) {

    // POST submitted data
    $dimention1 = $_POST["1d"];

    // POST submitted data
    $dimention2 = $_POST["2d"];

    $nilai_input = $_POST["nilai"];

    // Explode the input nilai into an array based on space separator
    $nilai = explode(" ", $nilai_input);

    echo "Entered 2d nxn: " . $dimention1 . "x" . $dimention2 . " <br>";

    // Counter for iterating through nilai array
    $counter = 0;

    // Initialize 2D array for nilai
    $nilai_array = [];

    // Fill nilai_array with values
    for ($row = 0; $row < $dimention1; $row++) {
        for ($col = 0; $col < $dimention2; $col++) {
            // Assign nilai_array value from nilai_input array
            $nilai_array[$row][$col] = $nilai[$counter++];
        }
    }

    // Display the 2D array with nilai
    for ($row = 0; $row < $dimention1; $row++) {
        for ($col = 0; $col < $dimention2; $col++) {
            echo $nilai_array[$row][$col] . " ";
        }
        echo "<br>";
    }
}
?>
