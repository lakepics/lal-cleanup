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
    <li role="presentation" class="active"><a href="#december22" aria-controls="December 2022" role="tab" data-toggle="tab">December</a></li>
    <li role="presentation"><a href="#january23" aria-controls="January 2023" role="tab" data-toggle="tab">January</a></li>
    <li role="presentation"><a href="#february23" aria-controls="February 2023" role="tab" data-toggle="tab">February</a></li>
    <li role="presentation"><a href="#march23" aria-controls="March 2023" role="tab" data-toggle="tab">March</a></li>
  </ul>

<div class="calendar-wrapper tab-pane fade in active" role="tabpanel" id="december22">

  <!-- DECEMBER 2022 -->

  <div class="calendar december">
    <header>
      <h1>December</h1>
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
      <li class="month-prev"><a href="https://lakearrowheadlodge.com/wp-content/uploads/2022/09/ucla-lake-arrowhead-lodge-conference-menu-3-mountain-homestyle.pdf">27</a></li>
      <li class="month-prev"><a href="https://lakearrowheadlodge.com/wp-content/uploads/2022/09/ucla-lake-arrowhead-lodge-conference-menu-4-mountains-of-spain.pdf">28</a></li>
      <li class="month-prev"><a href="https://lakearrowheadlodge.com/wp-content/uploads/2022/09/ucla-lake-arrowhead-lodge-conference-menu-5-italian-alps.pdf">29</a></li>
      <li class="month-prev"><a href="https://lakearrowheadlodge.com/wp-content/uploads/2022/11/ucla-lake-arrowhead-lodge-conference-menu-6-andes.pdf">30</a></li>
      <li><a href="https://lakearrowheadlodge.com/wp-content/uploads/2022/09/ucla-lake-arrowhead-lodge-conference-menu-7-mediterranean.pdf">1</a></li>
      <li><a href="https://lakearrowheadlodge.com/wp-content/uploads/2022/09/ucla-lake-arrowhead-lodge-conference-menu-8-swiss-alps.pdf">2</a></li>
      <li><a href="<?php echo $menu1 ?>">3</a></li>
      <li><a href="<?php echo $menu2 ?>">4</a></li>
      <li><a href="<?php echo $menu3 ?>">5</a></li>
      <li><a href="<?php echo $menu4 ?>">6</a></li>
      <li><a href="<?php echo $menu5 ?>">7</a></li>
      <li><a href="<?php echo $menu6 ?>">8</a></li>
      <li><a href="<?php echo $menu7 ?>">9</a></li>
      <li><a href="<?php echo $menu8 ?>">10</a></li>
      <li><a href="<?php echo $menu1 ?>">11</a></li>
      <li><a href="<?php echo $menu2 ?>">12</a></li>
      <li><a href="<?php echo $menu3 ?>">13</a></li>
      <li><a href="<?php echo $menu4 ?>">14</a></li>
      <li><a href="<?php echo $menu5 ?>">15</a></li>
      <li><a href="<?php echo $menu6 ?>">16</a></li>
      <li><a href="<?php echo $menu7 ?>">17</a></li>
      <li><a href="<?php echo $menu8 ?>">18</a></li>
      <li><a href="<?php echo $menu1 ?>">19</a></li>
      <li><a href="<?php echo $menu2 ?>">20</a></li>
      <li><a href="<?php echo $menu3 ?>">21</a></li>
      <li><a href="<?php echo $menu4 ?>">22</a></li>
      <li><a href="<?php echo $menu5 ?>">23</a></li>
      <li><a href="<?php echo $menu6 ?>">24</a></li>
      <li><a href="<?php echo $menu7 ?>">25</a></li>
      <li><a href="<?php echo $menu8 ?>">26</a></li>
      <li><a href="<?php echo $menu1 ?>">27</a></li>
      <li><a href="<?php echo $menu2 ?>">28</a></li>
      <li><a href="<?php echo $menu3 ?>">29</a></li>
      <li><a href="<?php echo $menu4 ?>">30</a></li>
      <li><a href="<?php echo $menu5 ?>">31</a></li>
    </ol>

  </div>
</div>
<div class="calendar-wrapper tab-pane fade in" role="tabpanel" id="january23">

  <!-- January 2023 -->
  <div class="calendar january">
    <header>
      <h1>January</h1>
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
      <li><a href="<?php echo $menu6 ?>">1</a></li>
      <li><a href="<?php echo $menu7 ?>">2</a></li>
      <li><a href="<?php echo $menu8 ?>">3</a></li>
      <li><a href="<?php echo $menu1 ?>">4</a></li>
      <li><a href="<?php echo $menu2 ?>">5</a></li>
      <li><a href="<?php echo $menu3 ?>">6</a></li>
      <li><a href="<?php echo $menu4 ?>">7</a></li>
      <li><a href="<?php echo $menu5 ?>">8</a></li>
      <li><a href="<?php echo $menu6 ?>">9</a></li>
      <li><a href="<?php echo $menu7 ?>">10</a></li>
      <li><a href="<?php echo $menu8 ?>">11</a></li>
      <li><a href="<?php echo $menu1 ?>">12</a></li>
      <li><a href="<?php echo $menu2 ?>">13</a></li>
      <li><a href="<?php echo $menu3 ?>">14</a></li>
      <li><a href="<?php echo $menu4 ?>">15</a></li>
      <li><a href="<?php echo $menu5 ?>">16</a></li>
      <li><a href="<?php echo $menu6 ?>">17</a></li>
      <li><a href="<?php echo $menu7 ?>">18</a></li>
      <li><a href="<?php echo $menu8 ?>">19</a></li>
      <li><a href="<?php echo $menu1 ?>">20</a></li>
      <li><a href="<?php echo $menu2 ?>">21</a></li>
      <li><a href="<?php echo $menu3 ?>">22</a></li>
      <li><a href="<?php echo $menu4 ?>">23</a></li>
      <li><a href="<?php echo $menu5 ?>">24</a></li>
      <li><a href="<?php echo $menu6 ?>">25</a></li>
      <li><a href="<?php echo $menu7 ?>">26</a></li>
      <li><a href="<?php echo $menu8 ?>">27</a></li>
      <li><a href="<?php echo $menu1 ?>">28</a></li>
      <li><a href="<?php echo $menu2 ?>">29</a></li>
      <li><a href="<?php echo $menu3 ?>">30</a></li>
      <li><a href="<?php echo $menu4 ?>">31</a></li>
      <li class="month-next"><a href="<?php echo $menu5 ?>">1</a></li>
      <li class="month-next"><a href="<?php echo $menu6 ?>">2</a></li>
      <li class="month-next"><a href="<?php echo $menu7 ?>">3</a></li>
      <li class="month-next"><a href="<?php echo $menu8 ?>">4</a></li>
    </ol>

  </div>
</div>
<div class="calendar-wrapper tab-pane fade" role="tabpanel" id="february23">
  <!-- February 2023 -->

  <div class="calendar february">
    <header>
      <h1>February</h1>
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
    <li class="month-prev"><a href="<?php echo $menu2 ?>">29</a></li>
      <li class="month-prev"><a href="<?php echo $menu3 ?>">30</a></li>
      <li class="month-prev"><a href="<?php echo $menu4 ?>">31</a></li>
      <li><a href="<?php echo $menu5 ?>">1</a></li>
      <li><a href="<?php echo $menu6 ?>">2</a></li>
      <li><a href="<?php echo $menu7 ?>">3</a></li>
      <li><a href="<?php echo $menu8 ?>">4</a></li>
      <li><a href="<?php echo $menu1 ?>">5</a></li>
      <li><a href="<?php echo $menu2 ?>">6</a></li>
      <li><a href="<?php echo $menu3 ?>">7</a></li>
      <li><a href="<?php echo $menu4 ?>">8</a></li>
      <li><a href="<?php echo $menu5 ?>">9</a></li>
      <li><a href="<?php echo $menu6 ?>">10</a></li>
      <li><a href="<?php echo $menu7 ?>">11</a></li>
      <li><a href="<?php echo $menu8 ?>">12</a></li>
      <li><a href="<?php echo $menu1 ?>">13</a></li>
      <li><a href="<?php echo $menu2 ?>">14</a></li>
      <li><a href="<?php echo $menu3 ?>">15</a></li>
      <li><a href="<?php echo $menu4 ?>">16</a></li>
      <li><a href="<?php echo $menu5 ?>">17</a></li>
      <li><a href="<?php echo $menu6 ?>">18</a></li>
      <li><a href="<?php echo $menu7 ?>">19</a></li>
      <li><a href="<?php echo $menu8 ?>">20</a></li>
      <li><a href="<?php echo $menu1 ?>">21</a></li>
      <li><a href="<?php echo $menu2 ?>">22</a></li>
      <li><a href="<?php echo $menu3 ?>">23</a></li>
      <li><a href="<?php echo $menu4 ?>">24</a></li>
      <li><a href="<?php echo $menu5 ?>">25</a></li>
      <li><a href="<?php echo $menu6 ?>">26</a></li>
      <li><a href="<?php echo $menu7 ?>">27</a></li>
      <li><a href="<?php echo $menu8 ?>">28</a></li>
      <li class="month-next"><a href="<?php echo $menu1 ?>">1</a></li>
      <li class="month-next"><a href="<?php echo $menu2 ?>">2</a></li>
      <li class="month-next"><a href="<?php echo $menu3 ?>">3</a></li>
      <li class="month-next"><a href="<?php echo $menu4 ?>">4</a></li>
    </ol>

  </div>
</div>
<div class="calendar-wrapper tab-pane fade" role="tabpanel" id="march23">
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
