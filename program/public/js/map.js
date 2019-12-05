var section2 = window.location.href;
if (section2.indexOf('dostavka') != -1) {

}else {
    function initMap() {
        var uluru = {lat: 50.25465, lng: 28.6586669};
        var locations = [
            ['', 50.25465, 28.6586669, 4],
            ['', 50.26011403, 28.67418783, 5],
            ['', 50.26775232, 28.6337064, 3],
            ['', 50.27872855, 28.64018482, 3],
            ['', 50.2727446, 28.653490374, 3]
        ];
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 12,
            center: uluru
        });
        var contentString = 'zxczxczxcasdasdfdscxv';
        var infowindow = new google.maps.InfoWindow({
            content: "",
            pixelOffset: new google.maps.Size(300, 129),
        });
        var marker, i;

        for (i = 0; i < locations.length; i++) {
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map
            });

            google.maps.event.addListener(marker, 'click', (function (marker, i) {
                return function () {
                    infowindow.setContent(locations[i][0]);
                    infowindow.open(map, marker);
                }
            })(marker, i));
        }
        google.maps.event.addListener(infowindow, 'domready', function () {

            // Reference to the DIV that wraps the bottom of infowindow
            var iwOuter = $('.gm-style-iw');

            /* Since this div is in a position prior to .gm-div style-iw.
             * We use jQuery and create a iwBackground variable,
             * and took advantage of the existing reference .gm-style-iw for the previous div with .prev().
            */
            var iwBackground = iwOuter.prev();

            // Removes background shadow DIV
            iwBackground.children(':nth-child(2)').css({'display': 'none'});

            // Removes white background DIV
            iwBackground.children(':nth-child(4)').css({'display': 'none'});
            //arrow
            iwBackground.children(':nth-child(3)').css({'display': 'none'});

            iwBackground.children(':nth-child(1)').css({'display': 'none'});
            // Moves the infowindow 115px to the right.

            // Moves the shadow of the arrow 76px to the left margin.

            // Changes the desired tail shadow color.
            iwBackground.children(':nth-child(3)').find('div').children().css({
                'box-shadow': 'rgba(72, 181, 233, 0.6) 0px 1px 6px',
                'z-index': '1'
            });

            // Reference to the div that groups the close button elements.
            var iwCloseBtn = iwOuter.next();

            // Apply the desired effect to the close button
            iwCloseBtn.css({'display': 'none'});

            // If the content of infowindow not exceed the set maximum height, then the gradient is removed.
            if ($('.iw-content').height() < 140) {
                $('.iw-bottom-gradient').css({display: 'none'});
            }

            // The API automatically applies 0.7 opacity to the button after the mouseout event. This function reverses this event to the desired value.
            iwCloseBtn.mouseout(function () {
                $(this).css({opacity: '1'});
            });
        });
    }
}
$(function() {
    $(".buttonSubMain").click(function() {
        var keyword = $("#searcFile").val();
        if(keyword=='') {
        } else {
            $.ajax({
                type: "post",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: 'http://127.0.0.1:8000/',
                data: {
                    'keyword': keyword
        },
            dataType: 'html',
                cache: false,
                beforeSend: function(html)
            {
                $("#flash").html('Loading Results');
            },
            success: function(data)
            {
                var resAjax = "";
                $(".delHeader").html("Посилка №" + keyword);
                $(".resultAjax").html(data);
                $("#flash").hide();
            },
            error: function (data) {
                alert ("errore");
            }
        });
        } return false;
    });
});