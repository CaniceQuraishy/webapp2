<?php
$title = "Blog";
$page = "blog";
include("navbar.php");

$articles = [
    [
        'title' => 'The Impact of Cloud Computing on Modern Businesses',
        'content' => '
            Cloud computing has revolutionized the way businesses operate in the modern digital age. By offering scalable and flexible computing resources over the internet, cloud services have enabled companies to streamline their operations and reduce IT costs. Businesses can now quickly deploy applications, store vast amounts of data securely, and access advanced analytics tools without heavy upfront investments in hardware and infrastructure.

            Moreover, cloud computing has fostered innovation by providing a platform for developing and deploying new technologies rapidly. Startups and established enterprises alike leverage cloud services to experiment with AI, machine learning, and IoT solutions, driving competitive advantages and accelerating time-to-market for new products and services.
        ',
        'author' => 'Written by Canice Musa Quraishy'
    ],
    [
        'title' => 'The Role of AI in Shaping the Future of Healthcare',
        'content' => '
            Artificial Intelligence (AI) is transforming healthcare by enabling more accurate diagnosis, personalized treatment plans, and predictive analytics. AI algorithms analyze patient data, such as medical images and genomic information, to identify patterns and insights that human doctors might miss. This capability not only enhances clinical decision-making but also improves patient outcomes by tailoring therapies to individual needs.

            Furthermore, AI-powered healthcare systems automate routine tasks, such as administrative processes and patient monitoring, freeing up healthcare professionals to focus more on direct patient care. As AI continues to evolve, it holds the potential to address longstanding challenges in healthcare, including reducing medical errors, optimizing hospital operations, and democratizing access to specialized medical expertise.
        ',
        'author' => 'Written by Canice Musa Quraishy'
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="style.css">
    <style>
 section#blog {
            padding: 50px 20px;
            text-align: center;
        }
        h1 {
            font-size: 2.5em;
            color: #333;
            margin-bottom: 20px;
        }
        .article {
            display: none; /* Hide all articles initially */
            margin-bottom: 40px;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: left;
        }
        .article.active {
            display: block; /* Show only the active article */
        }
        .article h2 {
            color: #333;
            margin-bottom: 10px;
        }
        .article p {
            font-size: 1.2em;
            color: #555;
            line-height: 1.6;
        }
        .article .author {
            font-style: italic;
            color: #888;
            margin-top: 10px;
        }
        .controls {
            position: relative;
            margin-top: 20px;
        }
        .control {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 10px;
            border-radius: 50%;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
            z-index: 1;
        }
        .control.left {
            left: 10px;
        }
        .control.right {
            right: 10px;
        }
        .control:hover {
            background-color: rgba(255, 255, 255, 1);
        }
    </style>
</head>
<body>
    <section id="blog">
        <h1><?php echo $title; ?></h1>
        
        <?php foreach ($articles as $index => $article): ?>
        <div class="article <?php echo ($index === 0) ? 'active' : ''; ?>">
            <h2><?php echo $article['title']; ?></h2>
            <p><?php echo $article['content']; ?></p>
            <p class="author"><?php echo $article['author']; ?></p>
        </div>
        <?php endforeach; ?>

        <div class="controls">
            <div class="control left" onclick="prevArticle()">&#10094;</div>
            <div class="control right" onclick="nextArticle()">&#10095;</div>
        </div>
    </section>

    <script>
        let currentArticleIndex = 0;
        const articles = document.querySelectorAll('.article');

        function showArticle(index) {
            articles.forEach(article => article.classList.remove('active'));
            articles[index].classList.add('active');
        }

        function nextArticle() {
            currentArticleIndex++;
            if (currentArticleIndex >= articles.length) {
                currentArticleIndex = 0;
            }
            showArticle(currentArticleIndex);
        }

        function prevArticle() {
            currentArticleIndex--;
            if (currentArticleIndex < 0) {
                currentArticleIndex = articles.length - 1;
            }
            showArticle(currentArticleIndex);
        }
    </script>
</body>
</html>
