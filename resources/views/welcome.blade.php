<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            background-color: white;
            color: black;
            font-family: "Fira Sans", sans-serif;
        }

        nav {
            width: 100%;
            height: 80px;
            display: flex;
            justify-content: space-between;
            padding: 20px 5%;
            background-color: #8cc099;
        }

        nav .heading {
            font-size: 30px;
            font-weight: 700;
            color: white;
        }

        nav h1 {
            font-size: 20px;
            text-decoration: none;
            color: white;
            padding: 8px 15px;
            border-radius: 10px;
        }

        .Main {
            background-image: url('beach.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 1;
            flex-direction: column;
            text-align: center;
        }

        #form input {
            padding: 10px;
            font-size: 18px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-right: 10px;
        }

        #form button {
            padding: 10px 20px;
            font-size: 18px;
            background-color: #8cc099;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        #greeting {
            font-size: 30px;
            font-weight: 700;
            color: #c4975c;
            display: none;
        }
    </style>
</head>
<body>
    <nav>
        <div class="heading">Landing Page</div>
        <div class="navbar"><h1>Achmad</h1>
</div>
    </nav>

    <div class="Main">
        <form id="form">
            <input type="text" id="nama" placeholder="Masukkan Nama Anda" required>
            <button type="submit">Kirim</button>
        </form>
        <h1 id="greeting"></h1>
    </div>

    <script>
        const form = document.getElementById("form");
        const nama = document.getElementById("nama");
        const greeting = document.getElementById("greeting");

        form.addEventListener("submit", function(event) {
            event.preventDefault(); // Mencegah reload

            const name = nama.value.trim();
            if (name) {
                form.style.display = "none"; // Sembunyikan form
                greeting.textContent = `Selamat Datang, ${name}`;
                greeting.style.display = "block";
            }
        });
    </script>
</body>
</html>
