<?php
include './db/connect.php';

$events = getArray("SELECT event_id, event_title, event_start_date, event_end_date, event_image from events WHERE event_status = 1 ORDER BY event_id ASC");

?>
<section id="events" class="section-padding wow fadeInUp pb-0">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-7 text-center">
          <div class="mb-5">
            <h3 class="mb-2">India's First Largest Online Trade Show</h3>
            <p>List of events that are about to begin soon, be a part of it!</p>
          </div>
        </div>
      </div>
      <div class="row">
        <?php
          foreach($events as $event){
            $start_date = strtotime($event['event_start_date']);
            $end_date = strtotime($event['event_end_date']);
        ?>
            <div class="col-sm-6 mb-3 col-12 p-0">
              <div class="container">
                <a class="event card grad-2-still" href="/event-detail?id=<?php echo $event['event_id'] ?>">
                  <div class="row">
                    <div class="col-sm-4 col-5 pr-0">
                      <img class="event-img" src="<?php echo "https://admin.worldtradehub.in" . $event['event_image']; ?>" alt="<?php echo $event['event_title']; ?>" />
                    </div>
                    <div class="col-sm-8 col-7 pl-0">
                      <h5 class="event-title pr-3"><?php echo $event['event_title']; ?></h5>
                      <p class="text-muted event-dates"><?php echo date("d/m/Y", $start_date) . ' - ' . date("d/m/Y", $end_date); ?></p>
                    </div>
                  </div>
                </a>
              </div>
            </div>
        <?php
          }
        ?>
      </div>
      <div class="text-center mt-3">
        <a href="http://app.worldtradehub.in" class="smoth-scroll grad-1 ebutton">Exhibit / Visit</a>
      </div>
    </div>
  </section>
