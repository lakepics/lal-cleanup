 <?php
/* menu for Dec 25 - Mar 26 */
?>

<style>
  .calendar header {
    display: flex;
    align-items: center;
    font-size: calc(16px + (26 - 16) * ((100% - 300px) / (1600 - 300)));
    justify-content: center;
    color: #000;
    text-align: center;
  }

  .calendar header h1 {
    margin-top: 20px;
    margin-bottom: 20px;
  }

  .calendar ul,
  .calendar ol {
    display: grid;
    grid-template-columns: repeat(7, 1fr);
    grid-gap: 1em;
    margin: 0 auto;
    max-width: 64em;
    padding: 0;
  }

  .calendar li {
    display: flex;
    align-items: center;
    justify-content: center;
    list-style: none;
    margin-left: 0;
    font-size: calc(16px + (21 - 16) * ((100% - 300px) / (1600 - 300)));
  }

  .calendar li a {
    text-decoration: none;
    font-weight: bold;
    color: #6a4426;
  }

  .calendar li a:hover {
    color: green;
  }

  .calendar ul.weekdays {
    margin-bottom: 1em;
  }

  .calendar ul.weekdays li {
    height: 50px;
  }

.day-grid li {
    background-color: rgba(245, 182, 43, .25);
    border: 1px solid #eaeaea;
    height: 50px;
    max-height: 125px;
  }

  .calendar ul.weekdays abbr[title] {
    border: none;
    font-weight: 800;
    text-decoration: none;
  }

.day-grid li.month-prev, .day-grid li.month-next {
    background-color: #fff;
  }

  @media all and (max-width: 800px) {

    .calendar ul,
    .calendar ol {
      grid-gap: 0.25em;
    }
  }

  .calendar-wrapper {
    max-width: 600px;
  }
</style>

<?php
$menus = get_field('menus');
$total_months_to_display = get_field('total_months_to_display');
$menu1 = $menus[0]['attach_menu'];
$menu2 = $menus[1]['attach_menu'];
$menu3 = $menus[2]['attach_menu'];
$menu4 = $menus[3]['attach_menu'];
if(isset($menus[4])){
  $menu5 = $menus[4]['attach_menu'];
}
$tz = new DateTimeZone('America/Los_Angeles');
$current = new DateTime('now', $tz);
$current_month = $current->format('F');
$current_month_year = $current->format('F Y');
$current_month_int = (int) $current->format('n');

$year = date('Y');
$month = (int) date('n');

$date = new DateTime("$year-$month-01");
$days = (int) $date->format('t');
$menus = [
    $menu3,
    $menu4,
    $menu1,
    $menu2,
];
?>
<div class="tab-content">
  <ul class="nav nav-tabs" role="tablist">
    <?php 
      $month_itteration = 0;
      while($total_months_to_display > $month_itteration){
        $active = '';
        if($month_itteration==0){
          $active = 'active';
        }
        $this_month = new DateTime('first day of this month', $tz);
        $this_month->modify('+'.$month_itteration.' month');
        $this_month_name = $this_month->format('F');
        $this_month_name_year = $this_month->format('F Y');
        echo '<li role="presentation" class="'.$active.'"><a href="#'.$this_month_name.'" aria-controls="'.$this_month_name.' '.$year.'" role="tab" data-toggle="tab">'.$this_month_name.'</a></li>';
        $month_itteration++;
        $current_month_int++;
      }
    ?>
  </ul>
  <?php
    $current = new DateTime('now', $tz);
    $current_month = $current->format('F');
    $current_month_year = $current->format('F Y');
    $current_month_int = (int) $current->format('n');
      $month_itteration = 0;
      while($total_months_to_display > $month_itteration){
        $days_displayed = 0;
        $active = '';
        if($month_itteration==0){
          $active = 'active';
        }
        $this_month = new DateTime('first day of this month', $tz);
        $this_month->modify('+'.$month_itteration.' month');
        $this_month_name = $this_month->format('F');
        $this_month_name_year = $this_month->format('F Y');
        $this_month_total_days = (int) $this_month->format('t');

        ?>  
  <div class="calendar-wrapper tab-pane fade in <?php echo $active ?>" role="tabpanel" id="<?php echo $this_month_name ?>">
    <div class="calendar january">
      <header>
        <h1><?php echo $this_month_name_year ?></h1>
      </header>

<?php
  // $date is already set to the first day of the month for this iteration:
  // $date = new DateTime("$year-$month-01"); $date->modify('+'.$month_itteration.' month');

  // weekday index for the 1st of this month: 0=Sunday .. 6=Saturday
  $firstWeekdayIndex = (int) $this_month->format('w');
  //$firstWeekdayIndex=$firstWeekdayIndex+1;
  // canonical weekday labels (adjust if you want Mon-first calendar instead)
  $weekdays = ['Sun','Mon','Tues','Wed','Thurs','Fri','Sat'];

  // rotate so the header starts at the weekday of day 1
  $rotatedWeekdays = array_merge(
      array_slice($weekdays, $firstWeekdayIndex),
      array_slice($weekdays, 0, $firstWeekdayIndex)
  );
  if($firstWeekdayIndex==7){
    $firstWeekdayIndex=0;
  }
?>
      <ul class="weekdays">
        <li>
          <abbr title="S">Sun</abbr>
        </li>
        <li>
          <abbr title="M">Mon</abbr>
        </li>
        <li>
          <abbr title="T">Tues</abbr>
        </li>
        <li>
          <abbr title="W">Wed</abbr>
        </li>
        <li>
          <abbr title="T">Thurs</abbr>
        </li>
        <li>
          <abbr title="F">Fri</abbr>
        </li>
        <li>
          <abbr title="S">Sat</abbr>
        </li>
      </ul>
      <ol class="day-grid">
        <?php
          $skip_days = (int) $firstWeekdayIndex;

          for ($i = 0; $i < $skip_days; $i++) {
              echo '<li style="background-color:#fff;border-color:#fff">&nbsp;</li>';
          }
        ?>
        <?php

          $daysInMonth = (int) $this_month->format('t');
          $year  = (int) $this_month->format('Y');
          $month = (int) $this_month->format('n');

          for ($day = 1; $day <= $daysInMonth; $day++) {
              $menuIndex = ($day - 1) % count($menus);
              $menuUrl   = $menus[$menuIndex];
              echo '<li><a dateattr="'.$current_month_int.'/'.$day.'/'.$year.'" href="' . htmlspecialchars($menuUrl) . '">' . $day . '</a></li>';
          }
        ?>
      </ol>
    </div>
  </div>
  <?php 
      $month_itteration++;
      $current_month_int++;
    } 
  ?>
</div>