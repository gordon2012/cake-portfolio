<?php
    $this->assign('title', 'Gordon Doskas | Portfolio - Contact');
?>

<style>
    .contact {
        background-image:
            linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
            url(<?= $this->Url->image('dawn.jpg') ?>);
    }
</style>


<main class="contact">
    <h1 style="text-align: center;">Contact Me</h1>


    <div class="contact-form">

        <?= $this->Form->create(false, ['url' => 'javascript: postToGoogle()']) ?>

        <!-- <form id="form" target="_self" onsubmit="" action="javascript: postToGoogle()"> -->

            <?= $this->Form->input('name', ['label' => 'Name']) ?>
            <?= $this->Form->input('email', ['label' => 'Email', 'type' => 'email']) ?>
            <?= $this->Form->input('message', ['label' => 'Message', 'type' => 'textarea']) ?>



            <div style="width: 100%; display: block; float: left;">
                <button id="send" type="submit">
                Send
                </button>
                <?= $this->Form->input('last', ['label' => 'Newsletter', 'type' => 'checkbox']) ?>
            </div>
        <!-- </form> -->

        <?= $this->Form->end() ?>


    </div>





</main>

<script>
function postToGoogle() {
   var field1 = $("#first").val();
   var field2 = $('#last').val();

   $.ajax({
     url: "https://docs.google.com/forms/d/e/1FAIpQLScNh0Jf3IM02qo5EfdpYFOYJi1BC4PGy4iZNBRv0k8eJ4o_8g/formResponse",
     data: {
       "entry.881776393": field1,
       "entry.1699566414": field2
     },
     type: "POST",
     dataType: "xml",
     statusCode: {
       0: function() {
         //Success message
       },
       200: function() {
         //Success Message
       }
     }
   });
 }
</script>
