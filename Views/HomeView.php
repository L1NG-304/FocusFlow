<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upcoming Events</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            padding: 20px;
            background-color: #fff;
        }

        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 20px;
        }

        .navbar-left {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .navbar-center {
            flex-grow: 1;
            display: flex;
            justify-content: center;
        }

        .navbar-center input {
            width: 300px;
            padding: 6px 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .navbar-right {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .title {
            font-size: 2rem;
            font-weight: bold;
            margin: 30px 0 20px 10px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
            padding: 0 10px;
        }

        .card {
            background-color: #eee;
            border-radius: 10px;
            padding: 15px;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            min-height: 230px;
        }

        .card .dot {
            align-self: flex-end;
            width: 10px;
            height: 10px;
            background-color: #bbb;
            border-radius: 50%;
        }

        .card .label {
            font-weight: bold;
            margin-top: 10px;
        }

        .card .details {
            font-size: 0.85rem;
            color: #444;
            margin-top: 5px;
        }

        .card .actions {
            margin-top: auto;
            background-color: #d0d0d0;
            padding: 5px 10px;
            border-radius: 5px;
            display: flex;
            justify-content: space-between;
            font-size: 0.8rem;
        }

        .icon {
            margin-left: 5px;
        }
    </style>
</head>
<body>
<div class="navbar">
    <div class="navbar-left">
        <span>☰</span>
        <strong>FocusFlow</strong>
    </div>
    <div class="navbar-center">
        <input type="text" placeholder="Search...">
    </div>
    <div class="navbar-right">
        <span>🗓️</span>
        <span>🌑</span>
        <span>👤</span>
    </div>
</div>

<div class="title">Up Coming Events</div>

<div class="grid">
    <!-- Repeatable card -->
    <div class="card">
        <div class="dot"></div>
        <div class="label">Event</div>
        <div class="details">Date time</div>
        <div class="details">Event's Details</div>
        <div class="details">________________</div>
        <div class="details">________________</div>
        <div class="actions">
            <div>Advance <span class="icon">🔗</span></div>
            <div>Copy link <span class="icon">🔗</span></div>
        </div>
    </div>
    <!-- Add more cards here as needed -->
    <!-- You can copy the above .card block 5 more times -->
</div>
</body>
</html>