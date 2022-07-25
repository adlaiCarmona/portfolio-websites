<!doctype html>
<html lang="en">

<head>
    <?php include 'includes/head.php'; ?>
    <script src="js/main.js"></script>
</head>

<body>
    <header>
        <?php include 'includes/navbar.php'; ?>
        <script src="js/navbar.js"></script>
    </header>
    <!-- Loading Screen -->
    <div id="loader" class="loading-screen">
    <span class="spinner-loader"></span>
        <h1>Loading...</h1>
    </div>
    <main>
        <!-- Landing Page -->
        <section id="home" class="header w-full h-100vh">
            <div class="header-text">
                <h1>Welcome to Adlai's Website</h1>
                <p>This is my page to show the projects I've made.</p>
            </div>
        </section>
        
        <!-- Projects -->
        <section id="projects" class='projects container w-full'>

            <a href="/pokeapi" class="project content pseudo-hover">
                <img src="/resources/pokeAPI.png" alt="Poke API" loading="lazy" class="project-img">
                <h2>PokeAPI</h2>
                <div class="project-description">
                    <ul role="list" class="project-list">
                        <li class="project-list-item">html</li>
                        <li class="project-list-item">css</li>
                        <li class="project-list-item">API</li>
                    </ul>
                </div>
            </a>
            <a href="/otherapi" class="project content pseudo-hover">
                <img src="/resources/otherAPI.png" alt="other API" loading="lazy" class="project-img">
                <h2>Using API</h2>
                <div class="project-description">
                    <ul role="list" class="project-list">
                        <li class="project-list-item">html</li>
                        <li class="project-list-item">css</li>
                        <li class="project-list-item">API</li>
                    </ul>
                </div>
            </a>
            <a href="/ecommerce" class="project content pseudo-hover">
                <img src="/resources/ecommerce.png" alt="Ecommerce" loading="lazy" class="project-img">
                <h2>E-commerce</h2>
                <div class="project-description">
                    <ul role="list" class="project-list">
                        <li class="project-list-item">html</li>
                        <li class="project-list-item">css</li>
                        <li class="project-list-item">javascript</li>
                        <li class="project-list-item">database</li>
                    </ul>
                </div>
            </a>
            <a href="/todo" class="project content pseudo-hover">
                <img src="/resources/todo.png" alt="To Do List" loading="lazy" class="project-img">
                <h2>To-Do List</h2>
                <div class="project-description">
                    <ul role="list" class="project-list">
                        <li class="project-list-item">html</li>
                        <li class="project-list-item">css</li>
                        <li class="project-list-item">javascript</li>
                        <li class="project-list-item">database</li>
                    </ul>
                </div>
            </a>
            <a href="/clock" class="project content pseudo-hover">
                <img src="/resources/clock.png" alt="Clock" loading="lazy" class="project-img">
                <h2>Clock</h2>
                <div class="project-description">
                    <ul role="list" class="project-list">
                        <li class="project-list-item">html</li>
                        <li class="project-list-item">css</li>
                        <li class="project-list-item">javascript</li>
                    </ul>
                </div>
            </a>

        </section>
        <!-- Info -->
        <section id="info" class="info-list">

        </section>
    </main>
    <footer class="footer">
        <?php include 'includes/footer.php'; ?>
    </footer>
    <script src="js/loadImage.js"></script>
</body>

</html>