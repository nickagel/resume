<?php 
    include "./bin/top.php"; 
    include "./bin/nav.php"; 
?>
<article id="about" class="parent">
    <article class="child">
        <?php include "./content/about.php"; ?>
    </article>
</article>
<article id="skills" class="parent">
    <article class="child">
        <?php include "./content/skills.php"; ?>
    </article>
</article>
<article id="career" class="parent">
    <article class="child">
<?php include "./content/career.php"; ?>
    </article>
</article>
<article id="portfolio" class="parent">
    <arcticle class="child">
        <?php include "./content/portfolio.php"; ?>
    </article>
</article>
<article id="contact" class="parent">
    <article class="child">
        <?php include "./content/contact.php"; ?>
    </article>
</article>
<?php include "./bin/footer.php"; ?>