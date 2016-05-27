<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <pre class="code fs-80">
        <?php echo code('php', '
$users = [
    [\'id\' => 123, \'first_name\' => \'Max\', \'last_name\' => \'Gopey\'],
    [\'id\' => 456, \'first_name\' => \'Bob\', \'last_name\' => \'Doe\'],
    [\'id\' => 789, \'first_name\' => \'Alice\', \'last_name\' => \'Doe\'],
];
$index = array_search(\'Alice Doe\', array_map(function($user) {
    return $user[\'first_name\'] . \' \' . $user[\'last_name\'];
}, $users));
print_r($index);
        ', false) ?>
        </pre>
        <pre class="code fs-80">
        <?php echo code('php', '
2
        ', false) ?>
        </pre>
    </div>
</section>