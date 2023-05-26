<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/sidebar'); ?>
<?php $this->load->view('templates/navbar'); ?>
<!-- <p>Nama: <?php echo $this->session->userdata('status'); ?></p> -->

<?php $this->load->view($content); ?>
<?php $this->load->view('templates/footer'); ?>
<?php $this->load->view('templates/footer_js'); ?>