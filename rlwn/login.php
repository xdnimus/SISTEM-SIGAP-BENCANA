<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>Sistem Informasi Gempa dan Antisipasi Bencana - Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet"/>
  <style>
    body {
      font-family: 'Inter', sans-serif;
    }
    .left-side {
      background: linear-gradient(135deg, #0c2340 0%, #1a3a6d 100%);
      box-shadow: inset 0 0 50px rgba(255, 255, 255, 0.1);
    }
    .title {
      font-weight: 900;
      letter-spacing: 0.15em;
      text-transform: uppercase;
      line-height: 1.2;
    }
    .subtitle {
      font-size: 0.75rem;
      letter-spacing: 0.25em;
      text-transform: uppercase;
      opacity: 0.7;
      margin-top: 0.5rem;
      margin-bottom: 2rem;
    }
    .description {
      font-size: 1rem;
      line-height: 1.6;
      max-width: 28rem;
      text-align: center;
      color: #cbd5e1;
      font-weight: 400;
    }
  </style>
 </head>
 <body class="min-h-screen flex flex-col md:flex-row">
  <!-- Left side: Elegant styled title and info -->
  <div class="md:w-1/2 left-side flex flex-col justify-center items-center px-10 py-20 text-white">
   <h1 class="title text-4xl md:text-5xl text-center">Sistem Informasi Gempa<br/>dan Antisipasi Bencana</h1>
   <p class="subtitle">Sistem Koordinasi Relawan</p>
   <p class="description">
    Website yang memudahkan pelaporan kejadian gempa dan bencana lainnya secara cepat dan akurat. Sistem ini juga membantu koordinasi relawan dan tim tanggap darurat untuk memberikan respons yang efektif dan tepat waktu.
   </p>
  </div>

  <!-- Right side: Login form -->
  <div class="md:w-1/2 flex flex-col justify-center px-8 py-16 bg-white">
  <form action="#" method="POST" class="max-w-sm w-full mx-auto" novalidate>
   <h2 class="text-[#0c2340] font-semibold text-lg mb-1">Login</h2>
   <p class="text-xs mb-6 text-[#0c2340]">Login to Report and Track Disaster Events</p>

   <label for="username" class="block text-xs mb-1 text-[#0c2340]">
    Username or Email <span class="text-red-600">*</span>
   </label>
   <div class="relative mb-4">
    <i class="fas fa-user absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 text-xs"></i>
    <input id="username" name="username" type="text" placeholder="Email" required
    class="w-full border border-gray-300 rounded pl-9 pr-3 py-2 text-xs text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-blue-600"/>
   </div> 

   <label for="password" class="block text-xs mb-1 text-[#0c2340]">
    Password <span class="text-red-600">*</span>
   </label>
   <div class="relative mb-6">
    <i class="fas fa-key absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 text-xs"></i>
    <input id="password" name="password" type="password" placeholder="Password" required
    class="w-full border border-gray-300 rounded pl-9 pr-3 py-2 text-xs text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-blue-600"/>
    <button type="button" aria-label="Toggle password visibility"
    class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 text-xs focus:outline-none">
    <i class="fas fa-eye-slash"></i>
    </button>
   </div>

    <div class="flex justify-between items-center mb-6 text-xs text-[#0c2340]">
     <label class="flex items-center space-x-2">
      <input type="checkbox" class="w-4 h-4 border border-gray-300 rounded"/>
      <span>Remember me</span>
     </label>
     <a href="#" class="text-blue-700 hover:underline">Forgot Password</a>
    </div>

    <button type="submit"
     class="w-full bg-[#0c2340] text-white text-xs font-semibold py-2 rounded hover:bg-[#0a1d33] transition-colors">
     Submit
    </button>

    <p class="text-center text-xs mt-4 text-[#0c2340]">
     Don't have an account? <a href="daftar.php" class="text-blue-700 hover:underline"><strong>Create Account</strong></a>
    </p>
   </form>
  </div>
 </body>
</html>