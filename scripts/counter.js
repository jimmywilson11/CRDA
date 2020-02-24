$(document).ready(function() {
    var text = document.getElementById('comment'),
        count = document.getElementById('current');
        text.onkeyup = function () {
    var max = this.maxLength;
        count.innerHTML = max - this.value.length;
    };
});