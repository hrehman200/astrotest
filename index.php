<?php
//$output = `/Applications/XAMPP/xamppfiles/bin/php get_events.php`;
$output = '[{"_id":{"$oid":"5cf8d602bcf9a55c5c7ea729"},"name":"adam person 2","base_name":"adam person 2","inner_id":0,"type":"person","city_of_birth":"27-200 Starachowice, Poland","country_of_birth":"Poland","datetime_of_birth":{"$date":{"$numberLong":"879334200000"}},"timestamp":879337800,"lat":51.0368289,"lon":21.07097699999997,"sun_position_at_birth":230.11706943295454},{"_id":{"$oid":"5cf80b2cbcf9a55c5c7ea6f6"},"name":"GE","base_name":"GE","inner_id":0,"type":"company","city_of_birth":"Schenectady, NY, USA","country_of_birth":"United States","datetime_of_birth":{"$date":{"$numberLong":"-2452314840000"}},"timestamp":-2452332600,"lat":42.81424320000001,"lon":-73.9395687,"sun_position_at_birth":26.187371651954184},{"_id":{"$oid":"5cffa3a6fb06c720f80f602d"},"name":"Damian","base_name":"Damian","inner_id":0,"type":"Person","city_of_birth":"97616 Bad Neustadt an der Saale, Germany","country_of_birth":"Germany","datetime_of_birth":{"$date":{"$numberLong":"812130600000"}},"timestamp":812134200,"lat":50.3230337,"lon":10.202810699999986,"sun_position_at_birth":183.08669856637619},{"_id":{"$oid":"5cffa6ecfb06c720f80f6032"},"name":"Damian correct","base_name":"Damian correct","inner_id":0,"type":"Person","city_of_birth":"97616 Bad Neustadt an der Saale, Germany","country_of_birth":"Germany","datetime_of_birth":{"$date":{"$numberLong":"812134080000"}},"timestamp":812137680,"lat":50.3230337,"lon":10.202810699999986,"sun_position_at_birth":183.12620193589171}]';
$arr_events = json_decode($output);

?>
<html>

<head>
  <title>Astro Test</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous" />
  <script src="https://code.jquery.com/jquery-3.2.1.min.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAWKffgBmyQRYtQzakPirIS54_G6pdbME4&callback=initMap"></script>
  <style>
    /* Set the size of the div element that contains the map */
    #map {
      height: 400px;
      /* The height is 400 pixels */
      width: 100%;
      /* The width is the width of the web page */
    }
  </style>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <h3>Astro Test</h3>
        <select id="types">
        </select>
        <div id="map"></div>
      </div>
    </div>
  </div>
</body>

</html>

<script type="text/javascript">
  function onlyUnique(value, index, self) {
    return self.indexOf(value) === index;
  }

  var arrEvents = JSON.parse('<?= $output ?>');
  console.log(arrEvents);

  var arrTypes = arrEvents.map(function(item) {
    return item['type'];
  });
  arrTypes = arrTypes.filter(onlyUnique);

  for (var i in arrTypes) {
    $('#types').append('<option>' + arrTypes[i] + '</option>');
  }

  $('#arrTypes').on('change', function(e) {
    
  });
</script>