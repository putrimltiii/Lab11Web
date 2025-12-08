<?php
$db = new Database();
$id = $_GET['id'];

$data = $db->get("artikel", "id=$id");

$form = new Form("/lab11_php_oop/artikel/ubah?id=$id", "Update");

if ($_POST) {
    $update = [
        'judul' => $_POST['judul'],
        'isi'   => $_POST['isi']
    ];

    if ($db->update("artikel", $update, "id=$id")) {
        echo "<p style='color:green'>Artikel berhasil diupdate!</p>";
    }
}
?>

<h3>Ubah Artikel</h3>

<?php
$form->addField("judul", "Judul Artikel");
$form->addField("isi", "Isi Artikel", "textarea");
$form->displayForm();
?>
