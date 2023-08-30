<?php include 'form-header.php' ?>
<body>
    <div class="container">
        <h1>Mad Libs Result</h1>
        <?php
            $animal = $_POST['animal'];
            $noun1 = $_POST['noun1'];
            $noun2 = $_POST['noun2'];
            $verb1 = $_POST['verb1'];
            $verb2 = $_POST['verb2'];
            $adverb1 = $_POST['adverb1'];
            $adverb2 = $_POST['adverb2'];
            $adjective1 = $_POST['adjective1'];
            $adjective2 = $_POST['adjective2'];
            
            $story = "Once upon a time, there was a $adjective1 $animal. This $animal loved to $verb1 $adverb1 around $noun1. One day, it found a $adjective2 $noun2 and decided to $verb2 $adverb2 with it. And they lived happily ever after.";
            
            echo "<h4>Your submission:</h4>";
            echo "<p>Animal: $animal</p>";
            echo "<p>Nouns: $noun1, $noun2</p>";
            echo "<p>Verbs: $verb1, $verb2</p>";
            echo "<p>Adverbs: $adverb1, $adverb2</p>";
            echo "<p>Adjectives: $adjective1, $adjective2</p>";
            echo "<h4>Story:</h4>";
            echo "<h4>$story</h4>";
        ?>
    </div>
</body>
</html>
