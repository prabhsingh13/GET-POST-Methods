<?php
include_once('./includes/header.php');
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
                                <h2 class="fw-bold mb-2 text-uppercase mb-4">PHP GET / POST Methods</h2>
                                <form id="myform" action="./submit.php" method="POST">
                                    <div class="mb-3 col-md-12">
                                        <label class="form-label h5">Enter Your Name</label>
                                        <input type="text" name="name" class="form-control"
                                            placeholder="Type Your name Here" required>
                                    </div>
                                    <h5 class="h5">Select Method</h5>
                                    <div class="mb-3 col-md-12">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="method" id="methodGet"
                                                value="GET" onchange="changeMethod()" required>
                                            <label class="form-check-label" for="methodGet">GET</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="method" id="methodPost"
                                                value="POST" onchange="changeMethod()" required>
                                            <label class="form-check-label" for="methodPost">POST</label>
                                        </div>
                                    </div>
                                    <div class="mb-3 d-grid">
                                        <button class="btn btn-outline-dark" type="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
function changeMethod() {
    // Get the selected method
    var selectedMethod = document.querySelector('input[name="method"]:checked').value;

    // Set the form action based on the selected method
    var formAction = selectedMethod === 'GET' ? 'GET' : 'POST';

    document.getElementById('myform').method = formAction;

    // Optional: You can perform additional actions based on the selected method
    console.log("Selected method: " + selectedMethod);
}
</script>

<?php
include_once('./includes/footer.php');
?>