<?php
function searchChatRooms($query) {
    $chatRooms = array(
        "backend" => array( // Array chat room backend
            array(
                "user" => "Ari",
                "message" => "Halo"
            ),
            array(
                "user" => "Ariyanto",
                "message" => "Halo juga"
            )
        ),
        "frontend" => array( // Array chat room frontend
            array(
                "user" => "suryanto",
                "message" => "Lorem ipsum"
            ),
            array(
                "user" => "Arindo",
                "message" => "Helo"
            )
        )
    );

    $results = array(); // Array hasil pencarian
    foreach ($chatRooms as $room => $messages) { // Iterasi setiap chat room
        foreach ($messages as $message) { // Iterasi setiap pesan dalam chat room
            if (stripos($message["user"], $query) !== false || stripos($message["message"], $query) !== false) {
                // Jika kata kunci ditemukan dalam atribut "user" atau "message" dari pesan
                $results[] = $room; // Tambahkan nama chat room ke array hasil
                break;
            }
        }
    }

    return $results; // Kembalikan array hasil pencarian
}

// Menampilkan output
$query = readline("Masukkan kata pencarian: ");
$results = searchChatRooms($query);
print_r($results);
?>
