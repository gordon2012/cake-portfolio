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
        <?php
            echo $this->Form->create(false, ['url' => 'javascript: postToGoogle()']);
                $fields = [
                    ['name'=>'name', 'label'=>'Name', 'type'=>'text', 'entry'=>'881776393'],
                    ['name'=>'email', 'label'=>'Email', 'type'=>'email', 'entry'=>'191025622'],
                    ['name'=>'message', 'label'=>'Message', 'type'=>'textarea', 'entry'=>'261514135'],
                    // TODO: checkbox
                    // ['name'=>'newsletter', 'label'=>'Subscribe to my Newsletter', 'type'=>'checkbox', 'entry'=>'59207987_sentinel59207987'],
                ];
                foreach($fields as $field) {
                    $options = [
                        'label' => $field['label'],
                        'type' => $field['type'],
                        'data-entry' => $field['entry'],
                        'required' => 'required',
                        'class' => 'input-field'
                    ];
                    // TODO: checkbox
                    //
                    // if($field['type'] != 'checkbox') {
                    //     $options['required'] = 'required';
                    // }
                    echo $this->Form->input($field['name'], $options);
                }
                echo $this->Form->button('Submit');
            echo $this->Form->end();
        ?>
    </div>

    <div class="contact-response" style="display: none;">
        <div class="contact-spacer"></div>
        <h2>Thank you!</h2>
        <p>Your message has been received and I will get back to you as soon as I can.</p>
    </div>
</main>

<script>
function postToGoogle() {
    // TODO: checkbox
    // var test = $('.contact-form .input-field:not([type="checkbox"]), .contact-form .input-field[type="checkbox"]:checked');

    var fields = $('.contact-form .input-field');
    var data = {};
    $.each(fields, function(i, e) {
        var $e = $(e);
        data[`entry.${$e.data('entry')}`] = $e.val();
    });

    $.ajax({
        url: "https://docs.google.com/forms/d/e/1FAIpQLScNh0Jf3IM02qo5EfdpYFOYJi1BC4PGy4iZNBRv0k8eJ4o_8g/formResponse",
        data: data,
        type: "POST",
        dataType: "xml",
        statusCode: {
            0: response,
            200: response
        }
    });
}

// Might be status 200, probably 0 because of CORS, do it either way
//
function response() {
    $('.contact-form').hide();
    $('.contact-response').show();
}
</script>
