<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AloDiyet - Giriş Yap</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }
        
        body {
            font-family: 'Nunito', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #FFE3C7;
            min-height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }
        
        .background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            
            background-size: cover;
            background-position: center;
            z-index: -2;
        }
        
        .circle-bg {
            position: fixed;
            top: 0;
            right: 0;
            width: 50%;
            height: 100%;
            z-index: -1;
        }
        
        .circle-bg img {
            position: absolute;
            top: 0;
            right: 0;
            width: 100%;
            height: 100%;
            object-fit: contain;
            opacity: 0.7;
        }
        
        .circle-bg-top-right {
            position: fixed;
            top: 0;
            right: 0;
            width: 500px;
            height: 500px;
            z-index: -1;
            overflow: hidden;
        }
        
        .circle-bg-top-right img {
            position: absolute;
            top: -100px;
            right: -100px;
            width: 100%;
            height: 100%;
            object-fit: contain;
            opacity: 0.7;
            transform: rotate(0deg);
        }
        
        .circle-bg-bottom-left {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 500px;
            height: 500px;
            z-index: -1;
            overflow: hidden;
        }
        
        .circle-bg-bottom-left img {
            position: absolute;
            bottom: -100px;
            left: -100px;
            width: 100%;
            height: 100%;
            object-fit: contain;
            opacity: 0.7;
            transform: rotate(180deg);
        }
        
        .login-container {
            display: flex;
            width: 100%;
            max-width: 1200px;
            min-height: 100vh;
            position: relative;
            z-index: 2;
        }
        
        .left-side {
            flex: 1;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            padding: 0 40px;
            position: relative;
        }
        
        .text-content {
            flex: 1;
            padding-right: 30px;
        }
        
        .right-side {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 0 40px;
            position: relative;
        }
        
        .trophy-image {
            width: 100%;
            max-width: 400px;
            z-index: 3;
        }
        
        .logo {
            
            text-align: center;
        }
        
        .logo img {
            max-width: 180px;
            height: auto;
        }
        
        .slogan {
            font-size: 16px;
            color: #F18518;
            margin-bottom: 10px;
            max-width: 300px;
            line-height: 1.4;
        }
        
        .main-title {
            font-size: 42px;
            font-weight: unset;
            color: #00b050;
            margin-top: 10px;
            font-family: 'Poppins', sans-serif;
            line-height: 1.2;
            text-align: left;
        }
        
        .main-title .line1 {
            display: block;
            margin-bottom: 5px;
            font-weight: unset;
        }
        
        .main-title .line2 {
            display: block;
            font-weight: unset;
        }
        
        .login-form {
            width: 100%;
            max-width: 400px;
            background-color: transparent;
            border-radius: 20px;
            padding: 30px;
            box-shadow: none;
            height: 70%;
        }
        
        .form-title {
            font-size: 28px;
            color: #F18518;
            text-align: center;
            margin-bottom: 10px;
            font-weight: 600;
        }
        
        .form-subtitle {
            font-size: 14px;
            color: #666;
            text-align: center;
            margin-bottom: 20px;
        }
        
        .input-group {
            margin-bottom: 15px;
            position: relative;
        }
        
        .input-group input {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 10px;
            font-size: 14px;
            color: #333;
            outline: none;
            transition: border-color 0.3s;
            background-color: #fff;
        }
        
        .input-group input:focus {
            border-color: #00b050;
        }
        
        .input-group input::placeholder {
            color: #aaa;
        }
        
        .password-toggle {
            position: absolute;
            right: 15px;
            top: 12px;
            color: #aaa;
            cursor: pointer;
        }
        
        .captcha-group {
            display: flex;
            flex-direction: row;
            gap: 10px;
            align-items: center;
            margin-bottom: 15px;
        }
        
        .captcha-container {
            display: flex;
            align-items: center;
            gap: 5px;
            width: 45%;
        }
        
        .captcha-text {
            min-width: 100px;
            background-color: #fff;
            text-align: center;
            font-size: 18px;
            font-weight: 600;
            padding: 12px 5px;
            border: 1px solid #ddd;
            border-radius: 10px;
            flex: 1;
        }
        
        .refresh-captcha {
            width: 40px;
            height: 40px;
            min-width: 40px;
            border: none;
            background-color: transparent;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }
        
        .refresh-captcha i {
            color: #00b050;
            font-size: 20px;
        }
        
        .captcha-group input[name="captcha_input"] {
            width: 55%;
        }
        
        .terms-check {
            display: flex;
            align-items: flex-start;
            margin-bottom: 20px;
            gap: 10px;
        }
        
        .terms-check input {
            margin-top: 3px;
        }
        
        .terms-check label {
            font-size: 12px;
            color: #666;
            line-height: 1.4;
        }
        
        .remember-forgot {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .remember-me {
            display: flex;
            align-items: center;
        }
        
        .remember-me input {
            margin-right: 8px;
        }
        
        .remember-me label {
            font-size: 14px;
            color: #666;
        }
        
        .forgot-password {
            font-size: 14px;
            color: #00b050;
            text-decoration: none;
            font-weight: 500;
        }
        
        .forgot-password:hover {
            text-decoration: underline;
        }
        
        .login-button {
            width: 100%;
            padding: 12px 15px;
            background: linear-gradient(to right, #F18518, #FFC386);
            color: #fff;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s;
            margin-top: 10px;
        }
        
        .login-button:hover {
            background: #F18518;
        }
        
        .social-login {
            margin-top: 20px;
            text-align: center;
        }
        
        .social-text {
            font-size: 14px;
            color: #666;
            margin-bottom: 10px;
        }
        
        .social-icons {
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        
        .social-icon {
            width: 25px;
            height: 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: transform 0.3s;
            margin-bottom: 3%;
        }
        
        .social-icon img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }
        
        .social-icon:hover {
            transform: translateY(-3px);
        }
        
        .register-link {
            margin-top: 15px;
            text-align: center;
            font-size: 14px;
            color: #666;
        }
        
        .register-link a {
            color: #00b050;
            text-decoration: none;
            font-weight: 600;
        }
        
        @media (max-width: 992px) {
            html, body {
                height: auto;
            }
            
            body {
                min-height: 100%;
                align-items: flex-start;
                padding: 20px 0;
            }
            
            .login-container {
                flex-direction: column;
                height: auto;
                min-height: auto;
                padding: 20px;
                margin: 0;
            }
            
            .left-side, .right-side {
                padding: 20px;
            }
            
            .left-side {
                flex-direction: column-reverse;
                align-items: center;
                justify-content: center;
            }
            
            .text-content {
                padding-right: 0;
                padding-top: 20px;
                text-align: center;
                width: 100%;
            }
            
            .trophy-image {
                width: 100%;
                max-width: 300px;
                margin-bottom: 0;
                object-fit: contain;
                height: auto;
            }
            
            .main-title {
                font-size: 32px;
                text-align: center;
            }
            
            .login-form {
                max-width: 100%;
            }
            
            .circle-bg {
                opacity: 0.3;
            }
            
            .circle-bg-top-right,
            .circle-bg-bottom-left {
                display: none;
            }
            
            .slogan {
                text-align: center;
            }
        }
        
        @media (max-width: 576px) {
            .trophy-image {
                max-width: 250px;
                width: 100%;
                height: auto;
                object-fit: contain;
                display: block;
                margin: 0 auto;
            }
            
            .main-title {
                font-size: 28px;
            }
            
            .login-form {
                padding: 20px;
            }
            
            .logo img {
                max-width: 150px;
            }
            
            .captcha-group {
                flex-direction: column;
            }
            
            .captcha-container,
            .captcha-group input[name="captcha_input"] {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="background"></div>
    <div class="circle-bg-top-right">
        <img src="/alodiyet/alodiyetresimler/giris/giris-circle-2.png" alt="Background Circle Top Right">
    </div>
    <div class="circle-bg-bottom-left">
        <img src="/alodiyet/alodiyetresimler/giris/giris-circle-2.png" alt="Background Circle Bottom Left">
    </div>
    <div class="login-container">
        <div class="left-side">
            <div class="text-content">
                <p class="slogan">Diyet yemek firmaları arasında en çok tercih edilen ve en yaygın şube ağı ile</p>
                <h1 class="main-title">
                    <span class="line1">Türkiye'nin</span>
                    <span class="line2">1 Numarası</span>
                </h1>
            </div>
            <img src="/alodiyet/alodiyetresimler/giris/girismeyveresim.png" alt="Trophy with vegetables and fruits" class="trophy-image">
        </div>
        <div class="right-side">
            <div class="logo">
                <img src="/alodiyet/alodiyetresimler/alodiyet-logo.png" alt="AloDiyet Logo">
            </div>
            <div class="login-form">
                <h2 class="form-title">Kayıt Ol!</h2>
                <p class="form-subtitle">Lütfen Bilgilerinizi Doğru ve Eksiksiz Girdiğinizden Emin Olun!</p>
                
                <form action="#" method="post">
                    <div class="input-group">
                        <input type="text" name="ad_soyad" placeholder="Ad Soyad" required>
                    </div>
                    <div class="input-group">
                        <input type="tel" name="telefon" placeholder="Telefon" required>
                    </div>
                    <div class="input-group">
                        <input type="email" name="email" placeholder="E-Posta" required>
                    </div>
                    <div class="input-group">
                        <input type="password" name="sifre" placeholder="Şifre" required>
                    </div>
                    <div class="input-group">
                        <input type="password" name="sifre_tekrar" placeholder="Şifre Tekrar" required>
                    </div>
                    <div class="input-group captcha-group">
                        <div class="captcha-container">
                            <input type="text" name="captcha" value="24222" readonly class="captcha-text">
                            <button type="button" class="refresh-captcha">
                                <i class="fas fa-sync-alt"></i>
                            </button>
                        </div>
                        <input type="text" name="captcha_input" placeholder="Güvenlik Kodu" required>
                    </div>
                    <div class="terms-check">
                        <input type="checkbox" id="terms" name="terms" required>
                        <label for="terms">Aydınlatma Metni'ni okudum ve Açık Rıza Metni'ni okudum, anladım ve e-posta aboneliği başvurusu yaparak açık rızamı verdiğimi beyan ederim.</label>
                    </div>
                    <button type="submit" class="login-button">Kayıt Ol</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Password toggle functionality
            const passwordInputs = document.querySelectorAll('input[type="password"]');
            const passwordToggle = document.querySelector('.password-toggle');
            
            if (passwordToggle) {
                const passwordInput = passwordInputs[0];
                passwordToggle.addEventListener('click', function() {
                    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                    passwordInput.setAttribute('type', type);
                    
                    // Toggle icon
                    const icon = this.querySelector('i');
                    if (type === 'password') {
                        icon.classList.remove('fa-eye-slash');
                        icon.classList.add('fa-eye');
                    } else {
                        icon.classList.remove('fa-eye');
                        icon.classList.add('fa-eye-slash');
                    }
                });
            }
            
            // Captcha refresh functionality
            const refreshCaptchaBtn = document.querySelector('.refresh-captcha');
            const captchaText = document.querySelector('.captcha-text');
            
            if (refreshCaptchaBtn && captchaText) {
                refreshCaptchaBtn.addEventListener('click', function() {
                    // Generate random 5-digit number for captcha
                    const randomCaptcha = Math.floor(10000 + Math.random() * 90000);
                    captchaText.value = randomCaptcha;
                });
            }
        });
    </script>
</body>
</html> 