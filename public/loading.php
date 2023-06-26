<?php
$type = null;
if(isset($_GET['type'])){
    $type  = $_GET['type'];
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Loading Page</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Center the loading animation */
        .loading-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>
</head>
<body>
<div class="loading-container">
    <div class="spinner-border text-primary" role="status">
        <span class="sr-only">Loading...</span>
    </div>
    <p class="mt-3">Please wait while the page is loading.</p>
</div>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    // Delay in milliseconds (e.g., 5000ms = 5 seconds)
    var delay = 2000;

    // Function to execute PHP file during loading
    function executePHPFile() {
        var typeValue = "<?php echo $type ?>"; // Replace "your_value" with the actual value you want to pass

        // Send an AJAX request to a PHP file with the GET parameter
        $.ajax({
            url: "session_destory.php?type=" + encodeURIComponent(typeValue),
            method: "GET"
        })
            .done(function(response) {
                // Handle the response from the PHP file if required
                console.log(response);
            })
            .fail(function(xhr, status, error) {
                // Handle any errors during the AJAX request
                console.log("AJAX Error: " + error);
            });
    }
    function redirectToPage() {
        window.location.href = "/JobManagement/public/Employer/index.php"; // Replace "target_page.html" with the actual page URL
    }

    // Call the executePHPFile after the specified delay
    setTimeout(executePHPFile, delay);
    setTimeout(redirectToPage, delay);
</script>
</body>
</html>
