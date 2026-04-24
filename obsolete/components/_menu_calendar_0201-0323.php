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
.calendar ul, .calendar ol {
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
.calendar ol.day-grid li {
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

.calendar ol.day-grid li.month-next,
.calendar ol.day-grid li.month-prev {
  background-color: #fff;
}
@media all and (max-width: 800px) {
  .calendar ul, .calendar ol {
    grid-gap: 0.25em;
  }
}

.calendar-wrapper {
  max-width: 600px;
}
</style>

<?php
$menus = get_field('menus'); 
$menu1 = $menus[0]['attach_menu'];
$menu2 = $menus[1]['attach_menu'];
$menu3 = $menus[2]['attach_menu'];
$menu4 = $menus[3]['attach_menu'];
$menu5 = $menus[4]['attach_menu'];
$menu6 = $menus[5]['attach_menu'];
$menu7 = $menus[6]['attach_menu'];
$menu8 = $menus[7]['attach_menu'];
?>
<div class="tab-content">
<ul class="nav nav-tabs" role="tablist">
    <li role="presentation"><a href="#march23" aria-controls="March 2023" role="tab" data-toggle="tab">March</a></li>
  </ul>


<div class="calendar-wrapper tab-pane fade in active" role="tabpanel" id="march23">
  <!-- March 2023 -->

  <div class="calendar march">
    <header>
      <h1>March</h1>
    </header>

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
    <li class="month-prev"><a href="<?php echo $menu6 ?>">26</a></li>
      <li class="month-prev"><a href="<?php echo $menu7 ?>">27</a></li>
      <li class="month-prev"><a href="<?php echo $menu8 ?>">28</a></li>
      <li><a href="<?php echo $menu1 ?>">1</a></li>
      <li><a href="<?php echo $menu2 ?>">2</a></li>
      <li><a href="<?php echo $menu3 ?>">3</a></li>
      <li><a href="<?php echo $menu4 ?>">4</a></li>
      <li><a href="<?php echo $menu5 ?>">5</a></li>
      <li><a href="<?php echo $menu6 ?>">6</a></li>
      <li><a href="<?php echo $menu7 ?>">7</a></li>
      <li><a href="<?php echo $menu8 ?>">8</a></li>
      <li><a href="<?php echo $menu1 ?>">9</a></li>
      <li><a href="<?php echo $menu2 ?>">10</a></li>
      <li><a href="<?php echo $menu3 ?>">11</a></li>
      <li><a href="<?php echo $menu4 ?>">12</a></li>
      <li><a href="<?php echo $menu5 ?>">13</a></li>
      <li><a href="<?php echo $menu6 ?>">14</a></li>
      <li><a href="<?php echo $menu7 ?>">15</a></li>
      <li><a href="<?php echo $menu8 ?>">16</a></li>
      <li><a href="<?php echo $menu1 ?>">17</a></li>
      <li><a href="<?php echo $menu2 ?>">18</a></li>
      <li><a href="<?php echo $menu3 ?>">19</a></li>
      <li><a href="<?php echo $menu4 ?>">20</a></li>
      <li><a href="<?php echo $menu5 ?>">21</a></li>
      <li><a href="<?php echo $menu6 ?>">22</a></li>
      <li><a href="<?php echo $menu7 ?>">23</a></li>
      <li><a href="<?php echo $menu8 ?>">24</a></li>
      <li><a href="<?php echo $menu1 ?>">25</a></li>
      <li><a href="<?php echo $menu2 ?>">26</a></li>
      <li><a href="<?php echo $menu3 ?>">27</a></li>
      <li><a href="<?php echo $menu4 ?>">28</a></li>
      <li><a href="<?php echo $menu5 ?>">29</a></li>
      <li><a href="<?php echo $menu6 ?>">30</a></li>
      <li><a href="<?php echo $menu7 ?>">31</a></li>
      <li class="month-next"><a href="<?php echo $menu8 ?>">1</a></li>
    </ol>

  </div>
</div>
</div>
