<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archive of Growth</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f5f3ee;
            color: #292621;
        }

        .container {
            max-width: 1000px;
            margin: auto;
            padding: 40px 24px;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 80px;
        }

        .logo {
            font-weight: bold;
            font-size: 20px;
        }

        nav {
            color: #777;
        }

        .hero {
            max-width: 760px;
            margin-bottom: 80px;
        }

        .label {
            text-transform: uppercase;
            letter-spacing: 3px;
            font-size: 12px;
            color: #8a8175;
        }

        h1 {
            font-family: Georgia, serif;
            font-size: 64px;
            line-height: 1;
            margin: 18px 0;
        }

        .subtitle {
            font-size: 22px;
            color: #6f6a63;
            line-height: 1.5;
        }

        .archive {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .card {
            background: white;
            padding: 28px;
            border: 1px solid #ddd8cf;
            border-radius: 12px;
        }

        .card h2 {
            font-family: Georgia, serif;
            margin-top: 0;
        }

        .card p {
            color: #706b64;
            line-height: 1.6;
        }

        footer {
            margin-top: 80px;
            padding-top: 20px;
            border-top: 1px solid #ddd8cf;
            color: #888;
        }

        @media (max-width: 700px) {
            h1 {
                font-size: 44px;
            }

            .archive {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <div class="logo">Archive of Growth</div>
            <nav>Interactive Learning Journey</nav>
        </header>

        <main>
            <section class="hero">
                <div class="label">My Learning Archive</div>

                <h1>A place to remember how I grew.</h1>

                <p class="subtitle">
                    An interactive digital archive for documenting
                    experiences, projects, challenges, and lessons
                    throughout a learning journey.
                </p>
            </section>

            <section class="archive">
                <div class="card">
                    <h2>Shelf</h2>
                    <p>
                        A broad area of the journey, such as Academic,
                        Projects, Organization, and Research.
                    </p>
                </div>

                <div class="card">
                    <h2>Book</h2>
                    <p>
                        A specific experience or journey collected
                        inside a shelf.
                    </p>
                </div>

                <div class="card">
                    <h2>Journey</h2>
                    <p>
                        A story of progress, challenges, experiences,
                        and lessons learned.
                    </p>
                </div>
            </section>
        </main>

        <footer>
            Archive of Growth · Built as a learning journey
        </footer>
    </div>
</body>
</html>
