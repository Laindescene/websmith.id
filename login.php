<?php
include "dashboard/config/config.php";

$error = '';

if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    $query = mysqli_query($conn, "SELECT * FROM users WHERE email='$email' LIMIT 1");
    if (mysqli_num_rows($query) === 1) {
        $user = mysqli_fetch_assoc($query);
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['role']    = $user['role'];
            $_SESSION['nama']    = $user['nama'];
            header("Location: dashboard/html/index.php");
            exit;
        }
    }
    $error = "Email atau password salah";
}

?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Login | WebSmith</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body class="min-h-screen bg-[#0b0f1a] flex items-center justify-center relative overflow-hidden">

    <!-- Glow Background -->
    <div class="absolute inset-0">
        <div class="absolute w-96 h-96 bg-purple-600 rounded-full blur-3xl opacity-20 top-1/4 left-1/4"></div>
        <div class="absolute w-96 h-96 bg-cyan-500 rounded-full blur-3xl opacity-20 bottom-1/4 right-1/4"></div>
    </div>

    <div class="relative z-10 w-full max-w-md bg-[#111827]/80 backdrop-blur-xl rounded-2xl shadow-2xl p-8">
        <!-- Logo -->
        <div class="flex justify-center mb-6">
            <div class="w-12 h-12 bg-gradient-to-br from-cyan-500 to-purple-600 rounded-lg flex items-center justify-center">
                <i class="fas fa-gamepad text-xl"></i>
            </div>
        </div>

        <h2 class="text-3xl font-bold text-center mb-2">
            <span class="text-cyan-400">Web</span><span class="text-purple-500">Smith</span>
        </h2>
        <p class="text-gray-400 text-center mb-6">Login ke akun kamu</p>

        <?php if ($error): ?>
            <div class="bg-red-500/20 text-red-400 text-sm p-3 rounded mb-4 text-center">
                <?= $error ?>
            </div>
        <?php endif; ?>

        <form method="POST" class="space-y-5">
            <div>
                <label class="text-gray-300 text-sm">Email</label>
                <input type="email" name="email" required
                    class="w-full mt-1 px-4 py-3 bg-[#0b0f1a] border border-gray-700 rounded-lg focus:ring-2 focus:ring-cyan-500 outline-none">
            </div>

            <div>
                <label class="text-gray-300 text-sm">Password</label>
                <input type="password" name="password" required
                    class="w-full mt-1 px-4 py-3 bg-[#0b0f1a] border border-gray-700 rounded-lg focus:ring-2 focus:ring-purple-500 outline-none">
            </div>

            <button name="login"
                class="w-full py-3 bg-gradient-to-r from-cyan-500 to-purple-600 rounded-lg font-semibold hover:opacity-90 transition">
                Login
            </button>
        </form>
        <div class="relative my-6">
            <div class="absolute inset-0 flex items-center">
                <div class="w-full border-t border-gray-700"></div>
            </div>
            <div class="relative flex justify-center text-sm">
                <span class="px-3 bg-[#111827] text-gray-400">atau</span>
            </div>
        </div>

        <a
            href="auth/google-login.php"
            class="flex items-center justify-center gap-3 w-full py-3
         bg-[#0b0f1a] border border-gray-700 rounded-lg
         hover:bg-gray-800 transition
         text-gray-200 font-medium">

            <!-- Google icon (SVG resmi) -->
            <svg class="w-5 h-5" viewBox="0 0 48 48">
                <path fill="#EA4335" d="M24 9.5c3.3 0 6.3 1.1 8.6 3.1l6.4-6.4C34.8 2.4 29.7 0 24 0 14.6 0 6.5 5.4 2.5 13.2l7.5 5.8C12.3 13.3 17.7 9.5 24 9.5z" />
                <path fill="#4285F4" d="M46.5 24.5c0-1.6-.1-2.8-.4-4.1H24v7.8h12.7c-.5 3-2.3 5.6-5 7.3l7.7 6c4.5-4.2 7.1-10.4 7.1-17z" />
                <path fill="#FBBC05" d="M10 28.9c-.6-1.8-1-3.7-1-5.9s.4-4.1 1-5.9l-7.5-5.8C.9 14.6 0 19.2 0 24s.9 9.4 2.5 13.7l7.5-5.8z" />
                <path fill="#34A853" d="M24 48c6.5 0 12-2.1 16-5.7l-7.7-6c-2.1 1.4-4.9 2.3-8.3 2.3-6.3 0-11.7-3.8-14-9.5l-7.5 5.8C6.5 42.6 14.6 48 24 48z" />
            </svg>

            <span>Login dengan Google</span>
        </a>

        <p class="text-gray-400 text-sm text-center mt-6">
            Belum punya akun?
            <a href="register.php" class="text-cyan-400 hover:underline">Daftar</a>
        </p>
    </div>

</body>

</html>