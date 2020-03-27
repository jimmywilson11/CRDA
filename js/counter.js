jQuery(document).ready(function ($) {
    var text = document.getElementById('comment'),
        count = document.getElementById('current');
    text.onkeyup = function () {
        var max = this.maxLength;
        count.innerHTML = max - this.value.length;
    };
});

jQuery(document).ready(function ($) {
    var text = document.getElementById('comment-2'),
        count = document.getElementById('current-2');
    text.onkeyup = function () {
        var max = this.maxLength;
        count.innerHTML = max - this.value.length;
    };
});

jQuery(document).ready(function ($) {
    var text = document.getElementById('comment-3'),
        count = document.getElementById('current-3');
    text.onkeyup = function () {
        var max = this.maxLength;
        count.innerHTML = max - this.value.length;
    };
});