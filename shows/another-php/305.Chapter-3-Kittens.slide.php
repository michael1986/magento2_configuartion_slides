<?php
$slideId = getSlideId(__FILE__);
?><section class="slide" id="<?= $slideId ?>">
    <div>
        <div id="kitten"></div>
        <script>
            (function() {
                // Load the IFrame Player API code asynchronously.
                var tag = document.createElement('script');
                tag.src = "https://www.youtube.com/player_api";
                var firstScriptTag = document.getElementsByTagName('script')[0];
                firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

                var player;

                window.onYouTubePlayerAPIReady = function() {
                    player = new YT.Player('kitten', {
                        //height: '390',
                        width: '800',
                        videoId: 'Ofge6a3gGis',
                        events: {
//                            onReady: onPlayerReady
                        },
                        playerVars: {
                            controls: 0,
                            showinfo: 0,
                            rel: 0,
                            iv_load_policy: 3
                        },
                        startSeconds: 24,
                        endSeconds: 60
                    });
                    var timer = setInterval(function() {
                        if (document.getElementById("<?php echo $slideId ?>").className.indexOf('active') != -1) {
                            startPlaying(player);
                            clearInterval(timer);
                        }
                    }, 500);
                };

                function runPlayer() {
                    function onPlayerReady(event) {
                        startPlaying(event.target);
                    }
                }
                function startPlaying(player) {
                    player.setVolume(0);
                    player.seekTo(24);
                    player.playVideo();
                }
            })();
        </script>
    </div>
</section>