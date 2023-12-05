<?php

// Informasi koneksi ke database MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "skl_todolist";

// Membuat objek koneksi ke database
$con = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi ke database
if ($con->connect_error) {
    // Jika koneksi gagal, tampilkan pesan kesalahan dan hentikan skrip
    die("Koneksi Gagal" . $con->connect_error);
}

// Memeriksa apakah metode HTTP adalah GET
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Query SQL untuk mengambil semua data dari tabel 'tasks'
    $sql = "SELECT * FROM tasks";
    
    // Menjalankan query
    $result = $con->query($sql);
    
    // Array untuk menyimpan data hasil query
    $tasks = [];
    
    // Memproses hasil query
    if ($result->num_rows > 0) {
        // Loop untuk mengambil setiap baris data dan menyimpannya dalam array
        while ($row = $result->fetch_assoc()) {
            $todos[] = $row;
        }
    }
    // Mengonversi array $todos ke format JSON dan mengirimkannya sebagai respons HTTP
    echo json_encode($todos);

}

else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents("php://input"));
    $task = $data->task;

    $sql = "INSERT INTO tasks (tasks_name) VALUES ('$task')";
    $con->query($sql);
}

elseif ($_SERVER['REQUEST_METHOD'] === "PUT") {
    $id = $_GET['id'];
    $sql = "UPDATE tasks SET completed = NOT completed WHERE id = $id";
    $con->query($sql);

} elseif ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    $id = $_GET['id'];

    $sql = "DELETE FROM tasks WHERE id = $id";
    $con->query($sql);
}

// Menutup koneksi ke database setelah selesai menggunakan
$con->close();

?>