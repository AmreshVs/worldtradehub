<?php
  include './db/connect.php';
  header('Content-Type: text/html; charset=ISO-8859-1');

  function get_words($sentence, $count = 30) {
    preg_match("/(?:\w+(?:\W+|$)){0,$count}/", $sentence, $matches);
    return $matches[0];
  }

  $id = $_GET['id'];
  $result = getArray("SELECT event_title, event_desc, event_image, event_start_date, event_end_date, event_image from events WHERE event_status = 1 AND event_id = $id");
  $eventDetail = $result[0];
  $start_date = strtotime($eventDetail['event_start_date']);
  $end_date = strtotime($eventDetail['event_end_date']);

  $seo_desc = get_words(strip_tags($eventDetail['event_desc']));
  $title = $eventDetail['event_title'];
  $image = "https://admin.worldtradehub.in".$eventDetail['event_image'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="We offer an platform where wide range of Exhibitors and Visitors will be benefited.">
  <meta name="keywords" content="online expo, online trade, india's largest online expo, world's best online expo, wide range on visitors, wide range of exhibitors, join now">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="geo.position" content="12.8892238,77.6129051">
  <meta name="geo.placename" content="Royal Placid Layout, Harlur HSR Layout Phase 1">
  <meta name="geo.region" content="Bangalore">
  <meta name="robots" content="index, follow" />
  <meta property="og:title" content="<?php echo $title; ?>">
  <meta property="og:description" content="<?php echo $seo_desc; ?>">
  <meta property="og:image" content="<?php echo $image; ?>">
  <meta property="og:url" content="https://worldtradehub.in">
  <meta name="twitter:title" content="<?php echo $title; ?>">
  <meta name="twitter:description" content="<?php echo $seo_desc; ?>">
  <meta name="twitter:image" content="<?php echo $image; ?>">
  <meta name="twitter:card" content="summary_large_image">
  <meta property="og:site_name" content="World Trade Hub">
  <meta name="twitter:image:alt" content="<?php echo $title; ?>">
  <title><?php echo $title; ?></title>
  <link rel="icon" type="image/png" href="<?php echo $image; ?>" />
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="plugins/fontawesome/css/all.css">
  <link rel="stylesheet" href="plugins/animate-css/animate.css">
  <link rel="stylesheet" href="plugins/icofont/icofont.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body data-spy="scroll" data-target=".fixed-top">

<?php 
  include 'nav.php';
?>

<div class="eventDetail pad-top grad-2">
  <h2 class="event_title"><?php echo $title; ?></h2>
  <h5 class="event_date"><?php echo date("d/m/Y", $start_date) . ' - ' . date("d/m/Y", $end_date); ?></h5>
</div>
<div class="container pt-3">
  <div class="row">
    <div class="col-12 d-flex justify-content-center">
      <img class="event_img" src="<?php echo $image; ?>" alt="<?php echo $eventDetail['event_title']; ?>" >
    </div>
    <div class="col-12 pt-3 pb-5 eventDesc">
      <?php echo $eventDetail['event_desc']; ?>
      <div class="text-center mt-3">
        <a href="http://app.worldtradehub.in" class="smoth-scroll grad-1 ebutton">Exhibit / Visit</a>
      </div>
    </div>
  </div>
</div>
<a id="whatsapp" class="whatsapp-icon" href="https://api.whatsapp.com/send?text=<?php echo $title; ?>" target="_blank">
  <img class="share-img" width="25px" height="25px" src="/images/icon/social-01-512.webp" alt="Whatsapp">
</a>

<?php include 'footer.php' ?>