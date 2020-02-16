$(document).ready(function() {
    (function () {
        var setting = {"height":600,"width":800,"zoom":17,"queryString":"бульвар Шевченка, 185, Черкаси, Черкасская область, Украина, 18000","place_id":"ChIJOWg4gX1L0UARfuAWeyA3jfI","satellite":false,"centerCoord":[49.44511511855742,32.06061759999998],"cid":"0xf28d37207b16e07e","lang":"ru","cityUrl":"/ukraine/cherkasy-35348","cityAnchorText":"Карта [CITY1], Черкассы, Украина","id":"map-9cd199b9cc5410cd3b1ad21cab2e54d3","embed_id":"160777"};
        var d = document;
        var s = d.createElement('script');
        s.src = 'https://1map.com/js/script-for-user.js?embed_id=160777';
        s.async = true;
        s.onload = function (e) {
          window.OneMap.initMap(setting)
        };
        var to = d.getElementsByTagName('script')[0];
        to.parentNode.insertBefore(s, to);
      })();

    var text = document.getElementById('comment'),
    count = document.getElementById('current');
    text.onkeyup = function () {
        var max = this.maxLength;
        count.innerHTML = max - this.value.length;
    };		
})