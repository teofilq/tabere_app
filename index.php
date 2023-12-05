<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum '90s Style</title>
    <style>
        body {
            font-family: 'Courier New', monospace;
            background-color: #000;
            color: #00ff00;
            padding: 20px;
            text-align: center;
        }

        .forum-box {
            background-color: #333;
            border: 2px solid #00ff00;
            padding: 10px;
            border-radius: 10px;
            display: inline-block;
            text-align: left;
        }

        .message {
            margin-bottom: 10px;
            padding: 5px;
            border-left: 3px solid #00ff00;
        }

        .message strong {
            color: #ff0000;
        }

        .message-box {
            margin-top: 20px;
        }

        .message-box textarea {
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #00ff00;
            background-color: #222;
            color: #00ff00;
        }

        .message-box button {
            padding: 5px 15px;
            background-color: #00ff00;
            color: #000;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .message-box button:hover {
            background-color: #008000;
        }
    </style>
</head>
<body>
    <div class="forum-box">
        <div class="message">
            <strong>eu:</strong> Salutare de fapt ce zic? sdfaȘtiați că dinozauriiiiiiiioo nu au dispărut de fapt, ci s-au transformat în păsări și trăiesc printre noi?
        </div>
        <div class="message">
            <strong>o pasare:</strong> Asta explică de ce păsările stau mereu pe firele electrice! Se încarcă!
        </div>
        <div class="message">
            <strong>tu:</strong> Exact! Și de aceea nu le vedem niciodată aterizând la benzinării.
        </div>
        <div class="message">
            <strong>eu:</strong> Mă gândesc acum... oare de asta sunt păsările așa supărate în Linux? 
        </div>
	<div class="message">
            <strong>tu:</strong> Da, Tony. De asta pasarie sunt suparate in Angry Birds. Intelepciunea ta ma uimeste!
        </div>

        <!-- Caseta de mesaje simulată -->
        <div class="message-box">
            <textarea name="message" rows="4" cols="50" placeholder="Scrie un mesaj..."></textarea>
            <button onclick="location.href='exp/login_page.php';">Trimite Mesaj</button>
        </div>
    </div>
</body>
</html>

