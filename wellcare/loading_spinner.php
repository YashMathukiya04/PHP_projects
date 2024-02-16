<!DOCTYPE html>
<html>
<head>
    <!-- <title>Display Therapies</title> -->
</head>
<body>
    <!-- Loading Spinner -->
    <?php include("loading_spinner.php");  ?>
    <div id="loading-spinner" style="display: none;">
        <div class="spinner"></div>
    </div>

    <!-- Rest of your page content goes here -->
    <!-- <h1>Therapy List</h1> -->
    <!-- ... other content ... -->

    <style>
        /* CSS styles for the spinner */
        #loading-spinner {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.7);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        .spinner {
            border: 6px solid #f3f3f3;
            border-top: 6px solid #3498db;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 2s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
    
    <!-- JavaScript to show and hide the spinner -->
    <script>
        window.addEventListener('beforeunload', function () {
            document.getElementById('loading-spinner').style.display = 'block';
        });
        
        setTimeout(function () {
            document.getElementById('loading-spinner').style.display = 'none';
        }, 2000); // Hide the spinner after 2 seconds
    </script>
</body>
</html>
