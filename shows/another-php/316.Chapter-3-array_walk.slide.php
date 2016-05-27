<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <pre class="code fs-65">
        <?php echo code('php', '
$users = [
    [\'first_name\' => \'Max\', \'last_name\' => \'Gopey\', \'company\' => \'CGI\'],
    [\'first_name\' => \'Bob\', \'last_name\' => \'Doe\', \'company\' => \'Google\'],
    [\'first_name\' => \'Alice\', \'last_name\' => \'Doe\', \'company\' => \'Google\'],
];
array_walk($users, function(&$user, $index) {
    unset($user[\'last_name\'], $user[\'company\']);
    $user[\'first_name\'] .= \' ❤\';
});
print_r($users);
        ', false) ?>
        </pre>
        <pre class="code fs-65">
        <?php echo code('php', '
Array (
    [0] => Array (
        [first_name] => Max ❤
    )
    [1] => Array (
        [first_name] => Bob ❤
    )
    [2] => Array(
        [first_name] => Alice ❤
    )
)
        ', false) ?>
        </pre>
    </div>
</section>