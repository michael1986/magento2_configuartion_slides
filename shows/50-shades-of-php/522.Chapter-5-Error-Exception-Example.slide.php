<section class="slide full-page" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <div class="small">
            <?=code('php', '
try {
    nonExistentFunction();
} catch (\Exception $e) {
     echo \'Exception: \'; var_dump($e);
} catch (\Error $e) {
     echo \'Error: \'; var_dump($e);
}
            ') ?>
        </div>
        <pre class="real-pre small">
Error: object(Error)#1 (7) {
  ["message":protected]=>
  string(48) "Call to undefined function nonExistentFunction()"
  ["string":"Error":private]=>
  string(0) ""
  ["code":protected]=>
  int(0)
  ...
}
        </pre>
    </div>
</section>