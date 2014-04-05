<section id="home" class="pure-g-r" data-start="background-position: 50% 0px;" data-top-bottom="background-position: 50% 100px;" data-anchor-target="#home">
	<div class="opacity pure-u-1">
		<article class="pure-u-1" data-start="opacity: 1" data-center="opacity: 1" data-50-top="opacity: 0" data-anchor-target="#home h3">
			<h1 class="intro">Matt and Deana</h1>
			<h2 class="intro">We're getting married</h2>
			<h3 class="intro">Champoluc, Italy - 15th Janauary 2015</h3>
		</article>
    <a href="#venue" class="button" data-center="opacity: 1" data-300-top="opacity: 0" data-anchor-target="#home .button">Venue</a>
	</div>
</section>

<section id="venue" class="snow pure-g-r">
  <div class="pure-u-1">
    <article class="pure-u-1">
      <h2>We're getting married</h2>
      <p>Deana and Matt are engaged to be married on <b>January 11th-18th 2015</b>.<br />
      The ceremony and reception will be held in <b>Champoluc Italy</b>.<br />
      There will be snow so make sure you wrap up warm.</p>
    </article>
    <a href="#accommodation" class="button">Accommodation</a>
  </div>
</section>

<section id="accommodation" class="pure-g-r" data-bottom-top="background-position: 50% -100px" data-top="background-position: 50% 0px" data--200-top="background-position: 50% 100px" data-anchor-target="#accommodation">
  <div class="opacity pure-u-1">
    <article class="pure-u-1" data-bottom="opacity: 0" data-center="opacity: 1" data-anchor-target="#accommodation h2">
      <h2>Where we’re staying</h2>
      <p>The Bride and Groom will be staying here in Hotel de Champoluc <b>January 11-18th 2015</b>.<br />
      This hotel is Ski in Ski, out meaning it’s right next to the slopes.<br />
      If you’re thinking of joining us. More info is available <a href="#">here</a> or you can <a href="mailto:matthewstephens@digidev.co.uk">contact us</a></p>
    </article>
     <a href="#ceremony" class="button">Ceremony</a>
  </div>
</section>

<section id="ceremony" class="snow pure-g-r">
  <div class="pure-u-1">
    <article class="pure-u-1">
      <h2>Snowy Mountain Wedding</h2>
      <p>The wedding ceremony itself will take place in Mascognaz village nearby to Champoluc.<br />
      Photographs will also be taken on the mountain including some action shots.<br />
      We hope that you can join us.</p>
    </article>
    <a href="#rsvp" class="button">Rsvp</a>
    <a href="#message" class="button">Messages</a>
  </div>
</section>

<section id="photos" class="pure-g-r">
  <div class="middle">
  <div class="opacity pure-u-1">
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
  <article class="pure-u-1">
    <h2>RSVP</h2>
    <p>If you’ve decided to join us on our special day, please fill out the form below.</p>
    <div class="pure-g-r">
    <?php echo $this->element('rsvp/form'); ?>
    </div>
  </article>
</section>

<section id="message" class="pure-g-r">
  <article class="pure-u-1">
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
  </article>
</section>