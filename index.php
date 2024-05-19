<?php require('php/functions.php'); ?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Rock, Paper, Scissors</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<div class="container">
    <h1>Rock, Paper, Scissors</h1>
    <form method="POST">
        <label for="move">Choose your move:</label>
        <select name="move" id="move">
            <option value="rock">Rock</option>
            <option value="paper">Paper</option>
            <option value="scissors">Scissors</option>
        </select>
        <button type="submit">Play</button>
    </form>

    <?php if (isset($result)): ?>
        <div class="result">
            <h2>Results:</h2>
            <p>Your move: <?php echo htmlspecialchars($playerMove); ?></p>
            <p>Computer move: <?php echo htmlspecialchars($computerMove); ?></p>
            <p><?php echo $result; ?></p>
        </div>
    <?php endif; ?>
</div>
</body>
</html>