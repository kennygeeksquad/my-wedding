<section id="home" class="pure-g-r">
	<div class="opacity pure-u-1">
		<article class="pure-u-1">
			<h1 class="intro">Matt and Deana</h1>
			<h2 class="intro">We're getting married</h2>
			<h3 class="intro">Champoluc, Italy - 15th Janauary 2015</h3>
      <h3 class="intro"><?php echo $this->Session->flash(); ?></h3>
		</article>
    <a data-scroll="#venue" class="button">Venue</a>
	</div>
</section>

<section id="venue" class="snow pure-g-r">
  <div class="pure-u-1">
    <article class="pure-u-1 half">
      <h2>We're getting married</h2>
      <p>Deana and Matt are engaged to be married on <b>January 11th-18th 2015</b>.<br />
      The ceremony and reception will be held in <b>Champoluc Italy</b>.<br />
      There will be snow so make sure you wrap up warm.</p>
    </article>
    <a data-scroll="#accommodation" class="button">Accommodation</a>
  </div>
</section>

<section id="accommodation" class="pure-g-r">
  <div class="opacity pure-u-1">
    <article class="pure-u-1">
      <h2>Where we’re staying</h2>
      <p>The Bride and Groom will be staying here in Hotel de Champoluc <b>January 11-18th 2015</b>.<br />
      This hotel is Ski in Ski out, meaning it’s right next to the slopes.<br />
      If you’re thinking of joining us. More info is available <a href="#" id="info">here</a> or you can <a href="mailto:matthewstephens@digidev.co.uk">contact us</a></p>
    </article>
     <a data-scroll="#ceremony" class="button">Ceremony</a>
    <div class="panel pure-g-r">
    <div class="pure-u-1-2">
      <h2>A week</h2>
      <p>The best deal we found was provided by Laura, a travel agent at our local Thomson. Please contact her on the below email address, adding “FAO Laura” in the subject line to be included in our plans and travel.</p>
      <p>Please quote the ref: <b>106355</b> in your email so that Laura can give you the correct info.</p>
      <a href="mailto:gillingham@thomson-shop.co.uk">gillingham@thomson-shop.co.uk</a>
      <p>Hotel de Champoluc, Champoluc, Italy</p>
      <a href="www.crystalski.co.uk">www.crystalski.co.uk</a>
    </div>
    <div class="pure-u-1-2">
      <h2>Less than a week</h2>
      <p>We understand a week, if you don’t Snowboard could be a little too much. Feel free to give yourself a short break and of course share our special day.</p>
      <p>Below is a link showing short breaks and lots of different hotels to suit everyones budget.</p>
      <p>Please be aware that booking with the below doesn’t include flights. The closest airport is Turin which is a 90 minute trasnfer to Champoluc.</p>
      <a href="www.ski-2.com">www.ski-2.com</a>
      <p>Check out <a href="www.easyjet.com">www.easyjet.com</a> for flights.</p>
    </div>
    </div>
  </div>
</section>

<section id="ceremony" class="snow pure-g-r">
  <div class="pure-u-1">
    <article class="pure-u-1 half">
      <h2>Snowy Mountain Wedding</h2>
      <p>The wedding ceremony itself will take place in Mascognaz village nearby to Champoluc.<br />
      Photographs will also be taken on the mountain including some action shots.<br />
      We hope that you can join us.</p>
    </article>
    <a data-scroll="#rsvp" class="button">Rsvp</a>
    <a data-scroll="#message" class="button">Messages</a>
  </div>
</section>

<section id="photos" class="pure-g-r">
  <div class="opacity pure-u-1">
  <div class="middle">
  <div class="pure-g-r">
    <img class="pure-u-1-4" src="img/dnm1.png">
    <img class="pure-u-1-4" src="img/dnm2.png">
    <img class="pure-u-1-4" src="img/dnm3.png">
    <img class="pure-u-1-4" src="img/dnm4.png">
  </div>
  </div>
  </div>
</section>

<section id="rsvp" class="pure-g-r">
  <div class="opacity pure-u-1">
  <article class="pure-u-1">
    <h2>RSVP</h2>
    <p>If you’ve decided to join us on our special day, please fill out the form below.</p>
    <div class="pure-g-r">
    <?php echo $this->element('rsvp/form'); ?>
    </div>
  </article>
  </div>
</section>

<section id="message" class="pure-g-r snow">
  <article class="pure-u-1 half">
    <h2>Leave a Message</h2>
    <p>Can’t make it to the wedding? Worry not!<br />Leave us a message below.</p>
    <div class="pure-g-r">
    <?php echo $this->element('message/form'); ?>
    </div>
  </article>
</section>

<section id="messages" class="pure-g-r">
  <article class="pure-u-1">
    <h2>Your Messages</h2>
    <div class="pure-u-1-2 msgs">
      <?php 
        foreach ($messages as $m) {
          echo '<p>';
          echo $m['Message']['message'];
          echo '<br />'.'From: '.$m['Message']['name'];
          echo '</p>';
        }
      ?>
    </div>
  </article>
</section>
