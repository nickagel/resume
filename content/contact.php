<article id="contact" class="parent">
    <article class="child fadeIn fadeOut">
<h1>Contact Me</h1>
<div id="border">
    <div class="map" id="map"></div>
    </div>
    <script>function initMap(){map=new google.maps.Map(document.getElementById("map"),{center:{lat:44.4926915,lng:-73.2727827},zoom:11,scrollwheel:!1})}var map;</script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmEsHv0XWrUCDg279-PnrvFFxa9iaO0kc&callback=initMap"
    async defer></script>
<form id="ajax-contact" method="post" action="mailer.php">
    <legend>Send Me a Message</legend>
    <input placeholder="Name" type="text" type="text" id="name" name="name"  autocomplete="off" required>
    <input placeholder="Email" type="email" id="email" name="email" autocomplete="off" required>
    <textarea placeholder="Message..." id="message" name="message" type="text" autocomplete="off" required></textarea>
    <button onclick="handleOutboundLinkClicks(this)" type="submit" value="Submit" class="button">SUBMIT</button><span id="form-messages"></span>
</form>

</article>
</article>