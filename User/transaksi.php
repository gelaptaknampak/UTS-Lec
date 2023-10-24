<?php
include "../koneksi.php";

// Query untuk menggabungkan data dari tabel pesanan dan detail_pesanan
$sql = "SELECT p.ID_pesanan, p.Tanggal_pesanan, d.Nama_menu, d.Total_harga, d.Jumlah_item, d.Metode_pembayaran
        FROM pesanan p
        INNER JOIN detail_pesanan d ON p.ID_pesanan = d.ID_pesanan";
$query = mysqli_query($conn, $sql);

if ($query) {
    // Mulai tabel HTML
    echo '<table>
            <tr>
                <th>ID Pesanan</th>
                <th>Tanggal Pesanan</th>
                <th>Nama Menu</th>
                <th>Total Harga</th>
                <th>Jumlah Item</th>
                <th>Metode Pembayaran</th>
            </tr>';

    // Loop melalui hasil query dan tampilkan data
    while ($row = mysqli_fetch_assoc($query)) {
        echo '<tr>';
        echo '<td>' . $row['ID_pesanan'] . '</td>';
        echo '<td>' . $row['Tanggal_pesanan'] . '</td>';
        echo '<td>' . $row['Nama_menu'] . '</td>';
        echo '<td>' . $row['Total_harga'] . '</td>';
        echo '<td>' . $row['Jumlah_item'] . '</td>';
        echo '<td>' . $row['Metode_pembayaran'] . '</td>';
        echo '</tr>';
    }

    // Selesai tabel HTML
    echo '</table>';
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
