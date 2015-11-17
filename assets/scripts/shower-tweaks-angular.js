window.addEventListener('load', function() {
    var slides = document.querySelectorAll('.slide');

    angular.forEach(slides, function(slide) {
        var inputs = slide.querySelectorAll('input, textarea, button, select');
        var firstInput = (inputs && inputs.length) ? inputs[0] : null;
        var lastInput = (inputs && inputs.length) ? inputs[inputs.length - 1] : null;
        angular.forEach(inputs, function(input) {
            input.addEventListener('focus', disableShower);
            input.addEventListener('blur', enableShower);
            input.addEventListener('keydown', function(event) {
                if (event.keyCode == 27 /* Esc */) {
                    event.cancelBubble = 1;
                    event.target.blur();
                }
                if (event.keyCode == 9 /* Tab */) {
                    if (input == lastInput) {
                        event.cancelBubble = 1;
                        event.preventDefault();
                        event.target.blur();
                        return false;
                    }
                    if (event.shiftKey && input == firstInput) {
                        event.cancelBubble = 1;
                        event.preventDefault();
                        event.target.blur();
                        return false;
                    }
                }
            });
        });
    });
});
