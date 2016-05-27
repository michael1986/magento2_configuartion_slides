<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <pre class="code fs-65">
        <?php echo code('php', '
$users = [
    [\'first_name\' => \'Max\', \'last_name\' => \'Gopey\', \'company\' => \'CGI\'],
    [\'first_name\' => \'Bob\', \'last_name\' => \'Doe\', \'company\' => \'Google\'],
    [\'first_name\' => \'Alice\', \'last_name\' => \'Doe\', \'company\' => \'Google\'],
];

print_r(getBobsAndAlicesWithD($users));
        ', false) ?>
        </pre>
        <pre class="real-pre fs-65">
Array
(
    [bobs] => Array (
        [0] => Doe, Bob
    )
    [alices] => Array (
        [0] => Doe, Alice
    )
)
        </pre>
    </div>
</section>