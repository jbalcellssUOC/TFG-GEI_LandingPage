<?php
$error_code = isset($_SERVER['REDIRECT_STATUS']) ? $_SERVER['REDIRECT_STATUS'] : 500;

switch ($error_code) {
    case 400:
        $error_message = "La sol·licitud és invàlida. Verifica l'URL i intenta-ho de nou.";
        break;
    case 401:
        $error_message = "No tens l'autorització necessària per accedir a aquesta pàgina.";
        break;
    case 403:
        $error_message = "L'accés a aquesta pàgina està restringit.";
        break;
    case 404:
        $error_message = "No hem pogut trobar la pàgina que estàs cercant.";
        break;
    case 500:
        $error_message = "Hi ha hagut un problema intern al servidor. Torna-ho a intentar més tard.";
        break;
    case 502:
        $error_message = "Hem rebut una resposta invàlida d'un servidor intermedi.";
        break;
    case 503:
        $error_message = "El servei no està disponible temporalment. Torna-ho a intentar més tard.";
        break;
    case 504:
        $error_message = "La resposta del servidor ha trigat massa temps. Prova-ho més tard.";
        break;
    default:
        $error_message = "S'ha produït un error inesperat.";
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error <?php echo $error_code; ?></title>
    <link rel="apple-touch-icon" sizes="180x180" href="/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon-16x16.png">
    <link rel="manifest" href="/images/site.webmanifest">

    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 70vh;
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 20px;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            width: 100%;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            padding: 20px;
        }
        img {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
        }
        h1 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #ff6f61;
        }
        p {
            font-size: 1rem;
            margin-bottom: 20px;
        }
        a {
            display: inline-block;
            padding: 10px 20px;
            color: #fff;
            background-color: #175E57;
            text-decoration: none;
            border-radius: 4px;
            font-size: 1rem;
            transition: background-color 0.3s ease;
        }
        a:hover {
            background-color: #18a689;
        }
        @media (max-width: 600px) {
            h1 {
                font-size: 1.5rem;
            }
            p {
                font-size: 0.9rem;
            }
            a {
                font-size: 0.9rem;
                padding: 8px 16px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="/images/logo.jpg" alt="Logo CODIS365">
        <h1>Error <?php echo $error_code; ?></h1>
        <p><?php echo $error_message; ?></p>
        <p>Si us plau, torna a la pàgina d'inici fent clic en el botó següent o utilitza el botó enrere del teu navegador per tornar a la pàgina anterior.</p>
        <a href="https://www.codis365.cat">Anar a inici</a>
    </div>
</body>
</html>
