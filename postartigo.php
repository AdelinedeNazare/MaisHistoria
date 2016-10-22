<?php
include_once 'connection.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
    <?php
    include_once 'tiny.php';
    ?>
    <body>
        <header>
            <?php
            include_once 'login.php';
            include_once 'menu.php';
            ?>
        </header>
        <div class="container conteudo">
            <?php
            include_once 'carrosel.php';
            
            ?>
            <div class="row destaque">
                <h2 style="color:#005858;">Escreva seu artigo:</h2>
                <hr>  
                <?php
                include_once 'tiny.php';
                ?>
                <textarea>
                <h1 style="text-align: center;">Welcome to the TinyMCE editor demo!</h1>
  <p>Please try out the features provided in this example. Check out the next paragraph's HTML. You'll see html tags not rendered in the editor's WYSIWYG output. Next, play with the Codepen JS to see what you can change in the editor.</p>
  <p>Note that any <strong>MoxieManager</strong> file and image management <em>functionality</em> in this example is part of our commercial offering – the demo is to show the integration.</h2>

  <h2>Got questions or need help?</h2>
  <ul>
    <li>Our <a href="//www.tinymce.com/docs/">documentation</a> is a great resource for learning how to configure TinyMCE.</li>
    <li>Have a specific question? Visit the <a href="http://community.tinymce.com/forum/">Community Forum</a>.</li>
    <li>We also offer enterprise grade support as part of <a href="www.tinymce.com/pricing">TinyMCE Enterprise</a>.</li>
  </ul>

  <p>If you think you have found a bug please create an issue on the <a href="https://github.com/tinymce/tinymce/issues">GitHub repo</a> to report it to the developers.</p>

  <h2>Finally ...</h2>
  <p>Don't forget to check out our other product <a href="http://www.plupload.com" target="_blank">Plupload</a>, your ultimate upload solution featuring HTML5 upload support.</p>
  <p>Thanks for supporting TinyMCE! We hope it helps you and your users create great content.<br>All the best from the TinyMCE team.</p>
</textarea>
                        <?php
                        include_once 'footer.php';
                        ?>     
            </div>
        </div>
    </body>
</html>
