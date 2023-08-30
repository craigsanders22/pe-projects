<?php include 'form-header.php' ?>

<body>
    <div class="container">
        <h1>Mad Libs</h1>
        <form action="madlib.php" method="post">
          
            <label for="animal">Animal:</label>
            <input type="text" id="animal" name="animal" placeholder="pig, zebra, shark, etc" required><br><br>
            
            <label for="noun1">Noun 1:</label>
            <input type="text" id="noun1" name="noun1" placeholder="hat, car, rock, etc" required><br><br>
            
            <label for="noun2">Noun 2:</label>
            <input type="text" id="noun2" name="noun2" placeholder="hat, car, rock, etc " required><br><br>
            
            <label for="verb1">Verb 1:</label>
            <input type="text" id="verb1" name="verb1" placeholder="walk, read, cough, etc" required><br><br>
            
            <label for="verb2">Verb 2:</label>
            <input type="text" id="verb2" name="verb2" placeholder="walk, read, cough, etc" required><br><br>
            
            <label for="adverb1">Adverb 1:</label>
            <input type="text" id="adverb1" name="adverb1" placeholder="very, quietly, badly, etc" required><br><br>
            
            <label for="adverb2">Adverb 2:</label>
            <input type="text" id="adverb2" name="adverb2" placeholder="very, quietly, badly, etc" required><br><br>
            
            <label for="adjective1">Adjective 1:</label>
            <input type="text" id="adjective1" name="adjective1" placeholder="joyful, better, nasty" required><br><br>
            
            <label for="adjective2">Adjective 2:</label>
            <input type="text" id="adjective2" name="adjective2" placeholder="joyful, better, nasty" required><br><br>
        
            <p><button type="submit">Create</button></p>
        </form>
    </div>
</body>
</html>
