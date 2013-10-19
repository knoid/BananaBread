  $(function() {
    var $bandTemplate = $("#template-band").html(),
        $tags = $("#tags");
    if(navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(function(position) {
        var data = {
          lat: position.coords.latitude,
          lng:position.coords.longitude
        };
        if($("#tags").val()) {
          data.tags=$("#tags").val();
        }
        var $bList = $(".left-bands");
        $.ajax({
          url: 'events/get_band_near',
          data: data,
          dataType: "json",
          success: function(data) {
            success(data, $bList);
          }
        });

      }, function() {
        var $bList = $(".left-bands");
        var data = {};
        if($("#tags").val()) {
          data.tags = $("#tags").val();
        }
        $.ajax({
          url: 'events/get_band_near',
          data: data,
          dataType: "json",
          success: function(data) {
            success(data, $bList);
          }
        });
      });
    }

    var $rList = $(".right-bands");
    $.ajax({
      url: 'events/get_band_near',
      dataType: "json",
      success: function(data) {
        success(data, $rList);
      }
    });



    function success(data, $dom) {
      $dom.find(".loading").hide();
      $.each(data, function(i, v) {
        var template = $bandTemplate
                          .replace(/%%IMG%%/, v.img)
                          .replace(/%%URL%%/, v.url)
                          .replace(/%%NAME%%/, v.name)
                          .replace(/%%DESC%%/, v.desc)
                          .replace(/%%DAY%%/, v.day);
      $dom.append(template);
      });
    }
});