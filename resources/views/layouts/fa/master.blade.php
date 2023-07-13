
<!DOCTYPE html>
<html lang="fa" class="scroll-smooth" dir="rtl">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Morex - Personal Portfolio HTML Template</title>

    <link rel="shortcut icon" type="image/x-icon" href="./assets/images/favicon.ico">
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@300;400;500;600;700;800;900&family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300&display=swap" rel="stylesheet">

    <!-- Plugins css -->
    <link rel="stylesheet" href="./assets/css/mobilemenu.css" />
    <!-- <link rel="stylesheet" href="./assets/css/glightbox.min.css" /> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <!-- Tailwind css -->
    <link rel="stylesheet" href="./assets/css/styles.css" />

    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem("theme-color") === "dark" || (!("theme-color" in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches)) {
            document.documentElement.classList.add("dark");
            document.getElementById("light__to--dark")?.classList.add("dark--version");
        }
        if (localStorage.getItem("theme-color") === "light") {
            document.documentElement.classList.remove("dark");
            document.getElementById("light__to--dark")?.classList.remove("dark--version");
        }
    </script>
</head>
<body>
<!-------- Plugins js ------>
@yield('content')
<!-- Swiper js -->
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<!-- imagesloaded js -->
<script src="./assets/js/imagesloaded.pkgd.min.js" defer></script>

<!-- Isotope js -->
<script src="./assets/js/isotope.pkgd.min.js" defer></script>

<!-- Custom js -->
<script src="./assets/js/script.js" defer></script>
</body>
</html>
