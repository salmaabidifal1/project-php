<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Sign Up Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Styles CSS */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
        }

        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background: url('./images/R.jpg') no-repeat center center/cover;
            background-size: cover;
        }

        .container {
            display: flex;
            width: 100%;
            max-width: 500px;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
        }

        .form-section {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .form-wrapper {
            width: 100%;
            max-width: 400px;
        }

        h3 {
            margin-bottom: 20px;
            color: #006400; /* Vert foncé */
            font-size: 24px;
            text-align: center;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-bottom: 15px;
        }

        .form-wrapper label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #555;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            background: #f9f9f9;
        }

        .form-control:focus {
            border-color: #7a42f4;
            outline: none;
        }

        #error-message {
            color: red;
            display: none;
            font-size: 14px;
            text-align: center;
            margin-bottom: 10px;
        }
        
        button {
            width: 100%;
            padding: 12px;
            background: #006400; /* Vert foncé */
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s;
        }

        button:hover {
            background: #004d00; /* Nuance plus foncée au survol */
        }

        p {
            text-align: center;
            margin-top: 15px;
        }

        p a {
            color: #5a29b4;
            text-decoration: none;
        }
        p a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-section">
            <div class="form-wrapper">
                <form id="signupForm">
                    <h3>Create an Account</h3>
                    <div class="form-group">
                        <div class="form-wrapper">
                            <label for="firstName">First Name</label>
                            <input type="text" id="firstName" class="form-control" placeholder="Your First Name" required>
                        </div>
                        <div class="form-wrapper">
                            <label for="lastName">Last Name</label>
                            <input type="text" id="lastName" class="form-control" placeholder="Your Last Name" required>
                        </div>
                    </div>
                    <div class="form-wrapper">
                        <label for="email">Email</label>
                        <input type="email" id="email" class="form-control" placeholder="Your Email" required>
                    </div>
                    <div class="form-wrapper">
                        <label for="password">Password</label>
                        <input type="password" id="password" class="form-control" placeholder="Create Password" required>
                    </div>
                    <div class="form-wrapper">
                        <label for="confirmPassword">Confirm Password</label>
                        <input type="password" id="confirmPassword" class="form-control" placeholder="Confirm Password" required>
                    </div>
                    <div id="error-message">Passwords do not match!</div>
                    <button type="button" onclick="validateForm()">Sign Up</button>
                    <p>Already have an account? <a href="signin.php">Sign in</a></p>
                </form>
            </div>
        </div>
    </div>

    <script>
        function validateForm() {
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirmPassword').value;
            const errorMessage = document.getElementById('error-message');

            const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/;

            if (!emailRegex.test(email)) {
                errorMessage.style.display = 'block';
                errorMessage.textContent = 'Invalid email format!';
                return;
            }

            if (!passwordRegex.test(password)) {
                errorMessage.style.display = 'block';
                errorMessage.textContent = 'Password must be at least 8 characters, include 1 uppercase, 1 lowercase and 1 number!';
                return;
            }

            if (password !== confirmPassword) {
                errorMessage.style.display = 'block';
                errorMessage.textContent = 'Passwords do not match!';
                return;
            }

            errorMessage.style.display = 'none';
            alert('Registration Successful!');
            document.getElementById('signupForm').reset();
        }
    </script>
</body>
</html>
