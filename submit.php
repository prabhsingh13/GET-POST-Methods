<?php
include_once('./includes/header.php');

if ($_SERVER["REQUEST_METHOD"] == 'GET') {
    $name = $_GET['name'];
} else if($_SERVER["REQUEST_METHOD"] == 'POST'){
    $name = $_POST['name'];
} else {
    header('Location: ./index.php');
}
?>

<main>
    <div class="vh-100 d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="border border-3 border-dark"></div>
                    <div class="card bg-white shadow-lg">
                        <div class="card-body p-5">
                            <div class="mb-3 mt-md-4 row">
                                <h2 class="fw-bold mb-2 mb-4">
                                    <?= 'Hello,' . ' ' . $name ?>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
include_once('./includes/footer.php');
?>