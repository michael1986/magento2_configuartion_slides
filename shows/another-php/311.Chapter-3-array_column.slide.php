<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <pre class="code fs-80">
        <?php echo code('php', '
$users = [
    [\'id\' => 123, \'first_name\' => \'Max\', \'last_name\' => \'Gopey\'],
    [\'id\' => 456, \'first_name\' => \'Bob\', \'last_name\' => \'Doe\'],
    [\'id\' => 789, \'first_name\' => \'Alice\', \'last_name\' => \'Doe\'],
];
$lastNames = array_column($users, \'last_name\', \'id\');
print_r($lastNames);
        ', false) ?>
        </pre>
        <pre class="code fs-80">
        <?php echo code('php', '
Array
(
    [123] => Max
    [456] => Bob
    [789] => Alice
)
        ', false) ?>
        </pre>
    </div>
</section>