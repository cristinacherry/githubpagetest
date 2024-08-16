<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Para mi Bebito</title>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <style>
        /* General Styles */
        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(to bottom right, #1a1a2e, #16213e);
            color: white;
            font-family: 'Kaushan Script', cursive;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            position: relative;
            flex-direction: column;
        }

        h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px #000;
            z-index: 10;
        }

        .javier-image {
            width: 300px;
            border-radius: 10px;
            margin-top: 20px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.5);
            z-index: 10;
        }

        .music-button, .image-button {
            background-color: #6c757d; /* Color plomo */
            border: none;
            color: white;
            padding: 15px 40px;
            font-size: 20px;
            margin: 15px;
            cursor: pointer;
            border-radius: 50px;
            transition: background-color 0.3s, transform 0.2s;
            box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.2);
            z-index: 10;
        }

        .music-button:hover, .image-button:hover {
            background-color: #5a6268; /* Color plomo más oscuro */
            transform: scale(1.1);
        }

        .heart {
            position: absolute;
            width: 20px;
            height: 20px;
            background-color: red;
            transform: rotate(280deg); /* Corazones en posición horizontal */
            animation: floatVertical 10s ease-in-out infinite;
            opacity: 0.8;
        }

        .heart::before, .heart::after {
            content: "";
            position: absolute;
            width: 20px;
            height: 20px;
            background-color: red;
            border-radius: 50%;
        }

        .heart::before {
            top: -10px;
            left: 0;
        }

        .heart::after {
            top: 0;
            left: 10px;
        }

        @keyframes floatVertical {
            0% { transform: translateY(100vh) rotate(315deg); opacity: 0.8; }
            100% { transform: translateY(-100vh) rotate(320deg); opacity: 0; }
        }
    </style>
</head>
<body>
    <h1>Feliz 1 año y medio amorcito 👩‍❤️‍💋‍👨</h1>
    <img src="Javier.jpg" alt="Javier" class="javier-image">
    <button class="music-button" onclick="playMusic()">Escucha</button>
    <button class="image-button" onclick="openImageWindow()">Mira</button>

    <script>
        function createHearts() {
            for (let i = 0; i < 20; i++) {
                const heart = document.createElement('div');
                heart.classList.add('heart');
                heart.style.left = `${Math.random() * 100}vw`;
                heart.style.top = `${Math.random() * 100}vh`;
                document.body.appendChild(heart);

                setTimeout(() => {
                    heart.remove();
                }, 30000); // Los corazones se eliminan después de 30 segundos
            }
        }

        function playMusic() {
            const musicUrl = "https://youtu.be/lXEUhl6Kn4I?si=r-Wuik8arly9EDJ9";
            window.open(musicUrl, '_blank');
        }

        function openImageWindow() {
            window.open('images.html', '_blank');
        }

        // Inicialmente crea algunos corazones flotantes
        createHearts();
        setInterval(createHearts, 15000); // Crear nuevos corazones cada 15 segundos
    </script>
</body>
</html>
