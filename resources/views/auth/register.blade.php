<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Register — Green Sprout Kitchen</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
  <style>
    :root{
      --bg:#F6FBF6;
      --card:#FFFFFF;
      --primary:#2F9E44;
      --primary-600:#2a8a3d;
      --muted:#64748b;
      --shadow: 0 6px 18px rgba(18, 52, 22, 0.08);
      --radius:14px;
      font-family: 'Inter', system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
    }
    *{box-sizing:border-box}
    body{margin:0;background:linear-gradient(180deg,var(--bg), #F0F8F1);min-height:100vh;display:flex;align-items:center;justify-content:center;padding:28px;color:#0f172a}
    .wrap{max-width:720px;width:100%;display:grid;grid-template-columns:1fr 340px;gap:24px}
    .info{
      padding:24px;
    }
    .logo{display:flex;align-items:center;gap:12px;margin-bottom:12px}
    .logo svg{width:48px;height:48px}
    .headline{font-size:24px;margin-bottom:6px;font-weight:700}
    .muted{color:var(--muted);font-size:14px}

    .card{background:var(--card);padding:20px;border-radius:var(--radius);box-shadow:var(--shadow)}
    form{display:grid;gap:12px}
    label{font-size:13px;font-weight:600;color:#07203a}
    input{width:100%;padding:12px;border-radius:10px;border:1px solid #e6f0ea;background:#fbfdf9;font-size:14px}
    input:focus{outline:none;border-color:var(--primary);box-shadow:0 8px 24px rgba(47,158,68,0.06)}
    .half{display:flex;gap:10px}
    .btn{padding:11px 14px;border-radius:10px;border:0;font-weight:600;cursor:pointer}
    .btn-primary{background:linear-gradient(180deg,var(--primary),var(--primary-600));color:#fff}
    .note{font-size:13px;color:var(--muted)}
    .alt-link{font-size:13px;color:var(--primary-600);text-decoration:none;font-weight:600}

    @media (max-width:900px){
      .wrap{grid-template-columns:1fr; padding:8px}
    }
  </style>
</head>
<body>
  <div class="wrap" role="main">
    <div class="info" aria-hidden="false">
      <div class="logo">
        <div style="width:64px;height:64px;border-radius:12px;display:flex;align-items:center;justify-content:center;background:linear-gradient(135deg, rgba(47,158,68,0.12), rgba(47,158,68,0.06));box-shadow:0 8px 24px rgba(47,158,68,0.06)">
          <svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M3 21c4-1 7-4 9-9 3-6 9-8 11-8" stroke="#2F9E44" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/><path d="M7 11c1.5-2 3-3 5-3 2 0 3.5 1 4 2.5S14.5 13 13 14c-1.5 1-4 2-6 2" stroke="#76C893" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </div>
        <div>
          <div style="font-weight:700;font-size:18px">Green Sprout Kitchen</div>
          <div style="color:var(--muted);font-size:13px">Join our community of fresh-eaters</div>
        </div>
      </div>

      <div class="headline">Create your account</div>
      <div class="muted">Sign up to manage orders, recipes, subscriptions and get seasonal offers.</div>
    </div>

    <div class="card" aria-labelledby="registerTitle">
      <h2 id="registerTitle" style="margin:0 0 6px 0;font-size:18px">Register</h2>
      <p class="note" style="margin:0 0 12px 0">Already have an account? <a class="alt-link" href="login.html">Sign in</a></p>

      <form id="regForm" action="/auth/register" method="post" novalidate>
        <div class="half">
          <div style="flex:1">
            <label for="first">First name</label>
            <input id="first" name="first_name" type="text" required placeholder="Amandeep" autocomplete="given-name">
          </div>
          <div style="flex:1">
            <label for="last">Last name</label>
            <input id="last" name="last_name" type="text" required placeholder="Kaur" autocomplete="family-name">
          </div>
        </div>

        <div>
          <label for="regEmail">Email</label>
          <input id="regEmail" name="email" type="email" required placeholder="you@domain.com" autocomplete="email">
        </div>

        <div class="half">
          <div style="flex:1">
            <label for="pwd1">Password</label>
            <input id="pwd1" name="password" type="password" required minlength="8" placeholder="At least 8 characters" autocomplete="new-password">
          </div>
          <div style="flex:1">
            <label for="pwd2">Confirm password</label>
            <input id="pwd2" name="password_confirm" type="password" required placeholder="Confirm password" autocomplete="new-password">
          </div>
        </div>

        <div style="display:flex;align-items:center;gap:8px">
          <input id="news" name="newsletter" type="checkbox" style="width:16px;height:16px">
          <label for="news" style="margin:0;font-size:13px;color:var(--muted)">Send me seasonal recipes & offers</label>
        </div>

        <div style="display:flex;gap:10px;margin-top:8px">
          <button class="btn btn-primary" type="submit">Create account</button>
          <button class="btn" type="button" onclick="location.href='/'" style="border:1px solid rgba(47,158,68,0.08);background:transparent">Back to site</button>
        </div>

        <p class="note" style="margin-top:12px">By creating an account you agree to our <a class="alt-link" href="/terms">Terms</a>.</p>
      </form>
    </div>
  </div>

  <script>
    document.getElementById('regForm').addEventListener('submit', function(e){
      const p1 = document.getElementById('pwd1').value;
      const p2 = document.getElementById('pwd2').value;
      if (p1.length < 8) {
        e.preventDefault();
        alert('Password must be at least 8 characters.');
        return;
      }
      if (p1 !== p2) {
        e.preventDefault();
        alert('Passwords do not match.');
        return;
      }
      // otherwise allow submission
    });
  </script>
</body>
</html>
