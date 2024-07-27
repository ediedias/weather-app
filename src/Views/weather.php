<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Weather App</title>
        <link rel="stylesheet" href="./css/styles.css">
    </head>
    <body>
        <div class="container">
        <h1>Weather App</h1>
        <form method="POST" action="">
            <input type="text" name="city" placeholder="Enter city" required>
            <button type="submit">Get Weather</button>
        </form>

        <?php if ($weatherData !== null): ?>
            <h2>Weather in <?= htmlspecialchars($weatherData['name']); ?></h2>
            <p>Temperature: <?= $weatherData['main']['temp']; ?> ºC</p>
            <p>Weather: <?= $weatherData['weather'][0]['description']; ?></p>
            <p>Humidity: <?= $weatherData['main']['humidity'] ?></p>
        <?php endif; ?>
        </div>        
    </body>
</html>