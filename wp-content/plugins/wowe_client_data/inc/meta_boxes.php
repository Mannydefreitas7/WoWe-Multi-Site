<?php
function sc_post_meta_box() {
	add_meta_box(
		'sc_meta_box', // $id
		'Copy Paste Useful Shortcodes', // $title
		'show_sc_meta_box', // $callback
		array('post', 'page', 'service'), // $screen
		'normal', // $context
		'high' // $priority
	);
}

function show_sc_meta_box(){ ?>
<style>
.shortcodes p {
    font-size: 20px;
    margin: 5px;
    padding: 10px;
    background: #3331;
    border-radius: 5px;
}

.shortcodes {
    display: flex;
    flex-wrap: wrap;
    /* font-size: 20px; */
}
</style>
    <div class="shortcodes">
        <p id="name" draggable="true">[client-name]</p>
        <p id="email">[client-email]</p>
        <p id="phone">[client-phone]</p>
        <p id="street">[client-street]</p>
        <p id="city">[client-city]</p>
        <p id="state">[client-state]</p>
        <p id="zip">[client-zip]</p>
        <p id="job">[client-job]</p>
    </div>

<?php
    
}
add_action( 'add_meta_boxes', 'sc_post_meta_box' );
?>