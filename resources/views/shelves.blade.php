<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shelves — Archive of Growth</title>
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
            padding: 50px 24px;
        }

        a {
            color: #292621;
            text-decoration: none;
        }

        .back {
            display: inline-block;
            margin-bottom: 50px;
            color: #777;
        }

        h1 {
            font-family: Georgia, serif;
            font-size: 52px;
            margin-bottom: 12px;
        }

        .intro {
            color: #6f6a63;
            font-size: 19px;
            max-width: 650px;
            line-height: 1.6;
            margin-bottom: 50px;
        }

        .shelves {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .shelf {
            background: white;
            padding: 30px;
            border: 1px solid #ddd8cf;
            border-radius: 12px;
        }

        .number {
            color: #999;
            font-size: 13px;
            letter-spacing: 2px;
        }

        h2 {
            font-family: Georgia, serif;
            font-size: 30px;
            margin: 12px 0;
        }

        .shelf p {
            color: #706b64;
            line-height: 1.6;
        }

        @media (max-width: 700px) {
            .shelves {
                grid-template-columns: 1fr;
            }

            h1 {
                font-size: 42px;
            }
        }
    </style>
</head>
<body>
    <div class="container">

        <a href="/" class="back">← Archive of Growth</a>

        <main>
            <h1>Shelves</h1>

            <p class="intro">
                Every shelf represents a broad area of the journey.
                Each one contains experiences, projects, and stories
                that contribute to growth.
            </p>

            <section class="shelves">
                @foreach ($shelves as $index => $shelf)
                    <article class="shelf">
                        <div class="number">
                            SHELF {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                        </div>

                        <h2>{{ $shelf['name'] }}</h2>

                        <p>{{ $shelf['description'] }}</p>
                    </article>
                @endforeach
            </section>
        </main>

    </div>
</body>
</html>
