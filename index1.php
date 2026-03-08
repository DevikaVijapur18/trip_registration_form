<?php
$insert = false;

if (isset($_POST['name'])) {
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "trip";

    $con = mysqli_connect($server, $username, $password, $dbname);

    if (!$con) {
        die("Connection to this database failed due to " . mysqli_connect_error());
    }

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $age = mysqli_real_escape_string($con, $_POST['age']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $desc = mysqli_real_escape_string($con, $_POST['desc']);

    $sql = "INSERT INTO `trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) 
    VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";

    if ($con->query($sql) == true) {
        $insert = true;
    } else {
        echo "ERROR: $sql <br> $con->error";
    }

    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trip Registration | Your Adventure Awaits</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Background Image -->
    <div class="bg-wrapper">
        <img class="bg" src="bg.jpg" alt="Trip Background">
        <div class="bg-overlay"></div>
    </div>

    <!-- Floating Decorative Elements -->
    <div class="floating-element floating-1"></div>
    <div class="floating-element floating-2"></div>
    <div class="floating-element floating-3"></div>
    <div class="floating-element floating-4"></div>

    <!-- Main Container -->
    <div class="main-container">
        <div class="glass-card">
            <!-- Header -->
            <header class="header">
                <div class="icon-wrapper animate-fade-in">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"/>
                        <polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"/>
                    </svg>
                </div>
                <h1 class="title animate-fade-in delay-1">Welcome to the Trip Registration</h1>
                <p class="subtitle animate-fade-in delay-2">Enter your details and submit this form to confirm your participation in the trip</p>
            </header>

            <?php if ($insert == true): ?>
                <div class="success-message animate-fade-in">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                        <polyline points="22 4 12 14.01 9 11.01"/>
                    </svg>
                    <span>Thanks for submitting! Your adventure awaits.</span>
                </div>
            <?php endif; ?>

            <!-- Form -->
            <form action="index1.php" method="post" class="form">
                <div class="form-grid">
                    <!-- Name -->
                    <div class="input-group animate-fade-in delay-3">
                        <div class="input-wrapper">
                            <span class="input-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/>
                                    <circle cx="12" cy="7" r="4"/>
                                </svg>
                            </span>
                            <input type="text" name="name" id="name" placeholder="Enter your name" required>
                        </div>
                    </div>

                    <!-- Age -->
                    <div class="input-group animate-fade-in delay-3">
                        <div class="input-wrapper">
                            <span class="input-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                                    <line x1="16" y1="2" x2="16" y2="6"/>
                                    <line x1="8" y1="2" x2="8" y2="6"/>
                                    <line x1="3" y1="10" x2="21" y2="10"/>
                                </svg>
                            </span>
                            <input type="number" name="age" id="age" placeholder="Enter your age" min="1" max="120" required>
                        </div>
                    </div>

                    <!-- Gender -->
                    <div class="input-group animate-fade-in delay-4">
                        <div class="input-wrapper select-wrapper">
                            <span class="input-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
                                    <circle cx="9" cy="7" r="4"/>
                                    <path d="M22 21v-2a4 4 0 0 0-3-3.87"/>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                                </svg>
                            </span>
                            <select name="gender" id="gender" required>
                                <option value="" disabled selected>Select your gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                                <option value="prefer-not-to-say">Prefer not to say</option>
                            </select>
                            <span class="select-arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="6 9 12 15 18 9"/>
                                </svg>
                            </span>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="input-group animate-fade-in delay-4">
                        <div class="input-wrapper">
                            <span class="input-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                                    <polyline points="22,6 12,13 2,6"/>
                                </svg>
                            </span>
                            <input type="email" name="email" id="email" placeholder="Enter your email" required>
                        </div>
                    </div>

                    <!-- Phone -->
                    <div class="input-group full-width animate-fade-in delay-5">
                        <div class="input-wrapper">
                            <span class="input-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                                </svg>
                            </span>
                            <input type="tel" name="phone" id="phone" placeholder="Enter your phone number" required>
                        </div>
                    </div>

                    <!-- Additional Info -->
                    <div class="input-group full-width animate-fade-in delay-5">
                        <div class="input-wrapper textarea-wrapper">
                            <span class="input-icon textarea-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                                    <polyline points="14 2 14 8 20 8"/>
                                    <line x1="16" y1="13" x2="8" y2="13"/>
                                    <line x1="16" y1="17" x2="8" y2="17"/>
                                    <polyline points="10 9 9 9 8 9"/>
                                </svg>
                            </span>
                            <textarea name="desc" id="desc" rows="4" placeholder="Enter any other information here (dietary requirements, special needs, etc.)"></textarea>
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn animate-fade-in delay-6">
                    <span>Register for Trip</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="5" y1="12" x2="19" y2="12"/>
                        <polyline points="12 5 19 12 12 19"/>
                    </svg>
                </button>
            </form>
        </div>

        <!-- Footer -->
        <p class="footer-text animate-fade-in delay-7">Your adventure awaits. Let's make memories together.</p>
    </div>
</body>
</html>
