<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <pre class="code fs-65">
        <?php echo code('php', '
$getBobsAndAlicesWithD = function ($users)
    use ($startsWithD, $getFullNameFromUser, $putToCorrectStack) {
    return f\pipe(
        $users,
        f\partial(a\map, $getFullNameFromUser),
        f\partial(a\filter, $startsWithD),
        f\ppartial(a\reduce, [
            0 => $putToCorrectStack,
            2 => [\'bobs\' => [], \'alices\' => []]
        ])
    );
};

print_r($getBobsAndAlicesWithD($users));
        ', false) ?>
        </pre>
    </div>
</section>