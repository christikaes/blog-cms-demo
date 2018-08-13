<!DOCTYPE html>
    <head>
        <title>Blog CMS</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
        <header>
            <h1>Blog CMS</h1>
        </header>
        <nav>
            <a href="index.php">Home</a>
            <a href="post-submission.php">New Blog Post</a>
        </nav>
        <main>
            <h2>New Blog Post Submission</h2>
            <form class="post-submissions-form">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" placeholder="Title"></input>
                
                <label for="author">Author</label>
                <input type="text" id="author" name="author" placeholder="Author"></input>
                
                <label for="author">Date</label>
                <input type="date" id="date" name="date" placeholder="Date"></input>
                
                <label for="content">Content</label>
                <textarea name="content" id="content" placeholder="Content"></textarea>
                <button type="submit" value="Submit">Submit</input>
            </form>
        </main>
        <footer>
            Built using Apache, PHP, MySQL, JS, HTML, CSS by @christikaes
        </footer>
    </body>
</html>