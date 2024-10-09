<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
        <!-- Styles -->
        <style>
            html, body {
                font-family: 'Nunito', sans-serif;
                margin: 0;
                padding: 0;
                background-color: #f1f5f9;
            }
            header {
                background-color: #f8fafc;
                padding: 20px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                display: flex;
                justify-content: space-between;
                align-items: center;
            }
            .header-title {
                font-size: 1.5rem;
                font-weight: bold;
                color: #4a5568;
                margin-left: 20px;
            }
            .profile-container {
                text-align: center;
                margin-top: 40px;
            }
            .profile-container img {
                width: 150px;
                height: 150px;
                border-radius: 50%;
                object-fit: cover;
                border: 4px solid #4a5568;
                margin-bottom: 20px;
            }
            .profile-container h2 {
                font-size: 1.75rem;
                font-weight: bold;
                margin-top: 10px;
                color: #4a5568;
            }
            .profile-container p {
                font-size: 1.1rem;
                color: #718096;
                margin: 5px 0;
            }
            .contact-details {
                margin-top: 20px;
                padding: 20px;
                background-color: #fff;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                border-radius: 10px;
                max-width: 400px;
                margin-left: auto;
                margin-right: auto;
            }
            .contact-details p {
                font-size: 1rem;
                color: #4a5568;
                margin: 8px 0;
                line-height: 1.6;
            }
            .content-section {
                display: flex;
                justify-content: space-between;
                margin: 60px auto; /* More spacing between the two sections */
                max-width: 1000px;
                gap: 40px; /* Added gap for professional spacing */
            }
            .container {
                background-color: #fff;
                padding: 20px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                border-radius: 10px;
                width: 1000px;
                display: flex;
                flex-direction: column;
                justify-content: center;
                text-align: left;
            }
            .container h3 {
                font-size: 1.5rem;
                color: #4a5568;
                margin-bottom: 20px;
                border-bottom: 2px solid #4a5568;
                padding-bottom: 10px;
            }
            .container p {
                font-size: 1rem;
                color: #718096;
                line-height: 1.7;
                margin-bottom: 10px;
            }
            
        </style>
    </head>
    <body class="antialiased">
        <!-- Header Section -->
        <header>
            <div class="header-title">Profile Page</div>
        </header>

        <!-- Profile Section -->
        <div class="profile-container">
            <img src="{{ asset('me.jpg') }}" alt="Profile Image"> <!-- Assuming 'me.jpg' is in 'public/' -->
            <h2>Zachi Jonathan</h2>
            <p>Full Stack Developer</p>

            <!-- Contact Details -->
            <div class="contact-details">
                <p><strong>ID Number:</strong> 0102307277</p>
                <p><strong>Email:</strong> zachijonathan3@gmailcom</p>
                <p><strong>Phone:</strong> +234 9035 279 803</p>
            </div>
        </div>

        <!-- Learning Outcomes & Achievements Section -->
        <div class="content-section">
            <!-- Learning Outcomes Container -->
            <div class="container">
                <h3>Learning Outcomes</h3>
                <p>- Template engine(Blade).</p>
                <p>- View Componenet.</p>
                <p>- Layout.</p>
                <p>- Passing data to component.</p>
                <p>- Invoking blade component.</p>
            </div>

            <!-- Achievements Container -->
            <div class="container">
                <h3>Achievements</h3>
                <p>- Laravel framework makes it easy to build a fullstack web application.</p>
                <p>- I also learnt about cache memory.</p>
                <p>- We also learnt about MVC in laravel (model view controller).</p>
                <p>- I've learnt about the .env file and all the contents in it</p>
            </div>
        </div>

 
       
    </body>
</html>


