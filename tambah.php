<?php
$db = new Database();
$form = new Form("/lab11_php_oop/artikel/tambah", "Simpan");

if ($_POST) {
    $data = [
        'judul' => $_POST['judul'],
        'isi'   => $_POST['isi']
    ];

    if ($db->insert("artikel", $data)) {
        echo "<p style='color:green'>Artikel berhasil ditambahkan!</p>";
    } else {
        echo "<p style='color:red'>Gagal menambah artikel.</p>";
        }
}
?>

<h3>Tambah Artikel</h3>

<?php
$form->addField("judul", "Judul Artikel");
$form->addField("isi", "Isi Artikel", "textarea");
$form->displayForm();
?>
