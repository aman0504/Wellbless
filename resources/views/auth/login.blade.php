<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Login — Green Sprout Kitchen</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg: #F6FBF6;
            /* soft off-white green */
            --card: #FFFFFF;
            --primary: #2F9E44;
            /* leafy green */
            --primary-600: #2a8a3d;
            --muted: #64748b;
            --success: #16A34A;
            --shadow: 0 6px 18px rgba(18, 52, 22, 0.08);
            --radius: 14px;
            font-family: 'Inter', system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
        }

        * {
            box-sizing: border-box
        }

        html,
        body {
            height: 100%
        }

        body {
            margin: 0;
            background: linear-gradient(180deg, var(--bg), #F0F8F1 60%);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 32px;
            color: #0f172a;
        }

        .container {
            width: 100%;
            max-width: 980px;
            display: grid;
            grid-template-columns: 1fr 420px;
            gap: 32px;
            align-items: center;
        }

        /* Left: brand + hero */
        .hero {
            padding: 32px;
        }

        .brand {
            display: flex;
            gap: 12px;
            align-items: center;
            margin-bottom: 22px;
        }

        .logo {
            width: 64px;
            height: 64px;
            border-radius: 14px;
            background: linear-gradient(135deg, rgba(47, 158, 68, 0.12), rgba(47, 158, 68, 0.08));
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 6px 20px rgba(47, 158, 68, 0.08);
        }

        .logo svg {
            width: 40px;
            height: 40px
        }

        .brand h1 {
            font-size: 20px;
            margin: 0;
            font-weight: 700
        }

        .brand p {
            margin: 0;
            font-size: 13px;
            color: var(--muted)
        }

        .hero-title {
            margin-top: 12px;
            font-size: 28px;
            line-height: 1.05;
            margin-bottom: 8px;
            font-weight: 600;
        }

        .hero-sub {
            color: var(--muted);
            max-width: 48ch;
        }

        /* Right: card */
        .card {
            background: var(--card);
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            padding: 28px;
        }

        .card h2 {
            margin: 0 0 8px 0;
            font-size: 20px
        }

        .card p.small {
            margin: 0 0 18px 0;
            color: var(--muted);
            font-size: 13px
        }

        form {
            display: grid;
            gap: 12px
        }

        label {
            display: block;
            font-size: 13px;
            margin-bottom: 6px;
            color: #0f172a;
            font-weight: 600
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px 14px;
            border-radius: 10px;
            border: 1px solid #e6f0ea;
            outline: none;
            font-size: 14px;
            background: #fbfdf9;
            transition: box-shadow .15s, border-color .15s;
        }

        input:focus {
            border-color: var(--primary);
            box-shadow: 0 6px 18px rgba(47, 158, 68, 0.06)
        }

        .row {
            display: flex;
            gap: 10px
        }

        .remember {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 13px
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 11px 14px;
            border-radius: 10px;
            border: 0;
            font-weight: 600;
            cursor: pointer;
            font-size: 15px;
        }

        .btn-primary {
            background: linear-gradient(180deg, var(--primary), var(--primary-600));
            color: #fff;
            box-shadow: 0 8px 28px rgba(47, 158, 68, 0.12);
        }

        .btn-ghost {
            background: transparent;
            color: var(--primary-600);
            border: 1px solid rgba(47, 158, 68, 0.12);
        }

        .muted-link {
            color: var(--muted);
            font-size: 13px;
            text-decoration: none
        }

        .alt {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 6px
        }

        .footer-note {
            font-size: 13px;
            color: var(--muted);
            margin-top: 18px
        }

        /* small screens */
        @media (max-width:880px) {
            .container {
                grid-template-columns: 1fr;
                padding: 8px
            }

            .hero {
                order: 2
            }
        }
    </style>
</head>

<body>
    <div class="container" role="main">
        <div class="hero" aria-hidden="false">
            <div class="brand">
                <div class="logo" aria-hidden="true">
                    <!-- simple leaf + spoon logo -->
                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M3 21c4-1 7-4 9-9 3-6 9-8 11-8" stroke="#2F9E44" stroke-width="1.6"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M7 11c1.5-2 3-3 5-3 2 0 3.5 1 4 2.5S14.5 13 13 14c-1.5 1-4 2-6 2" stroke="#76C893"
                            stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <div>
                    <h1>Green Sprout Kitchen</h1>
                    <p>Fresh meals. Clean ingredients. Happy earth.</p>
                </div>
            </div>

            <div class="hero-title">Healthy food, happy planet.</div>
            <div class="hero-sub">Sign in to manage your orders, subscriptions, and recipe box. Built for small kitchens
                and organic lovers.</div>
        </div>

        <div class="card" aria-labelledby="loginTitle">
            <h2 id="loginTitle">Welcome back</h2>
            <p class="small">Sign in to your account or <a class="muted-link" href="register.html">create a new
                    account</a>.</p>

            <form id="loginForm" action="{{ route('login') }}" method="post" novalidate>
                <div>
                    <label for="email">Email</label>
                    <input id="email" name="email" type="email" required placeholder="you@domain.com"
                        autocomplete="email">
                </div>

                <div>
                    <label for="password">Password</label>
                    <div style="position:relative">
                        <input id="password" name="password" type="password" required placeholder="••••••••"
                            autocomplete="current-password">
                        <button type="button" id="togglePwd" aria-label="Show password"
                            style="position:absolute;right:8px;top:8px;background:none;border:0;padding:6px;cursor:pointer;font-size:13px;color:var(--muted)">
                            Show
                        </button>
                    </div>
                </div>

                <div class="row" style="align-items:center;justify-content:space-between;margin-top:4px">
                    <label class="remember"><input type="checkbox" name="remember" style="width:16px;height:16px">
                        Remember me</label>
                    <a class="muted-link" href="/auth/forgot">Forgot password?</a>
                </div>

                <div style="margin-top:6px;display:flex;gap:10px;flex-direction:column">
                    <button class="btn btn-primary" type="submit">Sign in</button>
                    <form action="{{ route('register') }}">

                        <button type="button" class="btn btn-ghost">Create account</button>
                    </form>
                </div>

                <div class="footer-note">By continuing you agree to our <a class="muted-link" href="/terms">Terms</a>
                    and <a class="muted-link" href="/privacy">Privacy Policy</a>.</div>
            </form>
        </div>
    </div>

    <script>
        // Password toggle
        const pw = document.getElementById('password');
        const toggle = document.getElementById('togglePwd');
        toggle.addEventListener('click', () => {
            if (pw.type === 'password') {
                pw.type = 'text';
                toggle.textContent = 'Hide';
            } else {
                pw.type = 'password';
                toggle.textContent = 'Show';
            }
        });

        // Simple client validation
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            if (!this.email.value || !this.password.value) {
                e.preventDefault();
                alert('Please enter email and password.');
            }
        });
    </script>
</body>

</html>
