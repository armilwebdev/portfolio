<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/materialize/js/materialize.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
 $(document).ready(function(){
    $('.modal').modal();
  });
  AOS.init();
</script>
<script>
    // $('#home').hover(function(){
    // $('.home').css({'display': none}
    // )},
    $(document).ready(function(){
    $('.materialboxed').materialbox();
  });
</script>
<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
<script>

  document.getElementById("submit").onclick = function(){
    var name = document.getElementById("name");
    var email = document.getElementById("email");
    var msg = document.getElementById("msg");

if(((name && name.value) || (email && email.value))|| (msg && msg.value)){
  document.getElementById("submit").style.display = "none";

} else{

}
}



</script>
    </body>
</html>