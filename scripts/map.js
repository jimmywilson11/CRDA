(function () {
        var setting = {"height":100,"width":750,"zoom":17,"queryString":"улица Юрия Ильенко, 60, Черкассы, Черкасская область, Украина","place_id":"ChIJSalt8aVL0UAR6zckMlkqLXU","satellite":false,"centerCoord":[49.42598826854489,32.094822100000016],"cid":"0x752d2a59322437eb","lang":"ru","cityUrl":"/ukraine/cherkasy-35348","id":"map-9cd199b9cc5410cd3b1ad21cab2e54d3","embed_id":"157017"};
        var d = document;
        var s = d.createElement('script');
        s.src = 'https://1map.com/js/script-for-user.js?embed_id=157017';
        s.async = true;
        s.onload = function (e) {
          window.OneMap.initMap(setting)
        };
        var to = d.getElementsByTagName('script')[0];
        to.parentNode.insertBefore(s, to);
      })();