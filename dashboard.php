<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            display: flex;
            height: 100vh;
            background-color: #f4f4f9;
            perspective: 1500px; 
        }

        .container {
            display: flex;
            width: 100%;
        }

        .sidebar {
            width: 250px;
            height: 100%;
            background-color: #2d2f36;
            padding: 20px;
            display: flex;
            flex-direction: column;
            color: white;
            box-shadow: 10px 0 30px rgba(0, 0, 0, 0.3);
            transform: rotateY(5deg);
        }

        .sidebar-header h2 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 1.8rem;
        }

        .menu {
            display: flex;
            flex-direction: column;
        }

        .menu a {
            text-decoration: none;
            color: #ddd;
            padding: 15px 10px;
            margin: 5px 0;
            border-radius: 8px;
            transition: background 0.3s;
        }

        .menu a:hover, .menu a.active {
            background-color: #555b66;
        }

        .main-content {
            flex-grow: 1;
            padding: 40px;
            background-color: #fff;
            transform: rotateY(-5deg); 
            box-shadow: 0px 5px 30px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            overflow: auto;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .header h1 {
            font-size: 2rem;
            color: #333;
        }

        .profile {
            display: flex;
            align-items: center;
        }

        .profile-pic {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .card {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            transform: perspective(1500px) rotateY(-10deg);
        }

        .card:hover {
            transform: perspective(1500px) rotateY(0deg) translateY(-10px); 
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        }

        .card h3 {
            font-size: 1.5rem;
            color: #333;
            margin-bottom: 10px;
        }

        .card p {
            font-size: 1.2rem;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <div class="sidebar-header">
                <h2>Dashboard</h2>
            </div>
            <nav class="menu">
                <a href="#" class="active">Home</a>
                <a href="#">Messages</a>
                <a href="#">Settings</a>
                <a href="#">Logout</a>
            </nav>
        </aside>
        <main class="main-content">
            <header class="header">
                <h1>Welcome, Admin</h1>
                <div class="profile">
                    <img src="org.webp" alt="Profile Picture" class="profile-pic">
                    <span>Admin</span>
                </div>
            </header>
        </main>
    </div>
</body>
</html>
