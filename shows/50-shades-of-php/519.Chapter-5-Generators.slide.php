<section class="slide full-page" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <div class="small">
            <?=code('php', '
function hello() {
     yield "Hello";
     yield "World!";
     yield from goodbye();
     return "Whew!";
}
function goodbye() {
     yield "Goodbye";
     yield "Moon!";
}
$gen = hello();
foreach ($gen as $value) {
     echo $value, \' \'; // Hello World! Goodbye Moon!
}
echo $gen->getReturn(); // Whew!
            ') ?>
        </div>
    </div>
</section>