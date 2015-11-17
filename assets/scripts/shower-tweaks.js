function cancelBodyKeydownBubble (event) {
    event.cancelBubble = 1;
}
function disableShower()
{
    document.body.removeEventListener('keydown', cancelBodyKeydownBubble);
    document.body.addEventListener('keydown', cancelBodyKeydownBubble);
    console.log('Shower keydown handler disabled.');
}
function enableShower()
{
    document.body.removeEventListener('keydown', cancelBodyKeydownBubble);
    console.log('Shower keydown handler enabled.');
}