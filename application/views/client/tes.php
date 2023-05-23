<!DOCTYPE html>
<html>

<head>
    <title>Data Customer</title>
</head>

<body>
    <h1>Data Customer</h1>

    <p>ID Customer: <?php echo $this->session->userdata('form_data')['id_customer']; ?></p>
    <p>Nama: <?php echo $this->session->userdata('form_data')['nama']; ?></p>
    <p>Email: <?php echo $this->session->userdata('form_data')['email']; ?></p>
    <p>Telepon: <?php echo $this->session->userdata('form_data')['telepon']; ?></p>
</body>

</html>