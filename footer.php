<?php
$Year = date("Y");
?>

<img class="open-button" onclick="openForm()" src="assets/img/icon/BeeLogo.png" alt="">

<div class="chat-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
  <img class="open-button" onclick="closeForm()" src="assets/img/icon/BeeLogo.png" alt="">
    <iframe
        src='https://webchat.botframework.com/embed/BeeCareBot?s=pX2hiK0NAPw.siyv937UgHcOQtXZ0NZdE5jiTorXy_bp5kXHFVSVQk0'  style='min-width: 100px; width: 100%; min-height: 350px;'>
    </iframe>
  </form>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-lg-8 mx-auto">
            <ul class="list-inline text-center">
                <li class="list-inline-item"></li>
                <li class="list-inline-item"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x fa-inverse"></i></span></li>
                <li class="list-inline-item"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-github fa-stack-1x fa-inverse"></i></span></li>
            </ul>
            <p class="text-muted copyright">Copyright&nbsp;©&nbsp;AxolotlTeam 2021</p>
        </div>
    </div>
</div>