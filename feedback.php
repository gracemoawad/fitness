<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Page</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
   <link rel="stylesheet" href="feedback.css">
</head>
<body>
    <form method="POST" action="feedback2.php">
        <div class="feedback-container">
            <h1>Feedback Page</h1>
            <p style="color:#07513a;">Please rate your experience:</p>
            <div class="ratings">
                <span class="rating" name = "rating" data-value="1">★</span>
                <span class="rating" name = "rating" data-value="2">★</span>
                <span class="rating" name = "rating" data-value="3">★</span>
                <span class="rating" name = "rating" data-value="4">★</span>
                <span class="rating" name = "rating" data-value="5">★</span>
            </div>
            <textarea id="comments" name = "comments" rows="5" cols="10" placeholder="Leave your comments here..."></textarea>
            <button id="submitBtn">Submit</button>
            <button id="resetBtn">Reset</button>
        </div>
    </form>

    <script>
        const ratings = document.querySelectorAll('.rating');
        const submitBtn = document.getElementById('submitBtn');

        let selectedRating = 0;

        ratings.forEach(rating => {
            rating.addEventListener('click', () => {
                selectedRating = parseInt(rating.getAttribute('data-value'));
                updateRatings();
            });
        });

        submitBtn.addEventListener('click', () => {
            if (selectedRating > 0) {
                alert(`Thank you for your feedback! You rated us ${selectedRating} stars.`);
            } else {
                alert("Please select a rating before submitting.");
            }
        });

        function updateRatings() {
            ratings.forEach(rating => {
                const value = parseInt(rating.getAttribute('data-value'));
                if (value <= selectedRating) {
                    rating.classList.add('active');
                } else {
                    rating.classList.remove('active');
                }
            });
            resetBtn.addEventListener('click', () => {
                selectedRating = 0;
                updateRatings();
            });

            function updateRatings() {
                ratings.forEach(rating => {
                    const value = parseInt(rating.getAttribute('data-value'));
                    if (value <= selectedRating) {
                        rating.classList.add('active');
                    } else {
                        rating.classList.remove('active');
                    }
                });
            }
        }
    </script>
</body>

</html>